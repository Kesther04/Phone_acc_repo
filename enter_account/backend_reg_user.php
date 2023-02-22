<?php
if ($_SERVER['REQUEST_METHOD']=="POST") {
    $full = $_POST['uname'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $badd = $_POST['badd'];
    $shpadd = $_POST['shpadd'];
    $date = date("d/m/y");
    $hour = date("h")+1;
    $time = date("$hour:i:s.a");

    require("../dashboard/class/ins_class.php");

    $ins_ob = new INS();

    $ins_ad = $ins_ob->ins_reg_user($full,$email,$pass,$badd,$shpadd,$date,$time);

    if ($ins_ad) {
        header("location:login.php");
    }else {
        header("location:register.php?msg='not registered'");
    }
}


?>