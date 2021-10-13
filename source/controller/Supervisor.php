<?php

/**
 * PerformanceModel Controller
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

	
	


}
