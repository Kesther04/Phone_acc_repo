<?php

class  UPD
{
    public function upl($likes,$pt,$pid){
        require("d_con/database_connection.php");

        $update = $con->query("UPDATE item_table SET likes = '$likes' WHERE  id = '$pid' AND item_name = '$pt'  ");

        return $update;
    }

    public function upd_item_tb($cprice,$price,$dis_price,$istock,$cstock,$id){
        require("d_con/database_connection.php");

        $update = $con->query("UPDATE item_table SET cost_price='$cprice',item_price='$price',dis_perc='$dis_price',open_stock='$istock',close_stock='$cstock' WHERE id ='$id' ");

        return $update;
    }

    public function upd_user_tb($full,$email,$pass,$id){
        require("d_con/database_connection.php");

        $update = $con->query("UPDATE user_table SET fullname='$full',email='$email',password='$pass' WHERE  id = '$id'  ");

        return $update;
    }

    
    public function upd_user_tb_add($badd,$shpadd,$id){
        require("d_con/database_connection.php");

        $update = $con->query("UPDATE user_table SET b_add='$badd',shp_add='$shpadd' WHERE  id = '$id'  ");

        return $update;
    }
}



?>