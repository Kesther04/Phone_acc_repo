<?php
require("database_connection.php");


$database = $con->query("CREATE DATABASE if not exists phone_accesories");

if ($database) {
    print("<p>database created</p>");
}



$item_tb = $con->query("CREATE TABLE if not exists item_table
(id int(100)not null primary key auto_increment,
item_name varchar(150)not null,
item_img varchar(150)not null,
item_price varchar(150)not null,
dis_price varchar(150)not null,
likes varchar(50)not null,
date varchar(20)not null,
time varchar(20)not null)ENGINE=innoDB");

if ($item_tb) {
    echo "<p>created</p>";
}else{
    echo "<p>not created</p>";
}


$admin_tb = $con->query("CREATE TABLE if not exists admin_table
(id int(100)not null primary key auto_increment,
fullname varchar(120)not null,
gender varchar(120)not null,
email varchar(120)not null,
password  varchar(120)not null,
pnumber varchar(120)not null,
date varchar(20)not null,
time varchar(20)not null)ENGINE=innoDB");

if ($admin_tb) {
    echo "<p>2nd tb created</p>";
}else {
    echo "<p>2nd not created</p>";
}

?>