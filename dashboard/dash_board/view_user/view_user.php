<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../css/item_upload.css" media="all">
    <link rel="stylesheet" href="../../../css/dash_css_rep.css" media="all">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    <script src="../../../js/jquery.js"></script>
    <script src="../../../js/ajax.js"></script>
    <script src="../../../js/metro.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function(){

            new DataTable('.myTable');
        })
    </script>
    <title>DASHBOARD</title>
    
</head>
<body>

<?php require("../../admin_dashboard_layout.php"); ?> 


<div id="masag-cot">

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
            
            <table class="myTable" >
                <thead>
                    <tr id="top-line-div-table">
                        <th>USERNAME</th>
                        <th>EMAIL</th>
                        <th>GENERAL_STATUS_ORDERS</th>
                        <th>VIEW_USER_ORDERS</th>
                    </tr>
                </thead>
                
                <tbody>
                <?php while ($row = $sel_con->fetch_assoc()) { ?>
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
                        <form class="vud" action="backend_view_user.php" method="post">
                            <input type="hidden" name="id" value="<?php echo $row['id']; ?>" required readonly>
                            <input type="hidden" name="fnm" value="<?php echo $row['fullname']; ?>" required readonly>
                            <button class="conlin-btn">VIEW USER ORDERS</button>
                        </form>
                    </td>
                </tr>
                <?php  } ?>
                
                </tbody>
            </table>
        </div>
    </div>

    <?php } ?>
</section>

</body>
</html>