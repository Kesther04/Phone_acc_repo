<?php

if ($_SERVER['REQUEST_METHOD']=="POST") {
    $id = $_POST['id'];
    $badd = $_POST['badd'];
    $shpadd = $_POST['shpadd'];

    
    require("../../dashboard/class/up_class.php");

    $upd_ob = new UPD();

    require("../../dashboard/class/sel_class.php");

    $sel_ob = new SEL();


    $sel_con = $sel_ob->sel_acc_chg($id);
    if ($sel_con) {
        $row = $sel_con->fetch_assoc();
        $rbadd = $row['b_add'];
        $rshpadd = $row['shp_add'];

        if ($badd == "" AND $shpadd !== "") {
            $up_con = $upd_ob->upd_user_tb_add($rbadd,$shpadd,$id);
                if ($up_con) {
                    echo "<p style='color:blue;'>shipping address updated successfully</p>";
                }else {
                    echo "<p style='color:red;'>shipping address not updated successfully</p>";
                }
        }elseif ($badd !== "" AND $shpadd == "") {
            $up_con = $upd_ob->upd_user_tb_add($badd,$rshpadd,$id);
            if ($up_con) {
                echo "<p style='color:blue;'>billing address updated successfully</p>";
            }else {
                echo "<p style='color:red;'>billing address not updated successfully</p>";
            }
        }
    }

    
}




?>