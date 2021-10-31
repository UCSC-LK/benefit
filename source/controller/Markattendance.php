<?php

/**
 * PerformanceModel Controller
 */
class Markattendance extends Controller
{
	
	function index()
	{

		if(!Auth::logged_in())
		{
			$this->redirect('login');
		}
		
		if(Auth::access('Supervisor'))
   		 {
		$this->view('markattendance');
	}
	else{
    $this->view('404');
  	}	
	}
}
