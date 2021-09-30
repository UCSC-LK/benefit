<?php

/**
 * PerformanceModel Controller
 */
class Approvebenefit extends Controller
{
	
	function index()
	{

		// if(!Auth::logged_in())
		// {
		// 	$this->redirect('login');
		// }
		
		
		$this->view('approvebenefit');
		
	}

	


}