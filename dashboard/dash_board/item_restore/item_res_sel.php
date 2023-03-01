<script src="../../../js/jquery.js"></script>
<script src="../../../js/ajax.js"></script>
<?php

if ($_SERVER['REQUEST_METHOD']=="POST") {
    $group = $_POST['igroup'];
    require("../../class/sel_class.php");
    $sel_ob = new SEL();

?>

<form class="res-itm" action="item_res_upload.php" method="post">

<div class="fir-div-container">
    <table>
        <tr>
            <td><span>Select Item</span>
                <select name="sii" required>
                    <option></option>
                    <?php
                        
                        $sel_upd = $sel_ob->sel_namedelgp($group);
                        if ($sel_upd) {
                            while ($row = $sel_upd->fetch_assoc()) {
                                 
                                $im = str_replace('-',' ',$row['item_name']);
                    ?>
                            <option value="<?php echo $row['id'].'|'.$im; ?>" ><?php echo $im; ?></option>
                    <?php   }  }  ?>
                </select>
            </td>
        </tr>
    </table>
</div>

<div class="con-btn-div">
    <button class="con-btn">VIEW</button>
</div>
</form>



<?php  }  ?>