<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public\css\color.css">
    <link rel="stylesheet" href="public\css\employeelist.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <title>Employees</title>
    <!-- <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> -->
    <!-- <script src="https://kit.fontawesome.com/b99e675b6e.js"></script> -->
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
</head>
<body>
<div>
    <?php
    $this->view('includes/header1');
    ?>
</div>

<div class="page_content">

    <?php if (Auth::access('HR Manager')): ?>
            <?php
            //$this->view('includes/hrmanagernavbar');
            $this->view('includes/hrnav');
            ?>
    <?php endif; ?>

    <?php if (Auth::access('HR Officer')): ?>
            <?php
            $this->view('includes/hrofficernav');
            ?>
    <?php endif; ?>


    <!-- nAAaAaaaaaaa -->

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
                                if ($entry->user_role == "Manager" || $entry->designation_code == 3) {
                                    ?>
                                    <form method="post">
                                        <div class="cards">
                                            <input type="text" name="id" id="id"
                                                   value="<?php echo $entry->employee_ID ?>">
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
                                                <button class="button-btn" type="submit" id="edit" name="edit"> <i class='fas fa-edit'></i> </button>
                                                <button class="button-btn" type="submit" id="delete" name="delete"> <i class='fas fa-trash-alt'></i> </button>
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
                                if ($entry->user_role == "Supervisor") {
                                    ?>
                                    <form method="post">
                                        <div class="cards">
                                            <input type="text" name="id" id="id"
                                                   value="<?php echo $entry->employee_ID ?>">
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
                                                <button class="button-btn" type="submit" id="edit" name="edit"> <i class='fas fa-edit'></i> </button>
                                                <button class="button-btn" type="submit" id="delete" name="delete"> <i class='fas fa-trash-alt'></i> </button>
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
                                if ($entry->user_role == "Employee") {
                                    ?>
                                    <form method="post">
                                        <div class="cards">
                                            <input type="text" name="id" id="id"
                                                   value="<?php echo $entry->employee_ID ?>">
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
                                                <button class="button-btn" type="submit" id="edit" name="edit"> <i class='fas fa-edit'></i> </button>
                                                <button class="button-btn" type="submit" id="delete" name="delete"> <i class='fas fa-trash-alt'></i> </button>
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
</div>
<!--<div>-->
<!--    --><?php //$this->view('includes/footer')?>
<!--</div>-->
<script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
</body>
</html>
