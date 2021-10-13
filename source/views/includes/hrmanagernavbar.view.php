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
            <?php if(Auth::access('HR Manager')):?>
                <li><a href="<?=PATH?>EmployeelistController">Update Employee Details</a></li>
                <li><a href="#">Approve Benefits</a></li>
                <li><a href="#">Approve Leaves</a></li>
                <li><a href="#">Update Documents</a></li>
                <li><a href="#">Update Benefits</a></li>
                <?php endif;?>
            </ul>

        </div>
    </div>
</body>

</html>