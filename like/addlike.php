<?php
if ($_SERVER['REQUEST_METHOD']=="POST") {
    $pt = $_POST['pt'];
    $pid = $_POST['pid'];
    $sess = $_POST['psess'];
    $likes = 1;
    $date = date("d-m-y");
    $hr = date("h")+1;
    $time = date("$hr:i:s.a");

    require("../dashboard/class/up_class.php");
    $up_ob = new UPD();

    require("../dashboard/class/sel_class.php");
    $sel_ob = new SEL();
    
    require("../dashboard/class/ins_class.php");
    $ins_ob = new INS();

    $ins_like = $ins_ob->ins_like($pid,$pt,$sess,$likes,$date,$time);
    if ($ins_like) {
            $sel_addlike = $sel_ob->sel_lk_tb($pt,$pid);
            if ($sel_addlike) {
                $dow = $sel_addlike->fetch_assoc();
                $dlikes = $dow['SUM(likes)'];
                $up_like = $up_ob->upl($dlikes,$pt,$pid);
                if ($up_like) {
                    $sel_like = $sel_ob->sel_lk($pt,$pid);
                    if ($sel_like) {
                        $row = $sel_like->fetch_assoc();
                        echo $row['likes'];
                    }
                }else {
                    echo 'ERR';
                }
            }
    }

}





?>