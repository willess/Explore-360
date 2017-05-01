<?php
session_start();

$id = $_GET['id'];

$img = 'img/canyo.jpg';

if($id == 1){
    $detailImage = 'img/canyo.jpg';
}
else if ($id == 2){
    $detailImage = 'img/sun.jpg';
}
else if ($id == 3){
    $detailImage = 'img/livingroom.jpg';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Explore360</title>
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
                        <li><a href="testfoto.php">Landscape</a></li>
                        <li><a href="#">Street</a></li>
                        <li><a href="#">Nature</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Animal</a></li>
                        <li role="separator" class="divider"></li>
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
                <a href="" class="navbar-btn register">
                    <button type="button" class="btn btn-primary btn-mg"><span class="glyphicon glyphicon-cloud"></span> Sign Up</button>
                </a>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
<div id="detailImage">
    <div id="container"></div>
</div>
<main>

</main>

<footer>

</footer>
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


<script>
    var div = document.getElementById('container');
    var PSV = new PhotoSphereViewer({
        panorama: '<?= $detailImage; ?>',
        container: div,
        time_anim: 1000,
        caption: 'test',
        size: {
            width: '100%',
            height: '100%'
        },
        navbar: true,
        navbar_style: {
            backgroundColor: 'rgba(58, 67, 77, 0.7)'
        }
    });
</script>
</body>
</html>
