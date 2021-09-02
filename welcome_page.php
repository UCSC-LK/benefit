<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="public/css/welcome_page.css">
    <title>Welcome to OFS</title>
    <link rel="stylesheet" href="public/css/welcome_page.css">
</head>

<style>
    :root {
        --header: #065B7A;
        --grey: #DCDCE0;
    }

    footer {
        position: fixed;
        width: 100%;
        height: 70px;
        background-color: var(--header);
        text-align: center;
        bottom: 0;
    }

    .ofs {
        color: var(--grey);
        font-size: 15px;
        margin: auto;
        padding-top: 25px;
    }
</style>

<body class="background">

<section class="header">
    <div class="content">
        <div class="image">
            <img alt="company logo" src="public/img/logo.png">
        </div>
        <div class="nav-bar">
            <ul>
                <li><a href="https://ofslk.com/">ABOUT</a></li>
                <li><a href="app/views/login.php">LOGIN</a></li>
            </ul>
        </div>
    </div>
</section>

<footer>
    <p class="ofs">Copyright © 2021 Oracle Freight Solutions | Powered by Oracle Freight Solutions</p>
</footer>

</body>
</html>