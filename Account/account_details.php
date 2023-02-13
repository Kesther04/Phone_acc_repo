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
        <div><a href="payment_mtd.php">Payment Methods</a></div>
        <div class="login"><a href="account_details.php">Account Details</a></div>
        <div><button onclick="if(window.confirm('ARE YOU SURE YOU WANT TO LOG OUT')){window.location='../enter_account/login.php';}">Logout</button></div>
    </div>

    <div class="content-acc">

        <div class="acc-det">
            <form action="" method="post">
            <table>
            
                <tr>
                    <td>
                         
                            <div><span>First name*</span><input type="text" name="fname"></div>
                            <div><span>Last name*</span><input type="text" name="lname"></div>
                    </td>
                </tr>
            
                <tr>
                    <td>
                        <span>Display name*</span><input type="text" name="disname">
                        <span>This will be how your name will be displayed in the account section and in reviews</span>
                    </td>
                </tr>
            
                <tr>
                    <td> <span>Email address*</span><input type="text" name="email"></td>
                </tr>

                <tr>
                    <td><span> <h3>Password change</h3></span></td>
                </tr>

                <tr>
                    <td><span>Current password (leave blank to leave unchanged)</span><input type="text" name="cpass"></td>
                </tr>
           
                <tr>
                    <td><span> New password (leave blank to leave unchanged)</span><input type="text" name="npass"></td>
                </tr>

                <tr>
                    <td><span> Confirm new password</span><input type="text" name="conpass" ></td>
                </tr>
    
            </table>
            <button> Save changes</button>

            </form>
        </div>
    </div>

</section>


<?php require("../nav_units/account_footer.php");  ?>
</body>
</html>