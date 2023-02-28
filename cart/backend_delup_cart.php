<?php
if ($_SERVER['REQUEST_METHOD']=="POST") {
    $id = $_POST['id'];
    $item_id = $_POST['item_id'];
    $item_no = $_POST['item_no'];
    $new_no = 1;
    $price = $_POST['price'];
    $dio = $item_no-$new_no;
    $dprice = $dio*$price;
    require("../dashboard/class/up_class.php");

    $up_ob = new UPD();

    if ($dio < 1) {
        echo "no update can be made";
    }else {
        
        $up_con = $up_ob->upd_cart_tb($dprice,$dio,$id,$item_id);
            if ($up_con) {
                echo "cart updated successfully";
            }else {
                echo "not updated";
            }
    }        
        

    
}










?>