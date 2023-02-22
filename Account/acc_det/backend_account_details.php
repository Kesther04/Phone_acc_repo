<?php
if ($_SERVER['REQUEST_METHOD']=="POST") {
    $id = $_POST['id'];
    $full = $_POST['disname'];
    $email = $_POST['email'];
    $cpass = $_POST['cpass'];
    $pass = $_POST['npass'];
    $conpass = $_POST['conpass'];
    
    require("../../dashboard/class/up_class.php");

    $upd_ob = new UPD();

    require("../../dashboard/class/sel_class.php");

    $sel_ob = new SEL();
    
    $sel_con = $sel_ob->sel_acc_chg($id);
    if ($sel_con) {
        $row = $sel_con->fetch_assoc();
        $remail = $row['email'];
        $rpass = $row['password'];
    


    if ($cpass !== $rpass AND $pass !== "") {
        echo "<p style='color:red;'>the current password is not correct </p>";
        
    }
    elseif ($pass !== $conpass ) {
        echo "<p style='color:red;'>confirm new password </p>";
    }
    elseif ($email == "" AND $pass !== "") {
        
        $up_con = $upd_ob->upd_user_tb($full,$remail,$pass,$id);
        if ($up_con) {
            echo "<p style='color:blue;'>account details updated successfully</p>";
        }else {
            echo "<p style='color:red;'>account details not updated successfully</p>";
        }

    } 
    elseif ($pass == "" AND $email !== "") {
        
        $up_con = $upd_ob->upd_user_tb($full,$email,$rpass,$id);
        if ($up_con) {
            echo "<p style='color:blue;'>account details updated successfully</p>";
        }else {
            echo "<p style='color:red;'>account details not updated successfully</p>";
        }

    }
    elseif ($pass == "" AND $email == "") {
        
        $up_con = $upd_ob->upd_user_tb($full,$remail,$rpass,$id);
        if ($up_con) {
            echo "<p style='color:blue;'>account details updated successfully</p>";
        }else {
            echo "<p style='color:red;'>account details not updated successfully</p>";
        }

    }else {
        $up_con = $upd_ob->upd_user_tb($full,$email,$pass,$id);
        if ($up_con) {
            echo "<p style='color:blue;'>account details updated successfully</p>";
        }else {
            echo "<p style='color:red;'>account details not updated successfully</p>";
        }
    }

    }
    

}


?>