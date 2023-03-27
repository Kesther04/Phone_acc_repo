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

    
    public function upd_cart_tb($price,$item_no,$id,$item_id,$sess){
        require("d_con/database_connection.php");

        $update = $con->query("UPDATE cart_table SET item_price='$price',item_no='$item_no' WHERE id ='$id' AND item_id = '$item_id'AND session = '$sess' ");

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

    public function upd_item_tab($cstock,$id){
        require("d_con/database_connection.php");

        $update = $con->query("UPDATE item_table SET close_stock='$cstock' WHERE id ='$id' ");

        return $update;
    }

    public function upd_feat_tab($nid,$id){
        require("d_con/database_connection.php");

        $update = $con->query("UPDATE feature_table SET item_id='$nid' WHERE item_id ='$id' ");

        return $update;
    }
}



?>