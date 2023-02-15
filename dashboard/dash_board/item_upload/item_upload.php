<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../css/item_upload.css" media="all">
    <link rel="stylesheet" href="../../../css/dash_css_rep.css" media="all">
    <script src="../../../js/jquery.js"></script>
    <!-- <script src="../js/ajax.js"></script> -->
    <title>UPLOAD ITEM</title>
    
</head>
<body>

<?php require("../../admin_dashboard_layout.php"); ?>

<section class="main-div-container">

    


<form  class="news_upl" action="backend_item_upload.php" method="post" enctype="multipart/form-data">
    <div id="masag">
        <div class="msg">    
            <div class="msa"></div>
            <button class="aj-btn"><a href="item_upload.php">OKAY</a></button>
        </div>
    </div>

<div class="sec-div-container">

<h1>UPLOAD ITEMS</h1>

    
<div class="fir-div-container">
<table>


</table>
</div>
       
    <div class="con-btn-div">
        <button class="con-btn">SUBMIT</button>
    </div>
    
   
</div>
</form>


    
</section>


</body>
</html>