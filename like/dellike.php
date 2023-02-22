<?php
if ($_SERVER['REQUEST_METHOD']=="POST") {
    $pt = $_POST['pt'];
    $pid = $_POST['pid'];
    $likes = 0;
    require("../dashboard/class/up_class.php");
    require("../dashboard/class/sel_class.php");

    $up_ob = new UPD();
        $up_like = $up_ob->upl($likes,$pt,$pid);
        if ($up_like) {
            $sel_ob = new SEL();
            $sel_like = $sel_ob->sel_lk($pt,$pid);
            if ($sel_like) {
                $row = $sel_like->fetch_assoc();
                echo $row['likes'];
            }
        }else {
            echo 'ERR';
        }

}

?>