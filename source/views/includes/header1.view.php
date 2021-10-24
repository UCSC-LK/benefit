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
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
</head>
<body>

<div class="header1" id="myHeader">
    <!--    <div class="ofs">-->
    <!--        OFS-->
    <!--    </div>-->

    <nav class="list1">
        <ul>
            <li><a href="<?= PATH ?>Home">Home</a></li>
            <li><a href="<?= PATH ?>leavedetailscontroller">My Info</a></li>
            <li><a href="<?= PATH ?>hrdocuments">Documents</a></li>
            <li><a href="<?= PATH ?>Hierarchy">Hierarchy</a></li>

            <?php if (Auth::access('Supervisor')): ?>
                <li><a href="<?= PATH ?>Approvereimbursement">USER MANAGEMENT</a></li>
            <?php endif; ?>
            <?php if (Auth::access('HR Manager')): ?>
                <li><a href="<?= PATH ?>EmployeelistController">USER MANAGEMENT</a></li>
            <?php endif; ?>
            <?php if (Auth::access('HR Officer')): ?>
                <li><a href="<?= PATH ?>AddemployeeController">USER MANAGEMENT</a></li>
            <?php endif; ?>
            <!-- <a>
                <span class="material-icons">notifications</span>
            </a>
            <span class=logged_name></span>
        </ul> -->
    </nav>
    
    <div class="notification">
        <a>
                <span class="material-icons">notifications</span>
            </a>
    </div>
    <div class="logged_name">
         <span class=log_name><?= Auth::getfirst_name() ?></span>

        </div>

    <div class="dd_main">
        <button type="button" class="icon-button">
            <a>
                <i class="fas fa-user"></i>
                <!-- <span class="icon-button_badge">2</span> -->
            </a>

            <div class="dd_menu">
                <div class="dd_left">
                    <ul>
                        <li><a href="<?= PATH ?>leavedetailscontroller"> <i class="fa fa-user" aria-hidden="true"></i>
                            </a></li>
                        <!-- <li></li> -->
                        <li><a href="<?= PATH ?>Logout"> <i class="fas fa-sign-out-alt"> </i></a></li>
                    </ul>
                </div>
                <div class="dd_right">
                    <ul>
                        <li><a href="<?= PATH ?>leavedetailscontroller">My Info </a></li>
                        <li><a href="<?= PATH ?>Logout">Log Out </a></li>
                    </ul>
                </div>
            </div>
        </button>
    </div>
</div>
<script>

    // window.onscroll = function () {
    //     myFunction();
    // }
    //
    // var header = document.getElementById("myHeader");
    // var sticky = header.offsetTop;
    //
    // function myFunction() {
    //     if (window.pageYOffset > sticky) {
    //         header.classList.add("sticky");
    //     } else {
    //         header.classList.remove("sticky");
    //     }
    // }

    var dd_main = document.querySelector(".dd_main");

    dd_main.addEventListener("click", function () {
        this.classList.toggle("active");
    })
</script>
</body>
</html>
