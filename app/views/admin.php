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
  <link rel="stylesheet" href="/assets/css/admin.css">
  <!-- Jquery CDN -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <!-- Custom jquery -->
  <script src="/assets/js/admin.js"></script>
</head>
<body>
  <!-- navbar -->
  <nav class="navbar navbar-expand-lg navbar-light">
    <a class="navbar-brand font-weight-bold status-menu-item" href="/admin/index">
      Local-Notepad-App
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse text-center" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link list" href="/admin/logout">
            <i class="fa fa-sign-out"></i>
            Logout
          </a>
        </li>
      </ul>
    </div>
  </nav>


  <div class="main-container">
    <div class="row">
    <div class="container bg-light p-3 text-center">
      <h2 class="heading">Welcome Admin</h2>
      <p class="text-secondary">Enter the books details then click submit to save the information</p>
      <form action="/admin/index" method="POST" enctype="multipart/form-data">
        <div class="form-group p-3">
          <label for="id" class="tag">BookId</label>
          <input type="text" name="id" id="id" class="entries" required 
          placeholder="Enter alphanumeric value for bookid">
        </div>
        <span id="id-error" class="text-danger"></span>

        <div class="form-group key p-3">
          <label for="image" class="tag">Poster Image</label>
          <input type="file" name="image" id="image" class="entries" required>
        </div>
        <span class="text-danger"></span>

        <div class="form-group key p-3">
          <label for="title" class="tag">Book Title</label>
          <input type="text" name="title" id="title" class="entries" required 
          placeholder="Enter the title of the book">
        </div>
        <span id="title-error" class="text-danger"></span>

        <div class="form-group key p-3">
          <label for="genre" class="tag">Genre</label>
          <input type="text" name="genre" id="genre" class="entries" required 
          placeholder="Enter the genre of the book">
        </div>
        <span id="genre-error" class="text-danger"></span>

        <div class="form-group key p-3">
          <label for="date" class="tag">Date of Publication</label>
          <input type="date" name="date" id="date" class="entries" required 
          placeholder="Enter the date of publication">
        </div>

        <div class="form-group key p-3">
          <label for="author" class="tag">Author</label>
          <input type="text" name="author" id="author" class="entries" required 
          placeholder="Enter the author of the book">
        </div>
        <span id="author-error" class="text-danger"></span>

        <div class="form-group key p-3">
          <label for="rate" class="tag">Rating</label>
          <input type="text" name="rate" id="rate" class="entries" required 
          placeholder="Enter the rating value of the book">
        </div>
        <span id="rate-error" class="text-danger"></span>

        <div class="form-group key p-3">
          <label for="category" class="tag">Category</label>
          <input type="text" name="category" id="category" class="entries" 
          required placeholder="Enter the category of the book">
        </div>
        <span id="category-error" class="text-danger"></span>

        <input type="reset" value="RESET" class="button btn-primary">
        <input type="submit" name="save" id="save" value="SUBMIT" class="button btn-primary">
      </form>
    </div>
    </div>
  </div>

  <!-- Popper.js, Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
