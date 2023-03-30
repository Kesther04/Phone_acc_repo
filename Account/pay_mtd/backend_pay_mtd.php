<?php
require("../../session.php");

if ($_SERVER['REQUEST_METHOD']=="POST") {
    $tot_price = $_POST['amt'];
    $user_id = $_POST['userid'];
    $sess = $_SESSION['USER'];
    $stat = 'PENDING';
    $leav_date = '';
    $ddant = date('d')+5;
    $mdant = date("m");
    $ydant = date("y");
    if ($mdant=="04" AND $mdant=="06" AND $mdant=="09" AND $mdant=="11" AND $ddant >= 30) {
        $ndant = $ddant-30;
        $nmd = $mdant+01;
        $arr_date = date("$ndant/$nmd/y");
    }
    elseif ($mdant !=="04" AND $mdant !=="06" AND $mdant !=="09" AND $mdant !=="11" AND $ddant >=31) {
        $ndant = $ddant-31;
        $nmd = $mdant+01;
        $arr_date = date("$ndant/$nmd/y");
    }
    elseif ($mdant=="12" AND $ddant >=31) {
        $ndant = $ddant-31;
        $nmd = $mdant-$mdant;
        $arr_date = date("$ndant/$nmd/y");
    }else{
        $arr_date = date("$ddant/m/y");
    }
    
    $deliv_time = '';
    $date = date("d/m/y");
    $hour = date("h")+1;
    $time = date("$hour:i:s.a");

    

    require("../../dashboard/class/sel_class.php");

    $sel_ob = new SEL();

    require("../../dashboard/class/ins_class.php");

    $ins_ob = new INS();

    require("../../dashboard/class/del_class.php");

    $del_ob = new DEL();

    require("../../dashboard/class/up_class.php");

    $up_ob = new UPD();
    
    $sel_chk = $sel_ob->sel_acc_chg($user_id);
    if ($sel_chk) {
        $con = $sel_chk->fetch_assoc();
        $bcon = $con['b_add'];
        $shcon = $con['shp_add'];

        if ($bcon == "" AND $shcon == "") {
            echo "No Shipping or Billing Address Placed";
        }
        elseif ($bcon == "" AND $shcon !== "") {
            $sel_con = $sel_ob->sel_carts($sess);
            if ($sel_con) {
                echo "product transaction successful";
                while ($row = $sel_con->fetch_assoc()) {
                $item_id = $row['item_id'];
                $it_name = $row['item_name'];
                $img = $row['item_img'];
                $price = $row['item_price'];
                $item_no = $row['item_no'];
                $sess = $row['session'];
                
    
                $ins_con = $ins_ob->ins_sales($item_id,$user_id,$it_name,$img,$price,$tot_price,$item_no,$sess,$stat,$leav_date,$arr_date,$deliv_time,$date,$time);
                if ($ins_con) {
                    $del_con = $del_ob->del_carts_all($sess);
                    $sel_ion = $sel_ob->sel_item_id($item_id);
                    if ($sel_ion) {
                        $dow = $sel_ion->fetch_assoc();
                        $dstock = $dow['close_stock'];
                        $cstock = $dstock-$item_no;
                        $up_con = $up_ob->upd_item_tab($cstock,$item_id);
                        
                    }
                    
                }
                }
            }
        }
        elseif ($bcon !== "" AND $shcon == "") {
            $sel_con = $sel_ob->sel_carts($sess);
            if ($sel_con) {
                echo "product transaction successful";
                while ($row = $sel_con->fetch_assoc()) {
                $item_id = $row['item_id'];
                $it_name = $row['item_name'];
                $img = $row['item_img'];
                $price = $row['item_price'];
                $item_no = $row['item_no'];
                $sess = $row['session'];
                
    
                $ins_con = $ins_ob->ins_sales($item_id,$user_id,$it_name,$img,$price,$tot_price,$item_no,$sess,$stat,$leav_date,$arr_date,$deliv_time,$date,$time);
                if ($ins_con) {
                    $del_con = $del_ob->del_carts_all($sess);
                    $sel_ion = $sel_ob->sel_item_id($item_id);
                    if ($sel_ion) {
                        $dow = $sel_ion->fetch_assoc();
                        $dstock = $dow['close_stock'];
                        $cstock = $dstock-$item_no;
                        $up_con = $up_ob->upd_item_tab($cstock,$item_id);
                        
                    }
                    
                }
                }
            }
        }else {
            $sel_con = $sel_ob->sel_carts($sess);
            if ($sel_con) {
                echo "product transaction successful";
                while ($row = $sel_con->fetch_assoc()) {
                $item_id = $row['item_id'];
                $it_name = $row['item_name'];
                $img = $row['item_img'];
                $price = $row['item_price'];
                $item_no = $row['item_no'];
                $sess = $row['session'];
                
    
                $ins_con = $ins_ob->ins_sales($item_id,$user_id,$it_name,$img,$price,$tot_price,$item_no,$sess,$stat,$leav_date,$arr_date,$deliv_time,$date,$time);
                if ($ins_con) {
                    $del_con = $del_ob->del_carts_all($sess);
                    $sel_ion = $sel_ob->sel_item_id($item_id);
                    if ($sel_ion) {
                        $dow = $sel_ion->fetch_assoc();
                        $dstock = $dow['close_stock'];
                        $cstock = $dstock-$item_no;
                        $up_con = $up_ob->upd_item_tab($cstock,$item_id);
                        
                    }
                    
                }
                }
            }
        }

    }


}

?>