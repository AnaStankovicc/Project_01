<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vinyl Rarities</title>

    <link rel="icon" href="../img/core-img/favicon.ico">

    
    <link rel="stylesheet" href="./style.css">
</head>
<body>
<?php include_once("./view/header.php")?>
<?php include_once("./php/initdb.php") ?>

<section class="breadcumb-area bg-img bg-overlay" style="background-image: url(img/bg-img/contact.jpg);">
        <div class="bradcumbContent">
            <h2>Vinyl Rarities</h2>
        </div>
    </section>

    <div class="oneMusic-buy-now-area mb-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="load-more-btn text-center">
                        <h3 style="margin-top: 200px;">Vinyl records have a warmth, crackle and pop that digital audio files can’t replicate.</h3>
                       <p style="font-size: x-large;">Listening to vinyl isn’t the easiest way to listen 
                       to music, especially by today’s streaming standards. Nor does it guarantee the 
                       highest-quality listening experience anymore, as high-res lossless digital tracks 
                       are more abundant than ever. But people don’t care about that anymore. After decades 
                       in decline, the popularity of vinyl has skyrocketed over the last few years. 
                       Just look at the numbers.
                           <br>
                          The fact that vinyl listening is a process is part of its allure. 
                          People want the analog experience of placing a record, lowering the 
                          needle and watching and hearing as music is created. Moreover, vinyl 
                          records have a warmth, crackle and pop that digital audio files can’t replicate. 
                          Sometimes those sounds can be considered imperfections, but it makes the music more 
                          nostalgic. Certain albums and tracks just sound better through vinyl – it’s inexplicable, but it’s a fact.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="album-catagory section-padding-100-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="browse-by-catagories catagory-menu d-flex flex-wrap align-items-center mb-70">
                    
                    <div class="card-body-sort">

                <form action="./pre-orders.php" method="get">
                    <div class="row-sort">
                        <div class="col-md-4">
                        <div class="input-group mb-3" style="width: 200px; height: 50px">
                        <select name="sort-alphabet" class="form-control-sort">
                            <option value="">--Select option--</option>
                            <option value="a-z" <?php if(isset($_GET['sort-alphabet']) && $_GET['sort-alphabet'] =="a-z" ) { echo "selected"; } ?> >A-Z (Ascending order)</option>
                            <option value="z-a" <?php if(isset($_GET['sort-alphabet']) && $_GET['sort-alphabet'] =="z-a" ) { echo "selected"; } ?>>Z-A (Descending order)</option>
                            <option value="price_low_high" <?php if(isset($_GET['sort-alphabet']) && $_GET['sort-alphabet'] =="price_low_high" ) { echo "selected"; } ?> >Price, low to high</option>
                            <option value="price_high_low" <?php if(isset($_GET['sort-alphabet']) && $_GET['sort-alphabet'] =="price_high_low" ) { echo "selected"; } ?> >Price, high to low</option>
                        </select>
                        <button type="submit" class="input-group-text" id="basic-addon2">Sort</span>
                        </div>
                        </div>
                    </div>
                </form>
</div>              
                     
                    </div>
                </div>
            </div>
            <div class="row oneMusic-albums">

<?php  

$conn = new mysqli('localhost','root','', 'projekat');


$upit = "SELECT*FROM `pre-orders`";

if(isset($_GET['sort-alphabet'])) {

if($_GET['sort-alphabet'] == 'a-z') {

$upit .= "ORDER BY `artist` ASC";

} 

elseif ($_GET['sort-alphabet'] == 'z-a') {

$upit .= "ORDER BY `artist` DESC";
}
elseif ($_GET['sort-alphabet'] == 'price_low_high') {
$upit .= "ORDER BY `cena` ASC";
}
elseif ($_GET['sort-alphabet'] == 'price_high_low') {
$upit .= "ORDER BY `cena` DESC";
}
}



$query_res = $conn->query($upit);
foreach ($query_res as $row) { 
if (mysqli_num_rows($query_res) > 0) {
echo "<div class='col-12 col-sm-4 col-md-3 col-lg-2 single-album-item t c p'>
<div class='single-album'>
    <img src='".$row['putanja']."' alt=''>
    <div class='album-info'>
        <a href='#'>
            <h5>".$row['artist']."</h5>
        </a>
        <p>".$row['album']."</p>
       
    </div>
</div>
</div>";
}

else {
echo "No record found";
}
}


?>

