<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

    <title>www.bteup.in.com </title>
  </head>
  <body style="background:skyblue;">
<?php
   include('header.php');
   include('enquery.php');
?>
    
<hr>
<!--Start slider-->
  <div class="container-fluid mt-1" >
  <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/slider.jpg" class="d-block w-100" alt="..." style="height:600px">
    </div>
    <div class="carousel-item">
      <img src="img/slider1.jpg" class="d-block w-100" alt="..."style="height:600px">
    </div>
    <div class="carousel-item">
      <img src="img/slider2.jpg" class="d-block w-100" alt="..."style="height:600px">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>

<div class="container-fluid" style="background-color:white ;margin: 5px 0px 5px 12px ; width: 98.5%;">
  <div class="row" >
    <div class="col-md-12" style="margin: 0px;padding: 0px;">
      <marquee behaviour ="alternate">
      <img src="img/new.gif" style="height:40px">
      hello welcome to php
      <img src="img/new.gif" style="height:40px">
      hello welcome to php
      <img src="img/new.gif" style="height:40px">
      hello welcome to php
    </marquee>
    </div>
  </div>
</div>





<?php

include('footer.php');
?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
  </body>
</html>