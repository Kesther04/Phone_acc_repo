<?php
class  SEL
{
    public function sel_log($email,$pass){
        require("d_con/database_connection.php");

        $select = $con->query(" SELECT * FROM admin_table WHERE email = '$email' AND password = '$pass' ");

        return $select;
    }    

    public function sel_log_user_email($uneml,$pass){
        require("d_con/database_connection.php");

        $select = $con->query(" SELECT * FROM user_table WHERE email = '$uneml' AND password = '$pass' ");

        return $select;
    }    

    
    public function sel_log_user_name($uneml,$pass){
        require("d_con/database_connection.php");

        $select = $con->query(" SELECT * FROM user_table WHERE fullname = '$uneml' AND password = '$pass' ");

        return $select;
    }    

    
    public function sel_acc_chg($id){
        require("d_con/database_connection.php");

        $select = $con->query(" SELECT * FROM user_table WHERE id='$id' ");

        return $select;
    }    
        
    public function sel_nt($nt,$group){
        require("d_con/database_connection.php");

        $select = $con->query(" SELECT * FROM item_table WHERE item_name = '$nt' AND item_group = '$group' ");

        return $select;
    }

    public function sel_nsel(){
        require("d_con/database_connection.php");

        $select = $con->query(" SELECT * FROM item_table  ORDER BY(id)DESC LIMIT 12");

        return $select;
    }

    
    public function sel_nselacc(){
        require("d_con/database_connection.php");

        $select = $con->query(" SELECT * FROM item_table  ORDER BY  RAND() LIMIT 4");

        return $select;
    }

    
    public function sel_nprc($nt){
        require("d_con/database_connection.php");

        $select = $con->query(" SELECT * FROM item_table WHERE item_name = '$nt'");

        return $select;
    }

    
    public function sel_nf($nt){
        require("d_con/database_connection.php");

        $select = $con->query(" SELECT * FROM feature_table WHERE item_name = '$nt' ");

        return $select;
    }

    public function sel_lk($pt,$pid){
        require("d_con/database_connection.php");

        $select = $con->query(" SELECT * FROM item_table WHERE item_name='$pt' AND id='$pid' ");

        return $select;
    }

    
    public function sel_nselup(){
        require("d_con/database_connection.php");

        $select = $con->query(" SELECT * FROM item_table  ORDER BY(id)DESC");

        return $select;
    }
    
    public function sel_namegp($group){
        require("d_con/database_connection.php");

        $select = $con->query(" SELECT * FROM item_table WHERE item_group='$group' ");

        return $select;
    }
    
    public function sel_nselup_gp(){
        require("d_con/database_connection.php");

        $select = $con->query(" SELECT * FROM item_table  ");

        return $select;
    }

    

    
    public function sel_item_id($pid){
        require("d_con/database_connection.php");

        $select = $con->query(" SELECT * FROM item_table WHERE  id='$pid' ");

        return $select;
    }
}




?>