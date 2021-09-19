<?php

/**
 *
 */
class BenefitrequestController extends Controller
{

    function index()
    {
        // code...
//		echo "<pre>";
//		print_r($_POST);
        $errors=array();
        if(count($_POST)>0)
        {
            $user=new BenefitrequestModel();

            if(isset($_POST['submit']))
            {
//                $id=$_POST['employee_id'];
//                $type=$_POST['benefit_type'];
//                $claim=$_POST['claiming_amount'];
//                $remain=$_POST['remain_amount'];

                $arr['employee_ID']=$_POST['employee_id'];
                $arr['benefit_claim_date']=$_POST['claiming_date'];
                $arr['benefit_type']=$_POST['benefit_type'];
                $arr['benefit_claim_amount']=$_POST['claiming_amount'];
                $arr['remain_amount']="";
                $arr['benefit_status']="";
                $arr['benefit_description']=$_POST['subject'];

                $user->insert($arr);

                $this->redirect('benefit');
            }

        }
        $this->view('benefitrequest');

    }
}



