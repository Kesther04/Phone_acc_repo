<?php

if ($_SERVER['REQUEST_METHOD']=="POST") {
    $it_name = $_POST['iname'];
    $nt = str_replace(' ','-', $_POST['iname']);
    $group = $_POST['igroup'];
    $cprice = 'N'.$_POST['icost'];
    $price = 'N'.$_POST['iprice'];
    $dis_price = $_POST['idprc'];
    $stock = $_POST['istock'];
    $cstock = $_POST['istock'];
    $likes = 0;
    $img = $_FILES['img']['name'];
    $filetype = $_FILES['img']['type'];
    $filesize = $_FILES['img']['size'];
    $temp = $_FILES['img']['tmp_name'];
    $date = date("d-m-y");
    $hr = date("h")+1;
    $time = date("$hr:i:s.a");


    require("../../class/ins_class.php");

    $ins_ob = new INS();

    require("../../class/sel_class.php");

    $sel_ob = new SEL();

    $sel_ken = $sel_ob->sel_nt($nt,$group);
    if ($sel_ken->num_rows > 0) {
        $row = $sel_ken->fetch_assoc();
        $snt = $row['item_name'];      

    }

    
    if ($filesize > 10000000000) {
    
        //header ("location:item_upload?msg='FILESIZE IS TOO LARGE'");
        echo "<p>Filesize is too large</p>";
        
    }elseif ($_FILES['img']['type']!=="image/png" AND $_FILES['img']['type']!=="image/jpg" AND $_FILES['img']['type']!=="image/jpeg" AND $_FILES['img']['type']!=="image/jfif" AND $_FILES['img']['type']!=="image/bmp" AND $_FILES['img']['type']!=="image/webp") {
    
         //header ("location:item_upload?msg='INVALID FILE TYPE'");
         echo "<p>Invalid File Type</p>";
    
    }elseif ($sel_ken->num_rows > 0 AND  $snt == $nt ){

        //header ("location:item_upload?msg='FILE TITLE ALREADY IN USE'");
        echo "<p>File Title Already in Use</p>";

    }else {

        $ins_ken = $ins_ob->ins_item($nt,$img,$group,$cprice,$price,$dis_price,$stock,$cstock,$likes,$date,$time);
        if ($ins_ken) {
            header ("location:item_feature?group=$group&name=$nt");
            //echo "<p>ITEM UPLOADED SUCCESSFULLY</p>";
           

            move_uploaded_file($temp, "../../../Accesories/img/".$_FILES['img']['name']);

            $url = '../../../'.'Accesories'.'/'.$group.'/'.$nt.'.php';
            $content = "
<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <link rel='stylesheet' href='../../css/style.css' media='all'>
    <link rel='stylesheet' href='../../css/responsive_style.css' media='all'>
    <script src='../../js/jquery.js'></script>
    <script src='../../js/header_move.js'></script>
    <script src='../../js/ajax.js'></script>
    <title>PURCHASE</title>
</head>
<body>
    <section id='total-div'>
    <?php require('../header.php');?>
                
    <section class='purchase'>
                <h1 class='purch-prod-header'>$it_name</h1>
                <div class='fst-purchase-div'>
                    <div class='fst-inner-fst-purchase-div'>
                        <img src='../img/$img'>
                    </div>
                    <?php require('../price.php'); ?>
                    
                    <div class='thr-inner-fst-purchase-div' >
                        <div class='thr-inner-inner-fst-purchase-div'>
                            <div><img src='../img/1a.png'></div>
            
                            <div>
                                <b>Fast Shipping</b>
                                Receive products in amazing time
                            </div>
                        </div>
            
                        <div class='thr-inner-inner-fst-purchase-div'>
                            <div><img src='../img/1b.png'></div>
            
                            <div>
                                <b>Easy Returns</b>
                                Return Policy the lets you shop at ease
                            </div>
                        </div>
            
                        <div class='thr-inner-inner-fst-purchase-div'>
                            <div><img src='../img/1c.png'></div>
            
                            <div>
                                <b>Always Authentic</b>
                                We only sell 100% authentic products
                            </div>
                        </div>
            
                        <div class='thr-inner-inner-fst-purchase-div'>
                            <div><img src='../img/1d.png'></div>
            
                            <div>
                                <b>Secure Shopping</b>
                                Your data is always protected
                            </div>
                        </div>
                    </div>
            
                </div>
            
                <div class='snd-purchase-div'>
                    <h1 class='purch-prod-header'>$it_name</h1>
            
                    <div class='inner-snd-purchase-div'>

                    
                        <?php require('../feature.php');  ?>
                
              
        
                    </div>
                </div>
            
                <div class='thr-purchase-div'>
                    <div class='fst-inner-thr-purchase-div'>
                        <div class='fst-inner-inner-thr-purchase-div'>
                            <div><span id='num-incr'>0.0</span>/5</div>
                            <div><img src='../img/nstar.png'><img src='../img/nstar.png'><img src='../img/nstar.png'><img src='../img/nstar.png'><img src='../img/nstar.png'></div>
            
                            <div>0 reviews</div>
                        </div>
                        <div class='snd-fst-inner-inner-thr-purchase-div'>
            
            
                            <div>
                            <p><img src='../img/ystar.png'><img src='../img/nstar.png'><img src='../img/nstar.png'><img src='../img/nstar.png'><img src='../img/nstar.png'></p>
                            <p><img src='../img/starrec.png'></p>
                            <p>0</p>
                            </div>
                            
                            <div>
                            <p><img src='../img/ystar.png'><img src='../img/ystar.png'><img src='../img/nstar.png'><img src='../img/nstar.png'><img src='../img/nstar.png'></p>
                            <p><img src='../img/starrec.png'></p>
                            <p>0</p>
                            </div>
            
                            <div>
                            <p>
                            <img src='../img/ystar.png'><img src='../img/ystar.png'><img src='../img/ystar.png'><img src='../img/nstar.png'><img src='../img/nstar.png'></p>
                            <p><img src='../img/starrec.png'></p>
                            <p>0</p>
                            </div>
            
                            <div>
                            <p><img src='../img/ystar.png'><img src='../img/ystar.png'><img src='../img/ystar.png'><img src='../img/ystar.png'><img src='../img/nstar.png'></p>
                            <p><img src='../img/starrec.png'></p>
                            <p>0</p>    
                            </div>
            
                            <div>
                            <p><img src='../img/ystar.png'><img src='../img/ystar.png'><img src='../img/ystar.png'><img src='../img/ystar.png'><img src='../img/ystar.png'></p>
                            <p><img src='../img/starrec.png'></p>
                            <p>0</p>
                            </div>
                        </div>
                        
                    </div>
                    <div class='snd-inner-thr-purchase-div'>
            
                    <?php require('../dis_item.php');  ?>
            
                    </div>
                </div>
    </section>
            
            
    <?php require('../footer.php');  ?>
    </section>
</body>
</html>
            
            ";

            file_put_contents($url,$content);
        }else{
            //header ("location:item_upload?msg='ITEM_NOT_UPLOADED'");
            echo "<p>ITEM NOT UPLOADED</p>";
        }

    }

}

?>