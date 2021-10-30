<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public\css\color.css">
    <!-- <link rel="stylesheet" href="<?= CSS_PATH ?>addemployeeRedirect.css"> -->
    <link rel="stylesheet" href="public\css\deleteemployee.css">
    <title>Sucsess</title>
</head>
<body>
<div>
    <?php
    $this->view('includes/header1')
    ?>
</div>
<div class="page_content">
    <?php if (Auth::access('HR Officer')): ?>
        <div>
            <?php
            $this->view('includes/hrofficernav');
            ?>
        </div>
    <?php endif; ?>
    <div class="main_container">
        <div class="msg">
            <div class="title">
                <p>Confirm for Delete</p>
            </div>
            <div class="emp_details">
                <?php foreach ($rows as $entry) { ?>
                    <div class="picture">
                        <img src="<?php echo $entry->profile_image ?>" alt="Picture not found">
                    </div>
                    <div class="details">
                        <table>
                            <tr>
                                <td class="left">EMPLOYEE ID</td>
                                <td><?php echo $entry->employee_ID ?></td>
                            </tr>
                            <tr>
                                <td class="left">NAME</td>
                                <td><?php echo $entry->first_name . " " . $entry->last_name ?></td>
                            </tr>
                            <tr>
                                <td class="left">E MAIL</td>
                                <td><?php echo $entry->email ?></td>
                            </tr>
                            <tr>
                                <td class="left">NIC</td>
                                <td><?php echo $entry->employee_NIC ?></td>
                            </tr>
                            <?php
                            if ($entry->department_ID == 1) {
                                $department = "Operational Department";
                            } elseif ($entry->department_ID == 2) {
                                $department = "HR Department";
                            } elseif ($entry->department_ID == 3) {
                                $department = "Sells Department";
                            } else {
                                $department = "Account Department";
                            }
                            ?>

                            <tr>
                                <td class="left">Department</td>
                                <td><?php echo  $department ?></td>
                            </tr>
                        </table>

                        <div class="buttons">
                            <form method="post">
                                <input type="submit" id="cancel" name="cancel" value="Cancel"/>
                                <input type="submit" id="delete" name="delete" value="Delete"/>
                            </form>
                        </div>

                        <!-- <p>kjbshvb</p> -->
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
<!--<div>-->
<!--    --><?php //$this->view('includes/footer') ?>
<!--</div>-->
</body>
</html>