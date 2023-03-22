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

    
    public function sel_all_user(){
        require("d_con/database_connection.php");

        $select = $con->query(" SELECT * FROM user_table ORDER BY(id) DESC ");

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

        $select = $con->query(" SELECT * FROM item_table ORDER BY(id)DESC LIMIT 4");

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

    
    public function sel_pt_lk_tb($pana,$sess){
        require("d_con/database_connection.php");

        $select = $con->query(" SELECT * FROM likes_table WHERE item_name='$pana' AND session='$sess' ");

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

    
    public function sel_namedelgp($group){
        require("d_con/database_connection.php");

        $select = $con->query(" SELECT * FROM del_table WHERE item_group='$group' ");

        return $select;
    }
    
    public function sel_nselup_gp(){
        require("d_con/database_connection.php");

        $select = $con->query(" SELECT * FROM item_table GROUP BY(item_group)ASC");

        return $select;
    }

    
    public function sel_nseldel_gp(){
        require("d_con/database_connection.php");

        $select = $con->query(" SELECT * FROM del_table GROUP BY(item_group)ASC");

        return $select;
    }

    

    
    public function sel_item_id($pid){
        require("d_con/database_connection.php");

        $select = $con->query(" SELECT * FROM item_table WHERE  id='$pid' ");

        return $select;
    }

    
    public function sel_itemdel_id($pid){
        require("d_con/database_connection.php");

        $select = $con->query(" SELECT * FROM del_table WHERE  id='$pid' ");

        return $select;
    }

    
    public function sel_cart_id($id,$sess){
        require("d_con/database_connection.php");

        $select = $con->query(" SELECT * FROM cart_table WHERE  item_id='$id' AND session='$sess' ");

        return $select;
    }

    
    public function sel_cart_issd($id,$item_id){
        require("d_con/database_connection.php");

        $select = $con->query(" SELECT * FROM cart_table WHERE id='$id'  item_id='$item_id' ");

        return $select;
    }

    
    public function sel_carts($sess){
        require("d_con/database_connection.php");

        $select = $con->query(" SELECT * FROM cart_table WHERE session = '$sess' ");

        return $select;
    }

    
    public function sel_cart_sup($sess){
        require("d_con/database_connection.php");
        
        $select = $con->query(" SELECT *,SUM(item_price) FROM cart_table WHERE session = '$sess' ");

        return $select;
    }

    
    public function sel_cart_sup_no($sess){
        require("d_con/database_connection.php");
        
        $select = $con->query(" SELECT *,SUM(item_no) FROM cart_table WHERE session = '$sess' ");

        return $select;
    }
    
    public function sel_lk_tb($pt,$pid){
        require("d_con/database_connection.php");

        $select = $con->query(" SELECT *,SUM(likes) FROM likes_table WHERE item_name='$pt' AND item_id='$pid' ");

        return $select;
    }

    public function sel_sales($sess,$uid){
        require("d_con/database_connection.php");

        $select = $con->query(" SELECT * FROM sales_table WHERE session = '$sess' AND user_id = '$uid' ORDER BY(id)DESC ");

        return $select;
    }

    
    public function sel_all_sales($uid){
        require("d_con/database_connection.php");

        $select = $con->query(" SELECT * FROM sales_table WHERE user_id='$uid' ORDER BY(id)DESC  ");

        return $select;
    }

    
    public function sel_all_item(){
        require("d_con/database_connection.php");

        $select = $con->query(" SELECT * FROM item_table ORDER BY(id)DESC  ");

        return $select;
    }
    
    public function sel_all_tot_itm($id){
        require("d_con/database_connection.php");

        $select = $con->query("SELECT *, SUM(item_price), SUM(item_no) FROM sales_table WHERE item_id='$id'");

        return $select;
    }

    public function sel_all_dat_itm($id,$date){
        require("d_con/database_connection.php");

        $select = $con->query("SELECT *, SUM(item_price), SUM(item_no) FROM sales_table WHERE item_id='$id' AND date='$date'");

        return $select;
    }

    
    public function sel_all_saledate($uid){
        require("d_con/database_connection.php");

        $select = $con->query(" SELECT * FROM sales_table WHERE user_id='$uid' GROUP BY(date)ASC  ");

        return $select;
    }

    
    public function sel_sales_date($uid,$date){
        require("d_con/database_connection.php");

        $select = $con->query(" SELECT * FROM sales_table WHERE user_id='$uid' AND date='$date' ORDER BY(id)DESC  ");

        return $select;
    }
    
    public function sel_sales_all($uid){
        require("d_con/database_connection.php");

        $select = $con->query(" SELECT * FROM sales_table WHERE user_id='$uid' ORDER BY(id)DESC  ");

        return $select;
    }
}




?>