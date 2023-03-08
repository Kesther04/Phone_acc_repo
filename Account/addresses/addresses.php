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
    <script src="../../js/dash.js"></script>
    <script src="../../js/ajax.js"></script>
    <title>ACCOUNT</title>
</head>
<body>

<?php require("../nav_units/account_header.php");  ?>

<section class="account-div">
    
<div class="open-dash">&#9776;</div>
    <div class="dashboard">
        <div class="close-dash">&times;</div>
        <div><a href="../dashboard/dashboard.php">Dashboard</a></div>
        <div><a href="../order/order.php">Orders</a></div>
        <div class="login"><a href="../addresses/addresses.php">Addresses</a></div>
        <div><a href="../pay_mtd/payment_mtd.php">Payment Methods</a></div>
        <div><a href="../acc_det/account_details.php">Account Details</a></div>
        <div><button onclick="if(window.confirm('ARE YOU SURE YOU WANT TO LOG OUT')){window.location='../../enter_account/login.php';}">Logout</button></div>
    </div>

    <div class="content-acc">

        <div class="address">
            <div class="acc-dit">
                    <div class="acc-dit-inner"></div>
                    <button><a href="addresses.php">OKAY</a></button>
            </div>
            <p>The following addresses will be used on the checkout page by default.</p>
            
            <div class="list-adds">
            <div>
                <h4>Billing address</h4>
                <?php
                    
                    $id = $_SESSION['id'];
                    $sel_con = $sel_ob->sel_acc_chg($id);
                    if ($sel_con) {
                        $row = $sel_con->fetch_assoc();
                        $b_add = $row['b_add'];
                    if ($b_add == "") { ?>
                       <p>You have not set up this type of address yet</p> 
                <?php
                    }else {
                        echo '<p>'.$b_add.'</p>';
                    }
                ?>
                    

                <?php } ?>
                
                <button id="sh-bil">Add</button>

                <div class="list-adds-inner bil">
                    <form class="add-form" action="backend_adds.php" method="post">
                        <p>
                            <input type="hidden" name="id" value="<?php echo $_SESSION['id'];  ?>" readonly required>
                            <input type="hidden" name="shpadd" readonly required>
                            <input type="text" name="badd"  placeholder="Enter Your New Billing Address" required>
                        </p>
                        <p><button >ADD</button></p>
                    </form>
                </div>
            </div>
            
            <div>
                <h4>Shipping address</h4>
                <?php
                    
                    $id = $_SESSION['id'];
                    $sel_con = $sel_ob->sel_acc_chg($id);
                    if ($sel_con) {
                        $row = $sel_con->fetch_assoc();
                        $shp_add = $row['shp_add'];
                    if ($shp_add == "") { ?>
                       <p>You have not set up this type of address yet</p> 
                <?php
                    }else {
                        echo '<p>'.$shp_add.'</p>';
                    }
                ?>
                    

                <?php } ?>
                
                <button id="sh-shp">Add</button> 

                <div class="list-adds-inner shp">
                    <form class="add-form" action="backend_adds.php" method="post">
                        <p>
                            <input type="hidden" name="id" value="<?php echo $_SESSION['id'];  ?>" readonly required>
                            <input type="hidden" name="badd" readonly required>
                            <input type="text" name="shpadd" placeholder="Enter Your New Shipping Address" required>
                        </p>
                        <p><button >ADD</button></p>
                    </form>
                </div>
            </div>
            </div>

    
        </div>
    </div>

</section>


<?php require("../nav_units/account_footer.php");  ?>
</body>
</html>