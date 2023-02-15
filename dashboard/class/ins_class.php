<?php

class  INS
{
    
    public function ins_reg($full,$gender,$email,$pass,$pno,$date,$time){
        require("d_con/database_connection.php");

        $ins = $con->query("INSERT INTO admin_table (fullname,gender,email,password,pnumber,date,time)VALUE('$full','$gender','$email','$pass','$pno','$date','$time')");

        return $ins;
    }
}




?>