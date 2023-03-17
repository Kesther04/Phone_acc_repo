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


<div id="masag-cot">
    <div class="inner-masag-ct">
        <div class="msgas-cot">
            <div class="inner-masag-cot-back" title="back to page">
            <img src="../../../img/arro.svg" width="30" class="sec-img"><img src="../../../img/arro-fill.svg" width="30" class="fir-img">
            </div>
            <div class="inner-msgas-cot"></div>
        </div>
    </div>

    <div class="snd-inner-masag-ct">
        <div class="msg"></div>
    </div>
</div>

<section class="main-div-container">

    <?php 
        require("../../class/sel_class.php");
        $sel_ob = new SEL(); 
        $sel_con = $sel_ob->sel_all_user();
        if ($sel_con) {
            
        
    ?>

    <div class="sec-div-container">
        <div class="line-div-container">
            <table>
                <tr id="top-line-div-table">
                    <td>USERNAME</td>
                    <td>EMAIL</td>
                    <td>GENERAL_STATUS_ORDERS</td>
                    <td>VIEW_USER_ORDERS</td>
                </tr>
                <?php
                    while ($row = $sel_con->fetch_assoc()) {
                ?>
                <tr>
                    <td><?php echo $row['fullname']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td>
                        <?php
                            $uid = $row['id'];
                            $sel_ncon = $sel_ob->sel_all_sales($uid);
                            if ($sel_ncon) {
                                if($dow = $sel_ncon->fetch_assoc()){
                                    echo $dow['status_deliv'];
                                }else {
                                    echo "";
                                }
                            }


                        ?>
                    </td>
                    <td>
                        <form class="vud" action="view_user_date.php" method="post">
                            <input type="hidden" name="id" value="<?php echo $row['id']; ?>" required readonly>
                            <input type="hidden" name="fnm" value="<?php echo $row['fullname']; ?>" required readonly>
                            <button class="conlin-btn">VIEW USER ORDERS</button>
                        </form>
                    </td>
                </tr>
                <?php  } ?>
            </table>
        </div>
    </div>

    <?php } ?>
</section>

</body>
</html>