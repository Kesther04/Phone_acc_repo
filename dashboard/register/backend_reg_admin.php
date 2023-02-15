<?php
if ($_SERVER['REQUEST_METHOD']=="POST") {
    $full = $_POST['full'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $pno = $_POST['pno'];
    $date = date("d/m/y");
    $hour = date("h")+1;
    $time = date("$hour:i:s.a");

    require("../class/ins_class.php");

    $ins_ob = new INS();

    $ins_ad = $ins_ob->ins_reg($full,$gender,$email,$pass,$pno,$date,$time);

    if ($ins_ad) {
        header("location:../login/login.php");
    }else {
        header("location:register.php?msg='not registered'");
    }
}


?>