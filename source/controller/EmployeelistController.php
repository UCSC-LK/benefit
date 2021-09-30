<?php

class EmployeelistController extends Controller{

    function index(){

        $user = new EmployeelistModel();

        $data = $user->where('department_ID',1);

        // if(count($_POST)>0){

            if(isset($_POST['edit'])){
                // $arr['employee_ID'] = $_POST['id'];

                
                session_start(); 
                   

                $_SESSION['id'] = $_POST['id'];
                // echo $_POST['id'];

                $this->redirect('UpdateemployeeController');
            }

            if(isset($_POST['delete'])){
                // $arr['employee_ID'] = $_POST['id'];
                if(!isset($_SESSION)) { 
                    session_start(); 
                } 

                $_SESSION['id'] = $_POST['id'];

                $this->redirect('#');
            }

        // }

        
        $this->view('employeelist',['rows'=>$data]);
    }
}