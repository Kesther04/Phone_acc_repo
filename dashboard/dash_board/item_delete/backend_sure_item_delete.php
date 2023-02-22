<?php
if ($_SERVER['REQUEST_METHOD']=="POST") {
    $id = $_POST['id'];

    require("../../class/del_class.php");

    $del_ob = new DEL();

    $del_con = $del_ob->del_item($id);
    if ($del_con) {
        header("location:../item_upload/item_upload.php");
    }else {
        header("location:../item_upload/item_upload.php?msg='item not deleted'");
    }
}




?>