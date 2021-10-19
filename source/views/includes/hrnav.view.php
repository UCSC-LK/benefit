<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= CSS_PATH ?>hrnav.css">

    <title></title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>

<input type="checkbox" id="check">
<label for="check">
    <i class="fas fa-bars" id="sidebar_btn"></i>
</label>

<div class="side_bar">
    <center>
        <img scr="<?= IMG_PATH ?>profile/Chathura.jpeg" class="profile_image" atl="">
        <h4>Sathya</h4>
    </center>
    <a href="<?= PATH ?>EmployeelistController"><i class="fas fa-user-edit"></i><span>Update Employees</span></a>
    <a href="<?= PATH ?>LeaveapproveController"><i class="fas fa-calendar-week"></i></i><span>Handle Time Offs</span></a>
    <a href="<?= PATH ?>Hrdocuments/updatedecuments"><i class="fas fa-edit"></i><span>Handle Documents</span></a>
    <a href="<?= PATH ?>Approvebenefit"><i class="fab fa-gratipay"></i><span>Handle Benefits</span></a>
    <a href="<?= PATH ?>Benefit/update"><i class="fas fa-address-card"></i><span>Benefit Settings</span></a>
    <a href="<?= PATH ?>Reporting"><i class="fas fa-chart-line"></i><span>Reports</span></a>
</div>


</body>

</html>
