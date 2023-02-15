<?php
class  SEL
{
    public function sel_log($email,$pass){
        require("d_con/database_connection.php");

        $select = $con->query(" SELECT * FROM admin_table WHERE email = '$email' AND password = '$pass' ");

        return $select;
    }    
}




?>