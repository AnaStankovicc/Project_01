<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <title>Registration</title>
    <link rel="icon" href="img/core-img/favicon.ico">
    <link rel="stylesheet" href="./style.css">

</head>

<body>
<?php include_once("./view/header.php")?>

                                
    <section class="breadcumb-area bg-img bg-overlay" style="background-image: url(img/bg-img/login.jpg);">
        <div class="bradcumbContent">
            <h2>Registration</h2>
        </div>
    </section>
   
    <section class="login-area section-padding-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-8">
                    <div class="login-content">
                        <h3>Your info</h3>
                        <!-- Registration Form -->
                        <div class="login-form">
                            <form action="./php/registration.val.php" method="post">
                            <div class="form-group">
                                    <label for="name">Your name</label>
                                    <input type="text" name="reg-name" class="form-control" id="name" aria-describedby="emailHelp" 
                                    placeholder="Enter Your Name" minlength="6" maxlength="20" required>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email address</label>
                                    <input type="email" name="reg-email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter E-mail" required>
                                    <small id="emailHelp" class="form-text text-muted"><i class="fa fa-lock mr-2"></i>We'll never share your email with anyone else.</small>
                                </div>
                                <div class="form-group">
                                    <label for="username">Username</label>
                                    <input type="text" name="reg-username" class="form-control" id="username" aria-describedby="emailHelp" 
                                    placeholder="Enter Username" minlength="6" maxlength="20" required>
                                </div>
                                <div class="form-group">
                                    <label for="password1">Password</label>
                                    <input type="password" name="reg-password"  class="form-control" id="password1" placeholder="Password" 
                                    minlength="8" maxlength="20" min="0" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]){8,}" title="Password must contain at least one uppercase letter, a number and be 8-20 characters" required>
                                </div>
                                <button type="submit" name="reg-submit" class="btn oneMusic-btn mt-30">Register</button><br><br>
                                <p>Have already an account?<a href="login.login.php">Login here</a></p>
                            </form>
    
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


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

</html>