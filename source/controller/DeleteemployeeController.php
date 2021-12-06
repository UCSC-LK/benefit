<?php

/**
 * 
 */
class DeleteemployeeController extends Controller
{
	
	function index()
	{

        if(!isset($_SESSION)){
            session_start();
        }

		$user = new UpdateemployeeModel();
        $data = $user->where('employee_ID',$_SESSION['id'] );
        $id = $_SESSION['id'];
		
        if(isset($_POST['delete'])){
            $set = $user->delete($id);
            $this->redirect('EmployeelistController');
        }

        if(isset($_POST['cancel'])){
            $this->redirect('EmployeelistController');
        }

		$this->view('deleteemployee',['rows'=>$data]);

	}
}