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
		$errors=array();

		if(!Auth::logged_in())
		{
			$this->redirect('login');
		}
		if(Auth::access('Supervisor'))
		{
				$user= new PerformanceModel();
				if(count($_POST)>0 && $user->validate($_POST)){
				if($_POST['communication']==1)
				{
					$data['communication']=$_POST['communication']=0;
				}
				else{
					$data['communication']=$_POST['communication'];
				}
				if ($_POST['quality_of_work']==1) {
					$data['quality_of_work']=$_POST['quality_of_work']=0;
				}
				else{
					$data['quality_of_work']=$_POST['quality_of_work'];
				}
				if ($_POST['organization']==1) {
					$data['organization']=$_POST['organization']=0;
				}
				else{
					$data['organization']=$_POST['organization'];
				}
				if ($_POST['team_skills']==1) {
					$data['team_skills']=$_POST['team_skills']=0;
				}
				else{
					$data['team_skills']=$_POST['team_skills'];
				}
				if ($_POST['multitasking_ability']==1) {
					$data['multitasking_ability']=$_POST['multitasking_ability']=0;
				}
				else{
					$data['multitasking_ability']=$_POST['multitasking_ability'];
				}
				$row=$user->update($id,$data);
				//$this->redirect('Supervisor');
				}
				else{
					$errors = $user->errors;
				}
		$this->view('addperformance',['errors'=>$errors]);
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

				if($row =$user->where('employee_ID',$id)){
				$errors['err']="This employee alredy has a recode you can only update";
				$this->view('addperformance',['errors'=>$errors]);
				
				exit();
				
				}
				
				if(count($_POST)>0 && $user->validate($_POST)){
				$data['employee_ID']=$id;
				if($_POST['communication']==1)
				{
					$data['communication']=$_POST['communication']=0;
				}
				else{
					$data['communication']=$_POST['communication'];
				}
				if ($_POST['quality_of_work']==1) {
					$data['quality_of_work']=$_POST['quality_of_work']=0;
				}
				else{
					$data['quality_of_work']=$_POST['quality_of_work'];
				}
				if ($_POST['organization']==1) {
					$data['organization']=$_POST['organization']=0;
				}
				else{
					$data['organization']=$_POST['organization'];
				}
				if ($_POST['team_skills']==1) {
					$data['team_skills']=$_POST['team_skills']=0;
				}
				else{
					$data['team_skills']=$_POST['team_skills'];
				}
				if ($_POST['multitasking_ability']==1) {
					$data['multitasking_ability']=$_POST['multitasking_ability']=0;
				}
				else{
					$data['multitasking_ability']=$_POST['multitasking_ability'];
				}
				$row=$user->insert($data);
				//$this->redirect('Supervisor');
				}
				else
 				{
 				//errors
 				$errors = $user->errors;
 				}
		$this->view('addperformance',['errors'=>$errors]);
		}
		else{
			$this->view('404');
		}
	}
	/*function Update_Performance($id=null)
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
	}*/
	
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
