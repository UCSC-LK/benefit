<?php

/**
 * 
 */
class AddemployeeController extends Controller
{
	
	function index()
	{
		// code...
		// echo "<pre>";
		// print_r($_POST);
		// $errors=array();
		if(count($_POST)> 0)
		{
			$user=new AddemployeeModel();
			//($user->validate($_POST)
			if(isset($_POST['submit']))
			{
				
				$arr['first_name'] = filter_input(INPUT_POST, 'fname', FILTER_SANITIZE_STRING);
				$arr['last_name'] = filter_input(INPUT_POST, 'lname', FILTER_SANITIZE_STRING);
				$arr['dob'] = $_POST['dob'];
				$arr['street'] = filter_input(INPUT_POST, 'street', FILTER_SANITIZE_STRING);
				$arr['city'] = filter_input(INPUT_POST, 'city', FILTER_SANITIZE_STRING);
				$arr['province'] = filter_input(INPUT_POST, 'province', FILTER_SANITIZE_STRING);
				$arr['employee_NIC'] = filter_input(INPUT_POST, 'nic', FILTER_SANITIZE_STRING);
				$arr['marital_status'] = $_POST['marital'];
				$arr['gender'] = $_POST['gender'];
				$arr['contact_number'] = $_POST['contact'];
				$arr['email'] =  filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
				$pass=$_POST['pwd'];
				$arr['password'] = password_hash($_POST['pwd'], PASSWORD_DEFAULT);
				$pas = $_POST['confirm'];
				$arr['user_role'] = filter_input(INPUT_POST, 'user_role', FILTER_SANITIZE_STRING);
				$arr['supervisor_ID'] = $_POST['supervisor'];
				if(isset($_POST['submit'])) {
					//submit button is clicked
					$file = $_FILES['image'];
			
					$file_name = $_FILES['image']['name'];
					$file_type = $_FILES['image']['type'];
					$file_size = $_FILES['image']['size'];
					$file_error = $_FILES['image']['error'];
					$file_temp_name = $_FILES['image']['tmp_name'];
			
					$file_ext = explode('.',$file_name);
					$file_actual_ext = strtolower(end($file_ext));
			
					$allowed = array('jpg','jpeg','png'); //limit file types
			
					// echo "inside image upload";
			
					if (in_array($file_actual_ext, $allowed)) {
						if ($file_error === 0) {
			
							if ($file_size < 50000000){ //set max size of image 500 KB
			
								$file_name_new = $arr['first_name']. "." .$file_actual_ext; //Rename profile picture with employee id
								$file_designation =  'public/img/profile/' .$file_name_new;
								$complete = move_uploaded_file($file_temp_name, $file_designation);
								
								$arr['profile_image'] = $file_designation;
								// move_uploaded_file($file_temp_name, $nic.".".$file_actual_ext);
			
							}else {
								echo "your file too big!";
							}
						}else {
							echo "An error file cannot upload ";
						}
					}else {
						echo "You cannot upload files of this type";
					}
			
				}else{
					echo "something wrong";
				}
				// $arr['profile_image'] = $_POST[];
				$arr['designation_code'] = $_POST['designation'];
				$arr['department_ID'] = $_POST['department'];
			
				if($complete && $pas == $pass ){
					$user->insert($arr);
//					$this->redirect('home');
				}
				else{
					echo "upload welaa nee ";
				}
				
				//redirect
				//$this->redirect('home');
			}
		//	else
		//	{
				//err
		//	$errors= $user->errors;
		//	}
		}
		// //$this->view('performance',['errors'=>$errors]);
		$this->view('addemployee');
		
	}
}