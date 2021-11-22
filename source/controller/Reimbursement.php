<?php

/**
 *
 */
class Reimbursement extends Controller
{
    function index()
    {
        if(!Auth::logged_in())
        {
            $this->redirect('login');
        }

        if (Auth::access('Employee') || Auth::access('Supervisor') || Auth::access('HR Officer') || Auth::access('HR Manager')) {
        $errors=array();
        $user=new ReimbursementrequestModel();
        $ar=Auth::user();
        $row=array();
        $row = $user->where('employee_ID',$ar);
        $file_error = array();


        if(count($_POST)>0)
        {
            $user=new ReimbursementrequestModel();
            if(isset($_POST['submit']))
            {
                $arr['employee_ID']=Auth::user();
                $arr['claim_date']=$_POST['claim_date'];
                $arr['claim_amount']=$_POST['claim_amount'];
                $arr['reimbursement_reason']=$_POST['subject'];
                $arr['reimbursement_status']="pending";
                $file = $_FILES['invoice_submission']['name'];
                // print_r($file);

                $target_dir = "public/reimbursement-documents/";
                $path = pathinfo($file);
                $filename = $path['filename'];
                $ext = $path['extension'];
                $temp_name = $_FILES['invoice_submission']['tmp_name'];
                $path_filename_ext = $target_dir.$filename.".".$ext;

                move_uploaded_file($temp_name, $path_filename_ext);


                $arr['invoice_submission'] = $path_filename_ext;
                $arr['invoice_hashing'] = hash_file('md5',$path_filename_ext);

                $hash_values = array();
                $all_rows = $user->findAll();
                $flag = true;
                for($i=0; $i<sizeof($all_rows);$i++){
                    $hash_values[$i] = $all_rows[$i]->invoice_hashing;
                    if($arr['invoice_hashing'] == $hash_values[$i]){
                        $flag = false;
                        break;
                    }
                }

                if($flag){
                    $user->insert($arr);
                    $this->redirect('Reimbursement');
                }
                else {
                    $errors="This invoice is already used please make sure your invoice";
                    // $file_error = "Sorry, file is already exists!";
                }

            } else {
                $errors = $user->errors;
            }

        }

        $this->view('reimbursementreq',
            ['errors'=>$errors,
                'row'=>$row]);

            } else {
                $this->view('404');
            }

    }

    // function index()
    // {
    //     if(!Auth::logged_in())
    //     {
    //        $this->redirect('login');
    //     }


    //     $errors=array();
    //     $user=new ReimbursementrequestModel();
    //     $ar=Auth::user();
    //     $row=array();
    //     $row = $user->where('employee_ID',$ar);

    //     if(count($_POST)>0)
    //     {
    //         $user=new ReimbursementrequestModel();
    //         $validate = $user->where('invoice_submission',$_POST['invoice_submission']);
    //         if(isset($_POST['submit']) && $validate==false)
    //         {

    //             $arr['employee_ID']=Auth::user();
    //             $arr['claim_date']=$_POST['claim_date'];
    //             $arr['claim_amount']=$_POST['claim_amount'];
    //             $arr['invoice_submission']=$_POST['invoice_submission'];
    //             $arr['reimbursement_status']="pending";

    //             $user->insert($arr);

    //             $this->redirect('Reimbursement');
    //         }
    //         else
    //         {
    //             //err
    //             $errors= $user->errors;
    //         }
    //     }
    //     $this->view('reimbursementreq',
    //         ['row'=>$row],
    //         ['errors'=>$errors]
    //     );

    // }

    // function delete()
    // {
    //     if(!Auth::logged_in($id=null))
    //     {
    //         $this->redirect('login');
    //     }
    //     $id=Auth::user();
    //     $user=new ReimbursementrequestModel();
    //     $new=$user->where('employee_ID',$id);
    //     $new=$new[0];
    //     if(isset($_POST['delete'])&&$new->reimbursement_status="pending"){
    //         $user->delete($id);
    //         $this->redirect('reimbursement');
    //     }
    //     else{
    //         $this->redirect('logout');
    //     }
    //     $this->view('reimbursementreq');
    // }

    function delete($id=null)
    {
        //echo "$id";

        if(!Auth::logged_in())
        {
            $this->redirect('login');
        }
        $user=new ReimbursementrequestModel();
        // print_r($id);
        if(count($_POST)>0)
        {
            $user->deleteper('invoice_hashing',$id);
            $this->redirect('Reimbursement');
        }
        $this->view('reimbursementreq.delete');
    }


    function update_reimbursement()
    {

        if(!Auth::logged_in())
        {
            $this->redirect('login');
        }

        $user = new ReimbursementrequestModel();
        $ar=Auth::user();
        // $data= $user->where('invoice_submission',$ar);
        if(count($_POST)>0){
            $data= $user->where('invoice_submission',$_POST['invoice_submission']);
            // if(isset($_POST['submit'])){
            $arr['employee_ID']=$ar;
            $arr['claim_date']=$_POST['claim_date'];
            $arr['claim_amount']=$_POST['claim_amount'];
            $arr['reimbursement_reason']=$_POST['subject'];
            $arr['invoice_submission']=$_POST['invoice_submission'];
            $arr['reimbursement_status']="pending";
            // echo "hello";
            // $data= $user->where('invoice_submission',$_POST['invoice_submission']);
            $data = $data[0];
            $row=$user->updatenew($data->invoice_submission,$arr);

            $this->redirect('Reimbursement');
        }
        // }
        $this->view('reimbursement.update');
    }

