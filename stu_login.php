<?php

include('enquery.php');

if($_SERVER["REQUEST_METHOD"] == "POST")
{
  $username = $_POST['username'];
  $userpassword = $_POST['userpassword'];

$query = "SELECT * FROM ragistration_tbl WHERE email = $username && password = $userpassword ";

$data = mysqli_query($conn, $query);

if ($data) {
  header('location:welcome.php');
}

}


?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- icon cdn-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>ragister !</title>
  </head>
  <body style="background:skyblue;">

<?php
include('header.php');
?>

<div class="container-fluid"style="padding: 0% 1.6% 0% 1.6%;">
  <div class="row" style="background-color:white;">
    <div class="col-md-6">
      <img src="img/login.jpg" style="width:80%">
    </div>
    <div class="col-md-6 " style="padding:5%;"><p style="text-align: center;">
      <i class="fa fa-graduation-cap" aria-hidden="true" style="width:50px;font-size:50px;border-radius: 100%;"></i></p>
    <h3 style="color:blue ;text-align: center;">Dear Student.. Your are Login Here</h3>
<form action="#" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">User Id</label>
    <input type="email" class="form-control" name="username" placeholder="Username">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Password</label>
    <input type="password" class="form-control" name="userpassword" placeholder="UserPassword">
    <small id="emailHelp" class="form-text text-muted">We'll never share your password with anyone else.</small>
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary" name="login">Submit</button>
</form>
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