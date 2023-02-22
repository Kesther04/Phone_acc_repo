<?php
class  DEL
{
    public function del_item($id){
        require("d_con/database_connection.php");

        $del = $con->query("DELETE FROM item_table WHERE id = '$id'");

        return $del;
    }    
}






?>