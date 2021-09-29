<?php

/**
 * 
 */
class AddemployeeRedirectController extends Controller
{
	
	function index()
	{


		$select = new AddemployeeRedirectModel();
		$main = $select->getLast('employee_ID');
		$this->view('addemployeeRedirect',['rows'=>$main]);
		

		if(isset($_POST['button'])) {
            $this->redirect('AddemployeeController');
        }

	}
}