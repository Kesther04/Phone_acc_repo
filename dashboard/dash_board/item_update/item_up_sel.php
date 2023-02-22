<script src="../../../js/jquery.js"></script>
<script src="../../../js/ajax.js"></script>
<?php

if ($_SERVER['REQUEST_METHOD']=="POST") {
    $group = $_POST['igroup'];
    require("../../class/sel_class.php");
    $sel_ob = new SEL();

?>



    <form class="upd-itm" action="item_uploaded.php" method="post">

        <div class="fir-div-container">
            <table>
                
                <tr>
                    <td><span>Select Item</span>
                        <select name="sii" required>
                            <option></option>
                            <?php
                               
                                $sel_upda = $sel_ob->sel_namegp($group);
                                if ($sel_upda) {
                                    while ($row = $sel_upda->fetch_assoc()) {
                                         
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