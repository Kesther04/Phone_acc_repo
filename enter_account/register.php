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
    <title>REGISTER</title>
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
            <div><h1><a href="login.php">Login</a></h1></div>
            <div class="login"><h1><a href="register.php">Register</a></h1></div>
        </div>
        <form action="backend_reg_user.php" method="post">
        <div class="snd-lr-content">
           
                <p><input type="text" name="uname" placeholder="Username"></p>

                <p><input type="text" name="email" placeholder="E-mail address"></p>

                <p><input type="password" name="pass" placeholder="Password"></p>

                <input type="hidden" name="badd" required readonly>
                <input type="hidden" name="shpadd" required readonly>
                <p><button>Register</button></p>
            
        </div>
        </form>
    </div>
</section>

<?php require("footer.php");  ?>
</body>
</html>