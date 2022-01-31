<?php 

include_once("./php/initdb.php");


if(isset($_POST['date'])) {
    require "./php/reservation.php";
     $_RSV->save($_POST['date'], $_POST['name'], $_POST['email'])
? "OK" : $_RSV->error;

$message = "Your reservation has been successful!<bra> 
               We are expecting you!";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   
    <title>Take a look</title>


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
  
    <link rel="icon" href="../img/core-img/favicon.ico">

    
    <link rel="stylesheet" href="../style.css">
    <style>
        .add {
  align-items: center;
  background-color: #FFFFFF;
  border: 1px solid rgba(0, 0, 0, 0.1);
  border-radius: .25rem;
  box-shadow: rgba(0, 0, 0, 0.02) 0 1px 3px 0;
  box-sizing: border-box;
  color: rgba(0, 0, 0, 0.85);
  cursor: pointer;
  display: inline-flex;
  font-family: system-ui,-apple-system,system-ui,"Helvetica Neue",Helvetica,Arial,sans-serif;
  font-size: 16px;
  font-weight: 600;
  justify-content: center;
  line-height: 1.25;
  margin: 0;
  min-height: 3rem;
  padding: calc(.875rem - 1px) calc(1.5rem - 1px);
  position: relative;
  text-decoration: none;
  transition: all 250ms;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
  vertical-align: baseline;
  width: auto;
}

.add:hover,
.add:focus {
  border-color: rgba(0, 0, 0, 0.15);
  box-shadow: rgba(0, 0, 0, 0.1) 0 4px 12px;
  color: rgba(0, 0, 0, 0.65);
}

.add:hover {
  transform: translateY(-1px);
}
.add:active {
  background-color: #F0F0F1;
  border-color: rgba(0, 0, 0, 0.15);
  box-shadow: rgba(0, 0, 0, 0.06) 0 2px 4px;
  color: rgba(0, 0, 0, 0.65);
  transform: translateY(0);
}
    </style>


</head>

<body>
<?php include_once("./view/header.php")?>
 
    <section class="breadcumb-area bg-img bg-overlay" style="background-image: url(img/bg-img/shop.jpg);">
        <div class="bradcumbContent">
            <h2>Rare and Collectable Records</h2>
        </div>
    </section>


    <section class="album-catagory section-padding-100-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="browse-by-catagories catagory-menu d-flex flex-wrap align-items-center mb-70">
                    
                    <div class="card-body-sort">
                        <div class="inline" style="box-sizing: border-box;">
                        <div class="form1" style="display: inline-block;">
                  <p>Sort by price and category</p>
                <form  action="./shop1.php" method="get">
                    <div class="row-sort">
                        <div class="col-md-4">
                        <div class="input-group mb-3" style="width: 200px; height: 50px">
                        <select name="sort-alphabet" class="form-control-sort">
                            <option value="">--Select option--</option>
                    
                            <option value="price_low_high" <?php if(isset($_GET['sort-alphabet']) && $_GET['sort-alphabet'] =="price_low_high" ) { echo "selected"; } ?> >Price, low to high</option>
                            <option value="price_high_low" <?php if(isset($_GET['sort-alphabet']) && $_GET['sort-alphabet'] =="price_high_low" ) { echo "selected"; } ?>>Price, high to low</option>
                            <option value="hip-hop" <?php if(isset($_GET['sort-alphabet']) && $_GET['sort-alphabet'] =="hip-hop" ) { echo "selected"; } ?> >Hip-Hop</option>
                            <option value="jazz" <?php if(isset($_GET['sort-alphabet']) && $_GET['sort-alphabet'] =="jazz" ) { echo "selected"; } ?>>Jazz</option>
                            <option value="funk/soul" <?php if(isset($_GET['sort-alphabet']) && $_GET['sort-alphabet'] =="funk/soul") { echo "selected"; } ?> >Funk/soul</option>
                            <option value="blues" <?php if(isset($_GET['sort-alphabet']) && $_GET['sort-alphabet'] =="blues" ) { echo "selected"; } ?>>Blues</option>
                            <option value="rock" <?php if(isset($_GET['sort-alphabet']) && $_GET['sort-alphabet'] =="rock" ) { echo "selected"; } ?>>Rock</option>
                            <option value="electronic" <?php if(isset($_GET['sort-alphabet']) && $_GET['sort-alphabet'] =="electronic" ) { echo "selected"; } ?>>Electronic</option>
                            <option value="pop" <?php if(isset($_GET['sort-alphabet']) && $_GET['sort-alphabet'] =="pop" ) { echo "selected"; } ?>>Pop</option>
                        </select>
                        <button type="submit" class="input-group-text" id="basic-addon2">Sort</button>
                        </div>
                        </div>
                    </div>
                </form>
                </div>
                <div class="form2" style="display: inline-block;">
                </div>
                </div>
</div>              
                     
                    </div>
                </div>
            </div>

 <div class="row oneMusic-albums">

 <?php  
            
$conn = new mysqli('localhost','root','', 'projekat');
            

$upit = "SELECT*FROM `baza_ploce`";

if (isset($_GET['sort-alphabet'])) {

if($_GET['sort-alphabet'] == 'hip-hop') {

    $upit .= "WHERE `zanr` = 'Hip-Hop'";
} 
elseif ($_GET['sort-alphabet'] == 'jazz') {
    
    $upit .= "WHERE `zanr` = 'Jazz'";
}
elseif ($_GET['sort-alphabet'] == 'funk/soul') {

    $upit .= "WHERE `zanr` = 'funk/soul'";
}
elseif ($_GET['sort-alphabet'] == 'blues') {

    $upit .= "WHERE `zanr` = 'blues'";
}
elseif ($_GET['sort-alphabet'] == 'rock') {

    $upit .= "WHERE `zanr` = 'rock'";
}
elseif ($_GET['sort-alphabet'] == 'electronic') {

    $upit .= "WHERE `zanr` = 'electronic'";
}
elseif ($_GET['sort-alphabet'] == 'pop') {

    $upit .= "WHERE `zanr` = 'pop'";
 }
 elseif ($_GET['sort-alphabet'] == 'price_low_high') {

    $upit .= "ORDER BY `cena` ASC";
}
elseif ($_GET['sort-alphabet'] == 'price_high_low') {

    $upit .= "ORDER BY `cena` DESC";
  }
}


$query_res = $conn->query($upit);
?>
<!-- <form method="post" action="korpa.php"> -->
  <form method="post" action="korpa.php?action=add&id=<?php echo $row['id']; ?>" >
<?php
foreach ($query_res as $row) { 
    if (mysqli_num_rows($query_res) > 0) { ?>
    <div class='col-12 col-sm-4 col-md-3 col-lg-2 single-album-item t c p'>
            <div class='single-album'>
                <img src='<?php echo $row['putanja'] ?>' alt=''>
                <div class='album-info'>
                    <a href='#'>
                        <h5><?php echo $row['naziv'] ?></h5>
                    </a>
                    <p><?php echo $row['album'] ?></p>
                    <p><?php echo $row['zanr'] ?></p>
                    <p><?php echo $row['godina_izdavanja'] ?></p>
                    
                     </div>
            </div>
        </div> <?php
        
  }
}

 ?>
</form>

            </div>
        </div>
    </section>


    <div class="add-area mb-100">

      <div class="one-music-songs-area mb-70">
        <div class="container">
            <div class="row">
            <?php if(!isset($_SESSION['userid'])) { ?>
    <h2>You must <a href="login.login.php" style="font-size: larger; color:teal" >sign in</a> or <a href="registration1.php" style="font-size: larger; color:teal"> sign up </a> to send the reservation</h2>
          <?php } ?>  
          </div>
        </div>
      </div>

      <!-- ##### Reservation Area Start ##### -->
     <?php if(isset($_SESSION['userid'])) { ?>
<section class="contact-area section-padding-100 bg-img bg-overlay bg-fixed has-bg-img" style="background-image: url(img/bg-img/reservation.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading white wow fadeInUp" data-wow-delay="100ms">
                    <h2>RESERVATION</h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <!-- Email Area -->     
                <div class="contact-form-area">
                    <form method="post" target="_self">
                        <div class="row">
                            <div class="col-md-6 col-lg-4">
                                <div class="form-group wow fadeInUp" data-wow-delay="100ms">
                                    <input type="date" name="date" class="form-control" id="name" placeholder="Date" required>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="form-group wow fadeInUp" data-wow-delay="200ms">
                                    <input type="text" name="name" class="form-control" id="email" placeholder="Your name" required>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="form-group wow fadeInUp" data-wow-delay="200ms">
                                    <input type="email" name="email" class="form-control" id="email" placeholder="E-mail" required>
                                </div>
                            </div>

                            <div class="col-12 text-center wow fadeInUp" data-wow-delay="500ms">
                                <button class="btn oneMusic-btn mt-30" name="submit" type="submit">GO!<i class="fa fa-angle-double-right"></i></button>
                            </div>
                            <div class="col-12 text-center wow fadeInUp" data-wow-delay="500ms">
                                <p style="color: whitesmoke; font-size:x-large"><?php if (isset($message)) { echo $message; } ?></p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<?php } ?>
<!-- ##### Reservation Area End ##### -->



      <section style="margin-top: 100px;">
        <div>
            <p style="text-align: center; font-size:x-large">Vinyl, you beautiful, beautiful thing. Below are some of the best vinyl record collections from
            musicians around the world</p>
            <h2 style="text-align: center; margin-bottom:50px">All time greatest</h2>
        </div>
    </section>

    
     <section class="miscellaneous-area section-padding-100-0">
        <div class="container">
            <div class="row">
               
            <div class="single-blog-post mb-100 wow fadeInUp" data-wow-delay="100ms">
                      
                        <div class="blog-post-thumb mt-30">
                            <a href="#"><img src="img/bg-img/pinkfloyd.jpg" alt=""></a>
                        </div>

                       
                        <div class="blog-content">
                           
                            <a href="#" class="post-title">THE PINK FLOYD COLLECTION</a>
                            
                            <p>Pink Floyd is one of the most successful rock bands of all time, 
                                with record sales in excess of 200 million worldwide. Yet at the same time, 
                                the individuals who have made up the band through the years have maintained a 
                                certain degree of anonymity unusual in the often personality-driven world of 
                                rock music, with few people outside of diehard fans and musicians able to name 
                                the band’s members.<br>
                                <a href="#"><strong>TO THE COLLECTION</strong></a>
                                
                            </p>
                        </div>
                    </div>

            <!-- Single Post Start -->
            <div class="single-blog-post mb-100 wow fadeInUp" data-wow-delay="100ms">
                        <!-- Post Thumb -->
                        <div class="blog-post-thumb mt-30">
                            <a href="#"><img src="img/bg-img/bobdylan.jpg" alt=""></a>
                        </div>

                        <!-- Blog Content -->
                        <div class="blog-content">
                            <!-- Post Title -->
                            <a href="#" class="post-title">THE BOB DYLAN COLLECTION</a>
                            
                            <p>Often regarded as one of the greatest songwriters of all time,
                            Dylan has been a major figure in popular culture during a career spanning 60 years.  
                            His lyrics during this period incorporated a range of political, social, philosophical, and literary 
                            influences, defying pop music conventions and appealing to the burgeoning counterculture.
                            In 2016, Dylan was awarded the Nobel Prize in Literature "for having created new poetic expressions 
                            within the great American song tradition".<br>
                                <a href="#"><strong>TO THE COLLECTION </strong></a>
                            </p>
                        </div>
                    </div>

                    <!-- Single Post Start -->
            <div class="single-blog-post mb-100 wow fadeInUp" data-wow-delay="100ms">
                        <!-- Post Thumb -->
                        <div class="blog-post-thumb mt-30">
                            <a href="#"><img src="img/bg-img/rollingstones.jpg" alt=""></a>
                        </div>

                        <!-- Blog Content -->
                        <div class="blog-content">
                            <!-- Post Title -->
                            <a href="#" class="post-title">THE ROLLING STONES COLLECTION</a>
                            
                            <p>For over six decades vocalist Mick Jagger
                                and guitarist Keith Richars have been the driving
                                force behind The Rolling Stones. In this collection you can dig
                                hundreds of their records including limited editions and picture discs.
                                Here you can also find a few collectors items, books and DVDs.<br>
                                <a href="#"><strong>TO THE COLLECTION </strong></a>
                            </p>
                        </div>
                    </div>
                
                  </div>
                 </div>
                    </div>
                </div> 

                <?php include_once("view/footer.php") ?>
   

   
 
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
