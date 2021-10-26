<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= CSS_PATH ?>updatedocuments.css">

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
        <?php
//        $this->view('includes/hrnav');
        $this->view('includes/hrmanagernavbar');
        ?>
    <?php endif; ?>

    <?php if (Auth::access('HR Officer')): ?>
        <?php
//        $this->view('includes/hrofficernav');
        $this->view('includes/hrofficernavbar');
        ?>
    <?php endif; ?>

    <div class="main_container">
    <div class="benefit_head">
    <fieldset>
                <legend>UPDATE DOCUMENTS</legend>
               
                <form name="myform" action="#" method="POST">
                <div class="row">
                        <div class="column_1">
                            <label for="d_name">Document Name</label>
                        </div>
                        <div class="column_2">
                            <input type="text" id="d_name" name="d_name" required>
                        </div>
                </div>

                <div class="row">
                        <div class="column_1">
                            <label for="d_submission">Upload Document</label>
                        </div>
                        <div class="d_submission">
                            <input type="file" id="d_submission" name="d_submission" accept=".doc" required>
                        </div>
                    </div>
                    <div class="d_button">
                        <input type="submit" value="Update" name="submit">
                        <a href="<?= PATH ?>Hrdocuments/updatedecuments">
                            <input class="cancle_button" type="button" value="Cancel"></a>

                    </div>

                </form>

    </fieldset>
    </div> 
</div>
</div>


</body>

</html>