<?php


if ($_SERVER['REQUEST_METHOD']=="POST") {
    $id = $_POST['id'];


    require("../dashboard/class/del_class.php");
    
    $del_ob = new DEL();

    $del_cartids = $del_ob->del_cart_id($id);
    
        if ($del_cartids) {
            echo "delete successful";    
        }else {
            echo  "delete unsuccessful";
        }



}

?>