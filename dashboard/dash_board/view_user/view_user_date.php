<script src="../../../js/jquery.js"></script>
<script src="../../../js/ajax.js"></script>

<?php
if ($_SERVER['REQUEST_METHOD']=="POST") {
    $uid = $_POST['id'];
    $fnm = $_POST['fnm'];

    require("../../class/sel_class.php");
    $sel_ob = new SEL(); 

    $sel_ncon = $sel_ob->sel_all_sales($uid);

    if ($sel_ncon) {
        if($sel_ncon->fetch_assoc()){
?>
        <form class="bvu" action="backend_view_user.php" method="post">
        <div class="line-div-container">
        <h1>SELECT DATE</h1>
            <table>
                <tr id="dat-lin">
                    
                <td>
                
                    <input type="hidden" name="id" value="<?php echo $uid; ?>" required readonly>
                    <input type="hidden" name="fnm" value="<?php echo $fnm; ?>" required readonly>
                    <select name="date" required>
                    <option></option>
                    <?php 
                        $sel_date = $sel_ob->sel_all_saledate($uid); 
                        if ($sel_date) {
                            while($row = $sel_date->fetch_assoc()){
                                echo "<option>".$row['date']."</option>";
                            }

                        }
                    ?>
                    <option>ALL</option>
                
                    </select>
                    
                
                </td>
                </tr>
            </table>
            
        </div>
        <button class="conlin-btn">Submit</button>
        </form>
<?php
        }else {
            echo "<p style='color:red;font-weight:bold;'>NO ORDERED PRODUCTS AVAILABLE</p>";
        }
    }
    

}



?>