<?php

/**
 * 
 */
class AddemployeeController extends Controller
{
	
	function index()
	{
		$select = new AddemployeeModel();
		$oper = $select->where('department_ID',1);
		$hr = $select->where('department_ID',2);
		$sells = $select->where('department_ID',3);
		$acc = $select->where('department_ID',4);
		$arr1 = array($oper,$hr,$sells,$acc);
		for ($x = 4; $x < 10; $x++) {
			$arr1[$x] = null;
		  }
		// $this->view('addemployee',['rows'=>$arr1]);


		if(count($_POST)> 0)
		{
			$user=new AddemployeeModel();
			// $user = new AddemployeeModel();
			// $data = "define";
			//($user->validate($_POST)
			if(isset($_POST['submit']))
			// if(!empty($_POST) && $_SERVER['REQUEST_METHOD'] == 'POST')
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
				$validate = $this->email_validate($arr['email'],$user);
				

				$pass = $_POST['pwd'];
				$arr['password'] = password_hash($pass,PASSWORD_DEFAULT);
				$confirm = $_POST['confirm'];
				$arr['user_role'] = filter_input(INPUT_POST, 'user_role', FILTER_SANITIZE_STRING);
				$arr['supervisor_ID'] = $_POST['supervisor'];

				$str['user_role'] = "Supervisor";

				// $user->update($_POST['supervisor'],$str);

				// if(isset($_POST['submit'])) {
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
							if ($file_size < 500000){ //set max size of image 500 KB
			
								$file_name_new = $arr['first_name']. "." .$file_actual_ext; //Rename profile picture with employee id
								$file_designation =  'public/img/profile/' .$file_name_new;
								$complete = move_uploaded_file($file_temp_name, $file_designation);
								
								$arr['profile_image'] = $file_designation;
								// $arr1[4] = 0;
								// move_uploaded_file($file_temp_name, $nic.".".$file_actual_ext);
			
							}else {
								$complete = false;
								$arr1[4] = "Uploaded image too big";

							}
						}else {
							// echo "An error file cannot upload ";
							$arr1[5] = "Image cannot upload try again!";
						}
					}else {
						$arr1[6] = "You cannot upload files of this type";
						
					}
			
				// }else{
				// 	echo "something wrong";
				// }
				// $arr['profile_image'] = $_POST[];
				$arr['designation_code'] = $_POST['designation'];
				$arr['department_ID'] = $_POST['department'];

				// if($confirm != $pass){
				// 	$arr1[7] = "Confirmed password not correct";
				// 	// echo "Confirmed password not correct";
				// }
				if($validate){
					$arr1[8] = "email is allready used!";
				}
				elseif($complete && $confirm == $pass ){
					

					$user->insert($arr);
					$user->update($_POST['supervisor'],$str);

					// $arr1[9] = "ff";
					$this->redirect('AddemployeeRedirectController');
				}
				else{
					$arr1[9] = "Confirmed password not correct";
					
					// echo "upload welaa nee ";
				}
				
			}
	
		}


		$this->view('addemployee',['rows'=>$arr1]);


	}

	function email_validate($email , $user){
		// $select = new AddemployeeModel();
		$validate = $user->where('email',$email);
		
		return $validate;
	}
}
