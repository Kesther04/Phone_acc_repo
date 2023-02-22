<?php 
  
    $sel_con = $sel_ob->sel_nselacc();
  
    if ($sel_con) {
    
    while ($row = $sel_con->fetch_assoc()) {
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
       <div id="dis-like"><?php echo $row['likes']; ?></div>
       <form class='adl' action='../../like/addlike.php' method='post'> 
            <input type='hidden'  name='pt' value='<?php echo $row['item_name']; ?>' required>
            <input type='hidden' name='pid' value='<?php echo $row['id']; ?>' required>
            <button id='like-btn'><img src="../../img/blhrt.png" class="hrt"></button>
        </form>

        <form class='ddl' action='../../like/dellike.php' method='post'> 
          <input type='hidden'  name='pt' value='<?php echo $row['item_name']; ?>' required>
          <input type='hidden' name='pid' value='<?php echo $row['id']; ?>' required>
          <button id='liked-btn' ><img src="../../img/redhrt.png" class="hrt"></button>
        </form> 


        
        <img src="../img/<?php echo $row['item_img']; ?>" class="main-img">
      </div>
      <div class="inner-snd-snd-dis">
        <h3>
          <?php 
            $row['item_name']; 
            $iname = str_replace('-',' ',$row['item_name']);
            echo $iname;
          ?>
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


       <?php }else { ?>
        <p><?php echo $row['item_price'];?></p>
       <?php } ?>
        
        <div class="cart-div">
          <a href="#">Add to Cart</a>
        </div>
      </div>

      
    </div>
<?php } } ?>