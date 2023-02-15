<?php 
    /*session_start();
    if(!isset($_SESSION['id'])){
        header('location:../../login/login.php');
    }*/
?>

<script src="../../../js/dash.js"></script>

<div  id="peon" >&#9776;</div>

    <div class="dashboard">
        <div id="losec">&times;</div>
       

        <img src="../../../img/logo.png">
    
        <div class="dash-b"><a href="../../../index.php" target="blank">HOME</a></div>
        <div class="dash-b"><a href="../item_upload/item_upload.php">UPLOAD ITEM</a></div>
        <div class="dash-b"><button onclick="if(window.confirm('Are you sure want to log out of this page')){window.location='../../login/login.php';}">LOG OUT</button></div>
        
    </div>



   

