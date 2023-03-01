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

    
    public function del_carts_all(){
        require("d_con/database_connection.php");

        $del = $con->query("DELETE FROM cart_table");

        return $del;
    }
    
    public function del_cart_id($id){
        require("d_con/database_connection.php");

        $del = $con->query(" DELETE FROM cart_table WHERE  item_id='$id' ");

        return $del;
    }

}






?>