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
    <title>ACCOUNT</title>
</head>
<body>

<?php require("../nav_units/account_header.php");  ?>

<section class="account-div">

    <div class="open-dash">&#9776;</div>
    <div class="dashboard">
        <div class="close-dash">&times;</div>
        <div><a href="dashboard.php">Dashboard</a></div>
        <div><a href="order.php">Orders</a></div>
        <div><a href="addresses.php">Addresses</a></div>
        <div class="login"><a href="payment_mtd.php">Payment Methods</a></div>
        <div><a href="account_details.php">Account Details</a></div>
        <div><button onclick="if(window.confirm('ARE YOU SURE YOU WANT TO LOG OUT')){window.location='../enter_account/login.php';}">Logout</button></div>
    </div>

    <div class="content-acc">

        <div class="pay-mtd">
            <div class="saved-payments">
            No saved method found.
            </div>
            
            <div>
                <button><a href="#">Add Payment Method</a></button> 
            </div>

    
        </div>
    </div>

</section>

<?php require("../nav_units/account_footer.php");  ?>
</body>
</html>