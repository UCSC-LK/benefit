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

    function update(){
        if (!Auth::logged_in()) {
            $this->redirect('login');
        }

        $this->view('updatebenefit');
    }

    function delete($id=null)
    {
        //echo "$id";

        if(!Auth::logged_in())
        {
            $this->redirect('login');
        }
        $user=new BenefitrequestModel();
        // print_r($id);
        if(count($_POST)>0)
        {
            $user->deleteper('claim_date',$id);
            $this->redirect('Benefit');
        }
        $this->view('benefit.delete');
    }

//    function update(){
//        if(!Auth::logged_in())
//        {
//            $this->redirect('login');
//        }
//
//        $this->view('reimbursement.update');
//    }

}




