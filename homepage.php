<?php
session_start();
include 'init.php';
include 'includes/header.php';
?>


<div class="bgg">
	<div class="overlay">
	<a class="btn btn-outline-light btn-lg" href="buygear.php" role = "button">Buy Gear</a>	
	<a class="btn btn-outline-light btn-lg" href="login.php" role = "button">Sell Gear</a>
     </div>
</div>

<h1 id="shopphrasehomepage">Shop By Category</h1>

<a href="buygear.php">

<div id="carousel1" class="carousel slide" data-ride="carousel" data-interval="2800">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="images/guitarcarousel.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/drumscarousel.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/ampscarousel.jpg" alt="Third slide">
    </div>

  </div>
</div>
</a>

<h1 id="shopphrasehomepage">Shop By Brand</h1>

<a href="categorypage.php">

<div id="carousel1" class="carousel slide" data-ride="carousel" data-interval="2800">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="images/fendercarousel.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/ibanezcarousel.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/pedalscarousel.jpg" alt="Third slide">
    </div>
</a>
  </div>
</div>




<div class="footerhomepage">
<?php include 'includes/footer.php';?>
</div>



