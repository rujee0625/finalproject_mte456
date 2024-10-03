<?php
session_start();

if ($_SESSION['user'] == "") {
  echo "<meta http-equiv='refresh' content='0;URL=../login.php' />";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Quick Contact</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
</head>

<body>

  <div class="card text-center" style="padding:15px;">
    <h4>Quick Contact</h4>
  </div><br>

  <div class="container">
    <form action="ST_insert-p.php" method="post" enctype="multipart/form-data">
      <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" class="form-control" name="name" placeholder="Name" required="">
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="text" class="form-control" name="email" placeholder="Email" required="">
      </div>
      <div class="form-group">
        <label for="message">Message:</label>
        <input type="text" class="form-control" name="message" placeholder="Message" required="">
      </div>
      <!-- <div class="form-group">
        <label for="finalscore">Final Score:</label>
        <input type="text" class="form-control" name="final_score" placeholder="Enter Final Score" required="">
      </div>
      <div class="form-group">
        <label for="Picture">Picture:</label>
        <input type="file" class="form-control" name="fileupload">
      </div> -->
      <input type="submit" name="submit" class="btn btn-primary" style="float:right;" value="Submit">
    </form>
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>