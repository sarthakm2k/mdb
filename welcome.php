<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>



<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
    <title>Movie rating</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="styles.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Caveat&family=Montserrat:wght@400;600&family=Poppins:wght@600&display=swap" rel="stylesheet">
<script src="functions.js"></script>
<body bgcolor=”#800000"></body>
<style>
  @import url('https://fonts.googleapis.com/css2?family=Caveat&family=Montserrat:wght@400;600&family=Poppins:wght@600&display=swap');
  </style>


</head>
<body>
  <?php echo "<h1>Welcome " . $_SESSION['username'] . "</h1>"; ?>

  <!-- MENU -->
<div class="topnav" id="myTopnav">
  <a href="#home" class="active">Home</a>
  <a href="english.html">English</a>
  <a href="#contact">Malayalam</a>
  <a href="#about">Tamil</a>
  <a href="#about">Hindi</a>
  <a href="#about">Kannada</a>
  <a href="#about">Web series</a>
  <a href="#about">About</a>
  <a class="logout" href="logout.php">Logout</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>

<div class="slideshow-container">

<div class="mySlides fade">
  <img src="movies/jojoslider.jpg" style="width:100%">
</div>

<div class="mySlides fade">
  <img src="movies/kgf2slidertelugu.webp" style="width:100%">
</div>

<div class="mySlides fade">
  <img src="img/uncharted.jpeg" style="width:100%">
</div>

<a class="prev" onclick="plusSlides(-1)">❮</a>
<a class="next" onclick="plusSlides(1)">❯</a>

<div class="dots">
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>
</div>
</div>
                             



<h2 class="heading"> Latest </h2>

<div class="wrapper">
  <div class="card">
    <img src="movies/jojoicon.jpg">
    <div class="info">
      <h1 class="title">Jo&Jo..</h1>
      <p>8/10</p>
      <a href="https://www.imdb.com/title/tt15483596/?ref_=fn_al_tt_1" class="btn">Read more</a>
    </div>
  </div>

  <div class="card">
    <img src="movies/kgf2icon.jpg">
    <div class="info">
      <h1>KGF_2..</h1>
      <p>9/10</p>
      <a href="https://www.imdb.com/title/tt10698680/?ref_=fn_al_tt_1" class="btn">Read more</a>
    </div>
  </div>

  <div class="card">
    <img src="movies/gundajayanicon.jpg">
    <div class="info">
      <h2>Gundajayan</h2>
      <p> 7/10 </p>
      <a href="https://www.imdb.com/title/tt13229946/?ref_=fn_al_tt_1" class="btn">Read more</a>
    </div>
  </div>

  <div class="card">
    <img src="movies/trancetitle.webp">
    <div class="info">
      <h1>Trance</h1>
      <p>7/10</p>
      <a href="https://www.imdb.com/title/tt6720802/?ref_=fn_al_tt_2" class="btn">Read more</a>
    </div>
  </div>


  <div class="card">
    <img src="movies/bhramamtitle.jpg">
    <div class="info">
      <h1>Bhramam</h1>
      <p>6/10</p>
      <a href="https://www.imdb.com/title/tt13990280/?ref_=fn_al_tt_1" class="btn">Read more</a>
    </div>
  </div>


  <div class="card">
    <img src="movies/fir.jpeg">
    <div class="info">
      <h1>.....FIR.....</h1>
      <p>8/10</p>
      <a href="https://www.imdb.com/title/tt11468258/?ref_=fn_al_tt_1" class="btn">Read more</a>
    </div>
  </div>

  
  
</div>



<h2 class="heading">Top Rated Movies</h2>

<div class="wrapper">
  <div class="card">
    <img src="movies/dictator.jpeg">
    <div class="info">
      <h1>Dictator</h1>
      <p>10/10</p>
      <a href="https://www.imdb.com/title/tt1645170/?ref_=nv_sr_srsg_0" class="btn">Read more</a>
    </div>
  </div>

  <div class="card">
    <img src="movies/castawayicon.jpg">
    <div class="info">
      <h2>CastAway</h2>
      <p>7/10</p>
      <a href="https://www.imdb.com/title/tt0162222/?ref_=nv_sr_srsg_0" class="btn">Read more</a>
    </div>
  </div>

  <div class="card">
    <img src="movies/herapheriicon.jpg">
    <div class="info">
      <h2>Hera_Pheri</h2>
      <p>9/10</p>
      <a href="https://www.imdb.com/title/tt0242519/?ref_=nv_sr_srsg_4" class="btn">Read more</a>
    </div>
  </div>

  <div class="card">
    <img src="movies/kgf1.jpeg">
    <div class="info">
      <h1>..KGF_1..</h1>
      <p> 9/10 </p>
      <a href="https://www.imdb.com/title/tt7838252/?ref_=fn_al_tt_2" class="btn">Read more</a>
    </div>
  </div>


  <div class="card">
    <img src="movies/interstellaricon.jpg">
    <div class="info">
      <h2>Interstellar</h2>
      <p>10/10</p>
      <a href="https://www.imdb.com/title/tt0816692/?ref_=fn_al_tt_1" class="btn">Read more</a>
    </div>
  </div>


  <div class="card">
    <img src="movies/kumbalanginights.jpg">
    <div class="info">
      <h3>kumbalangi_nights</h3>
      <p>10/10</p>
      <a href="https://www.imdb.com/title/tt8413338/?ref_=nv_sr_srsg_0" class="btn">Read more</a>
    </div>
  </div>

