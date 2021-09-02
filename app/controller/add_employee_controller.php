<?php
    echo "inside controller";


    require('../model/add_employee_model.php');

    $fname = filter_input(INPUT_POST, 'fname', FILTER_SANITIZE_STRING);
    $lname = filter_input(INPUT_POST, 'lname', FILTER_SANITIZE_STRING);
    $dob = $_POST['dob'];
    $street = filter_input(INPUT_POST, 'street', FILTER_SANITIZE_STRING);
    $city = filter_input(INPUT_POST, 'city', FILTER_SANITIZE_STRING);
    $province = filter_input(INPUT_POST, 'province', FILTER_SANITIZE_STRING);
    $marital = $_POST['marital'];
    $nic = filter_input(INPUT_POST, 'nic', FILTER_SANITIZE_STRING);
    $gender = $_POST['gender'];
    $contact = filter_input(INPUT_POST, 'contact');
    $role = filter_input(INPUT_POST, 'role', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $pwd = $_POST['pwd'];
    $confirm = $_POST['confirm'];

    if($pwd == $confirm){
        $pwd = $pwd;
    }else {
        echo "password not match";
    }
    $supervisor = filter_input(INPUT_POST, 'supervisor', FILTER_SANITIZE_STRING);
    $salary = filter_input(INPUT_POST, 'salary', FILTER_VALIDATE_FLOAT);


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

        echo "inside image upload";

        if (in_array($file_actual_ext, $allowed)) {
            if ($file_error === 0) {

                if ($file_size < 500000){ //set max size of image 500 KB

                    $file_name_new = $nic. "." .$file_actual_ext; //Rename profile picture with employee id

                    $file_designation = '../../public/img/'.$file_name_new;
                    echo "image upload complete";
                    // move_uploaded_file($file_temp_name, $nic.".".$file_actual_ext);
                    move_uploaded_file($file_temp_name, $file_designation);

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

    inseart($fname, $lname, $dob, $street, $city, $province, $marital, $nic, $gender, $contact, $role, $email, $pwd, $supervisor, $salary );

?>