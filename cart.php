<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css" media="all">
    <link rel="stylesheet" href="css/responsive_style.css" media="all">
    <script src="js/jquery.js"></script>
    <script src="js/header_move.js"></script>
    <title>CART</title>
</head>
<body>
    
<header>
  <div class="logo-div"><img src="img/logo.png" ></div>
  <div class="open-div">&#9776;</div>
  <div class="header-unit">
    <div class="close-div">&times;</div>
    <div><button>Categories<span class="imgcat"><img src="img/bt_arrow.png"></span></button></div>
    <div class="header-input"> <input type="text" placeholder="What do you want to buy?"><span class="imgcat"><img src="img/search.png"></span></div>
    <div><img src="img/shpp.png"></div>
    <div><img src="img/heart.png"></div>
    <div><button><a href="Account/dashboard.php">My account</a></button></div>
  </div>
</header>

<section class="cart-section">
    <div class="fst-cart-sec-divs">

        <div class="fst-inner-fcsd">"Huawei Band 7" has been added to your cart <span><a href="#">Continue shopping</a></span></div>
        <h1>Your Shopping Cart Summary</h1>
        <p>Review your cart with 0 items and total N0.00</p>
    </div>

    <div class="snd-cart-sec-divs">
        <div class="fst-inner-scsd"><img src="img/hwband.png"></div>
        
        <div class="snd-inner-scsd">
            <p><b>Huawei Band 7</b></p>     
            <p>N44,700.00</p>
            <span>
                <script src="js/num.js"></script>
                <div class="ell-btn" onclick="backw()"><img src="Accesories/img/btn_bk.png" ></div> <div id="ell-btn-no">1</div> <div class="ell-btn" onclick="forw();"><img src="Accesories/img/btn_fw.png"></div>
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


<section class="thr-sec-div">

<div class="fth-snd">
  
  <div class="inner-fth-snd">
    <img src="img/1i.png">
    <p>100% Payment Secured</p>
  </div>
  
  <div class="inner-fth-snd">
    <img src="img/2i.png" >
    <p>Supports lots of payments</p>
  </div>
  
  <div class="inner-fth-snd">
    <img src="img/3i.png">
    <p>24hours/7days Support</p>
  </div>

  <div class="inner-fth-snd">
    <img src="img/4i.png">
    <p>Best price Guaranteed</p>
  </div>

  <div class="inner-fth-snd">
    <img src="img/5i.png">
    <p>Mobile apps ready</p>
  </div>
</div>

</section>

<section class="last-sec-div">
<div class="fst-last">
  
  <div class="logo-div"><img src="img/logo.png" ></div>
  <div class="inner-fst-last">
    <p>Online store - Shop for Mobile Phones Accessories</p>
  </div>
  
  <div class="inner-fst-last">
    Follow us on:
    <a href=""><div><img src="img/book.png"><img src="img/face.png" class="sm-link"></div></a>
    <a href=""><div><img src="img/gram.png"><img src="img/insta.png" class="sm-link"></div></a>
    <a href=""><div><img src="img/tter.png"><img src="img/twi.png" class="sm-link"></div></a>
    <a href=""><div><img src="img/in (1).png"><img src="img/in (2).png" class="sm-link"></div></a>
    <a href=""><div><img src="img/what (1).png"><img src="img/what (2).png" class="sm-link"></div></a>
  </div>
</div>

<div class="snd-last">
  <div class="inner-snd-last">
    <h4>Get to know us</h4>
    <p>About Us</p>
    <p>Blog</p>
    <p>Our Locations</p>

    <h4>Let Us Help You</h4>
    <p>My Orders</p>
    <p>My Wishlist</p>
    <p>Trade in or Cash Back</p>
  </div>
  <div class="inner-snd-last">
    <br>
    <p>Service Center</p>
    <p>Privacy Policy</p>
    <br>
    <p>Return Policy</p>
    <p>Pay on Delivery</p>
    <br>
  </div>
  <div class="inner-snd-last">
    <h4>Top Pages</h4>
    <p>Screen guards</p>
    <p>Phone cases</p>
    <p>Power banks</p>
    <p>Headphones</p>
    <p>Earpods</p>
  </div>
  <div class="lit-inner-snd-last">
    <p>Games and Console</p>
  </div>
  <div class="big-inner-snd-last">
    <h4>Product Search:</h4>
    <div class="footer-input"> <input type="text" placeholder="What do you want to buy?"></div>
    <h4>Product Viewed</h4>
    <div class="footer-img">
      <span class="img-prod"><img src="img/hwband.png"></span>
      <span class="img-prod"><img src="img/mtn.png"></span>
    </div>
  </div>
</div>

</section>

<footer>Copyright &copy; 2023 Obimi Technologies - All Rights Reserved</footer>


</body>
</html>