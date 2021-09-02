
<?php

session_start();
if(!isset($_SESSION['user'])){
    header("Location:login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="../../public/css/home.css">
</head>

<body>
<div>
    <?php require_once 'header1.php'
    ?>
</div>
<div class="row">
    <div class="row-1">
        <div class="column1">
            <div class="card">
                <h2>Financial Branch</h2>
                <p>Manger: Mr.Aruna</p>
                <p>Employee: 50</p>
            </div>
        </div>
        <div class="column2">
            <div class="card">
                <h2><b>HRM Branch</b></h2>
                <p>Manger: Mr.Silva</p>
                <p>Employee: 50</p>
            </div>
        </div>
    </div>

    <div class="row-2">
        <div class="column1">
            <div class="card">
                <h2>Operational Branch</h2>
                <p>Manger: Mr.Chathura</p>
                <p>Employee: 50</p>
            </div>
        </div>
        <div class="column2">
            <div class="card">
                <h2>Selling Branch</h2>
                <p>Manger: Mr.Bimsara</p>
                <p>Employee: 50</p>
            </div>
        </div>
    </div>
</div>

<div>
    <?php require_once 'footer.php'
    ?>
</div>
    
</body>   
</html>
