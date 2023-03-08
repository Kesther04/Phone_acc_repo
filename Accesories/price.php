
<div class='snd-inner-fst-purchase-div '>

<?php 
    

    $pageName = basename($_SERVER['PHP_SELF']);   
    $nt = str_replace('.php','', $pageName);

    
    $sess = $_SESSION['USER'];
    require("../auto_cart_del.php");
    
    $sel_con = $sel_ob->sel_nprc($nt);
  
    if ($sel_con) {
    
    while ($row = $sel_con->fetch_assoc()) {
?>
    
        <?php  
        if ($row['dis_perc'] > 0) { ?>
        
          <div>
            <p>
            <span class="acc-span"><?php echo $row['item_price'];?></span>
            <?php
              $prcal = str_replace('N','',$row['item_price']);
              $pren = $row['dis_perc'];
              $sol = $prcal -(($pren/100)*$prcal);
            ?>
          
            <?php echo 'N'.$sol; ?>

            </p>
          </div>
            
        <div class='snd-inner-inner-fst-purchase-div'>
           
          <form id="cart-form" class="cart-form" action="../../cart/backend_cart.php" method="post">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>" required readonly>
            <input type="hidden" name="no" value="1" required readonly>
            <input type="hidden" name="iname" value="<?php echo $row['item_name']; ?>"  required readonly>
            <input type="hidden" name="img" value="<?php echo $row['item_img']; ?>"  required readonly>
            <input type="hidden" name="aiprice"  value="<?php echo $sol; ?>"  required readonly>
            <input type="hidden" name="iprice"  value="<?php echo $sol; ?>"  required readonly>
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
            <form class="cart-map-back" action="../../cart/backend_delup_cart.php" method="post">
            <input type="hidden" name="id" value="<?php echo $dow['id']; ?>" readonly required>
            <input type="hidden" name="item_id" value="<?php echo $dow['item_id']; ?>" readonly required>
            <input type="hidden" name="price" value="<?php echo ($dow['item_price'])/($dow['item_no']); ?>" readonly required>
            <input type="hidden" name="item_no" value="<?php echo $dow['item_no']; ?>" readonly required>
            <input type="hidden" name="sess" value="<?php echo $sess; ?>" readonly required>
            <div class="carted-div"><button>-</button></div>
            </form>
            
            <div class="mid-ctd-div"><?php echo $dow['item_no']; ?></div>
            <form class="cart-map-for" action="../../cart/backend_up_cart.php" method="post">
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
        </div>


        <?php }else { ?>
        <div>
            <p><?php echo $row['item_price'];?></p>
        </div>
        <div class='snd-inner-inner-fst-purchase-div'>
          
            
            
          <form id="cart-form" class="cart-form" action="../../cart/backend_cart.php" method="post">
          <input type="hidden" name="id" value="<?php echo $row['id']; ?>" required readonly>
          <input type="hidden" name="no" value="1" required readonly>
          <input type="hidden" name="iname" value="<?php echo $row['item_name']; ?>" required readonly>
          <input type="hidden" name="img" value="<?php echo $row['item_img']; ?>" required readonly>
          <input type="hidden" name="aiprice"  value="<?php echo str_replace('N','',$row['item_price']); ?>" required readonly>
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
            <form class="cart-map-back" action="../../cart/backend_delup_cart.php" method="post">
            <input type="hidden" name="id" value="<?php echo $dow['id']; ?>" readonly required>
            <input type="hidden" name="item_id" value="<?php echo $dow['item_id']; ?>" readonly required>
            <input type="hidden" name="price" value="<?php echo ($dow['item_price'])/($dow['item_no']); ?>" readonly required>
            <input type="hidden" name="item_no" value="<?php echo $dow['item_no']; ?>" readonly required>
            <input type="hidden" name="sess" value="<?php echo $sess; ?>" readonly required>
            <div class="carted-div"><button>-</button></div>
            </form>
            
            <div class="mid-ctd-div"><?php echo $dow['item_no']; ?></div>
            <form class="cart-map-for" action="../../cart/backend_up_cart.php" method="post">
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
        </div>
       <?php } ?>
        
      
<?php } } ?>



                        
            
                        

</div>