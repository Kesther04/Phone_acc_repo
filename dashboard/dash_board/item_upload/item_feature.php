
    <script src="../../../js/jquery.js"></script>
    <script src="../../../js/ajax.js"></script>
    <script src="../../../js/metro.js"></script>
<?php

    $group = $_GET['group'];
    $nt = $_GET['name'];
    require("../../class/sel_class.php");

    $sel_ob = new SEL();
    $sel_ken = $sel_ob->sel_nt($nt,$group);
    if ($sel_ken->num_rows > 0) {
        while($row = $sel_ken->fetch_assoc()){
        $sid = $row['id'];      
    

?>

<?php  if ($sel_ken->num_rows > 0 AND $group == 'smart_watches') { ?>
    <section class="gen-feat-div">
        <div class="mat"></div>
        
            <form class="feature-div active" action="backend_item_feature.php" method="post">
                <p><input type="text" name="fn" value="DIMENSION" class="fn-div" readonly></p>
                <p><textarea name="fp" placeholder="Type in the feature here" required></textarea></p>
                <p> 
                    <input type="hidden" name="id" value="<?php echo $sid; ?>" readonly required>
                    <input type="hidden" name="iname" value="<?php  echo $nt; ?>" readonly required>
                </p>
                <p><button>ADD</button></p>
            </form>
        

        

            <form class="feature-div" action="backend_item_feature.php" method="post">
                <p><input type="text" name="fn" value="DISPLAY" class="fn-div" readonly></p>
                <p><textarea name="fp" placeholder="Type in the feature here" required></textarea></p>
                <p> 
                    <input type="hidden" name="id" value="<?php echo $sid; ?>" readonly required>
                    <input type="hidden" name="iname" value="<?php  echo $nt; ?>" readonly required>
                </p>
                <p><button>ADD</button></p>
            </form>
        

        
            <form class="feature-div" action="backend_item_feature.php" method="post">
                <p><input type="text" name="fn" value="WATCH STRAP" class="fn-div" readonly></p>
                <p><textarea name="fp" placeholder="Type in the feature here" required></textarea></p>
                <p> 
                    <input type="hidden" name="id" value="<?php echo $sid; ?>" readonly required>
                    <input type="hidden" name="iname" value="<?php  echo $nt; ?>" readonly required>
                </p>
                <p><button>ADD</button></p>
            </form>
        

        
            <form class="feature-div" action="backend_item_feature.php" method="post">
                <p><input type="text" name="fn" value="BUTTON" class="fn-div" readonly></p>
                <p><textarea name="fp" placeholder="Type in the feature here" required></textarea></p>
                <p> 
                    <input type="hidden" name="id" value="<?php echo $sid; ?>" readonly required>
                    <input type="hidden" name="iname" value="<?php  echo $nt; ?>" readonly required>
                </p>
                <p><button>ADD</button></p>
            </form>
        

        
            <form class="feature-div" action="backend_item_feature.php" method="post">
                <p><input type="text" name="fn" value="SYSTEM REQUIREMENTS" class="fn-div" readonly></p>
                <p><textarea name="fp" placeholder="Type in the feature here" required></textarea></p>
                <p> 
                    <input type="hidden" name="id" value="<?php echo $sid; ?>" readonly required>
                    <input type="hidden" name="iname" value="<?php  echo $nt; ?>" readonly required>
                </p>
                <p><button>ADD</button></p>
            </form>
        

        
            <form class="feature-div" action="backend_item_feature.php" method="post">
                <p><input type="text" name="fn" value="CONNECTIVITY" class="fn-div" readonly></p>
                <p><textarea name="fp" placeholder="Type in the feature here" required></textarea></p>
                <p> 
                    <input type="hidden" name="id" value="<?php echo $sid; ?>" readonly required>
                    <input type="hidden" name="iname" value="<?php  echo $nt; ?>" readonly required>
                </p>
                <p><button>ADD</button></p>
            </form>
        

        
            <form class="feature-div" action="backend_item_feature.php" method="post">
                <p><input type="text" name="fn" value="CHARGING" class="fn-div" readonly></p>
                <p><textarea name="fp" placeholder="Type in the feature here" required></textarea></p>
                <p> 
                    <input type="hidden" name="id" value="<?php echo $sid; ?>" readonly required>
                    <input type="hidden" name="iname" value="<?php  echo $nt; ?>" readonly required>
                </p>
                <p><button>ADD</button></p>
            </form>
        

        
            <form class="feature-div" action="backend_item_feature.php" method="post">
                <p><input type="text" name="fn" value="IN THE BOX" class="fn-div" readonly></p>
                <p><textarea name="fp" placeholder="Type in the feature here" required></textarea></p>
                <p> 
                    <input type="hidden" name="id" value="<?php echo $sid; ?>" readonly required>
                    <input type="hidden" name="iname" value="<?php  echo $nt; ?>" readonly required>
                </p>
                <p><button>ADD</button></p>
            </form>
        

        
            <form class="feature-div" action="backend_item_feature.php" method="post">
                <p><input type="text" name="fn" value="WEIGHT" class="fn-div" readonly></p>
                <p><textarea name="fp" placeholder="Type in the feature here" required></textarea></p>
                <p> 
                    <input type="hidden" name="id" value="<?php echo $sid; ?>" readonly required>
                    <input type="hidden" name="iname" value="<?php  echo $nt; ?>" readonly required>
                </p>
                <p><button>ADD</button></p>
            </form>
        

        
            <form class="feature-div" action="backend_item_feature.php" method="post">
                <p><input type="text" name="fn" value="WATCH CASES" class="fn-div" readonly></p>
                <p><textarea name="fp" placeholder="Type in the feature here" required></textarea></p>
                <p> 
                    <input type="hidden" name="id" value="<?php echo $sid; ?>" readonly required>
                    <input type="hidden" name="iname" value="<?php  echo $nt; ?>" readonly required>
                </p>
                <p><button>ADD</button></p>
            </form>
        

        
            <form class="feature-div" action="backend_item_feature.php" method="post">
                <p><input type="text" name="fn" value="SENSORS" class="fn-div" readonly></p>
                <p><textarea name="fp" placeholder="Type in the feature here" required></textarea></p>
                <p> 
                    <input type="hidden" name="id" value="<?php echo $sid; ?>" readonly required>
                    <input type="hidden" name="iname" value="<?php  echo $nt; ?>" readonly required>
                </p>
                <p><button>ADD</button></p>
            </form>
        

        
            <form class="feature-div" action="backend_item_feature.php" method="post">
                <p><input type="text" name="fn" value="CHARGING PORTS" class="fn-div" readonly></p>
                <p><textarea name="fp" placeholder="Type in the feature here" required></textarea></p>
                <p> 
                    <input type="hidden" name="id" value="<?php echo $sid; ?>" readonly required>
                    <input type="hidden" name="iname" value="<?php  echo $nt; ?>" readonly required>
                </p>
                <p><button>ADD</button></p>
            </form>
        

        
            <form class="feature-div" action="backend_item_feature.php" method="post">
                <p><input type="text" name="fn" value="WATERPROOF LEVEL" class="fn-div" readonly></p>
                <p><textarea name="fp" placeholder="Type in the feature here" required></textarea></p>
                <p> 
                    <input type="hidden" name="id" value="<?php echo $sid; ?>" readonly required>
                    <input type="hidden" name="iname" value="<?php  echo $nt; ?>" readonly required>
                </p>
                <p><button>ADD</button></p>
            </form>

            
            <form class="feature-div" action="backend_item_feature.php" method="post">
                <p><input type="text" name="fn" value="ENVIRONMENT" class="fn-div" readonly></p>
                <p><textarea name="fp" placeholder="Type in the feature here" required></textarea></p>
                <p> 
                    <input type="hidden" name="id" value="<?php echo $sid; ?>" readonly required>
                    <input type="hidden" name="iname" value="<?php  echo $nt; ?>" readonly required>
                </p>
                <p><button>ADD</button></p>
            </form>

            
            <form class="feature-div" action="backend_item_feature.php" method="post">
                <p><input type="text" name="fn" value="BATTERY LIFE" class="fn-div" readonly></p>
                <p><textarea name="fp" placeholder="Type in the feature here" required></textarea></p>
                <p> 
                    <input type="hidden" name="id" value="<?php echo $sid; ?>" readonly required>
                    <input type="hidden" name="iname" value="<?php  echo $nt; ?>" readonly required>
                </p>
                <p><button>ADD</button></p>
            </form>
            
        
    </section>
    
<?php }elseif ($sel_ken->num_rows > 0 AND $group == 'bluetooth_speakers') {  ?>

    <section class="gen-feat-div">
        <div class="mat"></div>
        
            <form class="feature-div active" action="backend_item_feature.php" method="post">
                <p><input type="text" name="fn" value="DIMENSION" class="fn-div" readonly></p>
                <p><textarea name="fp" placeholder="Type in the feature here" required></textarea></p>
                <p> 
                    <input type="hidden" name="id" value="<?php echo $sid; ?>" readonly required>
                    <input type="hidden" name="iname" value="<?php  echo $nt; ?>" readonly required>
                </p>
                <p><button>ADD</button></p>
            </form>
        

        

            <form class="feature-div" action="backend_item_feature.php" method="post">
                <p><input type="text" name="fn" value="DISPLAY" class="fn-div" readonly></p>
                <p><textarea name="fp" placeholder="Type in the feature here" required></textarea></p>
                <p> 
                    <input type="hidden" name="id" value="<?php echo $sid; ?>" readonly required>
                    <input type="hidden" name="iname" value="<?php  echo $nt; ?>" readonly required>
                </p>
                <p><button>ADD</button></p>
            </form>
        

        
            <form class="feature-div" action="backend_item_feature.php" method="post">
                <p><input type="text" name="fn" value="WATCH STRAP" class="fn-div" readonly></p>
                <p><textarea name="fp" placeholder="Type in the feature here" required></textarea></p>
                <p> 
                    <input type="hidden" name="id" value="<?php echo $sid; ?>" readonly required>
                    <input type="hidden" name="iname" value="<?php  echo $nt; ?>" readonly required>
                </p>
                <p><button>ADD</button></p>
            </form>
        

        
            <form class="feature-div" action="backend_item_feature.php" method="post">
                <p><input type="text" name="fn" value="BUTTON" class="fn-div" readonly></p>
                <p><textarea name="fp" placeholder="Type in the feature here" required></textarea></p>
                <p> 
                    <input type="hidden" name="id" value="<?php echo $sid; ?>" readonly required>
                    <input type="hidden" name="iname" value="<?php  echo $nt; ?>" readonly required>
                </p>
                <p><button>ADD</button></p>
            </form>
        

        
            <form class="feature-div" action="backend_item_feature.php" method="post">
                <p><input type="text" name="fn" value="SYSTEM REQUIREMENTS" class="fn-div" readonly></p>
                <p><textarea name="fp" placeholder="Type in the feature here" required></textarea></p>
                <p> 
                    <input type="hidden" name="id" value="<?php echo $sid; ?>" readonly required>
                    <input type="hidden" name="iname" value="<?php  echo $nt; ?>" readonly required>
                </p>
                <p><button>ADD</button></p>
            </form>
        

        
            <form class="feature-div" action="backend_item_feature.php" method="post">
                <p><input type="text" name="fn" value="CONNECTIVITY" class="fn-div" readonly></p>
                <p><textarea name="fp" placeholder="Type in the feature here" required></textarea></p>
                <p> 
                    <input type="hidden" name="id" value="<?php echo $sid; ?>" readonly required>
                    <input type="hidden" name="iname" value="<?php  echo $nt; ?>" readonly required>
                </p>
                <p><button>ADD</button></p>
            </form>
        

        
            <form class="feature-div" action="backend_item_feature.php" method="post">
                <p><input type="text" name="fn" value="CHARGING" class="fn-div" readonly></p>
                <p><textarea name="fp" placeholder="Type in the feature here" required></textarea></p>
                <p> 
                    <input type="hidden" name="id" value="<?php echo $sid; ?>" readonly required>
                    <input type="hidden" name="iname" value="<?php  echo $nt; ?>" readonly required>
                </p>
                <p><button>ADD</button></p>
            </form>
        

        
            <form class="feature-div" action="backend_item_feature.php" method="post">
                <p><input type="text" name="fn" value="IN THE BOX" class="fn-div" readonly></p>
                <p><textarea name="fp" placeholder="Type in the feature here" required></textarea></p>
                <p> 
                    <input type="hidden" name="id" value="<?php echo $sid; ?>" readonly required>
                    <input type="hidden" name="iname" value="<?php  echo $nt; ?>" readonly required>
                </p>
                <p><button>ADD</button></p>
            </form>
        

        
            <form class="feature-div" action="backend_item_feature.php" method="post">
                <p><input type="text" name="fn" value="WEIGHT" class="fn-div" readonly></p>
                <p><textarea name="fp" placeholder="Type in the feature here" required></textarea></p>
                <p> 
                    <input type="hidden" name="id" value="<?php echo $sid; ?>" readonly required>
                    <input type="hidden" name="iname" value="<?php  echo $nt; ?>" readonly required>
                </p>
                <p><button>ADD</button></p>
            </form>
        

        
            <form class="feature-div" action="backend_item_feature.php" method="post">
                <p><input type="text" name="fn" value="WATCH CASES" class="fn-div" readonly></p>
                <p><textarea name="fp" placeholder="Type in the feature here" required></textarea></p>
                <p> 
                    <input type="hidden" name="id" value="<?php echo $sid; ?>" readonly required>
                    <input type="hidden" name="iname" value="<?php  echo $nt; ?>" readonly required>
                </p>
                <p><button>ADD</button></p>
            </form>
        

        
            <form class="feature-div" action="backend_item_feature.php" method="post">
                <p><input type="text" name="fn" value="SENSORS" class="fn-div" readonly></p>
                <p><textarea name="fp" placeholder="Type in the feature here" required></textarea></p>
                <p> 
                    <input type="hidden" name="id" value="<?php echo $sid; ?>" readonly required>
                    <input type="hidden" name="iname" value="<?php  echo $nt; ?>" readonly required>
                </p>
                <p><button>ADD</button></p>
            </form>
        

        
            <form class="feature-div" action="backend_item_feature.php" method="post">
                <p><input type="text" name="fn" value="CHARGING PORTS" class="fn-div" readonly></p>
                <p><textarea name="fp" placeholder="Type in the feature here" required></textarea></p>
                <p> 
                    <input type="hidden" name="id" value="<?php echo $sid; ?>" readonly required>
                    <input type="hidden" name="iname" value="<?php  echo $nt; ?>" readonly required>
                </p>
                <p><button>ADD</button></p>
            </form>
        

        
            <form class="feature-div" action="backend_item_feature.php" method="post">
                <p><input type="text" name="fn" value="WATERPROOF LEVEL" class="fn-div" readonly></p>
                <p><textarea name="fp" placeholder="Type in the feature here" required></textarea></p>
                <p> 
                    <input type="hidden" name="id" value="<?php echo $sid; ?>" readonly required>
                    <input type="hidden" name="iname" value="<?php  echo $nt; ?>" readonly required>
                </p>
                <p><button>ADD</button></p>
            </form>

            
            <form class="feature-div" action="backend_item_feature.php" method="post">
                <p><input type="text" name="fn" value="ENVIRONMENT" class="fn-div" readonly></p>
                <p><textarea name="fp" placeholder="Type in the feature here" required></textarea></p>
                <p> 
                    <input type="hidden" name="id" value="<?php echo $sid; ?>" readonly required>
                    <input type="hidden" name="iname" value="<?php  echo $nt; ?>" readonly required>
                </p>
                <p><button>ADD</button></p>
            </form>

            
            <form class="feature-div" action="backend_item_feature.php" method="post">
                <p><input type="text" name="fn" value="BATTERY LIFE" class="fn-div" readonly></p>
                <p><textarea name="fp" placeholder="Type in the feature here" required></textarea></p>
                <p> 
                    <input type="hidden" name="id" value="<?php echo $sid; ?>" readonly required>
                    <input type="hidden" name="iname" value="<?php  echo $nt; ?>" readonly required>
                </p>
                <p><button>ADD</button></p>
            </form>
            
        
    </section>

<?php }elseif ($sel_ken->num_rows > 0 AND $group == 'earpods') {  ?>

    <section class="gen-feat-div">
        <div class="mat"></div>
        
            <form class="feature-div active" action="backend_item_feature.php" method="post">
                <p><input type="text" name="fn" value="DIMENSION" class="fn-div" readonly></p>
                <p><textarea name="fp" placeholder="Type in the feature here" required></textarea></p>
                <p> 
                    <input type="hidden" name="id" value="<?php echo $sid; ?>" readonly required>
                    <input type="hidden" name="iname" value="<?php  echo $nt; ?>" readonly required>
                </p>
                <p><button>ADD</button></p>
            </form>
        

        

            <form class="feature-div" action="backend_item_feature.php" method="post">
                <p><input type="text" name="fn" value="DISPLAY" class="fn-div" readonly></p>
                <p><textarea name="fp" placeholder="Type in the feature here" required></textarea></p>
                <p> 
                    <input type="hidden" name="id" value="<?php echo $sid; ?>" readonly required>
                    <input type="hidden" name="iname" value="<?php  echo $nt; ?>" readonly required>
                </p>
                <p><button>ADD</button></p>
            </form>
        

        
            <form class="feature-div" action="backend_item_feature.php" method="post">
                <p><input type="text" name="fn" value="WATCH STRAP" class="fn-div" readonly></p>
                <p><textarea name="fp" placeholder="Type in the feature here" required></textarea></p>
                <p> 
                    <input type="hidden" name="id" value="<?php echo $sid; ?>" readonly required>
                    <input type="hidden" name="iname" value="<?php  echo $nt; ?>" readonly required>
                </p>
                <p><button>ADD</button></p>
            </form>
        

        
            <form class="feature-div" action="backend_item_feature.php" method="post">
                <p><input type="text" name="fn" value="BUTTON" class="fn-div" readonly></p>
                <p><textarea name="fp" placeholder="Type in the feature here" required></textarea></p>
                <p> 
                    <input type="hidden" name="id" value="<?php echo $sid; ?>" readonly required>
                    <input type="hidden" name="iname" value="<?php  echo $nt; ?>" readonly required>
                </p>
                <p><button>ADD</button></p>
            </form>
        

        
            <form class="feature-div" action="backend_item_feature.php" method="post">
                <p><input type="text" name="fn" value="SYSTEM REQUIREMENTS" class="fn-div" readonly></p>
                <p><textarea name="fp" placeholder="Type in the feature here" required></textarea></p>
                <p> 
                    <input type="hidden" name="id" value="<?php echo $sid; ?>" readonly required>
                    <input type="hidden" name="iname" value="<?php  echo $nt; ?>" readonly required>
                </p>
                <p><button>ADD</button></p>
            </form>
        

        
            <form class="feature-div" action="backend_item_feature.php" method="post">
                <p><input type="text" name="fn" value="CONNECTIVITY" class="fn-div" readonly></p>
                <p><textarea name="fp" placeholder="Type in the feature here" required></textarea></p>
                <p> 
                    <input type="hidden" name="id" value="<?php echo $sid; ?>" readonly required>
                    <input type="hidden" name="iname" value="<?php  echo $nt; ?>" readonly required>
                </p>
                <p><button>ADD</button></p>
            </form>
        

        
            <form class="feature-div" action="backend_item_feature.php" method="post">
                <p><input type="text" name="fn" value="CHARGING" class="fn-div" readonly></p>
                <p><textarea name="fp" placeholder="Type in the feature here" required></textarea></p>
                <p> 
                    <input type="hidden" name="id" value="<?php echo $sid; ?>" readonly required>
                    <input type="hidden" name="iname" value="<?php  echo $nt; ?>" readonly required>
                </p>
                <p><button>ADD</button></p>
            </form>
        

        
            <form class="feature-div" action="backend_item_feature.php" method="post">
                <p><input type="text" name="fn" value="IN THE BOX" class="fn-div" readonly></p>
                <p><textarea name="fp" placeholder="Type in the feature here" required></textarea></p>
                <p> 
                    <input type="hidden" name="id" value="<?php echo $sid; ?>" readonly required>
                    <input type="hidden" name="iname" value="<?php  echo $nt; ?>" readonly required>
                </p>
                <p><button>ADD</button></p>
            </form>
        

        
            <form class="feature-div" action="backend_item_feature.php" method="post">
                <p><input type="text" name="fn" value="WEIGHT" class="fn-div" readonly></p>
                <p><textarea name="fp" placeholder="Type in the feature here" required></textarea></p>
                <p> 
                    <input type="hidden" name="id" value="<?php echo $sid; ?>" readonly required>
                    <input type="hidden" name="iname" value="<?php  echo $nt; ?>" readonly required>
                </p>
                <p><button>ADD</button></p>
            </form>
        

        
            <form class="feature-div" action="backend_item_feature.php" method="post">
                <p><input type="text" name="fn" value="WATCH CASES" class="fn-div" readonly></p>
                <p><textarea name="fp" placeholder="Type in the feature here" required></textarea></p>
                <p> 
                    <input type="hidden" name="id" value="<?php echo $sid; ?>" readonly required>
                    <input type="hidden" name="iname" value="<?php  echo $nt; ?>" readonly required>
                </p>
                <p><button>ADD</button></p>
            </form>
        

        
            <form class="feature-div" action="backend_item_feature.php" method="post">
                <p><input type="text" name="fn" value="SENSORS" class="fn-div" readonly></p>
                <p><textarea name="fp" placeholder="Type in the feature here" required></textarea></p>
                <p> 
                    <input type="hidden" name="id" value="<?php echo $sid; ?>" readonly required>
                    <input type="hidden" name="iname" value="<?php  echo $nt; ?>" readonly required>
                </p>
                <p><button>ADD</button></p>
            </form>
        

        
            <form class="feature-div" action="backend_item_feature.php" method="post">
                <p><input type="text" name="fn" value="CHARGING PORTS" class="fn-div" readonly></p>
                <p><textarea name="fp" placeholder="Type in the feature here" required></textarea></p>
                <p> 
                    <input type="hidden" name="id" value="<?php echo $sid; ?>" readonly required>
                    <input type="hidden" name="iname" value="<?php  echo $nt; ?>" readonly required>
                </p>
                <p><button>ADD</button></p>
            </form>
        

        
            <form class="feature-div" action="backend_item_feature.php" method="post">
                <p><input type="text" name="fn" value="WATERPROOF LEVEL" class="fn-div" readonly></p>
                <p><textarea name="fp" placeholder="Type in the feature here" required></textarea></p>
                <p> 
                    <input type="hidden" name="id" value="<?php echo $sid; ?>" readonly required>
                    <input type="hidden" name="iname" value="<?php  echo $nt; ?>" readonly required>
                </p>
                <p><button>ADD</button></p>
            </form>

            
            <form class="feature-div" action="backend_item_feature.php" method="post">
                <p><input type="text" name="fn" value="ENVIRONMENT" class="fn-div" readonly></p>
                <p><textarea name="fp" placeholder="Type in the feature here" required></textarea></p>
                <p> 
                    <input type="hidden" name="id" value="<?php echo $sid; ?>" readonly required>
                    <input type="hidden" name="iname" value="<?php  echo $nt; ?>" readonly required>
                </p>
                <p><button>ADD</button></p>
            </form>

            
            <form class="feature-div" action="backend_item_feature.php" method="post">
                <p><input type="text" name="fn" value="BATTERY LIFE" class="fn-div" readonly></p>
                <p><textarea name="fp" placeholder="Type in the feature here" required></textarea></p>
                <p> 
                    <input type="hidden" name="id" value="<?php echo $sid; ?>" readonly required>
                    <input type="hidden" name="iname" value="<?php  echo $nt; ?>" readonly required>
                </p>
                <p><button>ADD</button></p>
            </form>
            
        
    </section>

<?php  } ?>


<?php   } } ?>