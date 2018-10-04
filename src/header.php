
<?php
  if(isset($_GET['postTitle']))
  {
    $search = $_GET['postTitle'];
  }

  session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>BLOG</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand" href="index.php">Blog</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <?php 
          if(isset($_SESSION['user_id']) == "")
          {

          ?>
          <li class="nav-item">
            <a class="nav-link" href="#">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Register</a>
          </li>
          <?php
          }
          else
          {
          ?>
          <li class="nav-item">
            <a class="nav-link" href="profile.php"><?php echo $_SESSION['username'];?></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="profile.php"><?php echo $_SESSION['email'];?></a>
          </li> 
          <li class="nav-item">
            <a class="nav-link" href="profile.php">roles: <?php echo $_SESSION['roles'];?></a>
          </li> 
          <?php
          }
          ?>
        </ul>
        <form class="form-inline my-2 my-lg-0" action="search.php?postTitle=<?php echo $search ?>" method="GET">
          <input class="form-control mr-sm-2" type="search" name="postTitle" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>

<div class="container">