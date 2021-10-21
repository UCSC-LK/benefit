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
        <h4><?= Auth::getfirst_name() ?></h4>
    </center>
    <a href="<?=PATH?>AddemployeeController"><i class="far fa-address-book"></i><span>Registration</span></a>
    <a href="<?=PATH?>EmployeelistController"><i class="fas fa-calendar-week"></i></i>
        <span>Remove Employees</span></a>
    <a href="<?=PATH?>Hrdocuments/updatedecuments"><i class="fas fa-edit"></i><span>Update Documents</span></a>
    <a href="<?=PATH?>Benefit/update"><i class="fas fa-user-check"></i><span>Update Benefits</span></a>
</div>

<script>

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


