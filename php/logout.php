<?php
session_start();

unset($_COOKIE['user']);
setcookie('user','',time()-3600);

session_destroy();
?>


<?php

include_once("./initdb.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="icon" href="img/core-img/favicon.ico">
    <link rel="stylesheet" href="../style.css">
</head>
<body>


<section class="breadcumb-area bg-img bg-overlay" style="background-image: url(../img/bg-img/login.jpg);">
        <div class="bradcumbContent">
            <h2>Logged Out Successfully!</h2><br>
            <form action='../index1.php' method='post'>
            <button type='submit' name='logout-submit' class='btn oneMusic-btn mt-30'>HOME</button><br><br>
             </form>
        </div>
    </section>
   
    <section class="login-area section-padding-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-8">
                    <div class="login-content">
                    <form action='../login.login.php' method='post'>
                            <button type='submit' name='logout-submit' class='btn oneMusic-btn mt-30'>Login</button><br><br>
                            </form> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Login Area End ##### -->

    <?php include_once("../view/footer.php")?>

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="../js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="../js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="../js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="../js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="../js/active.js"></script>
</body>
    
</body>
</html>