<html>
<meta charset="UTF-8">
<meta name="viewport"
      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
<link rel="stylesheet" href="<?= CSS_PATH ?>login.css">
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<body>
<div class="container">
    <div class="box-a">
        <h3 class="h3">ORACAL FIGHT SOUTION (PVT) LTD</h3>
        <form class="frm" action="" method="post">
            <div class="new2" style=" color: red; text-align: center;">
             <?php
        foreach ($errors as $value) {
            // code...
            echo $value; 
        }
        ?>
            </div>
            <div class="form1" style="">
                <label for="uname"></label>
                <input type="text" class="new1" placeholder="Enter UserEmail" name="email" required><br>
            </div>

            <div class="form1" >
                <label for="password"></label>
                <input type="password" class="new1" placeholder="Enter Password" name="password" id="myInput"
                       required><br>
            </div>
             <div class="g-recaptcha" style="margin: 10px 50px;" data-sitekey="6Lc2qbkcAAAAAKbtG3WQneC22v408VLrnmf_4VNW"></div>
            <div class="shw" >
                <input type="checkbox" onclick="myFunction()">Show Password
                <script>
                    function myFunction() {
                        let x = document.getElementById("myInput");
                        if (x.type === "password") {
                            x.type = "text";
                        } else {
                            x.type = "password";
                        }
                    }
                </script>

            </div>
            <div class="form2">
                <button type="submit" value="Login">Login</button>
            </div>
            <label>
                <span class="psw"><a href="<?=PATH?>Login/forgotpassword">Forgot Password</a></span>
            </label>
        </form>
    </div>
</div>
<div class="footer">
    <p class="ofs">Copyright © 2021 Oracle Freight Solutions | Powered by Oracle Freight Solutions</p>
</div>
</body>
</html>