<?php

class RequestleaveController extends Controller{
    function index(){
        // $user = new RequestleaveModel();

        if(count($_POST)>0)
        {
            $user = new RequestleaveModel();

            if(isset($_POST['submit']))
            {
                $arr['employee_ID'] = Auth::user();
                $arr['leave_type'] = $_POST['leave_type'];
                $arr['starting_date'] = $_POST['start_date'];
                $arr['ending_date'] = $_POST['end_date'];
                $arr['leave_status'] = "Pending";
                $arr['half_date'] = $_POST['half_date'];
                $arr['half_time'] = $_POST['half_time'];
                if($arr['start_date'] == null && $arr['half_date'] != null){
                    $arr['start_date'] = $_POST['half_date'];
                    $arr['end_date'] = $_POST['half_date'];
                }
                $user->insert($arr);
            }
            $this->view('requestleave');
        }else{
            $this->view('requestleave');
        }      
    }
    
}