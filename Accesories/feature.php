<?php


    $pageName = basename($_SERVER['PHP_SELF']);   
    $nt = str_replace('.php','', $pageName);

    

    $sel_ken = $sel_ob->sel_nf($nt);
    if ($sel_ken) {
?>
<table>

<?php while ($row = $sel_ken->fetch_assoc()) { ?>

<tr>
    <td><?php echo $row['feature_name'];?></td>
    <td><p><?php echo $row['feature_prop']; ?></p></td>
</tr>


<?php } } ?>

</table>