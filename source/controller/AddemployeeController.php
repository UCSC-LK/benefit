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
		$err = array("Successfully added");
		// $err = array(0,0,0,0);
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

				$validate = $this->email_validate($arr['email'],$user);


				$pass=$_POST['pwd'];
				$arr['password'] = password_hash($_POST['pwd'], PASSWORD_DEFAULT);
				$pas = $_POST['confirm'];

				// if($pas != $pass){
				// 	array_push($err ,"password mismatch");
				// }

				$arr['user_role'] = filter_input(INPUT_POST, 'user_role', FILTER_SANITIZE_STRING);
				$arr['supervisor_ID'] = $_POST['supervisor'];
			
				$file = $_FILES['image'];
		
				$file_name = $_FILES['image']['name'];
				$file_type = $_FILES['image']['type'];
				$file_size = $_FILES['image']['size'];
				$file_error = $_FILES['image']['error'];
				$file_temp_name = $_FILES['image']['tmp_name'];
		
				$file_ext = explode('.',$file_name);
				$file_actual_ext = strtolower(end($file_ext));
		
				$allowed = array('jpg','jpeg','png','fifi'); //limit file types
		
				// echo "inside image upload";
		
				if (in_array($file_actual_ext, $allowed)) {
					if ($file_error === 0) {
		
						if ($file_size < 5000000){ //set max size of image 500 KB
		
							$file_name_new = $arr['first_name']. "." .$file_actual_ext; //Rename profile picture with employee id
							$file_designation =  'public/img/profile/' .$file_name_new;
							$complete = move_uploaded_file($file_temp_name, $file_designation);
							
							$arr['profile_image'] = $file_designation;
							// move_uploaded_file($file_temp_name, $nic.".".$file_actual_ext);
		
						}else {
							// echo "your file too big!";
							array_push($err , "your file too big!");
						}
					}else {
						// echo "An error file cannot upload ";
						array_push($err ,"An error file cannot upload ");
					}
				}else {
					// echo "You cannot upload files of this type";
					array_push($err ,"You cannot upload files of this type");
				}
		
				// $arr['profile_image'] = $_POST[];
				$arr['designation_code'] = $_POST['designation'];
				$arr['department_ID'] = $_POST['department'];

				if ($validate){
					// echo "email allready used";
					array_push($err , "email all ready used");
					$this->redirect('AddemployeeController');

				}elseif ($complete && $pas === $pass){

					$user->insert($arr);

					$this->redirect('AddemployeeRedirectController');

				}else{
					array_push($err ,"something wrong try again");
				}
			}			
					
		}

		if(count($err)>0){
			$this->view('addemployee',['err'=>$err]);
		}else{
			$this->view('addemployee');
		}
		
		// $this->view('addemployee');
		
	}

	function email_validate($email , $user){
		// $select = new AddemployeeModel();
		$validate = $user->where('email',$email);
		
		return $validate;
	}
}