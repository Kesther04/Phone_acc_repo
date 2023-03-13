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
    <script src="../../js/dash.js"></script>
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
        <div class="login"><a href="../pay_mtd/payment_mtd.php">Payment Methods</a></div>
        <div><a href="../acc_det/account_details.php">Account Details</a></div>
        <div><button onclick="if(window.confirm('ARE YOU SURE YOU WANT TO LOG OUT')){window.location='../../enter_account/login.php';}">Logout</button></div>
    </div>

    <div class="content-acc">

        <div class="pay-mtd">
            
            <div>
                <button class="onl-trans">Online Payment</button> 
            </div>

            <div class="inner-pay-mtd onl-pay">
                <?php  
                    $sel_cscon = $sel_ob->sel_carts($sess);
                    if ($sel_cscon) { 
                        
                        if($sel_cscon->fetch_assoc()){
                ?>

                    <div class="inner-pay-onl">
                        <form class="paykl" action="backend_pay_mtd.php" method="post">
                        <h1>Payment</h1>
                        <table>
                            <tr>
                                <td>
                                    <?php  
                                        $sel_coson = $sel_ob->sel_cart_sup($sess);
                                        if ($sel_coson) {
                                            $now = $sel_coson->fetch_assoc();
                                    ?>       
                                    
                                    <span>Amount:</span>
                                    <span class="pay-naira">N</span><input type="number" name="amt" value="<?php echo $now['SUM(item_price)']; ?>" required readonly>
                                    <?php } ?>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <span>Date:</span><input type="text" name="date"  required>
                                </td>
                                <td>
                                    <span>CSV:</span><input type="number" name="csv" required>
                                    <input type="hidden" name="userid" value="<?php echo $_SESSION['id'];?>" required readonly>
                                </td>
                            </tr>
                        
                        </table>
                    
                        <div class="pay-btn">
                            <button>PAY</button>
                        </div>
                    
                        </form>
                    </div>
                    
                <?php }else{ ?>

                    <div class='inner-pay-onl'>
                        <h1>No Item Added to Cart</h1>
                    </div>

                <?php } ?>
                <?php } ?>
            </div>

            <div>
                <button class="bnk-trans">Bank Transfer</button> 
            </div>

            <div class="inner-pay-mtd bnk-pay">
                <div class="inner-pay-onl">
                    <form action="" method="post">

                    </form>
                </div>
            </div>
    
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