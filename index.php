<?php require('session.php'); ?>
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
    <script src="js/slideshow.js"></script>
    <script src="js/ajax.js"></script>
    <title>OBIMI</title>
</head>
<body>
<section id="total-div">
<?php
  $sess = $_SESSION['USER']; 
  require("nav_units/header.php");
  require("auto_cart_del.php");

?>

<section class="first-sec-div">
  <?php
    
    $sel_con = $sel_ob->sel_nselup_gp();
  
    if ($sel_con) {

      while ($row = $sel_con->fetch_assoc()) {
        $avn =  str_replace('_',' ',$row['item_group']);
  ?>
        <a href="Accesories/<?php echo $row['item_group'];  ?>"><div><?php echo $avn; ?></div></a>

  <?php  } } ?>
  
</section>

   
<section class="after-fs-div">
  <div class="container">
                
    <img src="img/3ar.png" width="60" class="prev" alt="Prev">
    <img src="img/5ar.png" width="68" class="next" alt="Next">
                        
      <div class="img-container">
        <img src="img/pci.png" class="active" id="first">
        <img src="img/hwband.png">
        <img src="img/erpods.png">
        <img src="img/mtn.png" >
        <img src="img/whd.png">
        <img src="img/ppp.png">
        <img src="img/3a.png">
        <img src="img/boombox.png" id="last">
      </div>
        
  </div>

  <div class="fst-snd">
      <h1>Looking for Mobile Phone  Accessories in Nigeria?</h1>
      <p>Buy Mobile Phones Accessories online from OBIMI</p>
      <div class="fst-snd-content">  
        Discover a wide range of Mobile Phones Accessories online at OBIMI, mobile phones are becoming such an integral part of our lives and we need all the protective phone accessories that will protect and keep them looking new and fresh always. Help yourself to a variety of essential phone accessories available at the OBIMI store that include reliable and powerful power banks that offers you longer phone talk time and time spent on the internet in the absence of power.
      </div>
  </div>
