<?php      

    $date = date("d-m-y");
    $hr = date("h")+1;
    $time = date("$hr:i:s.a");  

    require("../dashboard/class/del_class.php");
    
    $del_ob = new DEL();

    $sel_cart_all = $sel_ob->sel_carts($sess);
    if ($sel_cart_all) {
        $row = $sel_cart_all->fetch_assoc();
        $rdow = $row['date'];
        $rtow = $row['time'];
        if ($rdow !== $date) {
            $del_cartalls = $del_ob->del_carts_all($sess);
        }
    }

?>