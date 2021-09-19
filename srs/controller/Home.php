<?php

/**
 * home controller
 */
class Home extends Controller
{
	
	function index()
	{
		// code...

		//$user = $this->load_model('PerformanceModel');
		$user=new Employee_detail();
		
		/*$arr['employee_ID']=1;
		$arr['communication']=20;
		$arr['quality_of_work']=30;
		$arr['organization']=40;
		$arr['team_skills']=50;
		$arr['multitasking_ability']=60;
		$user->insert($arr);*/

		//$user->update($3,$arr);

		//$user->delete($id=1);
		//$data = $user->findAll();

		//$data = $user->where('first_name','chathura');

		//$this->view('home',['rows'=>$data]);
		$this->view('home');
	}
}
