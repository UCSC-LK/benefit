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

<li class="header1">
    <nav class="list1">
        <ul>
            <li><a href="<?= PATH ?>Home">Home</a></li>
            <li><a href="<?= PATH ?>leavedetailscontroller">My Info</a></li>
            <li><a href="<?=PATH?>hrdocuments">Documents</a></li>
            <li><a href="<?=PATH?>Hierarchy">Hierarchy</a></li>

            <?php if(Auth::access('Supervisor')):?>
                <li><a href="<?=PATH?>Approvereimbursement">USER MANAGEMENT(HR)</a></li>
                <?php endif;?>
            <?php if(Auth::access('HR Manager')):?>
                <li><a href="<?=PATH?>EmployeelistController">USER MANAGEMENT(HR)</a></li>
            <?php endif;?>
            <?php if(Auth::access('HR Officer')):?>
                <li><a href="<?=PATH?>AddemployeeController">USER MANAGEMENT(HR)</a></li>
            <?php endif;?>
        </ul>
    </nav>

    <button type="button" class="icon-button">
        <a href="#">
            <span class="material-icons">notifications</span>
            <span class="icon-button_badge">2</span>
        </a>
    </button>
</div>
</body>
</html>