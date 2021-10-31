<?php

/**
 *
 */
class BenefitrequestController extends Controller
{

    function index()
    {
        if (!Auth::logged_in()) {
            $this->redirect('login');
        }

        if (Auth::access('Employee') || Auth::access('Supervisor') || Auth::access('HR Officer') || Auth::access('HR Manager')) {
            $errors = array();
            $user = new BenefitrequestModel();
            $ar = Auth::user();
            $row = array();
            $row = $user->where('employee_ID', $ar);
            $file_error = array();
            if (count($_POST) > 0) {

                if (isset($_POST['submit'])) {

                    $arr['employee_ID'] = Auth::user();
                    $arr['claim_date'] = $_POST['claiming_date'];
                    $arr['benefit_type'] = $_POST['benefit_type'];
                    $arr['claim_amount'] = $_POST['claiming_amount'];
                    $arr['benefit_status'] = "pending";
                    $arr['benefit_description'] = $_POST['subject'];
//                $arr['report_location'] = $_POST['report_submission'];

                    $file = $_FILES['report_submission']['name'];
                    $target_dir = "public/benefit-documents/";
                    $path = pathinfo($file);
                    $filename = $path['filename'];
                    $ext = $path['extension'];
                    $temp_name = $_FILES['report_submission']['tmp_name'];
                    $path_filename_ext = $target_dir . $filename . "." . $ext;

                    move_uploaded_file($temp_name, $path_filename_ext);


                    $arr['report_location'] = $path_filename_ext;
                    $arr['report_hashing'] = hash_file('md5', $path_filename_ext);

                    $hash_values = array();
                    $all_rows = $user->findAll();
                    $flag = true;
                    for ($i = 0; $i < sizeof($all_rows); $i++) {
                        $hash_values[$i] = $all_rows[$i]->report_hashing;
                        if ($arr['report_hashing'] == $hash_values[$i]) {
                            $flag = false;
                            break;
                        }
                    }

                    if ($flag) {
                        $user->insert($arr);
                        $this->redirect('benefit');
                    } else {
                        $file_error = "Sorry, file is already exists!";
                    }

                } else {
                    $errors = $user->errors;
                }
            }
            $this->view('benefitrequest', ['file_error' => $file_error]);
        } else {
            $this->view('404');
        }
    }

}



