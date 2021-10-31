<?php

class LeaveapproveController extends Controller
{

    function index()
    {

        if (!Auth::logged_in()) {
            $this->redirect('login');
        }
        if (Auth::access('Supervisor') || Auth::access('HR Manager')) {
            $this->view('leaveapprove');
        } else {
            $this->view('404');
        }
    }
}
