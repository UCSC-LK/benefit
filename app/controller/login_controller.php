<?php

$users=[
    "chathura"=> "199709",
    "bimsara" =>"199711"
];

error_reporting(E_ALL ^ E_WARNING);
session_start();


if(isset($_POST['user']) && !isset($_SESSION['user'])) {
    if($users[$_POST['user']] == $_POST['password'])
    {
        $_SESSION['user'] =$_POST['user'];
    }

    elseif (!isset($_SESSION['user'])){$failed = true; }
}

if(isset($_SESSION['user'])){
    header("Location: home.php");
    exit();
}
//
//if(isset($failed)){
//        print  "<h3 class='h' style='text-align: center ;margin-top: 100px' >INVALID USER OR PASSWORD<h3>";
//}
