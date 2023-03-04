<?php
class  DEL
{
    public function del_item($id){
        require("d_con/database_connection.php");

        $del = $con->query("DELETE FROM item_table WHERE id = '$id'");

        return $del;
    }    

    public function del_delitem($id){
        require("d_con/database_connection.php");

        $del = $con->query("DELETE FROM del_table WHERE id = '$id'");

        return $del;
    }    

    
    public function del_carts_all($sess){
        require("d_con/database_connection.php");

        $del = $con->query("DELETE FROM cart_table WHERE session='$sess' ");

        return $del;
    }
    
    public function del_cart_id($id,$sess){
        require("d_con/database_connection.php");

        $del = $con->query(" DELETE FROM cart_table WHERE  item_id='$id'AND session='$sess' ");

        return $del;
    }

    public function del_lk($sess,$pid,$pt){
        require("d_con/database_connection.php");

        $delete = $con->query(" DELETE  FROM likes_table WHERE session='$sess' AND item_id='$pid' AND item_name='$pt'  ");

        return $delete;
    }    
}






?>