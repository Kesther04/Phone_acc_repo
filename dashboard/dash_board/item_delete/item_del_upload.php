<script src="../../../js/jquery.js"></script>
    <script src="../../../js/ajax.js"></script>
<?php

if ($_SERVER['REQUEST_METHOD']=="POST") {
    $iname = $_POST['sii'];

    require("../../class/sel_class.php");
    $sel_ob = new SEL();
    $sel_dis = $sel_ob->sel_item_id($iname);
    if ($sel_dis) {
        while ($row = $sel_dis->fetch_assoc()) {
?>

<div id="masag">
        <div class="msg">    
            
            <div style="font-weight:bold;"><p>ARE YOU SURE YOU WANT TO DELETE THIS ITEM DETAILS</p></div>
            <div class="inner-secdc">
            <form action="backend_sure_item_delete.php" method="post">
                <div class="msa"></div>
                <button class="aj-btn">Yes</button>
            </form>
            <button class="aj-btn"><a href="item_delete.php">No</a></button>
            </div>
        </div>
</div>

<form class="news_upl" action="backend_item_delete.php" method="post" enctype="multipart/form-data">
    

<div class="sec-div-container">

<h1>DELETE UPLOADED ITEM</h1>


    
<div class="fir-div-container">

<div class="prod-img-show">
    <img src="../../../Accesories/img/<?php echo $row['item_img'];  ?>">
</div>

<table>

    <tr>
        <td><span>Product Name</span><input type="text" name="iname" value="<?php echo  $im = str_replace('-',' ',$row['item_name']); ?>" readonly required><input type="hidden" name="id" value="<?php echo $row['id'];  ?>" required readonly></td>

        <td><span>Product Group</span><input type="text" name="igroup" value="<?php  echo $row['item_group'] ?>" readonly required></td>
    </tr>

    <tr>
        <td><span>Cost Price</span><input type="number" name="icost" value="<?php echo  $im = str_replace('N','',$row['cost_price']); ?>" readonly required ></td>

        <td><span>Product Price</span><input type="number" name="iprice" value="<?php echo  $im = str_replace('N','',$row['item_price']); ?>" readonly required></td>
    </tr>



    <tr>
        <td><span>Product Discount Percentage</span><input type="number" name="idprc" value="<?php echo  $im =  $row['dis_perc']; ?>" readonly required></td>
        <td><span>Add New Opening Stock</span><input type="number" name="istock" value="0" readonly required></td>
    </tr>

    <tr>
        <td><span>Current Stock Quantity</span><input type="number" name="cstock" value="<?php echo $row['close_stock'];  ?>" readonly required></td>
    </tr>
</table>

</div>
       
    <div class="con-btn-div">
        <button class="con-btn">DELETE</button>
    </div>
    
   
</div>
</form>




<?php } }  } ?>