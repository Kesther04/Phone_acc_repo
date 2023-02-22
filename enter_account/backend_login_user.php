<?php

session_start();

if ($_SERVER['REQUEST_METHOD']=="POST") {

    require("../dashboard/class/sel_class.php");

    $uneml = $_POST['uname'];
    $pass = $_POST['pass'];

    $sel_ob = new SEL();
    
    if (empty($uneml)) {
        header("location:login.php?msg=ENTER YOUR EMAIL ADDRESS/USERNAME");
    }
    elseif (empty($uneml)) {
        header("location:login.php?msg=ENTER YOUR PASSWORD");
    }
    elseif (filter_var($uneml,FILTER_VALIDATE_EMAIL)) {
        
        $sel_ken = $sel_ob->sel_log_user_email($uneml,$pass);
        if($sel_ken->num_rows>0){
           $row =$sel_ken->fetch_assoc();
           $_SESSION['id'] = $row['id'];
           $_SESSION['email'] = $row['email'];
           $_SESSION['pass'] = $row['password'];
           $_SESSION['name'] = $row['fullname'];
   
           header("location:../Account/dashboard/dashboard.php");
        }else {
           header("location:login.php?msg=INCORRECT EMAIL OR PASSWORD");
        }
    }else {

        $sel_ken = $sel_ob->sel_log_user_name($uneml,$pass);
        if($sel_ken->num_rows>0){
            $row =$sel_ken->fetch_assoc();
            $_SESSION['id'] = $row['id'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['pass'] = $row['password'];
            $_SESSION['name'] = $row['fullname'];
    
            header("location:../Account/dashboard/dashboard.php");
        }else {
            header("location:login.php?msg=INCORRECT USERNAME OR PASSWORD");
        }
    }
}

?>