<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../css/item_upload.css" media="all">
    <link rel="stylesheet" href="../../../css/dash_css_rep.css" media="all">
    <script src="../../../js/jquery.js"></script>
    <script src="../../../js/ajax.js"></script>
    <script src="../../../js/metro.js"></script>
    <title>DASHBOARD</title>
    
</head>
<body>

<?php require("../../admin_dashboard_layout.php"); ?>

<section class="main-div-container">

    <div id="masag">
        <div class="msg">    
            <div class="msa"></div>
            <button class="aj-btn"><a href="item_upload.php" title="return to item upload page">COMPLETE</a></button>
        </div>
    </div>
    


<form  class="news_upl" action="backend_item_upload.php" method="post" enctype="multipart/form-data">
    

<div class="sec-div-container">

<h1>UPLOAD ITEM</h1>

    
<div class="fir-div-container">
<table>

<tr>
    <td><span>Product Name</span><input type="text" name="iname" placeholder="Product Name" required></td>

    <td><span>Product Image</span><input type="file" name="img"  required></td>
</tr>

<tr>
    <td><span>Cost Price</span><input type="number" name="icost" placeholder="add product cost price" required></td>

    <td><span>Product Price</span><input type="number" name="iprice" placeholder="add product price" required></td>
</tr>



<tr>
    <td><span>Product Discount Percentage</span><input type="number" name="idprc" placeholder="add a discount price" required></td>

    <td>
        <span>Product Group</span>
        <select name="igroup" required>
            <option></option>
            <option>bluetooth_speakers</option>
            <option>earpods</option>
            <option>handsfree</option>
            <option>headphones</option>
            <option>memory_cards</option>
            <option>phone_cases</option>
            <option>phone_chargers</option>
            <option>power_banks</option>
            <option>screen_guards</option>
            <option>smart_watches</option>
            <option>wi-fi_routers</option>
        </select>
    </td>

</tr>


<tr>
    <td><span>Product Stock</span><input type="number" name="istock" placeholder="add quantity of product" required></td>
</tr>

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