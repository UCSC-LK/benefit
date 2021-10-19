<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= CSS_PATH ?>updatebenefit.css">
    <link rel="stylesheet" href="<?= CSS_PATH ?>header1.css">
    <link rel="stylesheet" href="<?= CSS_PATH ?>footer.css">

    <title></title>
</head>
<body>
<div>
    <?php
    $this->view('includes/header1')
    ?>
</div>

<div class="page_content">

    <?php if (Auth::access('HR Manager')): ?>
    <div>
        <?php
        $this->view('includes/hrnav');
        ?>
    </div>
    <?php endif; ?>

    <?php if (Auth::access('HR Officer')): ?>
        <?php
        $this->view('includes/hrofficernavbar');
        ?>
    <?php endif; ?>

    <div class="main_container">
        <div class="update_head">
            Update Benefits
        </div>
        <form action="" method="post">
            <div class="update_container">

                <div class="row">
                    <div class="col_1">
                        <label for="benefit_type">Benefit Type</label>
                    </div>
                    <div class="col_2">
                        <!--                <select id="benefit_type" name="benefit_type">-->
                        <!--                    <option>Medical Benefit</option>-->
                        <!--                    <option>Life Benefit</option>-->
                        <!--                    <option>Accident Benefit</option>-->
                        <input type="text" id="benefit_type" name="benefit_type">
                    </div>
                </div>

                <div class="row">
                    <div class="col_1">
                        <label for="max_amount">Maximum Amount</label>
                    </div>
                    <div class="col_2">
                        <input type="text" id="max_amount" name="max_amount">
                    </div>
                </div>

                <div class="row">
                    <div class="col_1">
                        <label for="valid_duration">Valid Duration</label>
                    </div>
                    <div class="col_3">
                        <input type="text" id="valid_years" name="valid_rears" placeholder="Years">
                        <input type="text" id="valid_months" name="valid_months" placeholder="Months">
                    </div>
                </div>

            </div>

            <div class="buttons">
                <input class="delete_button" type="submit" value="Remove" name="remove">
                <input class="update_button" type="submit" value="Update" name="update">
            </div>

        </form>
    </div>
</div>

<!--<div>-->
<!--    --><?php
//    $this->view('includes/footer')
//    ?>
<!---->
<!--</div>-->

</body>
</html>



