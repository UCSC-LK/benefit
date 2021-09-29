<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public\css\color.css">
    <!-- <link rel="stylesheet" href="<?=CSS_PATH ?>addemployeeRedirect.css"> -->
    <link rel="stylesheet" href="public\css\addemployeeRedirect.css">
    <title>Sucsess</title>
</head>
<body>
    <div class="main_container">
        <div class="msg">
            <div class="title">
                <p>SUCCESSFULLY ADDED NEW EMPLOYEE</p>
            </div>
            <div class="emp_details">
                <?php foreach($rows as $entry) {?>
                <div class="picture">
                    <img src="<?php echo $entry->profile_image ?>" alt="Picture not found">
                </div>
                <div class="details">
                    <table>
                        <tr>
                            <td>EMPLOYEE ID </td> 
                            <td><?php echo ": ".$entry->employee_ID ?></td>  
                        </tr>
                        <tr>
                            <td>NAME</td>
                            <td><?php echo ": ".$entry->first_name ." " . $entry->last_name ?></td>
                        </tr>
                        <tr>
                            <td>E MAIL</td>
                            <td><?php echo ": ".$entry->email ?></td>
                        </tr>
                        <tr>
                            <td>NIC </td>
                            <td><?php echo ": ".$entry->employee_NIC ?></td>
                        </tr>
                    </table>
                    
                    <div class="button">
                        <form method="post">
                            <input type="submit" name="button"  id="button" value="OK"/>                                
                        </form>
                    </div>
                   
                    <!-- <p>kjbshvb</p> -->
                </div>
                <?php }?>
            </div>
        </div>
    </div>
</body>
</html>