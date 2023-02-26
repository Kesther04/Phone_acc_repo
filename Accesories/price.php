<?php 
    require("../../dashboard/class/sel_class.php");

    $pageName = basename($_SERVER['PHP_SELF']);   
    $nt = str_replace('.php','', $pageName);

    $sel_ob = new SEL();
    
    $sel_con = $sel_ob->sel_nprc($nt);
  
    if ($sel_con) {
    
    while ($row = $sel_con->fetch_assoc()) {
?>
    
        <?php  
        if ($row['dis_perc'] > 0) { ?>
        
        
        
          <span class="acc-span"><?php echo $row['item_price'];?></span>
          <?php
              $prcal = str_replace('N','',$row['item_price']);
              $pren = $row['dis_perc'];
              $sol = $prcal -(($pren/100)*$prcal);

            echo 'N'.$sol;
          ?>
           <input type="hidden" name="iname" value="<?php echo $row['item_name']; ?>"  required readonly>
            <input type="hidden" name="img" value="<?php echo $row['item_img']; ?>"  required readonly>
            <input type="hidden" name="iprice"  value="<?php echo $sol; ?>"  required readonly>
            <input type="hidden" name="aiprice"  value="<?php echo $sol; ?>"  required readonly>
        


       <?php }else { ?>
        <?php echo $row['item_price'];?>
        <input type="hidden" name="iname" value="<?php echo $row['item_name']; ?>" required readonly>
        <input type="hidden" name="img" value="<?php echo $row['item_img']; ?>" required readonly>
        <input type="hidden" name="iprice"  value="<?php echo str_replace('N','',$row['item_price']); ?>" required readonly>
        <input type="hidden" name="aiprice" value="<?php echo str_replace('N','',$row['item_price']); ?>" required readonly>
       <?php } ?>
        
      
<?php } } ?>