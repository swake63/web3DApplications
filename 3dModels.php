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
    <title>Homepage</title>
  </head>
  <body>
  <nav class="navbar sticky-top navbar-expand-sm navbar_church" id="header">
        <!--Brand-->
        <div class="logo">
            <a class="navbar-brand" href="index.php">
                <h1>S</h1>
                <h1>t</h1>
                <h2>Wilfrid</h2>
                <h3>Religious Objects</h3>
                <p>Understanding the ceremonies of the Mass</p>
            </a>
        </div>
        <!--collabsible navbar menu icon-->
        
        <!--link menu item button to links class navigation. When browser shrinks you see the three columns that the 
            navigation is behind-->
        <div class="collapse navbar-collapse">
            <!--Links-->
            <ul class="navbar-nav ml-auto"> <!--ml-auto alligns to centre-->
                <li class="nav-item">
                    <a class="nav-link active" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="3dModels.php">3D Models</a>
                </li>
            </ul>
        </div>
    </nav>

    <div id="models" class="container-fluid main_contents">
        <div class="row">
            <div class="col-sm-8">
                <div class="card text-left">
                    <div class="card-header">
                        <ul class="nav nav-tabs card-header-tabs">
                            <li class="nav-item">
                                <a id="btnThurible" class="nav-link active">Thurible</a>
                            </li>
                            <li class="nav-item">
                                <a id="btnChalice" class="nav-link active">Chalice</a>
                            </li>
                            <li class="nav-item">
                                <a id="btnAnimatedThurible" class="nav-link active">Animated Thurible</a>
                            </li>
                            <li class="nav-item">
                                <a id="btnCube" class="nav-link active">Cube</a>
                            </li>
                        </ul>
                    </div>

                    <div class="card-body">
                        <div id="thurible">
                            <div id="x3dModelTitle_thurible" class="card-title objectText">
                                <h2></h2>
                            </div>
                            <div class="model3D embed-responsive embed-responsive-20by9">
                                <x3d width="766px" height="446px">
                                    <scene>
                                      <iframe src="thurible360.php" class="embed-responsive-item z-depth-1" namespacename="model"></iframe>
                                    </scene>
                                  </x3d>
                            </div>
                            <div id="x3dCreationMethod_thurible" class="card-text objectText">
                                <p></p>
                            </div>
                        </div>
                        <div id="chalice">
                            <div id="x3dModelTitle_chalice" class="card-title objectText">
                                <h2>Chalice X3D Model</h2>
                            </div>
                            <div class="model3D embed-responsive embed-responsive-20by9">
                                <x3d width="766px" height="446px">
                                    <scene>
                                      <iframe src="ChaliceAnimation.php" class="embed-responsive-item z-depth-1" namespacename="model"></iframe>
                                    </scene>
                                  </x3d>
                            </div>
                            <div id="x3dCreationMethod_chalice" class="card-text objectText">
                                <p>This X3D model of the chalice has been created in blender, exported to x3d and converted, using the instantreality transcoders, to html X3D for display online.</p>
                            </div>
                        </div>
                        <div id="spinThurible">
                            <div id="x3dModelTitle_animatedThurible" class="card-title objectText">
                                <h2>Animated X3D Thurible Model</h2>
                            </div>
                            <div class="model3D embed-responsive embed-responsive-20by9">
                                <x3d width="766px" height="446px">
                                    <scene>
                                      <iframe src="ThuribleAnimation.php" class="embed-responsive-item z-depth-1" namespacename="model"></iframe>
                                    </scene>
                                  </x3d>
                            </div>
                            <div id="x3dCreationMethod_chalice" class="card-text objectText">
                                <p>This X3D model of the chalice has been created in blender, exported to x3d and converted, using the instantreality transcoders, to html X3D for display online.</p>
                            </div>
                        </div>
                        <div id="cube">
                            <div class="model3D embed-responsive embed-responsive-20by9">
                                <x3d width="766px" height="446px">
                                    <scene render="true" bboxcenter="0,0,0">
                                        <transform DEF='cube'>
                                            <Viewpoint id="front" position="0 0 -4" orientation="-0.01451 0.99989 0.00319 3.15833" description="camera"></Viewpoint>
                                            <Viewpoint id="right" position="-3.43383 0.07351 -2.28700" orientation="-0.00318 -0.99950 -0.03159 2.06609" description="camera"></Viewpoint>
                                            <Viewpoint id="left" position="-3.43383 3.07351 -3.28700" orientation="-1.00318 -0.99950 -0.03159 2.06609" description="camera"></Viewpoint>
                                            <background groundColor=(0,4,2) skyColor=(2,6,3)></background>
                                            <shape render="true"> 
                                                <appearance> 
                                                    <material diffuseColor='red'></material>
                                                </appearance> 
                                                <box solid="true" ccw="true" lit="true" size="2,2,2"></box>
                                            </shape>
                                        </transform>
                                    </scene>
                                </x3d>
                            </div>
                        </div>     
                    </div>
                </div>
                <p>You can rotate all 3d objects using your mouse. Due to restrictions in the software i was unable to export all my animations
                    for manipulation in the x3d screen however by double-clicking on the animated thurible you can stop the thurible from spinning.
                </p>
            </div>

            <div class="col-sm-4">
                <div class="card text-left">
                    <div class="card-header gallery-header">
                        <ul class="nav nav-tabs card-header-tabs">
                            <li class="nav-item">
                                <a class="nav-link active">Gallery</a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="card-title title-gallery objectText">
                            <h2>3D Images</h2>
                        </div>
                        <div class="box">
                            <h2><?php echo $model_1 ?></h2>
                            <img class="imgBox" src='../Assets/Images/gallery_images/<?php echo $image3D_1?>.jpg'>
                        </div>
                        <div class="box">
                            <h2><?php echo $model_2 ?></h2>
                            <img class="imgBox" src='../Assets/Images/gallery_images/<?php echo $image3D_2 ?>.jpg'>
                        </div>
                        <div class="box">
                            <h2><?php echo $model_3 ?></h2>
                            <img class="imgBox" src='../Assets/Images/gallery_images/<?php echo $image3D_3 ?>.png'>
                        </div>
                        <div class="box">
                            <h2><?php echo $model_4 ?></h2>
                            <img class="imgBox" src='../Assets/Images/gallery_images/<?php echo $image3D_4 ?>.png'>
                        </div>
                        <div class="box">
                            <h2><?php echo $model_5 ?></h2>
                            <img class="imgBox" src='../Assets/Images/gallery_images/<?php echo $image3D_5 ?>.png'>
                        </div>
                        <div class="box">
                            <h2><?php echo $model_6 ?></h2>
                            <img class="imgBox" src='../assets/images/gallery_images/<?php echo $image3D_6 ?>.png'>
                        </div>
                            <h2>Animated videos rendered from Blender and 3DS MAX 2017:</h2>
                            <video width="150" height="150" controls>
                                <source src="Assets/videos/Chalice and Cloth.mp4" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                            <video width="150" height="150" controls>
                                <source src="Assets/videos/thuribleSmoking.mp4" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                            <p>The above videos i created using a combination of Blender and 3DS MAX 2017. Both software however would not let 
                                me export my animated 3d objects and so i rendered them as animations and converted them from avi's to mp4.</p>
                        </div>
                        <div class="card-text description_gallery objectText">
                            <p>These 3D images of the thurible, chalice and body are rendered in 3ds Max 2017 with Instant Reality</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="interaction" class="row">
        <div class="col-sm-8">
            <div class="card text-left">
                <div class="card-header">
                    <div class="card-Title x3dCamera_Subtitle objectText">
                        <h3>Camera Views</h3>
                    </div>
                </div>
                <div class="card-body">
                    <div id="interaction">
                        <button class="btn btn-success btn-responsive" onclick="document.getElementById('right').setAttribute('set_bind','true');">Right</button>
                        <button class="btn btn-primary btn-responsive" onclick="document.getElementById('front').setAttribute('set_bind','true');">Front </button>
                        <button class="btn btn-secondary btn-responsive" onclick="document.getElementById('left').setAttribute('set_bind','true');">Top</button>
                    </div>
                    <div class="card-text x3dCameraDescription objectText">
                        <p>These buttons select a limited range of X3D model viewpoints.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-4 scroll">
            <div class="card text-left">
            <div class="card-header">
                <h2>How the thurible was made:</h2>
            </div>
            <div class="card-body">
                <p></p>
            </div>
            </div>
        </div>
    </div>
       
    <div class="row">
        
        <div class="col-sm-4 scroll">
            <div class="card text-left">
            <div class="card-header">
                <h2>How the thurible was made:</h2>
            </div>
            <div class="card-body">
                <p></p>
            </div>
            </div>
        </div>
        <div class="col-sm-3 scroll">
            <div class="card text-left">
            <div class="card-header">
                <h2>How the thurible was made:</h2>
            </div>
            <div class="card-body">
                <p></p>
            </div>
            </div>
        </div>
    </div>

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