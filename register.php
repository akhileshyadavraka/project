<?php

include('config.php');
include('enquery.php');


?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


    <title>ragister !</title>
  </head>
  <body style="background:skyblue;">

    <?php
      include('header.php');
    ?>

<div class="container-fluid" style="padding: 0% 1.6% 0% 1.6%;">
  <div class="row" style="background:white">
  <div class="col-md-6" style="text-align: center;padding-top: 10%;">
    <img src="img/register.webp" style="width:80%">
  </div>
  <div class="col-md-6" style="padding: 5%;">
  <h2 style="color:green;text-align: center;">Please.. Ragistration Here</h2>
  <?php
      if($_SERVER["REQUEST_METHOD"] == "POST")
 {
    $fname    = $_POST['fname'];
    $father   = $_POST['father'];
    $mother   = $_POST['mother'];
    $mobile   = $_POST['mobile'];
    $address  = $_POST['address'];
    $email    = $_POST['email'];
    $password = $_POST['password'];

    $query = "INSERT INTO ragistration_tbl values('','$fname','$father','$mother','$mobile','$address','$email','$password')";

    $data = mysqli_query($conn,$query);

    if($data){
      echo "<h6 style='color:white;text-align:center;background:lightgreen;padding:5px'>Thanks...... Your Are Ragister Successfully</h6>";
    }
    else{
            echo "Data cannot insert into database";
    }
  }
  ?>
<form action="#" method="post">
  <div class="form-group">
    <label for="exampleInputName1">Name</label>
    <input type="text" name="fname" class="form-control" placeholder="Enter name" required>
  </div>
  <div class="form-group">
    <label for="exampleInputFather1">Father</label>
    <input type="text" name="father"class="form-control"  placeholder="Enter father" required>
  </div>
  <div class="form-group">
    <label for="exampleInputMother1">Mother</label>
    <input type="text" name="mother"class="form-control"  placeholder="Enter mother" required>
  </div>
  <div class="form-group">
    <label for="exampleInputMobile1">Mobile</label>
    <input type="number" name="mobile"class="form-control"  placeholder="Enter mobile" required>
  </div>
  <div class="form-group">
    <label for="exampleInputAddress1">Address</label>
    <textarea  name="address" class="form-control" placeholder="Enter address" required></textarea>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="email" name="email" class="form-control"  placeholder="Enter Email" required>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">password</label>
    <input type="password" name="password" class="form-control"  placeholder="Enter Password" required>
    <small id="emailHelp" class="form-text text-muted">We'll never share your password with anyone else.</small>
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary" name="ragister">Submit</button>
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