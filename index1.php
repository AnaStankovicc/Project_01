<?php  
include_once('./php/initdb.php'); 

if(isset($_POST['submit']) 
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

    <title>Home</title>

    <link rel="icon" href="img/core-img/favicon.ico">

    <link rel="stylesheet" href="style.css">

</head>

<body>

<?php include_once("./view/header.php"); ?>
    
    

    <!-- ##### Hero Area Start ##### -->
    <section class="hero-area">
        <div class="hero-slides owl-carousel">
            <!-- Single Hero Slide -->
            <div class="single-hero-slide d-flex align-items-center justify-content-center">
                <!-- Slide Img -->
                <div class="slide-img bg-img" style="background-image: url(img/bg-img/index.pozadina.jpg);"></div>
                <!-- Slide Content -->
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="hero-slides-content text-center">
                            <h6 data-animation="fadeInUp" data-delay="100ms">Vinyl to this</h6>
                                <h2 data-animation="fadeInUp" data-delay="300ms">SUPERIOR audio format <span>SUPERIOR audio format</span></h2>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- ##### Hero Area End ##### -->

    <!-- Informations -->

    <section class="oneMusic-buy-now-area has-fluid bg-gray section-padding-100">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading style-2">
                        <h2>A new (old) form of enjoyment</h2>
                        <p style="font-size: x-large; margin-top: 100px">
                        Our site gives you an insight into the best and rarest releases in recent music history. <br>
                        It includes genres: rock, blues, jazz, pop, funk, soul, electronic, metal, hip-hop ...<br>
                       Depending on your interest and preferences for a music genre, you can choose releases and listen to them in their original format, <br>
                       which gives you a real feel unlike digitized versions that are both edited and refined.<br><br>
                        On our site you can book a visit to our space that provides an authentic experience. <br>
                        You will come to an environment where you can feel the spirit of the times and you can feel like you are in a parallel universe.<br><br>
                        Our site is the result of many years of dedicated work and collecting publications from all over the world and the meridian.<br>
                        Some editions are purchased, some are borrowed, and some were received as a gift.<br><br>
                    We would like to take this opportunity to thank all the fans and admirers who contributed to the existence of this site and this space.<br>

                        You are welcome at any time. But due to the limited number of places, it is necessary to <strong>reserve space.</strong><br>
                         Our space is open from Monday to Saturday, from 10 am to 8 am, and you can show up at any time during the booked day of arrival.<br>
                Rest assured that we will welcome you with kindness and helpful staff always ready to talk. <br>
                Our staff is trained and educated with their dedication and passion to give you the most accurate and verified information about any record and author.<br><br>

                <i>I hope to see you in this unique space!</i><br>
                <h2>You must <a href="login.login.php" style="font-size: larger; color:teal" >sign in</a> or <a href="registration1.php" style="font-size: larger; color:teal"> sign up </a> to send the reservation</h2>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Informations -->

    <!-- NewArrivals Area  -->
    <section class="latest-albums-area section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading style-2">
                        <p>See</p>
                        <h2>New Arrivals</h2>
                    </div>
                </div>
            </div>
         <!--  Single new arrival  area start -->
            <div class="row">
                <div class="col-12">
                    <div class="albums-slideshow owl-carousel">

                       <?php 
                            
                        $arrivals = $connection->nizNewArrivals();
                          foreach($arrivals as $arrival) {
                          echo "<div class='single-album'>";
                          echo "<img src='".$arrival[0]."' alt=''>";
                          echo "<div class='album-info'><a href='#'>
                             <h5>".$arrival[1]."</h5></a>
                             <p>".$arrival[2]."</p>
                             </div>
                            </div>";
                          }
                           ?>
                     </div>
                </div>
            </div>
            <!--  Single new arrival  area start -->
        </div>
    </section>
               

    <!--  Best'sounding vinyls area start-->
    <section class="oneMusic-buy-now-area has-fluid bg-gray section-padding-100">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading style-2">
                        <h2>Here are the best-sounding album on vinyl of all time:</h2>
                    </div>
                </div>
            </div>

            <div class="row">
            <?php 
               $best=$connection->nizBestSelling();
               foreach($best as $row) {
                   echo "<div class='col-12 col-md-6 col-lg-4'>
                   <div class='single-event-area mb-30'>
                   <div class='event-thumbnail'>
                   <img src='".$row[2]."' alt=''>
                   </div>
                   <div class='event-text'>
                   <h4>".$row[0]."</h4> 
                   <div class='event-meta-data'>
                   <a href ='#' class='event-place'>".$row[1]."</a>
                   </div>
                   </div>
                   </div>
                   </div>";
               }
            ?>

            </div>

        </div>
    </section>
    <!-- Best'sounding vinyls area end-->

    <!-- A brief history of vinyl area start-->
    <section class="featured-artist-area section-padding-100 bg-img bg-overlay bg-fixed" style="background-image: url(img/bg-img/about.jpg);">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-12 col-md-5 col-lg-4">
                    <div class="featured-artist-thumb">
                        <img src="img/bg-img/vinyl.jpg" alt="">
                    </div>
                </div>
                <div class="col-12 col-md-7 col-lg-8">
                    <div class="featured-artist-content">
                        <!-- Section Heading -->
                        <div class="section-heading white text-left mb-30">
                            <p>A Brief History of </p>
                            <h2>Vinyl Records</h2>
                        </div>
                        <p>Vinyl records have been delighting listeners and collectors since the 1900s. 
                            Since RCA Victor launched the first commercial vinyl long-playing record in 1930, 
                            vinyl has continued to grow in popularity. Last year in the United States, vinyl 
                            sales were over 1,000% higher than a decade prior. How did this medium come to be, 
                            and where is vinyl headed from here?
                            The first vinyl discs were made for playback at 33 1/3 rpm and pressed onto 12” 
                            diameter flexible plastic discs. These were a commercial flop due to consumer 
                            hesitance during the Great Depression and a lack of consumer playback equipment. 
                            However, starting in 1939, Columbia Records continued to develop vinyl technology 
                            and In 1948, introduced the 12” Long Play (LP) 33 1/3 rpm microgroove record.
                            The cutthroat rivalry between RCA Victor and Columbia Records led to the introduction 
                            of another competing format by RCA, the 7”/45 rpm Extended Play (EP). The period where
                             both of these formats fought for dominance from 1948-1950 was known as the “War of the Speeds.”</p>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
   <!-- A brief history of vinyl area start-->

    <section class="miscellaneous-area section-padding-100-0">
        <div class="container">
            <div class="row">
                    </div>
                </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
   

    <!-- Newsletter Area Start -->
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
                    <form action="./index1.php" method="post">
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
<!-- Newsletter Area End -->

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