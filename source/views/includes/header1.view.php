<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?=CSS_PATH?>header1.css">
    
    <title></title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>

<div class="header">
    <div class="nav-bar">
        <ul>
            <li><a href="<?=PATH?>home">HOME</a></li>
            <li><a href="<?=PATH?>profile">MY INFO</a></li>
            <li><a href="#">DOCUMENTS</a></li>
            <?php if(Auth::access('Supervisor')):?>
            <li><a href="#">USER MANAGEMENT(HR)</a></li>
             <?php endif;?>
        </ul>
    </div>
    <button type="button" class="icon-button">
        <a href="#">
            <span class="material-icons">notifications</span>
            <span class="icon-button_badge">2</span>
        </a>
    </button>
</div>
</body>
</html>
