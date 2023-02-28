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
    <script src="../js/ajax.js"></script>
    <title>CART</title>
</head>
<body>

    <section id="total-div">
   <?php 
        require("../nav_units/account_header.php");
        
        require("../dashboard/class/sel_class.php");
    
        $sel_ob = new SEL();  
    ?>

<section class="cart-section">
    <div class="fst-cart-sec-divs">

        <div class="fst-inner-fcsd">
        <?php
            $sel_cart = $sel_ob->sel_carts();
            if ($sel_cart) {
                while ($row = $sel_cart->fetch_assoc()) {
            
        ?>
            <p>"<?php echo str_replace('-',' ',$row['item_name']); ?>" has been added to your cart</p> 
        <?php  } } ?>
            <span><a href="../index.php" target="blank">Continue shopping</a></span>
        </div>
        <h1>Your Shopping Cart Summary</h1>
        <form class="cartal-form" action="backend_del_all.php" method="post">
            <p class="x-fcsd"><button>Review your cart with 0 items and total N0.00</button></p>
        </form>
    </div>

    <?php
        $sel_cart = $sel_ob->sel_carts();
        if ($sel_cart) {
            while ($row = $sel_cart->fetch_assoc()) {
            
    ?>
    <div class="snd-cart-sec-divs">
        <div class="fst-inner-scsd"><img src="../Accesories/img/<?php echo $row['item_img']; ?>"></div>
       
        <div class="snd-inner-scsd">
            <p><b><?php echo str_replace('-',' ',$row['item_name']); ?></b></p>     
            <p><?php echo 'N'.($row['item_price'])/($row['item_no']); ?></p>
            <span>
                <!-- <script src="../js/numb.js"></script> -->
                    <form class="cart-map-back" action="backend_delup_cart.php" method="post">
                        <input type="hidden" name="id" value="<?php echo $row['id']; ?>" readonly required>
                        <input type="hidden" name="item_id" value="<?php echo $row['item_id']; ?>" readonly required>
                        <input type="hidden" name="price" value="<?php echo ($row['item_price'])/($row['item_no']); ?>" readonly required>
                        <input type="hidden" name="item_no" value="<?php echo $row['item_no']; ?>" readonly required>
                        <div class="ell-btn"><button><img src="../Accesories/img/btn_bk.png"></button></div>
                    </form>
                        <div class="ell-btn-no"><?php echo $row['item_no']; ?></div> 
                    <form class="cart-map-for" action="backend_up_cart.php" method="post">
                        <input type="hidden" name="id" value="<?php echo $row['id']; ?>" readonly required>
                        <input type="hidden" name="item_id" value="<?php echo $row['item_id']; ?>" readonly required>
                        <input type="hidden" name="item_no" value="<?php echo $row['item_no']; ?>" readonly required>
                        <input type="hidden" name="price" value="<?php echo ($row['item_price'])/($row['item_no']); ?>" readonly required>
                        <div class="ell-btn"><button><img src="../Accesories/img/btn_fw.png"></button></div> 
                    </form>                
                
            </span>
            <p><?php echo 'N'.$row['item_price']; ?></p>
            <form class="cart-form" action="backend_dir_cart.php" method="post">
                <input type="hidden" name="id" value="<?php echo $row['item_id']; ?>">
                <p class="x-scsd" title="remove item from cart"><button>&times;</button></p>
            </form>
        </div>

    </div>

    <?php  } } ?>
   

    
    <div class="thr-inner-scsd">
        <button>Update Cart</button>        
    </div>

    <div class="thr-cart-sec-divs">
        <div class="fst-inner-tcsd">
            <p><b>Discount/Promo Code</b><br>Dont have any yet? Check out our discount programs</p>
        </div>

        <form action="" method="post">
        <div class="snd-inner-tcsd">
            
                <input type="text" placeholder="Enter your coupon code here" size="30">
                <button>APPLY</button>
            
        </div>
        </form>
    </div>


    <div class="fth-cart-sec-divs">
        
        <div class="fst-inner-fthcsd">
            <h4>Cart totals</h4>
            <p>Subtotal</p>
        </div>
        <?php
            $sel_cart = $sel_ob->sel_cart_sup();
            if ($sel_cart) {
                while ($dow = $sel_cart->fetch_assoc()) {
                
        ?>
        <div class="snd-inner-fthcsd">
       
            <p>
                <?php  
                    if ($dow['SUM(item_price)'] == "") {
                        echo 'N'.'0.00';
                    }else {
                        $st = str_replace('N','',$dow['SUM(item_price)']);
                        echo 'N'.$st; 
                    }
                    
                ?>
            </p>
        
        </div>

        <div class="thr-inner-fthcsd">
            <h4>Total</h4>
            <p>
                <?php  
                    if ($dow['SUM(item_price)'] == "") {
                        echo 'N'.'0.00';
                    }else {
                        $st = str_replace('N','',$dow['SUM(item_price)']);
                        echo 'N'.$st; 
                    }
                    
                ?>
            </p>
            <p><button>Proceed to checkout</button></p>
        </div>
        <?php } } ?>
       
    </div>
</section>

<?php require("../nav_units/account_footer.php");  ?>

</section>
</body>
</html>