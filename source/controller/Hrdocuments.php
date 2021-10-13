<?php

/**
 * PerformanceModel Controller
 */
class Hrdocuments extends Controller
{
	
	function index()
	{

		if(!Auth::logged_in())
		{
			$this->redirect('login');
		}
		
		
		$this->view('hrdocuments');
		
	}
}