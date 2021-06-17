<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <link rel="stylesheet" href="./styles/home.css">
  <title>Home page</title>
</head>

<body style="background-color: #E7E1D7 ;">  
  
<?php session_start(); ?>

  <!--Navbar-->
  <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="profile.php"><?php echo "Welome" ." ".$_SESSION['username']; ?> </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
      aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="landing.html">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            Countries
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="#">United States</a>
            <a class="dropdown-item" href="#">Japan</a>
            <a class="dropdown-item" href="#">China</a>
          </div>
        </li>
        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            Account
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="info.php">Info</a>
            <a class="dropdown-item" href="update.php">Update</a>
          </div>
        </li>

      </ul>
    </div>

      <a href="logout.php" class="btn btn-primary pull-right btn-sm" style = "background-color: darkcyan"  >Logout</a>

  </nav>
  <br><br>

  <!--Cards. This is hardcoded for now, will convert to dynamic later down the line once we learn it-->
  <div class="container">
    <div class="row">
      <div class="col-sm">
        <div class="card" style="width: 18rem;">
          <div class="card-body">
            <h5 class="card-title">Sample title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      </div>
      <div class="col-sm">
        <div class="card" style="width: 18rem;">
          <div class="card-body">
            <h5 class="card-title">Sample title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      </div>
      <div class="col-sm">
        <div class="card" style="width: 18rem;">
          <div class="card-body">
            <h5 class="card-title">Sample title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      </div>
    </div>

    <!--New row-->
    <div class="row">
      <div class="col-sm">
        <div class="card" style="width: 18rem;">
          <div class="card-body">
            <h5 class="card-title">Sample title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      </div>
      <div class="col-sm">
        <div class="card" style="width: 18rem;">
          <div class="card-body">
            <h5 class="card-title">Sample title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      </div>
      <div class="col-sm">
        <div class="card" style="width: 18rem;">
          <div class="card-body">
            <h5 class="card-title">Sample title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      </div>
    </div>

    <!--New row-->
    <div class="row">
      <div class="col-sm">
        <div class="card" style="width: 18rem;">
          <div class="card-body">
            <h5 class="card-title">Sample title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      </div>
      <div class="col-sm">
        <div class="card" style="width: 18rem;">
          <div class="card-body">
            <h5 class="card-title">Sample title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      </div>
      <div class="col-sm">
        <div class="card" style="width: 18rem;">
          <div class="card-body">
            <h5 class="card-title">Sample title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <br><br>

  <!--Comment box: User interactivity-->
  <div id="comment-section">
    <form action="">
      <h2>Comment:</h2>
      <div class="form-group">
        <textarea id="comment_text" cols="50" rows="5" class="form-control" style="width: 30%;"></textarea>
        <p id="comment_length_warning" style="color: red;"></p>
        <button class="btn btn-primary" type="submit" value="Submit" id="post_comment_button"
          style="margin-top: 15px;">Post comment</button>
      </div>
    </form>
  </div>
  <p id="post_comment_success" style="margin-top: 10px;"></p>
  <div id="posted-comments"></div>

  </form>
  <br>


  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
    <script src="./js/home.js"></script>
</body>

</html>
