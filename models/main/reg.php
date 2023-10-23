<?php
include "connect.php";
include "function.php";


if (isset($_POST['btnsendreg'])) {

    $msg = 'hello';

    $username = $_POST['username'];
    $password = $_POST['password'];
    $re_password = $_POST['re_password'];

    $isusername = chekviews("username", "users", $username);


    if(empty($username)){
        $msg = 'please enter your username';
    }elseif(strlen($username) < 4){
        $msg = 'Please... the username must be at least four characters.';
        
    }elseif ($isusername>0) {
        $msg = 'sorry... this username is not available.';

    }elseif(empty($password)){
        $msg = 'please enter your password';

    }elseif(strlen($password) < 4){
        $msg = 'Please... the password must be at least four characters.';

    }elseif ($password != $re_password ) {
        $msg = 'Iam sorry... the passwords do not match.';

    }else{
        $newpass = sha1($password . '@%00&#$%@@@@$*');

        $stmtinsert = $con->prepare("INSERT INTO `users` (`id`,`username`,`password`) 
        VALUES        (NULL,'$username','$newpass');");
       $stmtinsert->execute();
       $stmtinsert->CloseCursor();

       $stmtlog = $con->prepare("SELECT `id` FROM `users` WHERE	`username` = ? && `password`= ?");
       $stmtlog->execute(array($username, $newpass));
       $conts = $stmtlog->rowCount();
       $userinfo = $stmtlog->fetch();

       $_SESSION['zoool']=$userinfo['id'];
    //    $_SESSION['_admin']=$userinfo['_admin'];

       $msg = $userinfo['id'];
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
