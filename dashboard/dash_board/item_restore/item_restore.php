<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../css/item_upload.css" media="all">
    <link rel="stylesheet" href="../../../css/dash_css_rep.css" media="all">
    <script src="../../../js/jquery.js"></script>
    <script src="../../../js/ajax.js"></script>
    <script src="../../../js/metro.js"></script>
    <title>DASHBOARD</title>
    
</head>
<body>

<?php 
    require("../../admin_dashboard_layout.php");
    require("../../class/sel_class.php");
    $sel_ob = new SEL();
?>

<section class="main-div-container">

    
<div class="sec-div-container">
    <h1>SELECT ITEM TO RESTORE</h1>

    <div class="inner-secdc">
        <form class="res-sel-itm" action="item_res_sel.php" method="post">

        <div class="fir-div-container">
            <table>
                <tr>
                <td>
                    <span>Product Group</span>
                    <select name="igroup" required>
                        <option></option>
                            <?php
                                
                                $sel_upd = $sel_ob->sel_nseldel_gp();
                                if ($sel_upd) {
                                    while ($row = $sel_upd->fetch_assoc()) {
                                         
                                        $im = $row['item_group'];
                            ?>
                                    <option value="<?php echo $im; ?>" ><?php echo $im; ?></option>
                            <?php   }  }  ?>
                        
                    </select>
                </td>
                </tr>
                
            </table>
        </div>
        
        <div class="con-btn-div">
            <button class="con-btn">CLICK</button>
        </div>
        </form>

        <div class="item-div-con"></div>
    </div>
    
</div>

<div class="seco-div-container"></div>

</section>


</body>
</html>