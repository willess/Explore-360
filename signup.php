<?php
//start session
session_start();

//include connection file
require_once 'includes/connect.php';

if(isset($_POST['submit'])) {

  $name = $_POST['name'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $password_confirmation = $_POST['password_confirmation'];

  $hash = password_hash($password, PASSWORD_DEFAULT);

  if ($password == $password_confirmation && !empty($password)) {
    $sql = sprintf("INSERT INTO users(name, email, password) VALUES(
'$name', '$email', '$hash'
)",
        mysqli_real_escape_string($db, $name),
        mysqli_real_escape_string($db, $email),
        mysqli_real_escape_string($db, $hash));

    mysqli_query($db, $sql);

    echo 'succes';
  }
  else {
    echo 'password confirmation is not the same';
  }
}
mysqli_close($db);

?>
<!DOCTYPE HTML>
<html>
<head>
  <title>Sign Up at Explore360</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
  <link href="css/bootstrap.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand navbar-btn"  href="index.php">Explore360</a>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-camera"></span> Foto's <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Landscape</a></li>
            <li><a href="#">Street</a></li>
            <li><a href="#">Nature</a></li>
            <!--                            <li role="separator" class="divider"></li>-->
            <li><a href="#">Animal</a></li>
            <!--                            <li role="separator" class="divider"></li>-->
            <li><a href="#">Architecture</a></li>
            <li><a href="#">City</a></li>
            <li><a href="#">Travel</a></li>
            <li><a href="#">Sport</a></li>
            <li><a href="#">Automotive</a></li>
            <li><a href="#">Action</a></li>
            <li><a href="#">Music</a></li>
            <li><a href="#">Night</a></li>
            <li><a href="#">Animation</a></li>
          </ul>
        </li>
        <li><a href="#"><span class="glyphicon glyphicon-facetime-video"></span> Video's</a></li>
        <!--                    <li><a href="#"><span class="glyphicon glyphicon-globe"></span> Map</a></li>-->
      </ul>
      <a href="" class="navbar-btn upload">
        <button type="button" class="btn btn-success btn-lg"><span class="glyphicon glyphicon-cloud-upload"></span> Uploaden</button>
      </a>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign In</a></li>
        <a href="signup.php" class="navbar-btn register">
          <button type="button" class="btn btn-primary btn-mg"><span class="glyphicon glyphicon-cloud"></span> Sign Up</button>
        </a>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<div class="container">

  <div class="row">
    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
      <form role="form" method="post" action="" class="signUpForm">
        <h2>Please Sign Up <small>Join the community, it's free.</small></h2>
        <hr class="colorgraph">
        <div class="row">
          <div class="col-xs-12 col-sm-8 col-md-8">
            <div class="form-group">
              <div class="input-group">
                <div class="input-group-addon">Name</div>
              <input type="text" name="name"  class="form-control input-lg" tabindex="1">
                </div>
            </div>
          </div>
        </div>
        <div class="form-group">
          <div class="input-group">
            <div class="input-group-addon">Email</div>
          <input type="email" name="email" id="email" class="form-control input-lg" tabindex="4">
            </div>
        </div>
        <div class="row">
          <div class="col-xs-12 col-sm-8 col-md-8">
            <div class="form-group">
              <div class="input-group">
                <div class="input-group-addon">Password</div>
              <input type="password" name="password" id="password" class="form-control input-lg" tabindex="5">
                </div>
            </div>
          </div>
          </div>
        <div class="row">
          <div class="col-xs-12 col-sm-8 col-md-8">
            <div class="form-group">
              <div class="input-group">
                <div class="input-group-addon">Confirm Password</div>
              <input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-lg" tabindex="6">
                </div>
            </div>
          </div>
        </div>
        <button type="submit" name="submit" class="btn btn-primary btn-lg active">Register</button>
      </form>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<script src="Photo-Sphere-Viewer-master/three.min.js"></script>
<script src="Photo-Sphere-Viewer-master/src/sphoords.js"></script>
<script src="Photo-Sphere-Viewer-master/photo-sphere-viewer.js"></script>
<!--    <script src="Photo-Sphere-Viewer-master/src/PSVNavBar.js"></script>-->
<script src="Photo-Sphere-Viewer-master/src/PSVNavBarButton.js"></script>
<!--    <script src="Photo-Sphere-Viewer-master/src/PhotoSphereViewer.js"></script>-->


<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/main2.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</body>
</html>
