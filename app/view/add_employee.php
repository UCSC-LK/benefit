<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../public/css/color.css">
    <link rel="stylesheet" href="../../public/css/add_employee.css">
    <!-- <script deffer src="../../public/js/add_employee.js"></script>  -->
    <!-- use deffer for run js file after loading html-->
    <title>Form</title>
</head>
<body>
    <div class="header">
        <?php require_once 'header1.php'; ?>
    </div>
    <div class="add_employee_main_container">
        <div class="title">
            <p>Add New Employee</p>
        </div>
        <div class="input_feild">
            <form action="../controller/add_employee_controller.php" method="POST" enctype="multipart/form-data">
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
                    <input type="text" id="user_role" name="user_role" size="50"><br>
                </div>

                <div>
                    <label for="email">E Mail</label>
                    <input type="email" id="email" name="email" size="50" required><br>
                </div>
               
                <div>
                    <label for="password">Password</label>
                    <input type="password" id="pwd" name="pwd" size="50" required><br>           
                </div>
                <div>
                    <label for="confirm">Confirm Password</label>
                    <input type="password" id="confirm" name="confirm" size="50" required><br>
                </div>

                <div>
                    <label for="supervisor">Supervisor</label>
                    <input type="text" id="supervisor" name="supervisor" size="50"><br>
                </div>
                <div>
                    <label for="salary">Basic Salary (LKR)</label>
                    <input type="number" id="salary" name="salary">
                </div>

                <div class="image">
                    <label for="">Profile Picture </label>

                    <div class="upload">
                        <input type="file"   name="image" id="image"  onchange="loadFile(event)" style="display: none;">
                        <label for="image" id="image" name="image">Upload Image</label>
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
    <div>
        <?php require_once 'footer.php' ?>
    </div>
</body>
</html>