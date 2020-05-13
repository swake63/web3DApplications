<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <?php echo "<link rel='stylesheet' href='style/css/bootstrap.css'>";
    echo "<link rel='stylesheet' href='style/css/bootstrap.min.css'>";
    echo "<link rel='stylesheet' type='text/css' href='style/css/style.css' />";
    echo "<link rel='stylesheet' type='text/css' href='css/x3dom.css'>";
    echo "<link rel='stylesheet' href='css/gallery.css'>";
    echo "<script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>";?>

    <title>Thurible</title>
  </head>
  <body>
    <nav class="navbar sticky-top navbar-expand-sm navbar_coca_cola">
        <div class="container" id="header">
        <div class="logo">
            
        </div>
        <!--collabsible navbar menu icon-->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!--link menu item button to links class navigation. When browser shrinks you see the three columns that the 
            navigation is behind-->
        <div class="collapse navbar-collapse">
            <!--Links-->
            <ul class="navbar-nav ml-auto"> <!--ml-auto alligns to centre-->
                <li class="nav-item">
                    <a class="nav-link active" href="Index.html">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.html">About</a>
                </li>

                   <!--Dropdown-->
                   <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="3dModels.html" id="navbardrop" data-toggle="dropdown">3D Models</a>
                    <div class="dropdown-content">
                        <a href="Thurible.html">Thurible</a>
                        <a href="Chalice.html">Chalice</a>
                        <a href="Cruet.html">Cruet</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    </nav>
    <div class="main_contents">
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <div class="card text-left">
                    <div class="card-header">
                        <ul class="nav nav-tabs card-header-tabs">
                            <li class="nav-item">
                                <a class="nav-link active" href="Thurible.html">Thurible</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="Chalice.html">Chalice</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="ThuribleSpin.html">Animated Thurible</a>
                            </li>
                        </ul>
                        <br>
                        <div class="model3D embed-responsive embed-responsive-20by9">
                            <x3d width="766px" height="446px">
                                <scene>
                                  <transform>
                                    <iframe src="Thurible360.html" class="embed-responsive-item z-depth-1" namespacename="model">
                                  </iframe>
                                  </transform>
                                </scene>
                              </x3d>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card text-left">
                    <div class="card-header gallery-header">
                        <ul class="nav nav-tabs card-header-tabs">
                            <li class="nav-item">
                                <a class="nav-link active" href="#">Gallery</a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="card-title title-gallery drinksText">
                            <h2>3D Images</h2>
                        </div>
                        <div id="gallery" class="gallery">
                            <a href="Assets/Images/gallery_images/Cruets.png" data-caption="My X3D Model Render">
                                <img class="card-img-top img-thumbnail" src="Assets/Images/gallery_images/Cruets.png">
                            </a>
                            <a href="Assets/Images/gallery_images/chalice.png" data-caption="My X3D Model Render">
                                <img class="card-img-top img-thumbnail" src="Assets/Images/gallery_images/chalice.png">
                            </a>
                            <a href="Assets/Images/gallery_images/traditional-thurible.png" data-caption="My X3D Model Render">
                                <img class="card-img-top img-thumbnail" src="Assets/Images/gallery_images/traditional-thurible.png">
                            </a>
                            <a href="Assets/Images/gallery_images/Thurible.png" data-caption="My X3D Model Render">
                                <img class="card-img-top img-thumbnail" src="Assets/Images/gallery_images/Thurible.png">
                            </a>
                            <a href="Assets/Images/gallery_images/ThuribleSmoking.png" data-caption="My X3D Model Render">
                                <img class="card-img-top img-thumbnail" src="Assets/Images/gallery_images/ThuribleSmoking.png">
                            </a>
                            <a href="Assets/Images/gallery_images/3dSmokingthurible.png" data-caption="My X3D Model Render smoke animation">
                                <img class="card-img-top img-thumbnail" src="Assets/Images/gallery_images/3dSmokingthurible.png">
                            </a>
                            <a href="Assets/videos/thuribleSmoking.mp4" data-caption="My X3D Model Render smoke animation">
                                <img class="card-img-top img-thumbnail" src="Assets/videos/thurible32.jpg">
                            </a>
                        </div>
                        <div class="card-text description_gallery drinksText">
                            <p>These 3D images of the thurible, chalice and body are rendered in 3ds Max 2017 with Instant Reality</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="card-body">
                <h4 class="card-title">Thurible X3D Model</h4>
                <p class="card-text">This Thurible X3D Model has been created using Blender. Previous versions were made using 3DS Max.</p>
                <a href="#" class="btn btn-primary btn-responsive camera-font" onclick="cameraFront()">Front</a>
                <a href="#" class="btn btn-secondary btn-responsive camera-font" onclick="cameraBack()">Back</a>
                <a href="#" class="btn btn-success btn-responsive camera-font" onclick="cameraLeft()">Left</a>
                <a href="#" class="btn btn-danger btn-responsive camera-font" onclick="cameraRight()">Right</a>
                <a href="#" class="btn btn-secondary btn-responsive camera-font" onclick="cameraTop()">Top</a>
                <button type="button" onclick="spin()">SPIN</button>
                
            </div>
        </div>
        <div id="themeWriting" style="margin: 5px;">
            <h3>Church Events that the thurible is used in:</h3>
            <p>Click the buttons below to see the themes for each church event. <br>
                <button onclick="changeColor('red')" style="margin: 10px;">Corpus Christi</button>
                <button onclick="changeColor('purple')" style="margin: 10px;">Lent</button>
                <button onclick="changeColor('pink')" style="margin: 10px;">Advent</button>
                <button onclick="changeColor('green')" style="margin: 10px;">Ordinary Time</button><br>
                Red symbolises the blood of Christ and is displayed on the Feast of Corpus Christi and on Saints Days. Green is for ordinary 
                time, the regular Gospels of the day that though are still special are not as important as others to Christians.</p>
            
        </div>
      </div> 
    </div>
    <br>

    <nav class="navbar navbar-expand-sm footer" id="footer">
        <p>Contact Us:</p>
        <p>Email: test@test.com</p>
        <button onclick="changeLook()" style="margin: 10px;">Restyle</button>
    </nav>
    <?php
    echo "<script src='https://kit.fontawesome.com/2e63e5d209.js' crossorigin='anonymous'></script>";
    echo "<script src='style/js/jquery-3.4.1.js'></script>";
    echo "<script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js' integrity='sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q' crossorigin='anonymous'></script>";
    echo "<script src='style/js/bootstrap.min.js'></script>";
    echo "<script type='text/javascript' src='style/js/x3dom.js'></script>";
    echo "<script type='text/javascript' src='style/js/interactions.js'></script>";
    echo "<script language='javascript' src='style/js/swap_restyle.js'></script>";
    echo "<script type='text/javascript' src='style/js/gallery_generator.js'></script>";
    echo "<script type='text/javascript' src='style/js/getJsonData.js'></script>";
    echo "<script type='text/javascript' src='style/js/custom.js'></script>";?>
  </body>
</html>  