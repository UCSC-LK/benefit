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
	
	function forgotpassword()
	{
		if(isset($_POST['reset-req']))
		{
			$selector=bin2hex(random_bytes(8));
			$token=random_bytes(32);
			$hashedToken=password_hash($token, PASSWORD_DEFAULT);
			/*$url="<?=PATH?>login/forgotpassword2?selector=".$selector."&validator=".bin2hex($token);*/
			$url="localhost/benefit/Login/forgotpassword2?selector=".$selector."&validator=".bin2hex($token);
			$expires=date("U") +1800;
			$userEmail =$_POST["email"];
			$user =new PwdResetModel();
			$row=$user->deletepsw($userEmail);
			$arr['pwdResetEmail']=$userEmail;
			$arr['pwdResetSelector']=$selector;
			$arr['pwdResetToken']=$hashedToken;
			$arr['pwdResetExpires']=$expires;
			$row=$user->insert($arr);
			
			$to=$userEmail;
			$subject='Reset your password for mmtuts';
			$massage= '<p>We recieved a password reset req.The link to reset your password </p>';
			$massage.='<p>Here is your password reset link:</br>';

			$massage.='<a href="'.$url.'">'.$url.'</a></p>';

			$headers="From:mmtuts <chathurabimalka1997@gmail>\r\n";
			$headers="Reply-To: chathurabimalka1997@gmail.com\r\n";
			$headers="Content-type:text/html\r\n";
			mail($to, $subject,$massage,$headers);
			header("Location:forgotpassword?reset=success");

		}
		$this->view('forgotpassword');
	}
	
}
