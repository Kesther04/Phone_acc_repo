<?php


if ($_SERVER['REQUEST_METHOD']=="POST") {
    $sess = $_POST['sess'];

    require("../dashboard/class/del_class.php");
    
    $del_ob = new DEL();

    $del_cartalls = $del_ob->del_carts_all($sess);
    
        if ($del_cartalls) {
            echo "delete successful";    
        }else {
            echo  "delete unsuccessful";
        }


}

?>