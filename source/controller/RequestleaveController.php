<?php

class RequestleaveController extends Controller{
    function index(){
        // $user = new RequestleaveModel();

        if(count($_POST)>0)
        {
            $user = new RequestleaveModel();

            if(isset($_POST['submit']))
            {
                $arr['leave_type'] = $_POST['leave_type'];
                $arr['start_date'] = $_POST['start_date'];
                $arr['end_date'] = $_POST['end_date'];
                $arr['half'] = $_POST['half'];
                $arr['half_date'] = $_POST['half_date'];
                $arr['leave_status'] = "Pending";

                if($arr['start_date'] == null && $arr['half_date'] != null){
                    $arr['start_date'] = $_POST['half_date'];
                    $arr['end_date'] = $_POST['half_date'];
                }
                
            }
            $this->view('requestleave',['rows'=>$arr]);
        }else{
            $this->view('requestleave');
        }      
    }
    
}