<?php

/**
 * 
 */
class ReimbursementrequestController extends Controller
{
	
	function index()
	{

		$errors=array();
		if(count($_POST)>0)
		{
			 $user=new ReimbursementrequestModel();
			//($user->validate($_POST)
			if(isset($_POST['submit']))
			{
				
				$arr['employee_ID']=$_POST['employee_id'];
				$arr['claim_date']=$_POST['claim_date'];
				$arr['claim_amount']=$_POST['claim_amount'];
				$arr['invoice_submission']=$_POST['invoice_submission'];
				$arr['reimbursement_status']=$_POST['reimbursement_status'] = "pending";
				$arr['reimbursement_description']=$_POST['subject'];
				$user->insert($arr);
				//redirect
				//$this->redirect('home');
			}
		//	else
		//	{
				//err
		//	$errors= $user->errors;
		//	}
		}
		//$this->view('performance',['errors'=>$errors]);
		$this->view('reimbursementrequest');
		
	}
}
