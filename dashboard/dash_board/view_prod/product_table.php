<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../css/item_upload.css" media="all">
    <link rel="stylesheet" href="../../../css/dash_css_rep.css" media="all">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    <script src="../../../js/jquery.js"></script>
    <script src="../../../js/ajax.js"></script>
    <script src="../../../js/metro.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function(){

            new DataTable('.myTable');
        })
    </script>
    <title>PRODUCT TABLE</title>
</head>
<body>
    
<?php require("../../admin_dashboard_layout.php"); ?>


<div id="masag-cot">

    <div class="snd-inner-masag-ct">
        <div class="msg"></div>
    </div>
</div>


<section class="main-div-container">

    <?php 
        require("../../class/sel_class.php");
        $sel_ob = new SEL(); 
        $sel_con = $sel_ob->sel_all_item();
        if ($sel_con) {
            
        
    ?>

    <div class="sec-div-container">
        <div class="line-div-container">
            
            <table class="myTable" >
                <thead>
                    <tr id="top-line-div-table">
                        <th>PRODUCT_NAME</th>
                        <th>OPENING_STOCKS</th> 
                        <th>CLOSING_STOCKS</th>
                        <th>PRODUCT_CATEGORY</th>
                        <th>COST_PRICE</th> 
                        <th>SELLING_PRICE</th>
                        <th>TOTAL_AMOUNT</th>
                        <th>PROFIT</th>
                        <th>DATE_ADDED</th>
                        <th>VIEW_OTHER_DETAILS</th>
                    </tr>
                </thead>
                
                <tbody>
                <?php while ($row = $sel_con->fetch_assoc()) { ?>
                <tr>
                    <td><?php echo str_replace('-',' ',$row['item_name']); ?></td>
                    <td><?php echo $row['open_stock']; ?></td>
                    <td><?php echo $row['close_stock']; ?></td>
                    <td><?php echo $row['item_group']; ?></td>
                    <td><?php echo $row['cost_price']; ?></td>
                    <td><?php echo $row['item_price']; ?></td>
                    <?php $sel_tamt = $sel_ob->sel_all_tot_itm($row['id']);
                        if ($sel_tamt) {
                            $res=$sel_tamt->fetch_assoc();       
                            $am=$res['SUM(item_price)'];
                            $qb=$res['SUM(item_no)']; 
                            echo "<td>";
                            echo 'N'.$am; 
                            echo "</td>";
                            echo "<td>";
                            echo 'N'.(($am)-($qb*str_replace('N','',$row['cost_price']))); 
                            echo "</td>";
                        }
                    ?>
                
                    <td><?php echo $row['date']; ?></td>
                   
                    
                    <td>
                        <form class="vud" action="product_fields.php" method="post">
                            <input type="hidden" name="id" value="<?php echo $row['id']; ?>" required readonly>
                            <input type="hidden" name="fnm" value="<?php echo $row['item_name']; ?>" required readonly>
                            <button class="conlin-btn">PRODUCT DETAILS</button>
                        </form>
                    </td>
                </tr>
                <?php  } ?>
                
                </tbody>
            </table>
        </div>
    </div>

    <?php } ?>
</section>

</body>
</html>