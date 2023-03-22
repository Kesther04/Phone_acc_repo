<?php

class  INS
{
    
    public function ins_reg($full,$gender,$email,$pass,$pno,$date,$time){
        require("d_con/database_connection.php");

        $ins = $con->query("INSERT INTO admin_table (fullname,gender,email,password,pnumber,date,time)VALUE('$full','$gender','$email','$pass','$pno','$date','$time')");

        return $ins;
    }
    
    public function ins_reg_user($full,$email,$pass,$badd,$shpadd,$date,$time){
        require("d_con/database_connection.php");

        $ins = $con->query("INSERT INTO user_table (fullname,email,password,b_add,shp_add,date,time)VALUE('$full','$email','$pass','$badd','$shpadd','$date','$time')");

        return $ins;
    }

    public function ins_item($nt,$img,$group,$cprice,$price,$dis_price,$stock,$cstock,$likes,$date,$time){
        require("d_con/database_connection.php");

        $insert = $con->query("INSERT INTO item_table (item_name,item_img,item_group,cost_price,item_price,dis_perc,open_stock,close_stock,likes,date,time)VALUE('$nt','$img','$group','$cprice','$price','$dis_price','$stock','$cstock','$likes','$date','$time')");

        return $insert;
    }

    
    public function ins_item_del($id,$nt,$img,$group,$cprice,$price,$dis_price,$stock,$cstock,$likes,$date,$time){
        require("d_con/database_connection.php");

        $insert = $con->query("INSERT INTO del_table (item_id,item_name,item_img,item_group,cost_price,item_price,dis_perc,open_stock,close_stock,likes,date,time)VALUE('$id','$nt','$img','$group','$cprice','$price','$dis_price','$stock','$cstock','$likes','$date','$time')");

        return $insert;
    }
    
    public function ins_feat($id,$iname,$fn,$fp,$date,$time){
        require("d_con/database_connection.php");

        $insert = $con->query("INSERT INTO feature_table (item_id,item_name,feature_name,feature_prop,date,time)VALUE('$id','$iname','$fn','$fp','$date','$time')");

        return $insert;
    }

    public function ins_cart($id,$name,$img,$price,$no,$sess,$date,$time){
        require("d_con/database_connection.php");

        $insert = $con->query("INSERT INTO cart_table (item_id,item_name,item_img,item_price,item_no,session,date,time)VALUE('$id','$name','$img','$price','$no','$sess','$date','$time')");

        return $insert;
    }

    
    public function ins_like($pid,$pt,$sess,$likes,$date,$time){
        require("d_con/database_connection.php");

        $inse = $con->query("INSERT INTO likes_table (item_id,item_name,session,likes,date,time)VALUE('$pid','$pt','$sess','$likes','$date','$time')");

        return $inse;
    }

    public function ins_sales($item_id,$user_id,$it_name,$img,$price,$tot_price,$item_no,$sess,$stat,$leav_date,$arr_date,$deliv_time,$date,$time){
        require("d_con/database_connection.php");

        $inse = $con->query("INSERT INTO sales_table (item_id,user_id,item_name,item_img,item_price,tot_item_prc,item_no,session,status_deliv,leave_date,arrive_date,deliv_time,date,time)VALUE('$item_id','$user_id','$it_name','$img','$price','$tot_price','$item_no','$sess','$stat','$leav_date','$arr_date','$deliv_time','$date','$time')");

        return $inse;
    }
}




?>