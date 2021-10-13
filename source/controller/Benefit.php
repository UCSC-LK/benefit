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
        $pending = $user->where_condition('employee_ID','benefit_status', $ar ,'pending');

        $this->view('benefit', ['pending' => $pending]);

    }

    

}




