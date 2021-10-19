<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= CSS_PATH ?>hrnav.css">

    <title>Handle Reimbursements</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>

<input type="checkbox" id="check">
<label for="check">
    <i class="fas fa-bars" id="sidebar_btn"></i>
</label>

<div class="side_bar" id="mySide">
    <center>
        <img scr="<?= IMG_PATH ?>profile/Chathura.jpeg" class="profile_image" atl="">
        <h4>Sathya</h4>
    </center>
    <a href="<?= PATH ?>Supervisor"><i class="fas fa-coins"></i><span>Handle Reimbursements</span></a>
    <a href="<?= PATH ?>LeaveapproveController"><i class="fas fa-calendar-week"></i></i>
        <span>Handle Time Offs</span></a>
    <a href="<?= PATH ?>Supervisor/Performance"><i class="fas fa-edit"></i><span>Handle Performance</span></a>
    <a href="<?= PATH ?>Markattendance"><i class="fas fa-user-check"></i><span>Mark Attendance</span></a>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script type="text/javascript">


    window.onscroll = function () {
        myFunction();
    }

    var header = document.getElementById("mySide");
    var sticky = header.offsetTop;

    function myFunction() {
        if (window.pageYOffset > sticky) {
            header.classList.add("sticky");
        } else {
            header.classList.remove("sticky");
        }
    }

</script>

</body>

</html>

