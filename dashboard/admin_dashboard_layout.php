<?php 
    session_start();
    if(!isset($_SESSION['id'])){
        header('location:../../login/login.php');
    }
?>

<script src="../../../js/dash.js"></script>

<div  id="peon" >&#9776;</div>

    <div class="dashboard">
        <div id="losec">&times;</div>
       

        <img src="../../../img/logo.png" class="dash-logo">
    
        <div class="dash-b">
            <a href="../../../index.php" target="blank">
                <span>
                    <img src="../../../img/home.svg" class="fir-img"><img src="../../../img/lhome.svg" class="sec-img">HOME
                </span>
            </a>
        </div>
        <div class="dash-b">
            <a href="../item_upload/item_upload.php">
                <span>
                    <img src="../../../img/item_upload.svg"  class="fir-img"><img src="../../../img/lblog.svg" class="sec-img" >UPLOAD ITEM
                </span>
            </a>
        </div>
        <div class="dash-b">
            <a href="../item_update/item_update.php">
                <span>
                <img src="../../../img/upd-fill.svg"  class="fir-img"><img src="../../../img/upd.svg" class="sec-img">UPDATE ITEM
                </span>
            </a>
        </div>

        <div class="dash-b">
            <a href="../item_delete/item_delete.php">
                <span>
                <img src="../../../img/del-fill.svg"  class="fir-img"><img src="../../../img/del.svg" class="sec-img">DELETE ITEM
                </span>
            </a>
        </div>
        <div class="dash-b">
           
                
            <button onclick="if(window.confirm('Are you sure want to log out of this page')){window.location='../../login/login.php';}">
                <span>
                    <img src="../../../img/box_log (2).svg"  class="fir-img"><img src="../../../img/litem.svg" class="sec-img">LOG OUT
                </span>
            </button>
            
        </div>
        
    </div>



   

