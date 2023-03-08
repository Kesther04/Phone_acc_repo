
<section class="snd-sec-div snd-sec-margin">
    <div class="acce-div">
      <h1><?php echo $din; ?></h1>
    </div>
    
    <div class="snd-snd">
      <?php 
        $sess = $_SESSION['USER'];
        require("../auto_cart_del.php");
    
        $sel_con = $sel_ob->sel_namegp($group);
  
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
          <img src="../../img/orgcircle">
        </span>


       <?php }else { echo ""; } ?>
       
       <div class="dis-like"><?php echo $liket = $row['likes']; ?></div>
       <?php 
          $sel_lk_tb = $sel_ob->sel_pt_lk_tb($pana,$sess);
          if ($sel_lk_tb->num_rows>0) { 
        ?>
        <form class='ddl' action='../../like/dellike.php' method='post'> 
          <input type='hidden'  name='pt' value='<?php echo $row['item_name']; ?>' required>
          <input type='hidden' name='pid' value='<?php echo $row['id']; ?>' required>
          <input type='hidden' name='psess' value='<?php echo $_SESSION['USER']; ?>' required>
          <button class='liked-btn' ><img src="../../img/redhrt.png" class="hrt"></button>
        </form> 
        <?php }else { ?>
          <form class='adl' action='../../like/addlike.php' method='post'> 
            <input type='hidden'  name='pt' value='<?php echo $row['item_name']; ?>' required>
            <input type='hidden' name='pid' value='<?php echo $row['id']; ?>' required>
            <input type='hidden' name='psess' value='<?php echo $_SESSION['USER']; ?>' required>
            <button class='like-btn'><img src="../../img/blhrt.png" class="hrt"></button>
          </form>
        <?php } ?>
        
        <a href="../<?php echo $row['item_group'].'/'.$row['item_name']; ?>"><img src="../img/<?php echo $row['item_img']; ?>" class="main-img"></a>
      </div>
      <div class="inner-snd-snd-dis">
        <h3>
          <?php 
            $row['item_name']; 
            $iname = str_replace('-',' ',$row['item_name']);
  
          ?>
          <a href="../<?php echo $row['item_group'].'/'.$row['item_name']; ?>"><?php echo $iname; ?></a>
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
        <form class="cart-form" action="../../cart/backend_cart.php" method="post">
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
            ?>
            <div class="carted-div"><button>Added to Cart</button> </div>
            <?php }elseif ($row['close_stock'] == 0) { ?>
              <div class="cartful-div"><button disabled>Out of Stock</button> </div>
           <?php  }else{ ?>
            <div class="cart-div"><button>Add to Cart</button> </div>
            <?php } ?>
        </form>

       <?php }else { ?>
        <p><?php echo $row['item_price'];?></p>
        <form class="cart-form" action="../../cart/backend_cart.php" method="post">
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
            ?>
            <div class="carted-div"><button>Added to Cart</button> </div>
            <?php }elseif ($row['close_stock'] == 0) { ?>
              <div class="cartful-div"><button disabled>Out of Stock</button> </div>
           <?php  }else{ ?>
            <div class="cart-div"><button>Add to Cart</button> </div>
            <?php } ?>
            
        </form>
       <?php } ?>
        
      </div>

      
      </div>
      <?php } } ?>

    </div>
</section>
