<link rel="stylesheet" href="../../../css/item_upload.css" media="all">
    <link rel="stylesheet" href="../../../css/dash_css_rep.css" media="all">
    <script src="../../../js/jquery.js"></script>
    <script src="../../../js/ajax.js"></script>
    <script src="../../../js/metro.js"></script>
<?php

    $group = $_GET['group'];
    $nt = $_GET['name'];
    // $group = 'earpods';
    // $nt = 'Pole-StylePod-Earpods';
    require("../../class/sel_class.php");

    $sel_ob = new SEL();
    $sel_ken = $sel_ob->sel_nt($nt,$group);
    if ($sel_ken->num_rows > 0) {
        while($row = $sel_ken->fetch_assoc()){
        $sid = $row['id'];      
    

?>

    <section class="gen-feat-div" id="gen-feat-div">
        <div class="con-mat">
            <div class="mat"></div>
        </div>
            <form class="feature-div" action="backend_item_feature.php" method="post">
                <div>
                    <span>Feature Name</span>
                    <input type="text" name="fn"  class="fn-div" placeholder="Key in the feature name" required>
                </div>
                
                <div>
                    <span>Feature Property</span>
                    <textarea name="fp" placeholder="Type in the feature property here" required></textarea>
                </div>
                <p> 
                    <input type="hidden" name="id" value="<?php echo $sid; ?>" readonly required>
                    <input type="hidden" name="iname" value="<?php  echo $nt; ?>" readonly required>
                </p>
                <p><button>ADD</button></p>
            </form>
        
    </section>



<?php   } } ?>