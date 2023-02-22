<?php

session_start();
session_destroy();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css" media="all">
    <link rel="stylesheet" href="../css/responsive_style.css" media="all">
    <script src="../js/jquery.js"></script>
    <script src="../js/header_move.js"></script>
    <title>LOGIN</title>
</head>
<body>
    
<?php require("header.php");  ?>

<section class="lr-div">

    <div class="first-lr-div">
        <h1>Sign Up today and you will be able to:</h1>

        <p>Obimi Buyer Protection has you covered from click to delivery. Sign Up or Sign In and you will be able to:</p>

        <ul>
            <li>Speed your way through checkout</li>
            <li>Track your order easily</li>
            <li>Keep a record of all your purchases</li>
            <li>Apply for our affiliate program</li>
        </ul>
    </div>

    
    <div class="snd-lr-div">
        <div class="snd-lr-header">
            <div class="login"><h1><a href="login.php">Login</a></h1></div>
            <div><h1><a href="register.php">Register</a></h1></div>
        </div>
        <form action="backend_login_user.php" method="post">
        <div class="snd-lr-content">
           <?php
            if (isset($_GET['msg'])) {
                echo '<div style=color:red;>'.$_GET['msg'].'</div>';
            }
           ?>
                <p><input type="text" name="uname" placeholder="Username/Email"></p>

                <p>
                    <span id="fp"><a href="#">Forgot Password?</a></span></br>
                    <input type="password" name="pass" placeholder="Password"><br>
                    <input type="checkbox"  name="shp">Keep me logged in
                </p>

                <p><button>Login</button></p>
            
        </div>
        </form>
    </div>
</section>

<?php require("footer.php");  ?>
</body>
</html>