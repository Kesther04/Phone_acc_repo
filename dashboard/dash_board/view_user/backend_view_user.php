<?php
if ($_SERVER['REQUEST_METHOD']=="POST") {
    $uid = $_POST['id'];
    $fnm = $_POST['fnm'];
    $date = $_POST['date'];

    require("../../class/sel_class.php");
    $sel_ob = new SEL(); 
   
    if ($date == "ALL") {
?>

<?php  
    $selde_all = $sel_ob->sel_sales_all($uid);
    if ($selde_all) {
?>

    <div class="line-div-container">
    <h1>ORDERS FROM <span class="inn-ldch"><?php echo $fnm;?></span></h1>
    <table>
        <tr id="top-line-div-table">
            <td></td>
            <td>PRODUCT_NAME</td>
            <td>PRODUCT_PRICE</td>
            <td>PRODUCT_STATUS</td>
            <td>DATE_ORDERED</td>
            <td>DATE_TO_BE_DELIVERED</td>
        </tr>

        <?php while ($row = $selde_all->fetch_assoc()) {  ?>
        <tr>
            <td><img src="../../../Accesories/img/<?php echo $row['item_img']; ?>" width="100"></td>
            <td><?php echo str_replace('-',' ',$row['item_name']); ?></td>
            <td><?php echo $row['item_price']; ?></td>
            <?php
            if ($row['status_deliv'] == "PENDING") { ?>
                <td class="mile-ac"><?php echo $row['status_deliv']; ?></td>    
            <?php }
            elseif ($row['status_deliv'] == "DELIVERED") { ?>
                <td class="mile-greac"><?php echo $row['status_deliv']; ?></td>
            <?php }?>
            
            <td><?php echo $row['date']; ?></td>
            <td><?php echo $row['arrive_date']; ?></td>
        </tr>
        <?php } ?>
    </table>
    </div>



<?php } }else {   ?>

<?php
    $seldepart = $sel_ob->sel_sales_date($uid,$date);
    if ($seldepart) {  
?>

    
    <div class="line-div-container">
    <h1>ORDERS FROM <span class="inn-ldch"><?php echo $fnm;?></span></h1>
    <table>
        <tr id="top-line-div-table">
            <td></td>
            <td>PRODUCT_NAME</td>
            <td>PRODUCT_PRICE</td>
            <td>PRODUCT_STATUS</td>
            <td>DATE_ORDERED</td>
            <td>DATE_TO_BE_DELIVERED</td>
        </tr>

        <?php while ($row = $seldepart->fetch_assoc()) {  ?>
            <tr>
            <td><img src="../../../Accesories/img/<?php echo $row['item_img']; ?>" width="100"></td>
            <td><?php echo str_replace('-',' ',$row['item_name']); ?></td>
            <td><?php echo $row['item_price']; ?></td>
            <?php
            if ($row['status_deliv'] == "PENDING") { ?>
                <td class="mile-ac"><?php echo $row['status_deliv']; ?></td>    
            <?php }
            elseif ($row['status_deliv'] == "DELIVERED") { ?>
                <td class="mile-greac"><?php echo $row['status_deliv']; ?></td>
            <?php }?>
            
            <td><?php echo $row['date']; ?></td>
            <td><?php echo $row['arrive_date']; ?></td>
            </tr>
        <?php } ?>
    </table>
    </div>



<?php } } ?>

<?php } ?>