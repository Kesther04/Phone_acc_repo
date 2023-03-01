<?php

if ($_SERVER['REQUEST_METHOD']="POST") {
    $fn = $_POST['fn'];
    $fp = $_POST['fp'];
    $id = $_POST['id'];
    $iname = $_POST['iname'];
    $date = date("d-m-y");
    $hr = date("h")+1;
    $time = date("$hr:i:s.a");

    
    require("../../class/ins_class.php");

    $ins_ob = new INS();

    $ins_ken = $ins_ob->ins_feat($id,$iname,$fn,$fp,$date,$time);
    if ($ins_ken) {
        echo "<p>upload next feature</p>";
    }else {
        echo "<p>not uploaded</p>";
    }
}



?>