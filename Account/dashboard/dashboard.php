<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/style.css" media="all">
    <link rel="stylesheet" href="../../css/responsive_style.css" media="all">
    <script src="../../js/jquery.js"></script>
    <script src="../../js/header_move.js"></script>
    <script src="../../js/ajax.js"></script>
    <title>ACCOUNT</title>
</head>
<body>
<section id="total-div">
<?php require("../nav_units/account_header.php");  ?>

<section class="account-div">

    <div class="open-dash">&#9776;</div>
    <div class="dashboard" data-slide="right">
        <div class="close-dash">&times;</div>
        <div ><a href="../dashboard/dashboard.php" class="active">Dashboard</a></div>
        <div><a href="../order/order.php">Orders</a></div>
        <div><a href="../addresses/addresses.php">Addresses</a></div>
        <div><a href="../pay_mtd/payment_mtd.php">Payment Methods</a></div>
        <div><a href="../acc_det/account_details.php">Account Details</a></div>
        <div><button onclick="if(window.confirm('ARE YOU SURE YOU WANT TO LOG OUT')){window.location='../../enter_account/login.php';}">Logout</button></div>
    </div>

    <div class="content-acc">

        <div>
            <p>Hello <b><?php echo $_SESSION['name'];  ?></b></p>

            <p>From your account dashboard you can view your recent orders, manage your shipping and billing addresses, and edit your password and account details.</p>
    
        </div>
    </div>

</section>


<section class="purchase">
    <div class="thr-purchase-div">
    <div class='snd-inner-thr-purchase-div'>
        <?php require("../dis_item.php"); ?>
    </div>
    </div>
</section>

<?php require("../nav_units/account_footer.php");  ?>
</section>
</body>
</html>