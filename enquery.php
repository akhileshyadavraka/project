<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
</head>
<body>
  <div class="row">
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo" style="width:100px;position: fixed; margin-top:300px;transform: rotate(90deg);">Enquery</button>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New Enquery </h5>
        <?php
           if($_SERVER["REQUEST_METHOD"] == "POST")
             {
                $fname    = $_POST['fname'];
                $father   = $_POST['father'];
                $email    = $_POST['email'];
                $massage = $_POST['massage'];

                $sql = "INSERT INTO `enquery_tbl`( `name`, `father`, `email`, `massage`) VALUES ('$fname','$father','$email','$massage')";
          
                $data = mysqli_query($conn,$sql);

                if($data){
                  header('location:home.php');
                }
                else{
                        echo "Data cannot insert into database";
                }
             }

        ?>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form  method="post">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Name:</label>
            <input type="text" name="fname" class="form-control" id="recipient-name" required>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Father:</label>
            <input type="text" name="father" class="form-control" id="recipient-name" required>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Email:</label>
            <input type="email" name="email" class="form-control" id="recipient-name" required>
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Message:</label>
            <textarea class="form-control" name="massage" id="message-text" required></textarea>
          </div>
          <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-success" value="Send Massage">
      </div>
        </form>
      </div>
    </div>
  </div>
</div>
</div>
</body>
</html>