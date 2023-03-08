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
    <div class="dashboard">
        <div class="close-dash">&times;</div>
        <div><a href="../dashboard/dashboard.php">Dashboard</a></div>
        <div><a href="../order/order.php">Orders</a></div>
        <div><a href="../addresses/addresses.php">Addresses</a></div>
        <div><a href="../pay_mtd/payment_mtd.php">Payment Methods</a></div>
        <div class="login"><a href="../acc_det/account_details.php">Account Details</a></div>
        <div><button onclick="if(window.confirm('ARE YOU SURE YOU WANT TO LOG OUT')){window.location='../../enter_account/login.php';}">Logout</button></div>
    </div>

    <div class="content-acc">

        <script src="../../js/account_form.js"></script>
        <div class="acc-det">
            <form id="acc-form" class="acc-form" action="backend_account_details.php" method="post">
                <div class="acc-dit">
                    <div class="acc-dit-inner"></div>
                    <button><a href="account_details.php">OKAY</a></button>
                </div>
            <table>
            
                
                <tr>
                    <td>
                         
                            <div><span>First name*</span><input type="hidden" name="id" value="<?php echo $_SESSION['id']; ?>" readonly required><input type="text" name="fname" id="fname" required></div>
                            <div><span>Last name*</span><input type="text" name="lname" id="lname" required></div>
                    </td>
                </tr>
            
                <tr>
                    <td>
                        <span>Display name*</span><input type="text" name="disname" id="disname" readonly required>
                        <span>This will be how your name will be displayed in the account section and in reviews</span>
                    </td>
                </tr>
            
                <tr>
                    <td> <span>Email address*</span><input type="text" name="email" ></td>
                </tr>

                <tr>
                    <td><span> <h3>Password change</h3></span></td>
                </tr>

                <tr>
                    <td><span>Current password (leave blank to leave unchanged)</span><input type="password" id="cpass" name="cpass" ></td>
                </tr>
           
                <tr>
                    <td><span> New password (leave blank to leave unchanged)</span><input type="password" id="npass" name="npass" ></td>
                </tr>

                <tr>
                    <td><span> Confirm new password</span><input type="password" id="conpass" name="conpass"></td>
                </tr>
    
            </table>
            <button> Save changes</button>

            </form>
        </div>
    </div>

</section>


<section class="purchase">
    <div class='snd-inner-thr-purchase-div'>
        <?php require("../dis_item.php"); ?>
    </div>
</section>

<?php require("../nav_units/account_footer.php");  ?>
</section>
</body>
</html>