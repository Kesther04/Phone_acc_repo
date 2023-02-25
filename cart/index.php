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
    <title>CART</title>
</head>
<body>
   <?php require("../nav_units/account_header.php");  ?>

<section class="cart-section">
    <div class="fst-cart-sec-divs">

        <div class="fst-inner-fcsd">"Huawei Band 7" has been added to your cart <span><a href="#">Continue shopping</a></span></div>
        <h1>Your Shopping Cart Summary</h1>
        <p>Review your cart with 0 items and total N0.00</p>
    </div>

    <div class="snd-cart-sec-divs">
        <div class="fst-inner-scsd"><img src="../img/hwband.png"></div>
        
        <div class="snd-inner-scsd">
            <p><b>Huawei Band 7</b></p>     
            <p>N44,700.00</p>
            <span>
                <script src="../../js/num.js"></script>
                <div class="ell-btn" onclick="backw()"><img src="../Accesories/img/btn_bk.png" ></div> <div id="ell-btn-no">1</div> <div class="ell-btn" onclick="forw();"><img src="../Accesories/img/btn_fw.png"></div>
            </span>
            <p>N44,700.00</p>
            <p id="x-scsd">&times;</p>
        </div>

    </div>
    
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

        <div class="snd-inner-fthcsd">
            <p>N44,700.00</p>
        </div>

        <div class="thr-inner-fthcsd">
            <h4>Total</h4>
            <p>N44,700.00</p>
            <p><button>Proceed to checkout</button></p>
        </div>
       
    </div>
</section>

<?php require("../nav_units/account_footer.php");  ?>

</body>
</html>