<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public\css\color.css">
    <!-- <link rel="stylesheet" href="<?= CSS_PATH ?>addemployee.css"> -->
    <link rel="stylesheet" href="public\css\addemployee.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
          integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
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

<div class="page_content">
    <!-- <?php if (Auth::access('HR Officer')): ?>
        <div>
            <?php
            $this->view('includes/hrofficernav');
            ?>
        </div>
    <?php endif; ?> -->


    <?php

    for ($i = 4; $i < 15; $i++) {
        if ($rows[$i]) {
            $alert = "<script> alert ('$rows[$i]') </script>";
            echo $alert;
        }
    }
    ?>
    <div class="main_container">
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
                            if ($rows[0]) {
                                foreach ($rows[0] as $entry) { ?>
                                    <tr>
                                        <td> <?php echo $entry->employee_ID ?> </td>
                                        <td> <?php echo $entry->first_name ?><?php echo " " ?><?php echo $entry->last_name ?> </td>
                                    </tr>

                                    <?php
                                }
                            } ?>

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
                            if ($rows[1]) {
                                foreach ($rows[1] as $entry) { ?>
                                    <tr>
                                        <td> <?php echo $entry->employee_ID ?> </td>
                                        <td> <?php echo $entry->first_name ?><?php echo " " ?><?php echo $entry->last_name ?> </td>
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
                            if ($rows[2]) {
                                foreach ($rows[2] as $entry) { ?>
                                    <tr>
                                        <td> <?php echo $entry->employee_ID ?> </td>
                                        <td> <?php echo $entry->first_name ?><?php echo " " ?><?php echo $entry->last_name ?> </td>
                                    </tr>

                                    <?php
                                }
                            } ?>

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
                            if ($rows[3]) {
                                foreach ($rows[3] as $entry) { ?>
                                    <tr>
                                        <td> <?php echo $entry->employee_ID ?> </td>
                                        <td> <?php echo $entry->first_name ?><?php echo " " ?><?php echo $entry->last_name ?> </td>
                                    </tr>

                                    <?php
                                }
                            } ?>

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

                        <table style="max-width: 100%;">
                            <tr>
                                <th id="c1"></th>
                                <th id="c2"></th>
                                <th id="c3"></th>
                                <th id="c4"></th>
                                <th id="c5"></th>
                                <th id="c6"></th>
                                <th id="c7"></th>
                                <th id="c8"></th>
                            </tr>
                            <tr>
                                <!-- <td id="c1" ></td> -->
                                <td id="c2" colspan="2"><label for="fname">First Name</label></td>
                                <!-- <td id="c3">  </td> -->
                                <td id="c4" colspan="6"><input type="text" id="fname" name="fname"  required><p id="fval">Name Not Valied</p>
                            <input type="hidden" name="fhide" id="fhide" value=""></td>
                                
                            </tr>
                            <tr>
                                <!-- <td id="c1"></td> -->
                                <td id="c2" colspan="2"><label for="lname">Last Name</label></td>
                                <!-- <td id="c3"></td> -->
                                <td id="c4" colspan="6"><input type="text" id="lname" name="lname" ><p id="lval">Name Not Valied</p>
                            <input type="hidden" name="lhide" id="lhide" value=""></td>
                               
                            </tr>
                            <tr>
                                <!-- <td id="c1"></td> -->
                                <td id="c2" colspan="2"><label for="dob">Date Of Birth</label></td>
                                <!-- <td id="c3"></td> -->
                                <td id="c4" colspan="6"><input type="date" id="dob" name="dob" required min="" max="" onload = "public/js/addemployee.js/dob_validate()"></td>
                                
                            </tr>
                            <tr>
                                <!-- <td id="c1"></td> -->
                                <td id="c2" colspan="2"><label for="nic">NIC</label></td>
                                <!-- <td id="c3"></td> -->
                                <td id="c4" colspan="6"><input type="text" id="nic" name="nic"  required><p id="nicval"></p>
                            <input type="hidden" name="nichide" id="nichide" value=""></td>
                                
                            </tr>
                            <!-- <tr>
                                <td id="c1" colspan="2"></td>
                                <td id="c2"></td>
                                <td id="c3"></td>
                                <td id="c4"></td>
                                <td id="c5"></td>
                                <td id="c6"></td>
                                <td id="c7"></td>
                                <td id="c8"></td>
                            </tr> -->
                            <tr>
                              
                                <td id="c2" colspan="2">Address</td>
                            
                            </tr>
                            <tr>
                                <td id="c2" colspan="2"><label for="street" id="address">Street</label> </td>
                                <!-- <td id="c3"></td> -->
                                <td id="c4" colspan="6"><input type="text" id="street" name="street"></td>
                              
                            </tr>
                            <tr>
                                <td id="c2" colspan="2"><label for="city" id="address">City</label></td>
                                <!-- <td id="c3"></td> -->
                                <td id="c4" colspan="6"><input type="text" id="city" name="city" required></td>
                                
                            </tr>
                            <tr>
                                <!-- <td id="c1"></td> -->
                                <td id="c2" colspan="2"><label for="Province" id="address">Province</label></td>
                                <!-- <td id="c3"></td> -->
                                <td id="c4" colspan="6"><select id="province" name="province">
                                    <option value="Western">Western Province</option>
                                    <option value="Central">Central Province</option>
                                    <option value="Southern">Southern Province</option>
                                    <option value="Uva">Uva Province</option>
                                    <option value="Sabaragamuwa">Sabaragamuwa Province</option>
                                    <option value="North_western">North Western Province</option>
                                    <option value="North_central">North Central Province</option>
                                    <option value="Nothern">Nothern Province</option>
                                    <option value="Eastern">Eastern Province</option>

                                </select></td>
                                
                            </tr>

                            <tr>
                                <!-- <td id="c1"></td> -->
                                <td id="c2" colspan="2"><label for="marital" name="marital">Marital Status</label></td>
                                <!-- <td id="c3"></td> -->
                                <td id="c4"><label for="yes">Yes</label></td>
                                <td id="c5"><input type="radio" id="yes" name="marital" value="Yes"></td>
                        
                                <td id="c6"></td>
                                <td id="c7"><label for="no">No</label></td>
                                <td id="c8"><input type="radio" id="no" name="marital" value="No"></td>                            
                            </tr>
                            <tr>
                                
                                <td id="c2" colspan="2"><label for="gender" name="gender">Gender</label></td>
                                
                                <td id="c4"><label for="gender">Male</label></td>
                                <td id="c5"><input type="radio" id="male" name="gender" value="Male"></td>
                        
                                <td id="c6"></td>
                                <td id="c7"><label for="gender">Female</label></td>
                                <td id="c8"><input type="radio" id="female" name="gender" value="Female"></td>                           
                            </tr>

                            <tr>
                                <td id="c2" colspan="2"><label for="contact">Contact Number</label></td>
                                
                                <td id="c4" colspan="6"><input type="tel" id="contact" name="contact" placeholder="076-256****"
                                   pattern="[0-9]{3}-[0-9]{7}"
                                   size="50" required></td>
                       
                            </tr>
                            <tr>
                            
                                <td id="c2" colspan="2"><label for="email">E Mail</label></td>
                                <td id="c4" colspan="6">    <input type="email" id="email" name="email" required></td>
            
                            </tr>

                            <tr>
                                <!-- <td id="c1"></td> -->
                                <td id="c2" colspan="2"><label for="password">Password</label></td>
                                <!-- <td id="c3"></td> -->
                                <td id="c4" colspan="6"><input type="password" id="pwd" name="pwd" required> <i class="far fa-eye" id="eye1" ></i>
                                <input type="hidden" name="phide" id="phide" value="">
                                <p id="message"> Password is <span id="strenght"></span></p>
                                </td>
                                
                            </tr>

                            <tr>
                                <!-- <td id="c1"></td> -->
                                <td id="c2" colspan="2"><label for="confirm">Confirm Password</label></td>
                                <!-- <td id="c3"></td> -->
                                <td id="c4" colspan="6"><input type="password" id="confirm" name="confirm" required><i class="far fa-eye"id="eye2"></i>
                                    <input type="hidden" name="phide" id="phide" value="">
                                    <p id="message"> Password is <span id="strenght"></span></p>   
                                </td>
                               
                            </tr>

                            <tr>
                                <!-- <td id="c1"></td> -->
                                <td id="c2" colspan="2"><label for="user_role">User Role</label> </td>
                                <!-- <td id="c3"></td> -->
                                <td id="c4" colspan="6"><select id="user_role" name="user_role">
                                    <option value="Employee">Employee</option>
                                    <option value="HR Manager">HR Manager</option>
                                    <option value="HR Officer">HR Officer</option>
                                    </select>
                                </td>
                               
                            </tr>

                            <tr>
                                <!-- <td id="c1"></td> -->
                                <td id="c2" colspan="2"><label for="department">Department</label></td>
                                <!-- <td id="c3"></td> -->
                                <td id="c4" colspan="6"><select id="department" name="department">
                                    <option value="1">Operational Department</option>
                                    <option value="2">HR Department</option>
                                    <option value="3">Sells Department</option>
                                    <option value="4">Account Department</option>
                                </select></td>
                            </tr>

                            <tr>
                                <!-- <td id="c1"></td> -->
                                <td id="c2" colspan="2"><label for="designation">Designation Code</label></td>
                                <!-- <td id="c3"></td> -->
                                <td id="c4" colspan="6"><select id="designation" name="designation">
                                    <option value="1">CEO</option>
                                    <option value="2">Director</option>
                                    <option value="3">Manager</option>
                                    <option value="4">HR Officer</option>
                                    <option value="5">Employee</option>
                                </select></td>
                            </tr>

                            <tr>
                                <!-- <td id="c1"></td> -->
                                <td id="c2" colspan="2"><label for="supervisor">Supervisor ID</label></td>
                                <!-- <td id="c3"></td> -->
                                <td id="c4" colspan="6"><input type="text" id="supervisor" name="supervisor" size="50"></td>
                                
                            </tr>

                            <tr>
                                <!-- <td id="c1"></td> -->
                                <td id="c2" colspan="2"><label for="">Profile Picture (less than 500Kb)</label></td>
                                <!-- <td id="c3"></td> -->
                                <td id="c4" colspan="6"><input type="file" name="image" id="image" onchange="loadFile(event)"
                                       style="display: none;">
                                <label for="image" id="image" name="image">Upload Image </label>
                                <div>
                                    <img id="output" width="200"/>
                                </div>

                                <script>
                                    var loadFile = function (event) {
                                        var image = document.getElementById('output');
                                        image.src = URL.createObjectURL(event.target.files[0]);
                                    };
                                </script></td>
                                
                            </tr>
                            
                            <tr>
                                <td id="c1"></td>
                                <td id="c2"></td>
                                <td id="c3"><button type="reset" id="cancel">Cancel</button></td>
                                <td id="c4"></td>
                                <td id="c5"></td>
                                <td id="c6"></td>
                                <td id="c7"><button type="submit" id="add" name="submit">Add</button></td>
                                <td id="c8"></td>
                            </tr>   
                        </table>
                       
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="public\js\addemployee.js"></script>
</body>
</html>
