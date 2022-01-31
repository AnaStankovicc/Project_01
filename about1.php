<?php  if(isset($_POST['submit']) 
          && isset($_POST['name']) 
          && isset($_POST['email'])) {
            $name= $_POST['name'];
            $email= $_POST['email'];
            $message = "Thanks for subscribing to our newsletter, $name!";
    } ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <title>About</title>


    <link rel="icon" href="img/core-img/favicon.ico">


    <link rel="stylesheet" href="style.css">

</head>

<body>
<?php include_once("./view/header.php")?>

    <section class="breadcumb-area bg-img bg-overlay" style="background-image: url(img/bg-img/about1.jpg);">
        <div class="bradcumbContent">
            <p>Let's find out more</p>
            <h2>About us</h2>
        </div>
    </section>

    <section class="miscellaneous-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <div class="img-ab">
           <img class="img1" width="340px" style="display: inline-block;" src="./img/bg-img/shop.jpg">
           <img class="img1" width="340px" style="display: inline-block;" src="./img/bg-img/shop2.jpg">
           <img class="img3" width="340px" style="display: inline-block; height:228px" src="./img/bg-img/shop3.jpg">
           <div class="text-ab">
                </div>
               <div class="content-ab" style="margin-top:20px">
                   
                   <p style="font-size:20px; margin-top: 100px; margin-bottom: 100px"><strong>The Rarest Vinyl</strong> is an independent record audio store that opened in Belgrade in 2017. 
                       We champion great independent music across many genres. 
                       As well as new releases, we also have a carefully curated selection of second-hand 
                       records.<br>
                       <strong>New Vinyl</strong><br>
                       All of the new vinyl listed in our shop is purchased either directly from 
                       the record label releasing it or from its officially appointed UK distributer.  
                       <strong>Second Hand Vinyl</strong><br>
                    We take great care with the grading of our second hand vinyl. We primarily use 
                    the widely accepted 'Record Collector' magazine grading system and adopt a cautious 
                    approach to grading each record. Grading is always subjective and if you purchase a 
                    record from us and feel the grade does not live up to the rating we have provided it; 
                    then we will accept a return and provide a refund with no questions asked.</p>               
                    </div>
            </div>
        </div>
    </section>


    <!-- ##### Newsletter Area Start ##### -->
<section class="contact-area section-padding-100 bg-img bg-overlay bg-fixed has-bg-img" style="background-image: url(img/bg-img/about.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading white wow fadeInUp" data-wow-delay="100ms">
                    <h2>NEWSLETTER</h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <!-- Email Area -->
                
                <div class="contact-form-area">
                    <form action="about1.php" method="post">
                        <div class="row">
                            <div class="col-md-6 col-lg-4">
                                <div class="form-group wow fadeInUp" data-wow-delay="100ms">
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Name">
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="form-group wow fadeInUp" data-wow-delay="200ms">
                                    <input type="email" name="email" class="form-control" id="email" placeholder="E-mail">
                                </div>
                            </div>

                            <div class="col-12 text-center wow fadeInUp" data-wow-delay="500ms">
                                <button class="btn oneMusic-btn mt-30" name="submit" type="submit">Subscribe <i class="fa fa-angle-double-right"></i></button>
                            </div>
                            <div class="col-12 text-center wow fadeInUp" data-wow-delay="500ms">
                                <p style="color: whitesmoke;"><?php if (isset($message)) { echo $message; } ?></p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### Newsletter Area End ##### -->


   <?php include_once("./view/footer.php") ?>
   

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