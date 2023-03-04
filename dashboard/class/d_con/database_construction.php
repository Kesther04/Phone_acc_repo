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
item_group varchar(150)not null,
cost_price varchar(150)not null,
item_price varchar(150)not null,
dis_perc varchar(150)not null,
open_stock varchar(150)not null,
close_stock varchar(150)not null,
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


$feature_tb = $con->query("CREATE TABLE if not exists feature_table
(id int(100)not null primary key auto_increment,
item_id varchar(100)not null,
item_name varchar(150)not null,
feature_name varchar(150)not null,
feature_prop text not null,
date varchar(20)not null,
time varchar(20)not null)ENGINE=innoDB");

if ($feature_tb) {
    echo "<p>3rd tb created</p>";
}else {
    echo "<p>3rd not created</p>";
}


$user_tb = $con->query("CREATE TABLE if not exists user_table
(id int(100)not null primary key auto_increment,
fullname varchar(120)not null,
email varchar(120)not null,
password  varchar(120)not null,
b_add text not null,
shp_add text not null,
date varchar(20)not null,
time varchar(20)not null)ENGINE=innoDB");

if ($user_tb) {
    echo "<p>4th tb created</p>";
}else {
    echo "<p>4th not created</p>";
}

$del_tb = $con->query("CREATE TABLE if not exists del_table
(id int(100)not null primary key auto_increment,
item_name varchar(150)not null,
item_img varchar(150)not null,
item_group varchar(150)not null,
cost_price varchar(150)not null,
item_price varchar(150)not null,
dis_perc varchar(150)not null,
open_stock varchar(150)not null,
close_stock varchar(150)not null,
likes varchar(50)not null,
date varchar(20)not null,
time varchar(20)not null)ENGINE=innoDB");

if ($del_tb) {
    echo "<p>5th table created</p>";
}else {
    echo "<p>5th table not created</p>";
}

$cart_tb = $con->query("CREATE TABLE if not exists cart_table
(id int(100)not null primary key auto_increment,
item_id int(100)not null,
item_name varchar(150)not null,
item_img varchar(150)not null,
item_price varchar(150)not null,
item_no varchar(150)not null,
session varchar(50)not null,
date varchar(20)not null,
time varchar(20)not null)ENGINE=innoDB");

if ($cart_tb) {
    echo "<p>6th table created</p>";
}else {
    echo "<p>6th table not created</p>";
}


$likes_tb = $con->query("CREATE TABLE if not exists likes_table
(id int(100)not null primary key auto_increment,
item_id int(100)not null,
item_name varchar(500)not null,
session varchar(50)not null,
likes varchar(50)not null,
date varchar(20)not null,
time varchar(20)not null)ENGINE=innoDB");
if ($likes_tb) {
    echo "<p>7th table created</p>";
}else {
    echo "<p>7th table not created</p>";
}
?>