<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/style.css" media="all">
    <link rel="stylesheet" href="../../css/responsive_style.css" media="all">
    <script src='../../js/jquery.js'></script>
    <script src='../../js/header_move.js'></script>
    <script src="../../js/ajax.js"></script>
    <?php        
      $pageName = dirname($_SERVER['PHP_SELF']);   
      $group = str_replace('/Github/Phone_acc_repo/Accesories/','',$pageName);
      $din = str_replace('_',' ',$group);
    ?>
    <title><?php echo $din; ?></title>
</head>
<body>
    <?php require("../header.php"); ?>

  <section class="snd-sec-div">
    <div class="acce-div">
      <h1><?php echo $din; ?></h1>
    </div>
    
    <div class="snd-snd">
      <?php 
        require("../../dashboard/class/sel_class.php");   
        $sel_ob = new SEL();
    
        $sel_con = $sel_ob->sel_namegp($group);
  
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

    </div>
  </section>
    <?php require("../footer.php"); ?>
</body>
</html>