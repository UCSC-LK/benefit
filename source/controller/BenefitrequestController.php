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

        $errors = array();
        $user = new BenefitrequestModel();
        $ar = Auth::user();
        $row = array();
        $row = $user->where('employee_ID', $ar);

        if (count($_POST) > 0) {

            if (isset($_POST['submit'])) {

                $arr['employee_ID'] = Auth::user();
                $arr['claim_date'] = $_POST['claiming_date'];
                $arr['benefit_type'] = $_POST['benefit_type'];
                $arr['claim_amount'] = $_POST['claiming_amount'];
                $arr['benefit_status'] = "pending";
                $arr['benefit_description'] = $_POST['subject'];
                $arr['report_location'] = "null";


                $user->insert($arr);

                $this->redirect('benefit');
            } else {
                $errors = $user->errors;
            }

        }
        $this->view('benefitrequest');

    }

}



