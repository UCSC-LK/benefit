<?php

/**
 * Supervisor Controller
 */
class Supervisor extends Controller
{
	
	function index()
	{

		if(!Auth::logged_in())
		{
			$this->redirect('login');
		}
		if(Auth::access('Supervisor'))
		{
		
		$this->view('approvereimbursement');
		}
		else{
			$this->view('404');
		}
	}
	
	function Performance()
	{

		if(!Auth::logged_in())
		{
			$this->redirect('login');
		}
		if(Auth::access('Supervisor'))
		{
		$user=new Employeedetails();
		$id=Auth::user();
		$row=$user->where('supervisor_ID',$id);
		$this->view('supervisorviewperformance',['row'=>$row]);
		}
		else{
			$this->view('404');
		}
	}

	
	function Update_Performance($id=null)
	{

		if(!Auth::logged_in())
		{
			$this->redirect('login');
		}
		if(Auth::access('Supervisor'))
		{
				$user= new PerformanceModel();
				if(count($_POST)>0){
				$data['communication']=$_POST['communication'];
				$data['quality_of_work']=$_POST['quality_of_work'];
				$data['organization']=$_POST['organization'];
				$data['team_skills']=$_POST['team_skills'];
				$data['multitasking_ability']=$_POST['multitasking_ability'];
				$row=$user->update($id,$data);
				//$this->redirect('Supervisor');
				}
		$this->view('addperformance');
		}
		else{
			$this->view('404');
		}
	}

	function Insert_Performance($id=null)
	{
		$errors=array();

		if(!Auth::logged_in())
		{
			$this->redirect('login');
		}
		if(Auth::access('Supervisor'))
		{
			
				$user= new PerformanceModel();
				
				//$row =$user->where('$employee_ID',$id);
				if($row =$user->where('employee_ID',$id)){
				$errors['errors']="This employee alredy has a recode you can only update";
				$this->view('addperformance',['errors'=>$errors]);
				
				exit();
				//$this->redirect('Supervisor/Performance');
				}
				
				if(count($_POST)>0){
				$data['employee_ID']=$id;
				$data['communication']=$_POST['communication'];
				$data['quality_of_work']=$_POST['quality_of_work'];
				$data['organization']=$_POST['organization'];
				$data['team_skills']=$_POST['team_skills'];
				$data['multitasking_ability']=$_POST['multitasking_ability'];
				$row=$user->insert($data);
				//$this->redirect('Supervisor');
				}
		$this->view('addperformance');
		}
		else{
			$this->view('404');
		}
	}
	
	function Delete_Performance($id=null)
	{
			$errors=array();
		if(!Auth::logged_in())
		{
			$this->redirect('login');
		}
		if(Auth::access('Supervisor'))
		{
				
			if(count($_POST)>0)
			{
				$user= new PerformanceModel();
				$row=$user->where('employee_ID',$id);
				if(!empty($row)){

				$row=$user->delete($id);
				$this->redirect('Supervisor');
				}
				else{
					$errors="This employee dosen't have a recodes yet";
				}
			}
		$this->view('supervisorviewperformance.delete',['errors'=>$errors]);
		}
		else{
			$this->view('404');
		}
	}

	

}