    // function updatereimbursement(){

    // // echo "$id";
    // // if(!isset($_SESSION)) {
    // //     session_start();
    // //     }
    // if(!Auth::logged_in())
    // {
    //     $this->redirect('login');
    // }

    // $user = new ReimbursementrequestModel();
    // $ar=Auth::user();
    // $data= $user->where('Employee_ID',$ar);
    // // $arr1 = $user->where('reimbursement_status', 'pending');


    // if(count($_POST)>0){
    //     if(isset($_POST['submit'])){
    //         $arr['employee_ID']=Auth::user();
    //         $arr['claim_date'] = filter_input(INPUT_POST, 'claim_date', FILTER_SANITIZE_STRING);
    //         $arr['claim_amount'] = filter_input(INPUT_POST, 'claim_amount', FILTER_SANITIZE_STRING);
    //         $arr['reimbursement_reason'] = $_POST['subject'];
    //         $arr['invoice_submission'] = $_POST['invoice_submission'];
    //         $arr['reimbursement_status']="pending";
    //         //echo $arr;
    //         // echo $_POST['invoice_submission'];
    //         // $data= $user->where('invoice_submission', $arr['invoice_submission'] );
    //             //$data=$data[0];

    //         // echo $arr['invoice_submission'] ;
    //         // echo $data;
    //         $rows = $user->update($ar,$data);


    //         if((isset($rows))){
    //             $this->redirect('Reimbursement');
    //         }
    //     }
    // }

    // $this->view('reimbursement.update',['rows'=>$data]);

    // }


    // function updatereim(){

    //     echo "hello";
    //     print_r($_POST);

    //     $user = new ReimbursementrequestModel();

    //     $ar=Auth::user();
    //     $data= $user->where('Employee_ID',$ar);

    //     if(count($_POST)>0){


    //     if(isset($_POST['submit'])){

    //         $arr['claim_date'] = filter_input(INPUT_POST, 'claim_date', FILTER_SANITIZE_STRING);
    //         $arr['claim_amount'] = filter_input(INPUT_POST, 'claim_amount', FILTER_SANITIZE_STRING);
    //         $arr['reimbursement_reason'] = filter_input(INPUT_POST, 'reimbursement_reason', FILTER_SANITIZE_STRING);
    //         $arr['invoice_submission'] = filter_input(INPUT_POST, 'invoice_submission', FILTER_SANITIZE_STRING);
    //         echo $arr;
    //         $arr['employee_ID']=$ar;
    //         $arr['claim_date']=$_POST['claim_date'];
    //         $arr['claim_amount']=$_POST['claim_amount'];
    //         $arr['reimbursement_reason']=$_POST['subject'];
    //         $arr['invoice_submission']=$_POST['invoice_submission'];
    //         $arr['reimbursement_status']="pending";
    //         // echo $_POST['invoice_submission'];
    //         // $data= $user->where('invoice_submission', $arr['invoice_submission'] );
    //         // echo $arr['invoice_submission'] ;
    //         // echo $data;
    //         $set = $user->update($ar,$arr);


    //         // if((isset($set))){
    //         //     //$this->redirect('Reimbursement');
    //         // }
    //     }
    // }
    // $this->view('reimbursement.update',['rows'=>$data]);

    // }

    function updating($id = null){
        if(!Auth::logged_in())
        {
            $this->redirect('login');
        }
        
        $errors=array();
        $user=new ReimbursementrequestModel();
        $ar=Auth::user();
        $arr = $user->where_condition('employee_ID', 'invoice_hashing', $ar, $id);

        if (boolval($arr)) {
            $row = $user->where('employee_ID',$ar);

            if(count($_POST)>0)
            {
                if(isset($_POST['submit']))
                {
                    $arr['employee_ID']=Auth::user();
                    $arr['claim_date']=$_POST['claim_date'];
                    $arr['claim_amount']=$_POST['claim_amount'];
                    $arr['reimbursement_reason']=$_POST['subject'];
                    $arr['reimbursement_status']="pending";
                    $file = $_FILES['invoice_submission']['name'];  

                    $target_dir = "public/reimbursement-documents/";
                    $path = pathinfo($file);
                    $filename = $path['filename'];
                    $ext = $path['extension'];
                    $temp_name = $_FILES['invoice_submission']['tmp_name'];
                    $path_filename_ext = $target_dir.$filename.".".$ext;
    
                    move_uploaded_file($temp_name, $path_filename_ext);
    
    
                    $arr['invoice_submission'] = $path_filename_ext;
                    $arr['invoice_hashing'] = hash_file('md5',$path_filename_ext);
    
                    $hash_values = array();
                    $all_rows = $user->findAll();
                    $flag = true;
                    for($i=0; $i<sizeof($all_rows);$i++){
                        $hash_values[$i] = $all_rows[$i]->invoice_hashing;
                        if($arr['invoice_hashing'] == $hash_values[$i]){
                            $flag = false;
                            break;
                        }
                    }
    
                    if ($flag) {
                        print_r($arr);
                        $user->update($id,$arr);
                    } else {
                        $arr['error'] = "Sorry, file is already exists!";
                    } 
            }
        }
        $this->view('reimbursement.update', ['arr'=>$arr]);

            } else {
                $this->view('404');
            }
}

}
