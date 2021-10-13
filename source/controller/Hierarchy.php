<?php

class Hierarchy extends Controller
{
	
	function index()
	{

		if(!Auth::logged_in())
		{
			$this->redirect('login');
		}
		
		
		$this->view('hierarchy');
		
	}
}
