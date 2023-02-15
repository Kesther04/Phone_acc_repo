<?php

if ($_SERVER['REQUEST_METHOD']=="POST") {
    $nt = $_POST['nt'];
    $new_title = str_replace(' ','-', $_POST['nt']);
    $nd = $_POST['nd'];
    $typ = $_POST['typ'];
    $like = 0;
    $com = 0;
    $view = 0;
    $img = $_FILES['img']['name'];
    $filetype = $_FILES['img']['type'];
    $filesize = $_FILES['img']['size'];
    $temp = $_FILES['img']['tmp_name'];
    $edit_post = $_POST['edit'];
    $date = date("d-m-y");
    $hr = date("h")+1;
    $time = date("$hr:i:s.a");


    require("../../class/ins_class.php");

    $ins_ob = new INS();

    require("../../class/sel_class.php");

    $sel_ob = new SEL();

    $sel_ken = $sel_ob->sel_nt($new_title,$typ);
    if ($sel_ken->num_rows > 0) {
        $row = $sel_ken->fetch_assoc();
        $snt = $row['news_title'];      

    }

    
    if ($filesize > 10000000000) {
    
        header ("location:news_upload?msg='FILESIZE IS TOO LARGE'");
        
    }elseif ($_FILES['img']['type']!=="image/png" AND $_FILES['img']['type']!=="image/jpg" AND $_FILES['img']['type']!=="image/jpeg" AND $_FILES['img']['type']!=="image/jfif" AND $_FILES['img']['type']!=="image/bmp" AND $_FILES['img']['type']!=="image/webp") {
    
         header ("location:news_upload?msg='INVALID FILE TYPE'");
    
    }elseif ($sel_ken->num_rows > 0 AND  $snt == $new_title ){

        header ("location:news_upload?msg='FILE TITLE ALREADY IN USE'");

    }else {

        $ins_ken = $ins_ob->ins_news($new_title,$nd,$img,$typ,$view,$like,$com,$date,$time);
        if ($ins_ken) {
            header ("location:news_upload?msg='NEWS_UPLOADED'");
            
            $sel_ken = $sel_ob->sel_nt($new_title,$typ);
            if ($sel_ken->num_rows > 0) {
                $row = $sel_ken->fetch_assoc();   
                $puck = "<input type='hidden' name='pid' value='$row[id]' required>";   
            }
           

            move_uploaded_file($temp, "../../pictures/".$_FILES['img']['name']);

            $url = '../'.'../'.'news_posts'.'/'.$typ.'/'.$new_title.'.php';
            $content = "
<?php require('../session.php');?>
<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <link rel='stylesheet' href='../../css/css_home.css' media='all'>
    <link rel='stylesheet' href='../../css/resp_ind.css' media='all'>      
    <script src='../../js/jquery.js'></script>
    <script src='../../js/metro.js'></script>
    <script src='../../js/header_move.js'></script>
    <script src='../../js/ajax.js'></script>
    <title>$nt</title>
</head>

<body>

    <?php require('../../navigation_units/index_header.php');  ?>
    <?php require('../../class/sel_class.php'); ?>
    
    <section class='first-sec-div'>
        
        <div class='inner-fdivs'>
        <h1> $nt</h1>
        <p>$date | $time</p>
        </div>

        <div class='inner-fdivs'>
        <p>$nd</p>
        <div id='inner-fdivs-img'><img src='../../pictures/$img' ></div>
        </div>

        <div class='inner-fdivs'>
            $edit_post
        </div>

        


        

    <div class='perc-div'>

        <div>
        <?php  require('../opinion/views.php');   ?>
            <button>Views</button>
        </div>
        <div>
        <?php  require('../opinion/likes.php');   ?>               
                            <form class='adl' action='../like/addlike.php' method='post'> 
                            <input type='hidden'  name='pt' value='$new_title' required>
                            $puck
                                <button id='like-btn'>likes</button>
                            </form>
                            <form class='ddl' action='../like/dellike.php' method='post'> 
                            <input type='hidden'  name='pt' value='$new_title' required>
                $puck
                                <button id='liked-btn' >likes</button>
                            </form> 
        </div>
        <div>
        <?php  require('../opinion/comment.php');   ?>
            <button id='com-btn'>Comments</button>
        </div>

    </div>  



    <div class='com-fil'>
        <div id='masag'>
            <div class='msg'>    
                <div class='msa'></div>
                <button class='aj-btn'>OKAY</button>
            </div>
        </div>

        <form class='comfm' action='../backend_comlv.php' method='post'>
            <h1>Add Comment:</h1>
            <table>
                <tr> <td><textarea name='com' required id='com-txt' placeholder='Type in your comment'></textarea></td></tr>
                <tr> <td>Name:<input type='text' name='fnm' required placeholder='Name'></td></tr>
                <tr><td>Email-Address:<input type='text' name='email' required placeholder='Email-Address'></td></tr>
                <input type='hidden'  name='pt' value='$new_title' required>
                $puck
            </table>
            <p><button>ENTER</button></p>
        </form>
        <?php require('../comlv.php'); ?>
    </div>
    </section>

    <section class='ano-sec-div'>
        <div class='first-sec-trend'><?php require('../../navigation_units/index_tools.php'); ?></div>
    </section>

    <?php  require('../../navigation_units/footer.php'); ?>
</body>
</html>            
                        
            ";

            file_put_contents($url,$content);
        }else{
            header ("location:news_upload?msg='NEWS_NOT_UPLOADED'");
        }

    }

}

?>