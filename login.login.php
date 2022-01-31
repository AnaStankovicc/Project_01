<?php

include_once("./php/initdb.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="icon" href="img/core-img/favicon.ico">
    <link rel="stylesheet" href="./style.css">
</head>
<body>
<?php include_once("./view/header.php")?>

<section class="breadcumb-area bg-img bg-overlay" style="background-image: url(img/bg-img/login.jpg);">
        <div class="bradcumbContent">
            <h2>Login</h2>
        </div>
    </section>
   
    <section class="login-area section-padding-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-8">
                    <div class="login-content">
                        <h3>Welcome Back</h3>
        
                        <!-- Login Form -->
                        <div class="login-form">
                            <?php
                            if(isset($_SESSION['userid'])) {
                            echo "You Have Successfully Logged In!"; ?>
                            </form>
                            <form action='./shop1.php' method='post'>
                            <button type='submit' name='shop-submit' class='btn oneMusic-btn mt-30'>Let's go!</button><br><br>
                            </form>
                            </form>
                            <form action='./php/logout.php' method='post'>
                            <button type='submit' name='logout-submit' class='btn oneMusic-btn mt-30'>Logout</button><br><br>
                            </form>
                      <?php } 
                            
                            else { ?>
                                <form action='./php/login.val.php' method='post'>
                                <div class='form-group'>
                                    <label for='user'>Username</label>
                                    <input type='text' name='user' class='form-control' id='user' aria-describedby='emailHelp' placeholder='Enter E-mail or Username' required>
                                    <small id='emailHelp' class='form-text text-muted'><i class='fa fa-lock mr-2'></i>We'll never share your email with anyone else.</small>
                                </div>
                                <div class='form-group'>
                                    <label for='password'>Password</label>
                                    <input type='password' name='psw' class='form-control' id='password' placeholder='Password' required>
                                </div>
                                <button type='submit' name='login-submit' class='btn oneMusic-btn mt-30'>Login</button><br><br>
                                <p>Not registred? <a href='./registration1.php'>Create an account</a></p>
                         <?php   } 

                            if(isset($_GET["error"])) {
                                if ($_GET["error"] == "emptyinput") {
                                    echo "<p>Fill in all fields!</p>";
                                }
                                else if ($_GET["error"] == "wronglogin") {
                                    echo "<p>Incorrect login information!</p>";
                                }
                                
                            }
                            ?>

                            

                            
                              
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Login Area End ##### -->

    <?php include_once("./view/footer.php")?>

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
</body>
    
</body>
</html>