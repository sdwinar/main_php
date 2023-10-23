<?php
include "connect.php";
include "function.php";

$msg = 'hello';


if (isset($_POST['btnlog'])) {

    $username =$_POST['usernamelog'];
    $pass =$_POST['passlog'];
    $newpass = sha1($pass . '@%00&#$%@@@@$*');

    
    $stmtlog = $con->prepare("SELECT * FROM `users` WHERE	`username` = ? && `password`= ?");
    $stmtlog->execute(array($username, $newpass));
    $conts = $stmtlog->rowCount();
    $userinfo = $stmtlog->fetch();

    if ($conts == 0) {

        $msg = 'Sorry... The username and password do not match our records.';
    }else{
        $_SESSION['zoool']=$userinfo['id'];
        ?>

        <script>
        var t = 0;
        log = setInterval(function(){
            t++
            if(t==2){
                window.location = ""
            }
        },500)
 
    </script>
    <?php
      exit();

    }




    ?>
        <div class="alert alert-danger alert-dismissible text-center">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <?php echo $msg ?>
</div>
<?php

  
    }
?>