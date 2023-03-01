<?php

if ($_SERVER['REQUEST_METHOD']=="POST") {
    $iname = str_replace(' ','-',$_POST['iname']);
    $igroup = $_POST['igroup'];
    $id = $_POST['id'];
    $cprice = 'N'.$_POST['icost'];
    $price = 'N'.$_POST['iprice'];
    $dis_price = $_POST['idprc'];
    $stock = $_POST['istock'];
    $cstock = $_POST['istock'];
    

    require("../../class/up_class.php");

    $up_ob = new UPD();

    
    require("../../class/sel_class.php");

    $sel_ob = new SEL();

    $sel_nec = $sel_ob->sel_item_id($id);
    if ($sel_nec) {
        $row = $sel_nec->fetch_assoc();
        $ostock = $row['open_stock']+$stock;
        $costock = $row['close_stock']+$cstock;

    }

    
    $up_nec = $up_ob->upd_item_tb($cprice,$price,$dis_price,$ostock,$costock,$id);
    if ($up_nec) {
        //echo "<p>Item Details Updated Successfully";
        header ("location:item_feature?group=$igroup&name=$iname");
    }else {
        echo "<p>Item Details Not Updated</p>";
    }
}

?>