<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public\css\color.css">
    <link rel="stylesheet" href="public\css\employeelist.css">
    <title>Employees</title>
</head>
<body>
<div>
    <?php
    $this->view('includes/header1');
    ?>
</div>
<div class="main_container">
    <div class="head">
        <p>Branch Name</p>
    </div>

    <div class="details">

        <div class="manager">
            <div class="title">
                <p>Managers</p>
            </div>
            <div class="data">

                <?php
                if (boolval($rows)) {
                    if (count($rows) > 0) {
                        foreach ($rows as $entry) {
                            if ($entry->designation_code == 1) {
                                ?>
                                <form method="post">
                                    <div class="cards">
                                        <input type="text" name="id" id="id" value="<?php echo $entry->employee_ID ?>">
                                        <div class="img">
                                            <img src="<?php echo $entry->profile_image ?>" alt="not found">
                                        </div>
                                        <div class="name">
                                            <p><?php echo $entry->first_name ?><?php echo $entry->last_name ?> </p>
                                        </div>
                                        <div class="email">
                                            <p><?php echo $entry->email ?></p>
                                        </div>
                                        <div class="butons">
                                            <button type="submit" id="edit" name="edit">Edit</button>
                                            <button type="submit" id="delete" name="delete">Delete</button>
                                        </div>
                                    </div>
                                </form>
                            <?php }


                        }
                    }
                } ?>
            </div>
        </div>

        <div class="supervisor">
            <div class="title">
                <p>Supervisors</p>
            </div>
            <div class="data">
                <?php
                if (boolval($rows)) {
                    if (count($rows) > 0) {
                        foreach ($rows as $entry) {
                            if ($entry->designation_code == 2) {
                                ?>
                                <form method="post">
                                    <div class="cards">
                                        <input type="text" name="id" id="id" value="<?php echo $entry->employee_ID ?>">
                                        <div class="img">
                                            <img src="<?php echo $entry->profile_image ?>" alt="not found">
                                        </div>
                                        <div class="name">
                                            <p><?php echo $entry->first_name ?><?php echo $entry->last_name ?> </p>
                                        </div>
                                        <div class="email">
                                            <p><?php echo $entry->email ?></p>
                                        </div>
                                        <div class="butons">
                                            <button type="submit" id="edit" name="edit">Edit</button>
                                            <button type="submit" id="delete" name="delete">Delete</button>
                                        </div>
                                    </div>
                                </form>
                            <?php }


                        }
                    }
                } ?>
            </div>
        </div>

        <div class="employee">
            <div class="title">
                <p>Employees</p>
            </div>
            <div class="data">
                <?php
                if (boolval($rows)) {
                    if (count($rows) > 0) {
                        foreach ($rows as $entry) {
                            if ($entry->designation_code == 3) {
                                ?>
                                <form method="post">
                                    <div class="cards">
                                        <input type="text" name="id" id="id" value="<?php echo $entry->employee_ID ?>">
                                        <div class="img">
                                            <img src="<?php echo $entry->profile_image ?>" alt="not found">
                                        </div>
                                        <div class="name">
                                            <p><?php echo $entry->first_name ?><?php echo $entry->last_name ?> </p>
                                        </div>
                                        <div class="email">
                                            <p><?php echo $entry->email ?></p>
                                        </div>
                                        <div class="butons">
                                            <button type="submit" id="edit" name="edit">Edit</button>
                                            <button type="submit" id="delete" name="delete">Delete</button>
                                        </div>
                                    </div>
                                </form>
                            <?php }


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