</div>
</div>
</section>


    <div class="add-area mb-100">

    </div>

    <section>
        <div>
            <h2 style="text-align: center; margin-bottom:50px">COMING SOON<br><br>4th March</h2>
        </div>
    </section>
    <div class="one-music-songs-area mb-70">
        <div class="container">
            <div class="row">
               <?php 
                  $comings = $connection->nizComingSoon();
                  foreach($comings as $row) {
                      echo "<div style='width: 500px; text-align: center;'>";
                    echo "<p style='text-align: center'><strong> ". $row[0] . " </strong> " . $row[1] ." </p>  <br> ";
                    
                      echo "</div>";
                  }
               ?>
            </div>
        </div>
    </div>
    <section>
        <div>
            <h2 style="text-align: center; margin-bottom:50px">1st April</h2>
        </div>
    </section>

    <div class="one-music-songs-area mb-70">
        <div class="container">
            <div class="row">
               <?php 
                  $comings = $connection->nizComingSoon();
                  foreach($comings as $row) {
                      echo "<div style='width: 500px; text-align: center;'>";
                    echo "<p style='text-align: center'><strong> ". $row[0] . " </strong> " . $row[1] ." </p>  <br> ";
                    
                      echo "</div>";
                  }
               ?>
            </div>
        </div>
    </div>



    <section>
        <div>
            <p style="text-align: center; font-size: x-large">These are the 5 most listened songs of the previous week.</p>
            <h2 style="text-align: center; margin-bottom:50px">THE HOT 5</h2>
        </div>
    </section>

    <!-- ##### Song Area Start ##### -->
    <div class="one-music-songs-area mb-70">
        <div class="container">
            <div class="row">

                <!-- Single Song Area -->
                <div class="col-12">
                    <div class="single-song-area mb-30 d-flex flex-wrap align-items-end">
                        <div class="song-thumbnail">
                            <img src="img/song/curtis.jpg" alt="">
                        </div>
                        <div class="song-play-area">
                            <div class="song-name">
                            04. Curtis Mayfield - Move on up
                                <p>04. Curtis Mayfield - Move on up</p>
                            </div>
                            <audio preload="auto" controls>
                                <source src="audio/curtis.mp3">
                            </audio>
                        </div>
                    </div>
                </div>

                <!-- Single Song Area -->
                <div class="col-12">
                    <div class="single-song-area mb-30 d-flex flex-wrap align-items-end">
                        <div class="song-thumbnail">
                            <img src="img/song/blkpumas.png" alt="">
                        </div>
                        <div class="song-play-area">
                            <div class="song-name">
                                <p>02. Black Pumas - Colors</p>
                            </div>
                            <audio preload="auto" controls>
                                <source src="audio/black.mp3">
                            </audio>
                        </div>
                    </div>
                </div>

                <!-- Single Song Area -->
                <div class="col-12">
                    <div class="single-song-area mb-30 d-flex flex-wrap align-items-end">
                        <div class="song-thumbnail">
                            <img src="img/song/morcheeba.jpg" alt="">
                        </div>
                        <div class="song-play-area">
                            <div class="song-name">
                                <p>03. Morcheeba - Undress me now</p>
                            </div>
                            <audio preload="auto" controls>
                                <source src="audio/morcheeba.mp3">
                            </audio>
                        </div>
                    </div>
                </div>

                <!-- Single Song Area -->
                <div class="col-12">
                    <div class="single-song-area mb-30 d-flex flex-wrap align-items-end">
                        <div class="song-thumbnail">
                            <img src="img/song/bonobo.jpg" alt="">
                        </div>
                        <div class="song-play-area">
                            <div class="song-name">
                                <p>04. Bonobo - Stay the sam ft. Andreya</p>
                            </div>
                            <audio preload="auto" controls>
                                <source src="audio/bonobo.mp3">
                            </audio>
                        </div>
                    </div>
                </div>

                <!-- Single Song Area -->
                <div class="col-12">
                    <div class="single-song-area mb-30 d-flex flex-wrap align-items-end">
                        <div class="song-thumbnail">
                            <img src="img/song/bill.jpg" alt="">
                        </div>
                        <div class="song-play-area">
                            <div class="song-name">
                                <p>05. Grover Washington Jr. feat. Bill Withers - Just The Two of Us</p>
                            </div>
                            <audio preload="auto" controls>
                                <source src="audio/bill.mp3">
                            </audio>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- ##### Song Area End ##### -->

    

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
    
</body>
</html>