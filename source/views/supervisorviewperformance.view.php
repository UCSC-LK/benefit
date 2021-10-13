<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=CSS_PATH?>color.css">
    <link rel="stylesheet" href="<?=CSS_PATH?>supervisorviewperformance.css">
    <title>Employees</title>
</head>
<body>
<div>
    <?php
    $this->view('includes/header1');
    ?>
</div>
  <div>
    <?php
    $this->view('includes/parentemployeenavbar');
    ?>
</div>  
<div class="main_container">
    
    <div class="details">
        <div class="employee" >
            <div class="title">
                <p>Employees</p>
            </div>
            <div class="data">
                <?php
                if (boolval($row)) {
                    if (count($row) > 0) {
                        foreach ($row as $entry) {
                           
                            
                                ?>
                               <!-- <form method="post">-->
                                    <div class="cards">
                                        
                                        <div class="img">
                                            <img src="<?php echo $entry->profile_image?>" alt="not found">

                                        </div>
                                        <div class="name">
                                            <p><?php echo $entry->first_name ?> <?php echo $entry->last_name ?> </p>
                                        </div>
                                        <div class="email">
                                            <p><?php echo $entry->email ?></p>
                                        </div>
                                        <div class="butons">

                                            <a href="<?=PATH?>Supervisor/Insert_Performance/<?=$entry->employee_ID?>">
                                            <button type="submit" id="edit" name="edit">Insert</button></a>
                                            <a href="<?=PATH?>Supervisor/Update_Performance/<?=$entry->employee_ID?>">
                                            <button type="submit" id="edit" name="edit">Update</button></a>
                                            <a href="<?=PATH?>Supervisor/Delete_Performance/<?=$entry->employee_ID?>">
                                            <button type="submit" id="delete" name="delete">Delete</button></a>
                                        </div>
                                    </div>
                                <!--</form>-->
                            <?php 


                        }
                    }
                } ?>
            </div>
        </div>

    </div>
</div>
<div>
    <?php $this->view('includes/footer')?>
</div>
</body>
</html>
