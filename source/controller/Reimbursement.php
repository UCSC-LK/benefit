<?php

/**
 * 
 */
class Reimbursement extends Controller
{
	
	function index()
	{
		if(!Auth::logged_in())
		{
			$this->redirect('login');
		}
		

	$errors=array();
		$user=new ReimbursementrequestModel();
		$ar=Auth::user();
		$row=array();
		$row = $user->where('employee_ID',$ar);

		if(count($_POST)>0)
		{
			 $user=new ReimbursementrequestModel();
			//($user->validate($_POST)
			if(isset($_POST['submit']))
			{
				
				$arr['employee_ID']=Auth::user();
				$arr['claim_date']=$_POST['claim_date'];
				$arr['claim_amount']=$_POST['claim_amount'];
				$arr['invoice_submission']=$_POST['invoice_submission'];
				$arr['reimbursement_status']="pending";
				$arr['reimbursement_description']=$_POST['subject'];
				$user->insert($arr);
				//redirect
				$this->redirect('Reimbursement');
			}
			else
			{
				//err
			$errors= $user->errors;
			}
		}
		$this->view('reimbursementreq',
			['row'=>$row],
			['errors'=>$errors]
		);
		
	}
 
	function delete()
	{
		if(!Auth::logged_in($id=null))
		{
			$this->redirect('login');
		}
			$user=new ReimbursementrequestModel();
			$id=Auth::user();
		if(isset($_POST['delete'])){
			$user->delete($id);
			$this->redirect('reimbursement');
		}
		else{
			echo "you can't delete this reimbursementreq";
		}
		$this->view('reimbursementreq');
	}
}
