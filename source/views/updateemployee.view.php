<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public\css\color.css">
    <link rel="stylesheet" href="public\css\updateemployee.css">
    
    <title>Update employee</title>
</head>
<body>
    <div>
        <?php $this->view('includes/header1')?>
    </div>

    <div>
        <?php $this->view('includes/header2')?>
    </div>
    
    <div class="main_container">

        <div class="form">
            <div class="title">
                    <p>Update Employee Details</p>
            </div>
            <div class="input_feild">
                <?php 
                if(boolval($rows)){
                        if(count($rows)>0)
                    foreach($rows as $entry){?>

                        <div class="detail">
                            <p>Name : <?php echo $entry->first_name ?>  <?php echo $entry->last_name ?></p>
                            <p>Employee ID: <?php echo $entry->employee_ID ?></p>
                        </div>
                        <form method="post">

                            <div class="address">
                                <label for="">Address</label>
                            
                                <div class="address_content">
                                    <label for="street">Street</label>
                                    <input type="text" id="street" name="street" value="<?php echo $entry->street ?>">
                                    <label for="city" >City</label>
                                    <input type="text" id="city" name="city" value="<?php echo $entry->city ?>">
                                    <label for="Province" >Province</label>
                                    <select id="province" name="province">
                                        <option value="<?php echo $entry->province ?>"><?php  echo (ucfirst($entry->province)) ?> Province</option>
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
                                <input type="text" name="marital" id="set" value="<?php echo $entry->marital_status ?>">
                                <input type="radio" id="yes" name="marital" value="yes">
                                <label for="yes">Yes</label>
                                <input type="radio" id="no" name="marital" value="no">
                                <label for="no">No</label><br>
                            </div>
                            <div>
                                <label for="contact" >Contact Number</label>
                                <input type="tel" id="contact" name="contact" placeholder="076-256****" pattern="[0-9]{3}-[0-9]{7}" size="50" value="<?php echo $entry->contact_number ?>">
                            </div>

                            <div>
                                <label for="email_current">Current E Mail</label>
                                <label for="email_current"><?php echo $entry->email ?></label><br>
                                <input type="email" id="email_current" name="email_current" value="<?php echo $entry->email ?>">
                            </div>

                            <div>
                                <label for="email_new">New E Mail</label>
                                <input type="email" id="email_new" name="email_new" size="50" required><br>
                            </div>

                   <?php }
                }
                
                ?>
                    <div class="buttons">
                        <button type="reset" id="cancel">Cancel</button>
                        <button type="submit" id="add" name="submit">Update</button>
                    </div>
                    
                </form>


            </div>
        </div>
        
    </div>

     <div class="foot">
        <p class="fot">Copyright © 2021 Oracle Freight Solutions | Powered by Oracle Freight Solutions</p>
    </div>
</body>
</html>
