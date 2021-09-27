<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?=CSS_PATH?>header2.css">
    <link rel="stylesheet" href="<?=CSS_PATH?>addperfor.css">
    <title></title>
</head>
<body>
<div>
    <?php
    $this->view('includes/header1');
    ?>
</div>
<div class="profile_container">
        <div class="profile">
            <?php
            $this->view('includes/profile1');
            ?>
        </div>
<div class="content">
<div class="header2">
    <div class="nav-bar2" id="nav-bar">
        <div class="list"><a href="#">Time Off</a></div>
        <div class="list"><a href="<?=PATH?>Reimbursement">Reimbursements</a></div>
        <div class="list"><a href="<?=PATH?>BenefitrequestController">Benefits</a></div>
        <div class="list"><a href="<?=PATH?>Performance">Performance</a></div>
    </div>
</div>
   
    <canvas width="800" height="240" style=" color: red;position: absolute;left: 0px;top: 0px;width: 100%;height: 100%;"></canvas>
</div>
</div>
</body>
</html>










