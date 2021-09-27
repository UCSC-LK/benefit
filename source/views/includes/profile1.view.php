<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="<?=CSS_PATH?>profile1.css">
    <title></title>
</head>
<body>
<div>
            <img src="<?=Auth::getprofile_image()?>" alt="Profile Image" class="profile__image">
            <div class="name"><?=Auth::getfirst_name()?></div>
            <div class="job"><?=Auth::getuser_role()?></div>
            <div class="contact">
                <i class="material-icons1"><?=Auth::getcontact_number()?></i>
            </div>
            <div class="email">
                <i class="material-icons">email</i><?=Auth::getemail()?>
            </div>
            <div class="hire">Hired Date</div>
            <div class="date">27th Aug 2019</div>
            <div class="address">No 22, ABD Rd, Galle</div>
            <div class="supervisor">
                <i class="material-icons">supervisor_account</i>Mr.Dilukshan
            </div>
</div>
</body>
</html>



