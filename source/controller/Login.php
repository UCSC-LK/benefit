<?php

/**
 * login controller
 */
class Login extends Controller
{
	function index()
	{
		$this->check_if_banned();
		$errors = array();
		
		if(count($_POST) > 0 && $_POST['g-recaptcha-response']!="")
 		{
 			$secret='6Lc2qbkcAAAAAKIVv59_eU08VutKajP2UMzzoOz5';
 			$verifyResponse= file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=' . $secret . '&response=' . $_POST['g-recaptcha-response']);
 			$responseData= json_decode($verifyResponse);
 			if (!$responseData->success) {
 				$this->redirect('login');
 			}
 			$user = new Employeedetails();
 			if($row = $user->where('email',$_POST['email']))
 			{
 				$row = $row[0];
 				if(password_verify($_POST['password'], $row->password))
 				{
 					$this->check_if_banned(true,true);
 					Auth::authenticate($row);
 					$this->redirect('/home');
 				}
 				else{
 					$this->check_if_banned(true,false);
 					
 				}
 			}
  			$errors['email'] = "Wrong email or password";
  			

 		}
 	
		$this->view('login',[
			'errors'=>$errors,
		]);
	}
	
}
