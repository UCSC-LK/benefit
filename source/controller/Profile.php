<?php

/**
 * profile controller
 */
class Profile extends Controller
{
	
	function index()
	{
		// code...
		if(!Auth::logged_in())
		{
			$this->redirect('login');
		}

		$this->view('profile');
		

	}
}
