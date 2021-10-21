<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= CSS_PATH ?>updatebenefit.css">
    <title></title>
</head>

<body>
<div>
    <?php
    $this->view('includes/header1');
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
        <div>
            <?php
            $this->view('includes/hrofficernav');
            ?>
        </div>
    <?php endif; ?>

    <div class="main_container">
        <div>
            <p class="handling_title">Update Benefits</p>
        </div>

    </div>
</div>

<script>

    function addBox() {
        var temp = document.getElementById("temp").content;
        document.getElementById("btn").appendChild(temp);
    }

    document.getElementById("btn").addEventListener("click", addBox);

</script>
</body>
</html>