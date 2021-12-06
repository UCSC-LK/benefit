<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public\css\color.css">
    <!-- <link rel="stylesheet" href="<?= CSS_PATH ?>addemployee.css"> -->
    <link rel="stylesheet" href="public\css\addemployee.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- <script deffer src="../../public/js/add_employee.js"></script>  -->
    <!-- use deffer for run js file after loading html-->
    <title>Add Employee</title>
</head>

<body>
    <div>
        <?php
            $this->view('includes/header1')
        ?>
    </div>
<?php if(Auth::access('HR Officer')):?>
    <div>
    <?php
    $this->view('includes/hrofficernavbar');
    ?>
</div>
<?php endif;?>


    <?php

    for($i = 4; $i < 11; $i++){
        if($rows[$i]){
           $alert = "<script> alert ('$rows[$i]') </script>";
           echo $alert;
        }
    }
    ?>
    <div class="add_employee_main_container">

        <div class="supervisor_list">
            <div class="main_dp">
                <div class="title">
                    <p>Operational Department</p>
                </div>
                <div class="data">
                    <table>
                        <tr>
                            <th class="id">Employee ID</th>
                            <th>Name</th>
                        </tr>
                        <?php
                            if($rows[0]){
                                foreach ($rows[0] as $entry){ ?>
                                    <tr>
                                        <td> <?php echo $entry->employee_ID ?> </td>
                                        <td> <?php echo $entry->first_name ?> <?php echo $entry->last_name ?> </td>
                                    </tr>
    
                        <?php
                            } 
                        }?>

                    </table>
                </div>
            </div>
            <div class="hr_dp">
                <div class="title">
                    <p>HR Department</p>
                </div>
                <div class="data">
                    <table>
                        <tr>
                            <th class="id">Employee ID</th>
                            <th>Name</th>
                        </tr>
                        <?php
                            if($rows[1]){
                                foreach ($rows[1] as $entry){ ?>
                                    <tr>
                                        <td> <?php echo $entry->employee_ID ?> </td>
                                        <td> <?php echo $entry->first_name ?> <?php echo $entry->last_name ?> </td>
                                    </tr>
    
                        <?php
                            } 
                        }     
                        ?>
                        
        
                    </table>
                </div>

            </div>
            
            <div class="sells_dp">
                <div class="title">
                    <p>Sells Department</p>
                </div>
                <div class="data">
                    <table>
                        <tr>
                            <th class="id">Employee ID</th>
                            <th>Name</th>
                        </tr>
                        <?php
                            if($rows[2]){
                                foreach ($rows[2] as $entry){ ?>
                                    <tr>
                                        <td> <?php echo $entry->employee_ID ?> </td>
                                        <td> <?php echo $entry->first_name ?> <?php echo $entry->last_name ?> </td>
                                    </tr>
    
                        <?php
                            } 
                        }?>
        
                    </table>
                </div>
            </div>
            <div class="acc_dp">
                <div class="title">
                    <p>Accounting Department</p>
                </div>
                <div class="data">
                    <table>
                        <tr>
                            <th class="id">Employee ID</th>
                            <th>Name</th>
                        </tr>
                        <?php
                            if($rows[3]){
                                foreach ($rows[3] as $entry){ ?>
                                    <tr>
                                        <td> <?php echo $entry->employee_ID ?> </td>
                                        <td> <?php echo $entry->first_name ?> <?php echo $entry->last_name ?> </td>
                                    </tr>
    
                        <?php
                            } 
                        }?>
        
                    </table>
                </div>
            </div>

        </div>
       
        <div class="form">
            <div class="title">
                <p>Add New Employee</p>
            </div>
            <div class="input_feild">
                <form method="post" enctype="multipart/form-data">
                    <div>
                        <label for="fname" >First Name</label>
                        <input type="text" id="fname" name="fname" size="50" required><br>
                    </div>

                    <div>
                        <label for="lname" >Last Name</label>
                        <input type="text" id="lname" name="lname" size="50"><br>
                    </div>
                    
                    <div>
                        <label for="dob" >Date Of Birth</label>
                        <input type="date" id="dob" name="dob" required>
                    </div>

                    <div class="address">
                        <label for="">Address</label>
                    
                        <div class="address_content">
                            <label for="street">Street</label>
                            <input type="text" id="street" name="street">
                            <label for="city" >City</label>
                            <input type="text" id="city" name="city" required>
                            <label for="Province" >Province</label>
                            <select id="province" name="province">
                                <option value="western">Western Province</option>
                                <option value="central">Central Province</option>
                                <option value="southern">Southern Province</option>
                                <option value="uva">Uva Province</option>
                                <option value="sabaragamuwa">Sabaragamuwa Province</option>
                                <option value="north_western">North Western Province</option>
                                <option value="north_central">North Central Province</option>
                                <option value="nothern">Nothern Province</option>
                                <option value="eastern">Eastern Province</option>

                            </select>
                        </div>
                    </div>
                    
                    <div class="marital">
                        <label for="marital" name = "marital">Marital Status</label>
                        <input type="radio" id="yes" name="marital" value="yes">
                        <label for="yes">Yes</label>
                        <input type="radio" id="no" name="marital" value="no">
                        <label for="no">No</label><br>
                    </div>
                
                    <div>
                        <label for="nic">NIC</label>
                        <input type="text" id="nic" name="nic" size="50" required><br>
                    </div> 
                    
                    <div class="gender">
                        <label for="gender" name = "gender">Gender</label>
                        <input type="radio" id="male" name="gender" value="male" >
                        <label for="gender">Male</label>
                        <input type="radio" id="female" name="gender" value="female">
                        <label for="gender">Female</label>
                        <input type="radio" id="other" name="gender" value="other">
                        <label for="gender">Other</label> <br>
                    </div>
                    
                    <div>
                        <label for="contact" >Contact Number</label>
                        <input type="tel" id="contact" name="contact" placeholder="076-256****" pattern="[0-9]{3}-[0-9]{7}" size="50" required>
                    </div>
                    
                    <div>
                        <label for="user_role">User Role</label>
                        <select id="user_role" name="user_role">
                            <option value="Employee">Employee</option>
                            <!-- <option value="Supervisor">Supervisor</option> -->
                            <option value="HR Manager">HR Manager</option>    
                            <option value="HR Officer">HR Officer</option>        
    
                        </select>
                    </div>

                    <div>
                        <label for="email">E Mail</label>
                        <input type="email" id="email" name="email" size="50" required><br>
                    </div>
                
                    <div class="pwd">
                        <label for="password">Password</label>
                        <!-- <div class="pwdinner"> -->
                        <input type="password" id="pwd" name="pwd" size="50" required> <i class="far fa-eye" id="eye1"></i><br>
                        <!-- </div> -->
                        
                        <p id="message"> Password is <span id="strenght" ></span></p>

                    </div>

                    <div class="pwd">
                        <label for="confirm">Confirm Password</label>
                        <input type="password" id="confirm" name="confirm" size="50" required><i class="far fa-eye" id="eye2"></i><br>
                    </div>

                    <div class="department">
                        <label for="department">Department</label>
                        <select id="departmnet" name="department">
                                <option value="1">Operational Department</option>
                                <option value="2">HR Department</option>
                                <option value="3">Sells Department</option>
                                <option value="4">Account Department</option>
                        </select>
                    </div>

                    <div>
                        <label for="supervisor">Supervisor ID</label>
                        <input type="text" id="supervisor" name="supervisor" size="50"><br>
                    </div>

                    <div>
                        <label for="designation">Designation code</label>
                        <select id="designation" name="designation">
                                <option value="1">CEO</option>
                                <option value="2">Director</option>
                                <option value="3">Manager</option>
                                <option value="4">HR Officer</option>
                                <option value="5">Employee</option>
                        </select>
                    </div>

                    <div class="image">
                        <label for="">Profile Picture (less than 500Kb)</label>

                        <div class="upload">
                            <input type="file"   name="image" id="image"  onchange="loadFile(event)" style="display: none;">
                            <label for="image" id="image" name="image">Upload Image </label>
                            <div>
                                <img id="output" width="200" />
                            </div>

                            <script>
                                var loadFile = function(event) {
                                    var image = document.getElementById('output');
                                    image.src = URL.createObjectURL(event.target.files[0]);
                                    };
                            </script>
                        </div>
                    </div>

                    <div class="buttons">
                        <button type="reset" id="cancel">Cancel</button>
                        <button type="submit" id="add" name="submit">Add</button>
                    </div>
                    
                </form>
            </div>
        </div>
        
    </div>
   
    <div class="foot">
        <p class="fot">Copyright © 2021 Oracle Freight Solutions | Powered by Oracle Freight Solutions</p>
    </div>
    <script src="public\js\addemployee.js"></script>
</body>
</html>
