<?php

/**
 *
 */
class Benefit extends Controller
{

    function index()
    {
        if (!Auth::logged_in()) {
            $this->redirect('login');
        }
        $user = new BenefitrequestModel();
        $pending = array();
        $ar = auth::user();
        $pending = $user->where_condition('employee_ID', 'benefit_status', $ar, 'pending');

        $this->view('benefit', ['pending' => $pending]);

    }

    function update()
    {
        if (!Auth::logged_in()) {
            $this->redirect('login');
        }

        $this->view('updatebenefit');
    }

    function delete($id = null)
    {
        //echo "$id";

        if (!Auth::logged_in()) {
            $this->redirect('login');
        } else {
            $employee_id = Auth::user();
            $user = new BenefitrequestModel();
            $arr = $user->where_condition('employee_ID', 'report_hashing', $employee_id, $id);
//            print_r($arr);
            if (boolval($arr)) {
                if (count($_POST) > 0) {
                    $user->deleteper('report_hashing', $id);
                    $this->redirect('Benefit');
                }
                $this->view('benefit.delete');
            } else {
                $this->view('404');
            }
            // print_r($id);
        }

    }

    function change($id = null)
    {
        if (!Auth::logged_in()) {
            $this->redirect('login');
        } else {
            $employee_id = Auth::user();
            $user = new BenefitrequestModel();
            $arr = $user->where_condition('employee_ID', 'report_hashing', $employee_id, $id);
            if (boolval($arr)) {
                //$this->view('benefit.change', ['arr' => $arr]);
                $row = $user->where('employee_ID',$employee_id);
                if(count($_POST)>0){
                    if(isset($_POST['submit'])){
                        $array['employee_ID'] = $employee_id;
                        $array['claim_date'] = $_POST['claiming_date'];
                        $array['benefit_type'] = $_POST['benefit_type'];
                        $array['claim_amount'] = $_POST['claiming_amount'];
                        $array['benefit_status'] = "pending";
                        $array['benefit_description'] = $_POST['subject'];

                        $file = $_FILES['report_submission']['name'];
                        $target_dir = "public/benefit-documents/";
                        $path = pathinfo($file);
                        $filename = $path['filename'];
                        $ext = $path['extension'];
                        $temp_name = $_FILES['report_submission']['tmp_name'];
                        $path_filename_ext = $target_dir . $filename . "." . $ext;

                        move_uploaded_file($temp_name, $path_filename_ext);


                        $array['report_location'] = $path_filename_ext;
                        $array['report_hashing'] = hash_file('md5', $path_filename_ext);

                        $hash_values = array();
                        $all_rows = $user->findAll();
                        $flag = true;
                        for ($i = 0; $i < sizeof($all_rows); $i++) {
                            $hash_values[$i] = $all_rows[$i]->report_hashing;
                            if ($array['report_hashing'] == $hash_values[$i]) {
                                $flag = false;
                                break;
                            }
                        }

                        if ($flag) {
                            print_r($array);
                            //print_r($id);
                            $user->update($id,$array);
                            //$this->redirect('benefit');
                        } else {
                            $arr['error'] = "Sorry, file is already exists!";
                        }
                    }
                }
                $this->view('benefit.change', ['arr' => $arr]);
            }

        }
    }
}




