<?php

/**
 * PerformanceModel Controller
 */
class AddperformanceController extends Controller
{
	
	function index()
	{
		// code...
		//echo "<pre>";
		//print_r($_POST);
		$errors=array();
		
		if(count($_POST)>0)
		{
			$user=new PerformanceModel();
			//($user->validate($_POST)
			if(isset($_POST['submit']))
			{
				
				$arr['employee_ID']=$_POST['employee_ID'];
				$arr['communication']=$_POST['communication'];
				$arr['quality_of_work']=$_POST['quality_of_work'];
				$arr['organization']=$_POST['organization'];
				$arr['team_skills']=$_POST['team_skills'];
				$arr['multitasking_ability']=$_POST['multitasking_ability'];
				$user->insert($arr);
				//redirect
				$this->redirect('home');
			}
		//	else
		//	{
				//err
		//	$errors= $user->errors;
		//	}
		}
		//$this->view('performance',['errors'=>$errors]);
		$this->view('performance');
		
	}
}
