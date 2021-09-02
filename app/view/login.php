<html>
<meta charset="UTF-8">
<meta name="viewport"
      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
<link rel="stylesheet" href="../../public/css/login.css">
<body>
<div class="container">
    <div class="box-a">
        <h2 class="h2">ORACAL FIGHT SOUTION(Pvt)Ltd</h2>
    <?php
error_reporting(E_ALL ^ E_WARNING);
require "../controller/login_controller.php";
if (isset($failed)) {
    print  "<h4 class='h' style='' >INVALID USER OR PASSWORD</h4>";
}
?>
        <form class="frm" action="" method="post">
            <div class="form1">
                <label for="uname"></label>
                <input type="text" class="new1" placeholder="Enter UserEmail" name="user" required><br>
            </div>

            <div class="form1">
                <label for="password"></label>
                <input type="password" class="new1" placeholder="Enter Password" name="password" id="myInput"
                       required><br>
            </div>
            <div class="shw">
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
                <span class="psw">Forgot <a href="#">password?</a></span>
            </label>
        </form>
    </div>
</div>

<div>
    <?php
    include('footer.php');
    ?>
</div>
</body>
</html>
