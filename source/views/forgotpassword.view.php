<?php ?>
<html>
<meta charset="UTF-8">
<meta name="viewport"
      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
<link rel="stylesheet" href="<?= CSS_PATH ?>login.css">
<title>Forgot-password</title>

<body>
<div class="big-img"></div>
<div class="container">
    <div class="box-a">
        <h2 class="h2">ORACLE FREIGHT SOLUTIONS</h2>
        <form class="frm" action="" method="post">
    
            <div class="form1" >
                <label for="uname"></label>
                <input type="text" class="new1" placeholder="Enter UserEmail" name="email" required><br>
            </div>
            <div class="form2">
                <button type="submit" name="reset-req">Reset Password</button>
            </div>
        </form>
        <div class="check-email" style="text-align: center; color: white; font-size: 15px">
        <?php
            if(isset($_GET['reset']))
            {
                if($_GET['reset']=="success")
                {
                    echo '<p>Check your e-mail</p> ';
                }

            }

        ?>
    </div>
    </div>
</div>
<div class="footer">
    <p class="ofs">Copyright © 2021 Oracle Freight Solutions | Powered by Oracle Freight Solutions</p>
</div>

</body>
</html>
