<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/style.css" media="all">
    <link rel="stylesheet" href="../../css/responsive_style.css" media="all">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    <script src="../../js/jquery.js"></script>
    <script src="../../js/header_move.js"></script>
    <script src="../../js/ajax.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function(){

            new DataTable('.myTable');
        })
    </script>
    <title>ACCOUNT</title>
</head>
<body>
<section id="total-div">
<?php require("../nav_units/account_header.php");  ?>

<section class="account-div">

<div class="open-dash">&#9776;</div>
    <div class="dashboard">
        <div class="close-dash">&times;</div>
        <div><a href="../dashboard/dashboard.php">Dashboard</a></div>
        <div><a href="../order/order.php" class="active">Orders</a></div>
        <div><a href="../addresses/addresses.php">Addresses</a></div>
        <div><a href="../pay_mtd/payment_mtd.php">Payment Methods</a></div>
        <div><a href="../acc_det/account_details.php">Account Details</a></div>
        <div><button onclick="if(window.confirm('ARE YOU SURE YOU WANT TO LOG OUT')){window.location='../../enter_account/login.php';}">Logout</button></div>
    </div>

    <div class="content-acc">
    <?php  
        $uid = $_SESSION['id'];
    ?>
    <?php
        $sel_con_ordin = $sel_ob->sel_sales($sess,$uid);
        if ($sel_con_ordin) {

        if ($sel_con_ordin->fetch_assoc()) {
            
        
    ?>

    <?php
        $sel_con_ord = $sel_ob->sel_sales($sess,$uid);
        if ($sel_con_ord) {
    ?>
    <div class="ac-orders">
    <table class="myTable display">
    <thead>
    <tr id="fst-tabac">
        <th></th>
        <th>PRODUCT_NAME</th>
        <th>PRODUCT_PRICE</th>
        <th>PRODUCT_STATUS</th>
        <th>DATE_ORDERED</th>
        <th>DATE_TO_BE_DELIVERED</th>
    </tr>
    </thead>
    
    <tbody>
    <?php
        while ($row = $sel_con_ord->fetch_assoc()) {

    ?>

    
        <tr>
            <td><img src="../../Accesories/img/<?php echo $row['item_img']; ?>" width="100"></td>
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
    

        
    <?php }  ?>
    </tbody>

    </table>
    </div>
    <?php } ?>

    <?php }else { ?>
        
    
        <div class="orders">
            <p>No order has been made yet.     <span style="float:right;"><a href="#">Browse Products</a></span></p>
    
        </div>
    <?php } ?>
    <?php } ?>
    </div>

</section>


<section class="purchase">
    <div class="thr-purchase-div">
    <div class='snd-inner-thr-purchase-div'>
        <?php require("../dis_item.php"); ?>
    </div>
    </div>
</section>

<?php require("../nav_units/account_footer.php");  ?>
</section>
</body>
</html>