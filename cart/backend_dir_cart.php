<?php


if ($_SERVER['REQUEST_METHOD']=="POST") {
    $id = $_POST['id'];
    $sess = $_POST['sess'];


    require("../dashboard/class/del_class.php");
    
    $del_ob = new DEL();

    $del_cartids = $del_ob->del_cart_id($id,$sess);
    
        if ($del_cartids) {
            echo "delete successful";    
        }else {
            echo  "delete unsuccessful";
        }



}

?>