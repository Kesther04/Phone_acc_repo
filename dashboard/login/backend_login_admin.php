<?php

session_start();

if ($_SERVER['REQUEST_METHOD']=="POST") {

    require("../class/sel_class.php");

    $email = $_POST['email'];
    $pass = $_POST['pass'];
    
    if (empty($email)) {
        header("location:login.php?msg=ENTER YOUR EMAIL ADDRESS");
    }
    elseif (empty($pass)) {
        header("location:login.php?msg=ENTER YOUR PASSWORD");
    }
    elseif (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
        header("location:login.php?msg=INVALID EMAIL ADDRESS");
    }else {
       $sel_ob = new SEL();

       $sel_ken = $sel_ob->sel_log($email,$pass);
        if($sel_ken->num_rows>0){
            $row =$sel_ken->fetch_assoc();
            $_SESSION['id'] = $row['id'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['pass'] = $row['password'];
            $_SESSION['name'] = $row['fullname'];
    
            header("location:../dash_board/item_upload/item_upload.php");
        }else {
            header("location:login.php?msg=INCORRECT EMAIL OR PASSWORD");
        }
    }
}

?>