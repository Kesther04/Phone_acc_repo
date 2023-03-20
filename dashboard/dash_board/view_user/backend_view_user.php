<script src="../../../js/jquery.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function(){

            new DataTable('#myTable');
        })
    </script>

<?php
if ($_SERVER['REQUEST_METHOD']=="POST") {
    $uid = $_POST['id'];
    $fnm = $_POST['fnm'];

    require("../../class/sel_class.php");
    $sel_ob = new SEL(); 
   
    
?>

<?php  
    $selde_all = $sel_ob->sel_sales_all($uid);
    if ($selde_all) {
?>

    <div class="line-div-container">
    <div class="inner-masag-cot-back" title="back to page">
            <img src="../../../img/arro.svg" width="30" class="sec-img"><img src="../../../img/arro-fill.svg" width="30" class="fir-img">
    </div>
    <h1>ORDERS FROM <span class="inn-ldch"><?php echo $fnm;?></span></h1>
    <table  id="myTable" >
        <thead>
        <tr id="top-line-div-table">
            <th></th>
            <th>PRODUCT_NAME</th>
            <th>PRODUCT_PRICE</th>
            <th>PRODUCT_STATUS</th>
            <th>DATE_ORDERED</th>
            <th>DATE_TO_BE_DELIVERED</th>
        </tr>
        </thead>
        <tbody>
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
        </tbody>
    </table>
    </div>



<?php } ?>
    


<?php } ?>

