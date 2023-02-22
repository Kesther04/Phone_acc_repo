<?php 
session_start(); 
session_destroy();
?>
<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/login.css" media="all">
    <link rel="stylesheet" href="../../css/login_rep.css" media="all">
    <title>LOGIN</title>
</head>

<body>
    
    <div class="login-sec">
            <h1>LOGIN</h1>
    
    <form name="login-form" action="backend_login_admin.php" method="post">
    <?php
        if (isset($_GET['msg'])) {
            echo "<div class='msg-log'>$_GET[msg]</div>";
        }
    ?>

    
    <table>
    
        <tr>
            <td><span>EMAIL ADDRESS:</span><input type="text" name="email" placeholder="Please Type in your Correct Email Address"></td>
        </tr>
        
        <tr>
            <td><span>PASSWORD:</span><input type="password" name="pass" placeholder="Please Type in your Password if registered" id="p-pass"></td>
        </tr>

        <tr>            
            <td>
                <span id="tock"><input type="button" value="TEXT" class="change-pass"  onclick="login()"></span>
                <span id="pock"><input type="button" value="TEXT" class="change-pass"   onclick="lob()"></span>
            </td>
        </tr>
        <script src="../../js/reg.js"></script>


    </table>

    

    <div class="btn-div">
        <button class="btn">ENTER</button>
    </div>
    
    </form>

       
    </div>


</body>

</html>