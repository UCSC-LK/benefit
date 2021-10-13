<?php

/**
 * PerformanceModel Controller
 */
class Markattendance extends Controller
{
	
	function index()
	{

		// if(!Auth::logged_in())
		// {
		// 	$this->redirect('login');
		// }
		
		
		$this->view('markattendance');
		
	}

	


}