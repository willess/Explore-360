<?php
session_start();

require_once 'includes/connect.php';

//check if button is clicked
if(isset($_POST['signin']))
{
    //check if both inputs filled in
    if(isset($_POST['email']) && isset($_POST['password']))
    {
//query the information of user
        $sql = sprintf("SELECT * FROM users WHERE username = '%s'",
            mysqli_real_escape_string($db, $_POST['name'])
        );

        $result = mysqli_query($db, $sql);

        $row = mysqli_fetch_assoc($result);

        if($row)
        {
            $hash = $row['password'];

            if(password_verify($_POST['password'], $hash))
            {
                $_SESSION['username'] = $_POST['name'];

            }
//error if username and password are incorrect
            else
            {
                $error = 'Username and password are incorrect';
            }
        }
//error if user does not exist
        else
        {
            $error = 'User does not exist';
        }
    }
}

if(isset($_POST['name']) && isset($_POST['password']))
{

    $sql = sprintf("SELECT * FROM users WHERE username = '%s'",
        mysqli_real_escape_string($db, $_POST['name'])
    );

    $result = mysqli_query($db, $sql);

    $row = mysqli_fetch_assoc($result);

    if($row)
    {
        $hash = $row['password'];

        if(password_verify($_POST['password'], $hash))
        {
            $_SESSION['username'] = $_POST['name'];
            header('location: index.php');
        }
        else
        {
            $error = 'Email - password combination is not correct';
        }
    }
    else
    {
        $error = 'User does not exist';
    }
    mysqli_close($db);
}


//database closed
mysqli_close($db);

$image1 = 'img/canyo.jpg';
$id1 = '1';
$id2 = '2';
$id3 = '3';

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
<div id="headerImage">
    <div id="container"></div>
</div>
<main>
<!--    <div class="container" id="container1">-->
<!--        <div class="col-lg-3"></div>-->
<!--        <div class="col-lg-6">-->
<!--            <div class="well well-lg">-->
<!--                <div class="input-group">-->
<!--                    <input type="text" class="form-control" placeholder="Search for...">-->
<!--      <span class="input-group-btn">-->
<!--        <button class="btn btn-default" type="button">Go!</button>-->
<!--      </span>-->
<!--                </div>-->
<!--            </div>-->
<!--<!-- /input-group -->
<!--        </div>-->
<!--    </div>-->
    <div class="container" id="container1">
        <h1>Latest Sphere Uploads</h1>
        <hr>
        <div class="row">
            <div class="col-xs-12 col-sm-6 col col-md-4 col-lg-4">
                <a href="detailpage.php?id=<?= $id1; ?>" class="thumbnail">
                    <img src="<?php echo $image1; ?>" alt="...">
                    <h3>Canyon America</h3>
                    <p>Uploaded by <mark>Wilco van Dijk</mark></p>
                    <p>date: 7 march</p>
                </a>
            </div>
            <div class="col-xs-12 col-sm-6 col col-md-4 col-lg-4">
                <a href="detailpage.php?id=<?= $id2; ?>" class="thumbnail">
                    <img src="img/sun.jpg" alt="...">
                    <h3>Lovely Sun</h3>
                    <p>Uploaded by <mark>Wilco van Dijk</mark></p>
                    <p>date: 7 march</p>
                </a>
            </div>
            <div class="col-xs-12 col-sm-6 col col-md-4 col-lg-4">
                <a href="detailpage.php?id=<?= $id3; ?>" class="thumbnail">
                    <img src="img/livingroom.jpg" alt="...">
                    <h3>My Livingroom</h3>
                    <p>Uploaded by <mark>Wilco van Dijk</mark></p>
                    <p>date: 7 march</p>
                </a>
            </div>
            <div class="col-xs-12 col-sm-6 col col-md-4 col-lg-4">
                <a href="detailpage.php?id=<?= $id2; ?>" class="thumbnail">
                    <img src="img/sun.jpg" alt="...">
                    <h3>Lovely Sun</h3>
                    <p>Uploaded by <mark>Wilco van Dijk</mark></p>
                    <p>date: 7 march</p>
                </a>
            </div>
            <div class="col-xs-12 col-sm-6 col col-md-4 col-lg-4">
                <a href="detailpage.php?id=<?= $id3; ?>" class="thumbnail">
                    <img src="img/livingroom.jpg" alt="...">
                    <h3>My Livingroom</h3>
                    <p>Uploaded by <mark>Wilco van Dijk</mark></p>
                    <p>date: 7 march</p>
                </a>
            </div>
            <div class="col-xs-12 col-sm-6 col col-md-4 col-lg-4">
                <a href="detailpage.php?id=<?= $id1; ?>" class="thumbnail">
                    <img src="img/canyo.jpg" alt="...">
                    <h3>Canyon America</h3>
                    <p>Uploaded by <mark>Wilco van Dijk</mark></p>
                    <p>date: 7 march</p>
                </a>
            </div>
            <div class="col-xs-12 col-sm-6 col col-md-4 col-lg-4">
                <a href="detailpage.php?id=<?= $id3; ?>" class="thumbnail">
                    <img src="img/livingroom.jpg" alt="...">
                    <h3>My Livingroom</h3>
                    <p>Uploaded by <mark>Wilco van Dijk</mark></p>
                    <p>date: 7 march</p>
                </a>
            </div>
            <div class="col-xs-12 col-sm-6 col col-md-4 col-lg-4">
                <a href="detailpage.php?id=<?= $id1; ?>" class="thumbnail">
                    <img src="img/canyo.jpg" alt="...">
                    <h3>Canyon America</h3>
                    <p>Uploaded by <mark>Wilco van Dijk</mark></p>
                    <p>date: 7 march</p>
                </a>
            </div>
            <div class="col-xs-12 col-sm-6 col col-md-4 col-lg-4">
                <a href="detailpage.php?id=<?= $id2; ?>" class="thumbnail">
                    <img src="img/sun.jpg" alt="...">
                    <h3>Lovely Sun</h3>
                    <p>Uploaded by <mark>Wilco van Dijk</mark></p>
                    <p>date: 7 march</p>
                </a>
            </div>
            <div class="col-xs-12 col-sm-6 col col-md-4 col-lg-4">
                <a href="detailpage.php?id=<?= $id1; ?>" class="thumbnail">
                    <img src="img/canyo.jpg" alt="...">
                    <h3>Canyon America</h3>
                    <p>Uploaded by <mark>Wilco van Dijk</mark></p>
                    <p>date: 7 march</p>
                </a>
            </div>
            <div class="col-xs-12 col-sm-6 col col-md-4 col-lg-4">
                <a href="detailpage.php?id=<?= $id2; ?>" class="thumbnail">
                    <img src="img/sun.jpg" alt="...">
                    <h3>Lovely Sun</h3>
                    <p>Uploaded by <mark>Wilco van Dijk</mark></p>
                    <p>date: 7 march</p>
                </a>
            </div>
            <div class="col-xs-12 col-sm-6 col col-md-4 col-lg-4">
                <a href="detailpage.php?id=<?= $id3; ?>" class="thumbnail">
                    <img src="img/livingroom.jpg" alt="...">
                    <h3>My Livingroom</h3>
                    <p>Uploaded by <mark>Wilco van Dijk</mark></p>
                    <p>date: 7 march</p>
                </a>
            </div>
        </div>
    </div>
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
            panorama: '<?= $image1; ?>',
            container: div,
            time_anim: 5000,
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
