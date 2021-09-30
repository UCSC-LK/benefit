<?php

/**
 * PerformanceModel Controller
 */
class Approvereimbursement extends Controller
{
	
	function index()
	{

		// if(!Auth::logged_in())
		// {
		// 	$this->redirect('login');
		// }
		
		
		$this->view('approvereimbursement');
		
	}

	


}