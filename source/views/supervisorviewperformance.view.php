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
<script>
    var dataTable = document.getElementById('claim_history_table');
    var checkItAll = dataTable.querySelector('input[name="select_all"]');
    var inputs = dataTable.querySelectorAll('tbody>tr>td>input');

    checkItAll.addEventListener('change', function() {
        if (checkItAll.checked) {
            inputs.forEach(function(input) {
                input.checked = true;
            });
        }
    });
</script>
<body>
<div>
    <?php
    $this->view('includes/header1');
    ?>
</div>

<div class="page_content">
    <?php
//    $this->view('includes/supervisornav');
    $this->view('includes/parentemployeenavbar');
    ?>

    <div class="main_container">
        <!--        <div class="details">-->
        <!--            <div class="employee">-->

        <div class="approve-container">
            <div>
                <p class="title">To Be Add</p>
            </div>
            <hr>
            <div class="data">
                <?php
                if (boolval($row)) {
                if (count($row) > 0) {
                foreach ($row

                as $entry) { ?>
                <!-- <form method="post">-->
                <div class="cards">
                    <center>
                        <!-- <img src='<? //echo $entry->profile_image ?>' alt="" class="img"> -->
                        <img src="<?= IMG_PATH ?>profile/Chathuri.png"  alt="" class="img">

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
        <div class="approve-container">
            <div>
                <p class="title">Added List</p>
            </div>
            <hr>
            <table id="claim_history_table">
                <tr>
                    <th><label>
                            <input name="select_all" value="1" type="checkbox">
                        </label></th>
                    <th>Name</th>
                    <th>Designation</th>
                    <th>Last Update</th>
                    <th>Options</th>
                </tr>
                <tr>
                    <td><input type="checkbox" name="name1" /></td>
                    <td>Jack Howei</td>
                    <td>Seller</td>
                    <th>10th Oct</th>
                    <td><a href=""><i class="fas fa-edit"></i></a>
                        <a href=""><i class="fas fa-trash-alt"></i></a>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</div>

<!--<div>-->
<!--    --><?php //$this->view('includes/footer') ?>
<!--</div>-->
</body>
</html>