</div>



<h2 class="heading">Feel good movies</h2>

<div class="wrapper">
  <div class="card">
    <img src="movies/hometitle.jpg">
    <div class="info">
      <h1>..HOME..</h1>
      <p>9/10</p> 
      <a href="https://www.imdb.com/title/tt10534500/" class="btn">Read more</a>
    </div>
  </div>

  <div class="card">
    <img src="movies/soorapottuicon.jpg">
    <div class="info">
      <h3>Sooraraipotru</h3>
      <p>9/10</p>
      <a href="https://www.imdb.com/title/tt10189514/?ref_=nv_sr_srsg_0" class="btn">Read more</a>
    </div>
  </div>

  <div class="card">
    <img src="movies/sarpattaicon.jpg">
    <div class="info">
      <h1>Sarpatta</h1>
      <p>5/10</p>
      <a href="https://www.imdb.com/title/tt11580854/?ref_=nv_sr_srsg_0" class="btn">Read more</a>
    </div>
  </div>

  <div class="card">
    <img src="movies/jojiicon.jpg">
    <div class="info">
      <h1>...JOJI...</h1>
      <p>8/10 </p>
      <a href="https://www.imdb.com/title/tt13206926/?ref_=fn_al_tt_1" class="btn">Read more</a>
    </div>
  </div>


  <div class="card">
    <img src="movies/radheshyam.jpeg">
    <div class="info">
      <h3>Radheshyam</h3>
      <p>5/10</p>
      <a href="https://www.imdb.com/title/tt8960382/?ref_=fn_al_tt_1" class="btn">Read more</a>
    </div>
  </div>


  <div class="card">
    <img src="movies/wolfofwallicon.jpg">
    <div class="info">
      <h3>wolfofwallstreet</h3>
      <p>8/10</p>
      <a href="https://www.imdb.com/title/tt0993846/?ref_=nv_sr_srsg_0" class="btn">Read more</a>
    </div>
  </div>

</div>


<h2 class="heading">Top Rated webseries</h2>

<div class="wrapper">
  <div class="card">
    <img src="series/upload.jpg">
    <div class="info">
      <h1>Upload</h1>
      <p>8/10</p>
      <a href="https://www.imdb.com/title/tt7826376/?ref_=fn_al_tt_1" class="btn">Read more</a>
    </div>
  </div>

  <div class="card">
    <img src="series/mirzapur.jpeg">
    <div class="info">
      <h1>Mirzapur</h1>
      <p>8/10</p>
      <a href="https://www.imdb.com/title/tt6473300/?ref_=nv_sr_srsg_0" class="btn">Read more</a>
    </div>
  </div>

  <div class="card">
    <img src="series/msmarvel.jpg">
    <div class="info">
      <h2>Ms.Marvel</h2>
      <p>7/10</p>
      <a href="https://www.imdb.com/title/tt10857164/?ref_=nv_sr_srsg_0" class="btn">Read more</a>
    </div>
  </div>

  <div class="card">
    <img src="series/familymanicon.jpg">
    <div class="info">
      <h2>FamilyMan</h2>
      <p>8/10</p>
      <a href="https://www.imdb.com/title/tt9544034/?ref_=nv_sr_srsg_0" class="btn">Read more</a>
    </div>
  </div>


  <div class="card">
    <img src="series/strangerthingsicon.jpg">
    <div class="info">
      <h2>Strangerthings</h2>
      <p>9/10</p>
      <a href="https://www.imdb.com/title/tt4574334/?ref_=nv_sr_srsg_1" class="btn">Read more</a>
    </div>
  </div>


  <div class="card">
    <img src="series/breakingbadicon.jpg">
    <div class="info">
      <h2>BreakingBad</h2>
      <p>10/10</p>
      <a href="https://www.imdb.com/title/tt0903747/?ref_=nv_sr_srsg_0" class="btn">Read more</a>
    </div>
  </div>

</div>



<footer class="footer">
  <h2 class="foottitle"> Movie Database </h3>
  <p class="footcontent">This website consists of all the movies and shows that i have watched till date and my rating of those.</p>

  <p class="footcontent2">The rating is purely based on my view, and it is rated out of 10 points.</p>
  <br>
  
  <h3 class="contact">Contact me: sarthakm2k@gmail.com</h3>
  <br>
  <br>
</footer>
<script>
  showSlides(slideIndex);
</script>
</body>
</html>
