<?php 
    session_start();
    if(!isset($_SESSION['id'])){
        header('location:../../enter_account/login.php');
    }
?>
<header>
  <div class="logo-div"><img src="../../img/logo.png" ></div>

  <div class="open-div">&#9776;</div>
  <div class="header-unit">
    <div class="close-div">&times;</div>
    <div><button>Categories<span class="imgcat"><img src="../../img/bt_arrow.png"></span></button></div>
    <div class="header-input"> <input type="text" placeholder="What do you want to buy?"><span class="imgcat"><img src="../../img/search.png"></span></div>
    <div><img src="../../img/shpp.png"></div>
    <div><img src="../../img/heart.png"></div>
    <div><button><a href="../dashboard/dashboard.php">My account</a></button></div>
  </div>
</header>