</section>
<section class="snd-sec-div">
  
  <div class="snd-snd">
  <?php 
    
    $sel_con = $sel_ob->sel_nsel();
  
    if ($sel_con) {
    
    while ($row = $sel_con->fetch_assoc()) {
      $pana = $row['item_name'];
      $sess = $_SESSION['USER'];
  ?>
    <div class="inner-snd-snd">
      <div class="inner-snd-snd-img">

        <?php  
        if ($row['dis_perc'] > 0) { ?>
        
        
        <span>
          <p><?php echo $row['dis_perc']; ?>%</p>
          <img src="img/orgcircle">
        </span>


       <?php }else { echo ""; } ?>

       <div class="dis-like" id="disli"><?php echo $liket = $row['likes']; ?></div>

        <?php 
          $sel_lk_tb = $sel_ob->sel_pt_lk_tb($pana,$sess);
          if ($sel_lk_tb->num_rows>0) { 
        ?>
        <form class='ddl' action='like/dellike.php' method='post'> 
          <input type='hidden'  name='pt' value='<?php echo $row['item_name']; ?>' required>
          <input type='hidden' name='pid' value='<?php echo $row['id']; ?>' required>
          <input type='hidden' name='psess' value='<?php echo $_SESSION['USER']; ?>' required>
          <button class='liked-btn' ><img src="img/redhrt.png" class="hrt"></button>
        </form> 
        <?php }else { ?>
          <form class='adl' action='like/addlike.php' method='post'> 
            <input type='hidden'  name='pt' value='<?php echo $row['item_name']; ?>' required>
            <input type='hidden' name='pid' value='<?php echo $row['id']; ?>' required>
            <input type='hidden' name='psess' value='<?php echo $_SESSION['USER']; ?>' required>
            <button class='like-btn'><img src="img/blhrt.png" class="hrt"></button>
          </form>
        <?php } ?>
       
       
        <a href="Accesories/<?php echo $row['item_group'].'/'.$row['item_name']; ?>"><img src="Accesories/img/<?php echo $row['item_img']; ?>" class="main-img"></a>
      </div>
      <div class="inner-snd-snd-dis">
        <h3>
          <?php 
            $row['item_name']; 
            $iname = str_replace('-',' ',$row['item_name']);
            
          ?>
           <a href="Accesories/<?php echo $row['item_group'].'/'.$row['item_name']; ?>"><?php echo $iname; ?></a>
        </h3>
        <?php  
        if ($row['dis_perc'] > 0) { ?>
        
        
        <p>
          <span><?php echo $row['item_price'];?></span>
          <?php
          $prcal = str_replace('N','',$row['item_price']);
          $pren = $row['dis_perc'];
          $sol = $prcal -(($pren/100)*$prcal);

          echo 'N'.$sol;
          ?>
        </p>

        
          <form class="cart-form" action="cart/backend_cart.php" method="post">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>" required readonly>
            <input type="hidden" name="no" value="1" required readonly>
            <input type="hidden" name="iname" value="<?php echo $row['item_name']; ?>" required readonly>
            <input type="hidden" name="img" value="<?php echo $row['item_img']; ?>" required readonly>
            <input type="hidden" name="iprice" value="<?php echo $sol; ?>" required readonly>
            <input type="hidden" name="sess" value="<?php echo $_SESSION['USER']; ?>" required readonly>
            <?php   
              $id = $row['id'];
              $sess = $_SESSION['USER'];
            ?>
            <?php
            $sel_cart = $sel_ob->sel_cart_id($id,$sess);
            if ($sel_cart->num_rows > 0) {
              $dow = $sel_cart->fetch_assoc();
            ?>
          </form>
          <div class="comb-ctd-div">
            <form class="cart-map-back" action="cart/backend_delup_cart.php" method="post">
            <input type="hidden" name="id" value="<?php echo $dow['id']; ?>" readonly required>
            <input type="hidden" name="item_id" value="<?php echo $dow['item_id']; ?>" readonly required>
            <input type="hidden" name="price" value="<?php echo ($dow['item_price'])/($dow['item_no']); ?>" readonly required>
            <input type="hidden" name="item_no" value="<?php echo $dow['item_no']; ?>" readonly required>
            <input type="hidden" name="sess" value="<?php echo $sess; ?>" readonly required>
            <div class="carted-div"><button>-</button></div>
            </form>
            
            <div class="mid-ctd-div" id="mid-gad"><?php echo $dow['item_no']; ?></div>
            
            <form class="cart-map-for" action="cart/backend_up_cart.php" method="post">
            <input type="hidden" name="id" value="<?php echo $dow['id']; ?>" readonly required>
            <input type="hidden" name="item_id" value="<?php echo $dow['item_id']; ?>" readonly required>
            <input type="hidden" name="item_no" value="<?php echo $dow['item_no']; ?>" readonly required>
            <input type="hidden" name="price" value="<?php echo ($dow['item_price'])/($dow['item_no']); ?>" readonly required>
            <input type="hidden" name="sess" value="<?php echo $sess; ?>" readonly required>
            <div class="carted-div"><button>+</button></div> 
            </form>       
          </div>
            <?php }elseif ($row['close_stock'] == 0) { ?>
              <div class="cartful-div"><button disabled>Out of Stock</button> </div>
          </form>
              <?php  }else{ ?>
            <div class="cart-div"><button>Add to Cart</button> </div>
          </form>
            <?php } ?>
            
          
            
          
       <?php }else { ?>
        <p><?php echo $row['item_price'];?></p>
        
          <form class="cart-form" action="cart/backend_cart.php" method="post">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>" required readonly>
            <input type="hidden" name="no" value="1" required readonly>
            <input type="hidden" name="iname" value="<?php echo $row['item_name']; ?>" required readonly>
            <input type="hidden" name="img" value="<?php echo $row['item_img']; ?>" required readonly>
            <input type="hidden" name="iprice" value="<?php echo str_replace('N','',$row['item_price']); ?>" required readonly>
            <input type="hidden" name="sess" value="<?php echo $_SESSION['USER']; ?>" required readonly>
            <?php   
            $id = $row['id'];
            $sess = $_SESSION['USER'];
            ?>
            <?php
            $sel_cart = $sel_ob->sel_cart_id($id,$sess);
            if ($sel_cart->num_rows > 0) {
              $dow = $sel_cart->fetch_assoc();
            ?>
          </form>
          <div class="comb-ctd-div">
            <form class="cart-map-back" action="cart/backend_delup_cart.php" method="post">
            <input type="hidden" name="id" value="<?php echo $dow['id']; ?>" readonly required>
            <input type="hidden" name="item_id" value="<?php echo $dow['item_id']; ?>" readonly required>
            <input type="hidden" name="price" value="<?php echo ($dow['item_price'])/($dow['item_no']); ?>" readonly required>
            <input type="hidden" name="item_no" value="<?php echo $dow['item_no']; ?>" readonly required>
            <input type="hidden" name="sess" value="<?php echo $sess; ?>" readonly required>
            <div class="carted-div"><button>-</button></div>
            </form>
            
            <div class="mid-ctd-div"><?php echo $dow['item_no']; ?></div>
            <form class="cart-map-for" action="cart/backend_up_cart.php" method="post">
            <input type="hidden" name="id" value="<?php echo $dow['id']; ?>" readonly required>
            <input type="hidden" name="item_id" value="<?php echo $dow['item_id']; ?>" readonly required>
            <input type="hidden" name="item_no" value="<?php echo $dow['item_no']; ?>" readonly required>
            <input type="hidden" name="price" value="<?php echo ($dow['item_price'])/($dow['item_no']); ?>" readonly required>
            <input type="hidden" name="sess" value="<?php echo $sess; ?>" readonly required>
            <div class="carted-div"><button>+</button></div> 
            </form>       
          </div>
          
            <?php }elseif ($row['close_stock'] == 0) { ?>
              <div class="cartful-div"><button disabled>Out of Stock</button> </div>
          </form>
           <?php  }else{ ?>
          
            <div class="cart-div"><button>Add to Cart</button> </div>
          </form>
            <?php } ?>
            
          
            
        
       <?php } ?>
        
       
      </div>

      
    </div>
  <?php } } ?>

  

  </div>

  <div class="thr-snd">
    <p>We also provide you with a variety of Monopod selfie sticks that will help you get perfect angles when taking selfies or group pictures without the help of anyone.<br>Discover screen guards that have been designed specifically for various brands of mobile phones for maximum screen protection.</p>
    <p>Mobile Phones Accessories on OBIMI are very affordable and durable....</p>
    <p>You can also find a  wide range of mobile phone accessories on your list at tremendously cheap prices. We also deal with mobile phone accessories wholesale. Take a look at our selection of cases & cover, headsets, Bluetooth enabled headsets, Batteries, Screen guards, portable speakers and more. You can go through our list of mobile accessories and make purchase online to give your mobile device a brand new look. Get all your phone accessories, phone travel chargers and phone batteries online at OBIMI. Shop mobile phones of all brands on OBIMI as we offer the best prices in Nigeria.</p>
  </div>

</section>

<?php require("nav_units/footer.php");  ?>
</section>
</body>
</html>