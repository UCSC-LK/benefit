<?php ?>
<html>
<meta charset="UTF-8">
<meta name="viewport"
      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
<link rel="stylesheet" href="<?= CSS_PATH ?>login.css">
<title>Forgot-password</title>

<body>
    <!--<?php
    $selector=$_GET['selector'];
    $validator=$_GET['validator'];
    if(empty($selector||$validator))
    {
        echo "Could not validate your request";
    }
    else
    {
        if(ctype_xdigit($selector)!==false &&ctype_xdigit($validator)!==false)
        {?>-->
            <div class="container">
    <div class="box-a">
        <h3 class="h3">ORACAL FIGHT SOUTION (PVT) LTD</h3>
        <form class="frm"  method="post">
    
            <div class="form1" >
                <input type="hidden" name="selector" value="<?php echo $selector ?>">
                <input type="hidden" name="validator" value="<?php echo $validator ?>">
                <input type="text" class="new1" placeholder="Enter password" name="password" required><br>
                <input type="text" class="new1" placeholder="Reenter password" name="pwd-password" required><br>
            </div>
            <div class="form2">
                <button type="submit" name="reset-password">reset password</button>
            </div>
        </form>
    </div>
</div>

        <?php
    }
    }

    ?>

<div class="footer">
    <p class="ofs">Copyright © 2021 Oracle Freight Solutions | Powered by Oracle Freight Solutions</p>
</div>

</body>
</html>
