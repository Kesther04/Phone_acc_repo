<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/style.css" media="all">
    <link rel="stylesheet" href="../../css/responsive_style.css" media="all">
    <script src='../../js/jquery.js'></script>
    <script src='../../js/header_move.js'></script>
    <script src="../../js/ajax.js"></script>
    <?php        
      $pageName = dirname($_SERVER['PHP_SELF']);   
      $group = str_replace('/Github/Phone_acc_repo/Accesories/','',$pageName);
      $din = str_replace('_',' ',$group);
    ?>
    <title><?php echo $din; ?></title>
</head>
<body>
    <?php require("../header.php"); ?>
    <?php require("../item_group.php") ?>
    <?php require("../footer.php"); ?>
</body>
</html>