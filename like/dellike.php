<?php
if ($_SERVER['REQUEST_METHOD']=="POST") {
    $pt = $_POST['pt'];
    $pid = $_POST['pid'];
    $sess = $_POST['psess'];
    $likes = 0;
    $date = date("d-m-y");
    $hr = date("h")+1;
    $time = date("$hr:i:s.a");

    require("../dashboard/class/up_class.php");
    $up_ob = new UPD();

    require("../dashboard/class/sel_class.php");
    $sel_ob = new SEL();
    
    require("../dashboard/class/del_class.php");
    $del_ob = new DEL();

    $del_like = $del_ob->del_lk($sess,$pid,$pt);
    if ($del_like) {
            $sel_dellike = $sel_ob->sel_lk_tb($pt,$pid);
            if ($sel_dellike) {
                $dow = $sel_dellike->fetch_assoc();
                $dlikes = $dow['SUM(likes)'];
                if ($dlikes == "") {
                    $up_like = $up_ob->upl($likes,$pt,$pid);
                    if ($up_like) {
                        $sel_like = $sel_ob->sel_lk($pt,$pid);
                        if ($sel_like) {
                            $row = $sel_like->fetch_assoc();
                            echo $row['likes'];
                        }
                    }else {
                        echo 'ERR';
                    }    
                }else {
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

        
        

}


?>