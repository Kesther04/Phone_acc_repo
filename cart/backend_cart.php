<?php

if ($_SERVER['REQUEST_METHOD']=="POST") {
    $id = $_POST['id'];
    $name = $_POST['iname'];
    $img = $_POST['img'];
    $price = $_POST['iprice'];
    $no = $_POST['no'];
    $sess = $_POST['sess'];
    $date = date("d-m-y");
    $hr = date("h")+1;
    $time = date("$hr:i:s.a");
    
    require("../dashboard/class/ins_class.php");
    
    $ins_ob = new INS();

    require("../dashboard/class/del_class.php");
    
    $del_ob = new DEL();

    require("../dashboard/class/sel_class.php");
    
    $sel_ob = new SEL();

    $sel_cart = $sel_ob->sel_cart_id($id,$sess);
    if ($sel_cart->num_rows > 0) {
        $row = $sel_cart->fetch_assoc();
        $rid = $row['item_id'];
        $csess = $row['session'];
        
    }

    
    if ($sel_cart->num_rows > 0 AND $rid == $id AND $csess == $sess) {

        $del_cart = $del_ob->del_cart_id($id,$sess);
        if ($del_cart) {
            echo "delete successful";    
        }else {
            echo  "delete unsuccessful";
        }

    } else {
       
        $ins_cart = $ins_ob->ins_cart($id,$name,$img,$price,$no,$sess,$date,$time);
        if ($ins_cart) {
            echo "successful";
        }else {
            echo "not successful";
        }
        
    }

    
}










?>