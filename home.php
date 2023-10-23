<?php
include "models/main/connect.php";
include "models/main/function.php";
$headname = 'main_php - home';
include "views/main/head.php";
?>

<body>
    <?php
    $pagename = 'main_php - home';
    ?>

    <script src="assets/js/jquery-3.4.0.min.js"></script>


    <?php
    if (!isset($_SESSION['zoool'])) { ?>
    <?php
              include "views/main/login.php";
    } else { 
        include "views/main/navbar.php";
        include "views/home/01_welcome.php";
   
    
    }
    ?>
    <?php
    include "views/main/fotter.php";
    ?>
</body>

</html>