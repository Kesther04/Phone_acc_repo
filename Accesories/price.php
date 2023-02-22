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
        


       <?php }else { ?>
        <?php echo $row['item_price'];?>
       <?php } ?>
        
      
<?php } } ?>