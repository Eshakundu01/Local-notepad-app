<?php require_once 'login.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Local-Notepad-App</title>
  <!-- Font Awesome link -->
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <!-- Custom css -->
  <link rel="stylesheet" href="css/login.css">
  <!-- Jquery CDN -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <!-- Custom jquery -->
  <script src="js/login.js"></script>
</head>
<body>
  <div class="background">
    <div class="row">
    <div class="container bg-light form text-center">
      <h2 class="heading">Welcome</h2>
      <p class="text-secondary">Login with your username and password</p>
      <form>
        <div class="form-group p-3">
          <label for="username" class="tag">USERNAME</label>
          <input type="text" name="user_name" id="user_name" class="entries" required>
          <span id="name" class="text-danger"></span>
        </div>

        <div class="form-group key p-3">
          <label for="pass" class="tag">PASSWORD</label>
          <input type="password" name="pass" id="pass" class="entries code" required>
          <i id="display" class="fa fa-eye show"></i>
          <span id="code" class="text-danger"></span>
        </div>

        <div class="form-group">
          <input type="submit" name="submit" id="submit" value="LOGIN" class="button btn-primary">
        </div>
      </form>
    </div>
    </div>
  </div>

  <!-- Popper.js, Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
