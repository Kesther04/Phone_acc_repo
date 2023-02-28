<?php
if ($_SERVER['REQUEST_METHOD']=="POST") {
    $id = $_POST['id'];
    $item_id = $_POST['item_id'];
    $item_no = $_POST['item_no'];
    $new_no = 1;
    $price = $_POST['price'];
    $dio = $item_no+$new_no;
    $dprice = $dio*$price;
    require("../dashboard/class/up_class.php");

    $up_ob = new UPD();

    
    require("../dashboard/class/sel_class.php");

    $sel_ob = new SEL();

    $sel_con = $sel_ob->sel_item_id($item_id);
    if ($sel_con->num_rows>0) {
        $row = $sel_con->fetch_assoc();
        $clr  = str_replace('N','',$row['close_stock']);
    }


        if ($sel_con->num_rows > 0 AND $dio > $clr) {
            echo "err";
        }else {

            $up_con = $up_ob->upd_cart_tb($dprice,$dio,$id,$item_id);
            if ($up_con) {
                echo "cart updated successfully";
            }
            
        }

    
}










?>