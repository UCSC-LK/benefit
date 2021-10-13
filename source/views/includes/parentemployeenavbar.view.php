<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?=CSS_PATH?>navigation.css">

    <title></title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>

    <div class="header">
        <div class="nav-bar">
            <ul>
                <?php if(Auth::access('Supervisor')):?>
                <li><a href="<?=PATH?>Supervisor">Approve Reimbursement</a></li>
                <li><a href="<?=PATH?>LeaveapproveController">Approve Leave</a></li>
                <li><a href="<?= PATH ?>Supervisor/Performance">Add Performance</a></li>
                <li><a href="<?=PATH ?>Markattendance">Mark Attendance</a></li>
                <?php endif;?>
            </ul>
        </div>
    </div>
</body>

</html>