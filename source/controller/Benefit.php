<?php

/**
 *
 */
class Benefit extends Controller
{

    function index()
    {
        $user = new BenefitrequestModel();
        $pending = array();
        $ar = auth::user();
        $pending = $user->where_condition('employee_ID','benefit_status', $ar ,'pending');

        if(sizeof($pending)){
            $this->view('benefit', ['pending' => $pending]);
        }
        else{
            $this->view('benefit');
        }


    }

}




