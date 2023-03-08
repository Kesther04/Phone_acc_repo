<?php 
    session_start();
    if(!isset($_SESSION['id'])){
        header('location:../../enter_account/login.php');
    }
?>
<header>
  <div class="logo-div">
    <img src="../../img/logo.png">
    <div class="open-div">&#9776;</div>
  </div>
  
  <div class="omega-header-unit">
  
  <div class="header-unit">

    <div class="close-div">&times;</div>
    
    <div><button>Categories<span class="imgcat"><img src="../../img/bt_arrow.png"></span></button></div>
    <div class="header-input"> <input type="text" placeholder="What do you want to buy?"><span class="imgcat"><img src="../../img/search.png"></span></div>
  </div>

  <div class="snd-header-unit">
    <?php 
      require("../../dashboard/class/sel_class.php");
      $sel_ob = new SEL();
      $sess = $_SESSION['USER'];
      $sel_cart_con = $sel_ob->sel_cart_sup_no($sess);
      if ($sel_cart_con) {
        $row = $sel_cart_con->fetch_assoc();
        $ritno = $row['SUM(item_no)'];
        if ($ritno == "") { ?>
          <div><a href="../../cart/" target="-blank" title="Access All Products added to Cart"><img src="../../img/shpp.png"></a></div>
    <?php }elseif ($ritno > 99) { ?>
    <div>
      <a href="../../cart/" target="-blank" title="Access All Products added to Cart">
        <img src="../../img/shpp.png"><span class="red-symb"><?php echo '99+'; ?></span>
      </a>
    </div>
    <?php }else {  ?>
    <div>
      <a href="../../cart/" target="-blank" title="Access All Products added to Cart">
        <img src="../../img/shpp.png"><span class="red-symb"><?php echo $ritno; ?></span>
      </a>
    </div>
    <?php } } ?>
    <div><img src="../../img/heart.png"></div>
    <div><button><a href="../dashboard/dashboard.php">My account</a></button></div>
  </div>
  </div>
</header>