<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= CSS_PATH ?>header1.css">

    <title></title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>

<div class="header1">
            <div class="nav-bar1" id="nav-bar">
                <div class="list1"> <a href="<?=PATH?>home">HOME</a></div>
                <div class="list1"> <a href="<?=PATH?>profile">MY INFO</a></div>
                <div class="list1"> <a href="#">DOCUMENTS</a></div>
                <?php if(Auth::access('Supervisor')||Auth::access('HR Officer')):?>
                <div class="list1"> <a href="#">USER MANAGEMENT(HR)</a></div>
            <?php endif;?>
        </div>
    <!--<nav class="list1">
        <ul>
            <li><a href="<?= PATH ?>Home">Home</a></li>
            <li><a href="<?= PATH ?>leavedetailscontroller">My Info</a></li>
            <li><a href="#">Documents</a></li>
        </ul>
    </nav>-->

    <button type="button" class="icon-button">
        <a href="#">
            <span class="material-icons">notifications</span>
            <span class="icon-button_badge">2</span>
        </a>
    </button>
</div>
</body>
</html>
