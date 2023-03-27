<?php
if ($_SERVER['REQUEST_METHOD']="POST") {
    $id = $_POST['id'];
    $item_id = $_POST['itm_id'];
    $iname = $_POST['iname'];
    $igroup = $_POST['igroup'];
    $icost = $_POST['icost'];
    $iprice = $_POST['iprice'];
    $idprc = $_POST['idprc'];
    $istock = $_POST['istock'];
    $cstock = $_POST['cstock'];
    $img = $_POST['img'];
    $likes = $_POST['likes'];
?>

    <input type="hidden" name="id" value="<?php echo $id; ?>"  readonly required>
    <input type="hidden" name="itm_id" value="<?php echo $item_id; ?>"  readonly required>
    <input type="hidden" name="iname" value="<?php echo $iname; ?>"  readonly required>
    <input type="hidden" name="igroup" value="<?php echo $igroup; ?>"  readonly required>
    <input type="hidden" name="icost" value="<?php echo $icost; ?>"  readonly required>
    <input type="hidden" name="iprice" value="<?php echo $iprice; ?>"  readonly required>
    <input type="hidden" name="idprc" value="<?php echo $idprc; ?>"  readonly required>
    <input type="hidden" name="istock" value="<?php echo $istock; ?>"  readonly required>
    <input type="hidden" name="cstock" value="<?php echo $cstock; ?>"  readonly required>
    <input type="hidden" name="img" value="<?php echo $img; ?>"  readonly required>
    <input type="hidden" name="likes" value="<?php echo $likes; ?>"  readonly required>

<?php } ?>