<?php

/**
 * PerformanceModel Controller
 */
class Performance extends Controller
{
	
	function index()
	{

		if(!Auth::logged_in())
		{
			$this->redirect('login');
		}
		$user=new PerformanceModel();
		$ar=Auth::user();
		$row=array();
		$row = $user->where('employee_ID',$ar);
		$this->view('performance',['row'=>$row]);
		
	}
}

