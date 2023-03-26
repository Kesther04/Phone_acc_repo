<?php
if ($_SERVER['REQUEST_METHOD']=="POST") {
    $id = $_POST['id'];
    $item_id = $_POST['item_id'];
    $item_no = $_POST['item_no'];
    $new_no = 1;
    $price = $_POST['price'];
    $dio = $item_no-$new_no;
    $dprice = $dio*$price;
    $sess = $_POST['sess'];
    require("../dashboard/class/up_class.php");

    $up_ob = new UPD();

    require("../dashboard/class/del_class.php");

    $del_ob = new DEL();

    if ($dio < 1) {
        $del_cart = $del_ob->del_cart_id($item_id,$sess);
        if ($del_cart) {
            echo "delete successful";    
        }else {
            echo  "delete unsuccessful";
        }
    }else {
        
        $up_con = $up_ob->upd_cart_tb($dprice,$dio,$id,$item_id,$sess);
            if ($up_con) {
                echo $dio;
            }else {
                echo "not updated";
            }
    }        
        

    
}










?>