<?php 

class LeavedetailsController extends Controller {
    
    function index(){
        $user = new LeavedetailsModel();
        $this->view('leavedetails');
        // private\models\LeavedetailsController.php
        // C:\xampp\htdocs\benefit\private\views\leavedetails.view.php
        // C:\xampp\htdocs\benefit\private\models\LeavedetailsModel.php
    }
    
}