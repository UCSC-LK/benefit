<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= CSS_PATH ?>color.css">
    <link rel="stylesheet" href="<?= CSS_PATH ?>supervisorviewperformance.css">
    <title>Employees</title>
</head>
<body>
<div>
    <?php
    $this->view('includes/header1');
    ?>
</div>

<div class="page_content">
    <?php
    $this->view('includes/supervisornav');
    ?>

    <div class="main_container">
        <div class="title">
            <p>Performance</p>
        </div>
        <!--        <div class="details">-->
        <!--            <div class="employee">-->

        <div class="approve-container">
            <div class="data">
                <?php
                if (boolval($row)) {
                if (count($row) > 0) {
                foreach ($row

                as $entry) { ?>
                <!-- <form method="post">-->
                <div class="cards">
                    <center>
                        <img src='<? echo $entry->profile_image ?>' alt="" class="img">
                    </center>
                    <div class="name">
                        <p><?php echo $entry->first_name ?></p>
                        <p><?php echo $entry->last_name ?> </p>
                    </div>
                    <div class="email">
                        <p><?php echo $entry->user_role ?></p>
                    </div>
                    <div class="options">
                        <a href="<?= PATH ?>Supervisor/Insert_Performance/<?= $entry->employee_ID ?>">
                            <i class="fas fa-plus"></i>
                        </a>

                        <a href="<?= PATH ?>Supervisor/Update_Performance/<?= $entry->employee_ID ?>">
                            <i class="fas fa-edit"></i>
                        </a>

                        <a href="<?= PATH ?>Supervisor/Delete_Performance/<?= $entry->employee_ID ?>">
                            <i class="fas fa-trash-alt"></i>
                        </a>
                    </div>
                </div>
                    <?php
                }
                }
                } ?>
            </div>
            <!--</form>-->
        </div>
    </div>
</div>

<!--<div>-->
<!--    --><?php //$this->view('includes/footer') ?>
<!--</div>-->
</body>
</html>
