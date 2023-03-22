
<?php
if ($_SERVER['REQUEST_METHOD']=="POST") {
    $uid = $_POST['id'];
    $fnm = $_POST['fnm'];
    $date = date("d/m/y");
    
    require("../../class/sel_class.php");
    $sel_ob = new SEL(); 
   
    
?>


<?php  
    $selde_all = $sel_ob->sel_item_id($uid);
    if ($selde_all) {
?>

  <div class="line-div-container">
    <div class="inner-masag-cot-back" title="back to page">
            <img src="../../../img/arro.svg" width="30" class="sec-img"><img src="../../../img/arro-fill.svg" width="30" class="fir-img">
    </div>
    <?php 
      $row = $selde_all->fetch_assoc();
    ?>
    <div class="display-item">
        
        <div class="fst-dis-itm">

         <h2>PRODUCT DETAILS</h2>

          <div class="inner-fdi">
          <div class="fdi-img">
            <img src="../../../Accesories/img/<?php echo $row['item_img']; ?>" width="300">
          </div>
          <table>
            <tr><td><span>PRODUCT NAME:</span></td> <td><?php echo str_replace('-',' ',$row['item_name']); ?></td></tr>
            <tr><td><span>PERCENTAGE DISCOUNT:</span></td> <td><?php echo ($row['dis_perc']).'%'; ?></td></tr> 
            <tr><td><span>PRODUCT CATEGORY:</span></td> <td><?php echo $row['item_group']; ?></td></tr>
            <tr><td><span>OPENING STOCKS:</span></td> <td><?php echo $row['open_stock']; ?></td></tr>
          </table>

          <table>
        
            
            <tr><td><span>COST PRICE:</span></td> <td><?php echo $row['cost_price']; ?></td></tr>
            <tr><td><span>DISCOUNT PRICE:</span></td> <td><?php
                $prcal = str_replace('N','',$row['item_price']);
                $pren = $row['dis_perc'];
                $sol = $prcal -(($pren/100)*$prcal);

                echo 'N'.$sol;
                ?></td>
            </tr>
            <tr><td><span>SELLING PRICE:</span></td> <td><?php echo $row['item_price']; ?></td></tr>
            <tr><td><span>DATE ADDED:</span></td> <td><?php echo $row['date']; ?></td></tr>
          </table>
          </div>
        </div>

        <div class='snd-dis-itm'>
          <h2>REPORT OF DAILY SALES</h2>

          <div class="inner-sdi">
            <?php 
              $sel_dam = $sel_ob->sel_all_dat_itm($uid,$date); 
              if($sel_dam){
                $dow = $sel_dam->fetch_assoc();
              
            ?>
            <?php 
              if($dow['date'] == $date){ 
            ?>
            <div>
              <h2>TOTAL SALES OF THE DAY</h2>
              <p>  <b><?php echo $dow['SUM(item_price)']; ?>NGN</b></p>
            </div>

            <div>
              <h2>QUANTITY OF PRODUCTS SOLD</h2>
              <p><b><?php echo $dow['SUM(item_no)']; ?></b></p>
            </div>
          
            <?php }else { ?>
              <div>
                <p><b>NO SALES MADE TODAY</b></p>
              </div>
            <?php }?>
            <?php } ?>
          </div>
        
        </div>

        <div class="thr-dis-itm">
        
          <div class='detail-divs'>
            <h2>TOTAL SALES</h2>
            <p><?php $sel_tamt = $sel_ob->sel_all_tot_itm($uid);
                  if ($sel_tamt) {
                    $res=$sel_tamt->fetch_assoc();       
                    $am=$res['SUM(item_price)'];
                    $qb=$res['SUM(item_no)']; 
                    echo '<b>'.'N'.$am.'</b>'; 
                           
                  }
              ?>
            </p>
          </div>
        

        
          <div class='detail-divs'>
            <h2>TOTAL PRODUCTS SOLD</h2>
        
            <p><b><?php echo $ron = ($row['open_stock'])-($row['close_stock']); ?></b></p>
        
          </div>
        

          <div class='detail-divs'>
            <h2>REMAINING STOCK</h2>
            <p><b><?php echo $row['close_stock']; ?></b></p>
          </div>
        </div>
  </div>



<?php } ?>
    


<?php } ?>
   