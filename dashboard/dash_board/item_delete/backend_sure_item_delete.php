<?php
if ($_SERVER['REQUEST_METHOD']=="POST") {
    $id = $_POST['id'];
    $iname = $_POST['iname'];
    $igroup = $_POST['igroup'];
    $icost = $_POST['icost'];
    $iprice = $_POST['iprice'];
    $idprc = $_POST['idprc'];
    $istock = $_POST['istock'];
    $cstock = $_POST['cstock'];
    $img = $_POST['img'];
    $likes = $_POST['likes'];
    $date = date("d-m-y");
    $hr = date("h")+1;
    $time = date("$hr:i:s.a");


    require("../../class/del_class.php");

    $del_ob = new DEL();

    
    require("../../class/ins_class.php");

    $ins_ob = new INS();

    $del_con = $del_ob->del_item($id);
    if ($del_con) {
       
        $ins_con = $ins_ob->ins_item_del($iname,$img,$igroup,$icost,$iprice,$idprc,$istock,$cstock,$likes,$date,$time);
        if ($ins_con) {
            header("location:../item_upload/item_upload.php");     
        }else {
            header("location:../item_upload/item_upload.php?msg='item deleted but not uploaded to table'");
        }
    }else {
        header("location:../item_upload/item_upload.php?msg='item not deleted'");
    }
}




?>