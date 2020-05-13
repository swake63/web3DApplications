<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Homepage</title>
    
    <?php echo "<link rel='stylesheet' href='style/css/bootstrap.css'>";
    echo "<link rel='stylesheet' href='style/css/bootstrap.min.css'>";
    echo "<link rel='stylesheet' type='text/css' href='style/css/style.css' />";
    echo "<link rel='stylesheet' type='text/css' href='css/x3dom.css'>";
    echo "<link rel='stylesheet' href='css/gallery.css'>";
    echo "<script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>";?>
    <?php echo '<script>
    $(document).ready(function(){
        $("#homepage").show();
        $("#aboutPage").hide();
        $("#modelPage").hide();
    
        $("#btnHome").click(function(){
            $("#homepage").show();
            $("#aboutPage").hide();
            $("#modelPage").hide();
        });
        $("#btnAbout").click(function(){
            $("#homepage").hide();
            $("#aboutPage").show();
            $("#modelPage").hide();
        });
        $("#btn3DModels").click(function(){
            $("#homepage").hide();
            $("#aboutPage").hide();
            $("#modelPage").show();
        });
    });
    </script>';?>
</head>
<body>
<nav class="navbar sticky-top navbar-expand-sm navbar_church" id="header">
        <!--Brand-->
        <div class="logo">
            <a class="navbar-brand" href="home.php">
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
                    <a id="btnHome" class="nav-link active">Home</a>
                </li>
                <li class="nav-item">
                    <a id="btnAbout" class="nav-link">About</a>
                </li>
                <li class="nav-item">
                    <a id="btn3DModels" class="nav-link">3D Models</a>
                </li>
            </ul>
        </div>
    </nav>
    
        <div id="homepage" class="container-fluid main_contents">
            <div class="row">
                <div class="col-sm-12">
                    <div id="main_3d_image" style="background-image:url('Assets/Images/StGeorges.JPG'); background-repeat: no-repeat; background-size: 800px 200px;">
                        <div id="main_text" class="col-xs-12 col-sm-4">
                            <div id="title_home">Church Objects</div>
                            <div id="subTitle_home">Holy objects that are needed for the Mass with symbolic relevance.</div>
                            <div id="description_home">In this site you will find out how the 3d models were made and a bit about each.</div>
                        </div> 
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="card img-narrow">
                    <?php
                        echo "<a href='Assets/Images/gallery_images/thurible_1.png' data-caption='My 3D Thurible render'>
                            <img class='card-img-top img-fluid img-thumbnail' src='Assets/Images/gallery_images/thurible_1.png' alt='Thurible'> "?>
                        </a>
                        <div class="card-body">
                            <div id="title_left" class="card-title drinksText">
                                <h2>Thurible</h2>
                            </div>
                            <div id="subTitle_left" class="card_subtitle drinksText">
                                <h3>Used for incense</h3>
                            </div>
                            <div id="description_left" class="card-text drinksText">
                                <p>Swung by the altar servers and used to hold burning incense that releases smoke through the holes.</p>
                            </div>
                            <a class="btn btn-primary btn-responsive" id="btnAbout">Find out how it's made....</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card img-narrow">
                    <?php
                        echo "<a href='Assets/Images/gallery_images/chalice_1.JPG' data-caption='My 3D Chalice render'>
                            <img class='card-img-top img-fluid img-thumbnail' src='Assets/Images/gallery_images/chalice_1.JPG' alt='Chalice'>"?>
                        </a>
                        <div class="card-body">
                            <div id="title_centre" class="card-title drinksText">
                                <h2>Gold Chalice</h2>
                            </div>
                            <div id="subTitle_centre" class="card_subtitle drinksText">
                                <h3>Used for the holy wine</h3>
                            </div>
                            <div id="description_centre" class="card-text drinksText">
                                <p>The gold chalice comes with the purificator (cloth) and is the main cup used during the mass.</p>
                            </div>
                            <a class="btn btn-primary btn-responsive" id="btnAbout">Find out how it's made....</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card img-narrow">
                    <?php
                        echo "<a href='Assets/Images/chair.png' data-caption='My 3D Chair render'>
                            <img class='card-img-top img-fluid img-thumbnail' src='Assets/Images/chair.png' alt='Body'>";?>
                        </a>
                        <div class="card-body">
                            <div id="title_right" class="card-title drinksText">
                                <h2>Chair</h2>
                            </div>
                            <div id="subTitle_right" class="card_subtitle drinksText">
                                <h3>Used for the congregation</h3>
                            </div>
                            <div id="description_right" class="card-text drinksText">
                                <p>Wooden chairs are placed around the altar pointing to the centre so everybody can see what is happening.</p>
                            </div>
                            <a class="btn btn-primary btn-responsive" id="btnAbout">Find out how it's made....</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <div id="modelPage" class="container-fluid main_contents">
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
                                <a id="btnChair" class="nav-link active">Chair</a>
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
                        <div id="chair">
                            <div id="x3dModelTitle_chair" class="card-title objectText">
                                <h2>Chair X3D Model</h2>
                            </div>
                            <div class="model3D embed-responsive embed-responsive-20by9">
                                <x3d width="766px" height="446px">
                                    <scene>
                                      <iframe src="chair.php" class="embed-responsive-item z-depth-1" namespacename="model"></iframe>
                                    </scene>
                                  </x3d>
                            </div>
                            <div id="x3dCreationMethod_chair" class="card-text objectText">
                                <p>This X3D model of the chair has been created in blender, exported to x3d and converted, using the instantreality transcoders, to html X3D for display online.</p>
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
                                <a class="nav-link active" href="view3DAppTest_2.php">Gallery</a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="card-title title-gallery objectText">
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

    <div id="aboutPage" class="container-fluid main_contents">
        <div class="card-header">
            <button class="active" id="chairD">How to: Chair</button>
            <button class="active" id="thuribleD">How to: Thurible</button>
            <button class="active" id="chaliceD">How to: Chalice and cloth</button>
            <button class="active" id="animateD">How to: Animated Thurible</button>
        </div>
        <div class="card-columns">
            <div class="card bg-primary" style="width: 270px;">
              <div class="card-body text-center">
                <div id="chairContents">
                    <div id="audioDescription" style="width: 220px; text-align: center;">
                        <img style="height: 200px; width: 200px;" id="start_stop" src="Assets/Images/chair.PNG" class="card-img-top img-fluid img-thumbnail" alt="PlayButton">
                        <audio style="width: 200px;" id="audio" src="Assets/Audio/Benny Hill Theme Tune.mp4" type="audio/mp3" controls></audio>
                        <h2>Play Audio</h2>
                        <p>There are two options for how to play the audio above, you can either use the controls above to play and pause 
                            the audio or you can click on the picture to play the audio and again to stop.</p>
                    </div>
                </div>
                <div id="ContentsThurible">
                    <div id="audioDescription" style="width: 220px; text-align: center;">
                        <img style="height: 200px; width: 200px;" id="start_stop" src="Assets/Images/gallery_images/thurible_1.png" class="card-img-top img-fluid img-thumbnail" alt="PlayButton">
                        <audio style="width: 200px;" id="audio" src="Assets/Audio/Benny Hill Theme Tune.mp4" type="audio/mp3" controls></audio>
                        <h2>Play Audio</h2>
                        <p>There are two options for how to play the audio above, you can either use the controls above to play and pause 
                            the audio or you can click on the picture to play the audio and again to stop.</p>
                    </div>
                </div>
                <div id="ContentsChalice">
                    <div id="audioDescription" style="width: 220px; text-align: center;">
                        <img style="height: 200px; width: 200px;" id="start_stop" src="Assets/Images/chalice.png" class="card-img-top img-fluid img-thumbnail" alt="PlayButton">
                        <audio style="width: 200px;" id="audio" src="Assets/Audio/Benny Hill Theme Tune.mp4" type="audio/mp3" controls></audio>
                        <h2>Play Audio</h2>
                        <p>There are two options for how to play the audio above, you can either use the controls above to play and pause 
                            the audio or you can click on the picture to play the audio and again to stop.</p>
                    </div>
                </div>
                <div id="bodyContents">
                    <div id="audioDescription" style="width: 220px; text-align: center;">
                        <img style="height: 200px; width: 200px;" id="start_stop" src="Assets/Images/thurible.png" class="card-img-top img-fluid img-thumbnail" alt="PlayButton">
                        <audio style="width: 200px;" id="audio" src="Assets/Audio/Benny Hill Theme Tune.mp4" type="audio/mp3" controls></audio>
                        <h2>Play Audio</h2>
                        <p>There are two options for how to play the audio above, you can either use the controls above to play and pause 
                            the audio or you can click on the picture to play the audio and again to stop.</p>
                    </div>
                </div>
              </div>
            </div>
            <div class="card bg-info" style="width: 800px;">
              <div class="card-body text-center">
                <div class="card-text" id="chairDescription"><p><h2>How the chair was made:</h2> The chair was created using Blender 2.8. The first step was to hide the camera and light that appear when you create a new file, this is so that i don't see these in the viewport for the moment. Secondly, using the default square shown on screen, this square will be transformed into a chair. To start of with in object mode - the chair seat, for this i scaled down the cube to create a thin rectangle rather than a cube. I then went into edit mode where i clicked on the keyboard controls "ctr" then "r" (shortcuts i learnt through a similar software called Cinema4d) this i did twice which created lines through the middle of each face of the rectangle. Then highlighting the front-side and right-side vertices i then deleted the vertices which left me with a square (quartre of the size of the original) minus two edges. Whilst the square is still highlighted i then added the "mirror" modifier and then again with a second "mirror" modifier. The first modifier mirrored the square on the y axis, the second modifier then mirrored the original square and its mirror copy on the x axis, creating 4 joined squares but only the one square is edited, the others copy any changes made to the first square. </p>
                <p> The second stage was to create the legs, for this i only needed to add a leg to the editable square as it is then mirrored on the x and y axis which will then create the other 3 legs. Again i pressed "ctr" and "r" which creates lines on the y axis of the square which i positioned 1/4 of the way across the square, i then added another line on the x axis and again positioned it 1/4 of the way across the square so that you can then see a much smaller square made out of the lines in the corner. The underside of this small square i then extruded downwards to make the leg, which also created the other three legs thanks to the mirror modifiers on the x and y axis of the rectangle. I then adjusted the shape of the chair legs by highlighting the inner face of the chair leg and moving it along the x axis to create the final shape of the legs that you see in the interactive view of the chair on the 3D Objects section and on the left of this section of content.</p>
                <p>The third stage i clicked back into the object mode where i clicked apply to the second mirror modifier so that now there is only the one other square mirroring the edits undertaken on the editable square - this will then construct the back of the chair. Then i clicked back into edit mode where i selected the smaller square face on the top side of the seat from the leg and extruded that up to the height i thought fitting.</p>
                <p>The final stage was to create the back design of the chair, which again used "ctr" and "r" and then extrudes to create the back square of the chair. I then added more lined on the top and bottom bar of the back of the seat to create the areas that the bars would go across for the design at the back. Selecting every other inner face from the top and bottom of the bars i then deleted the faces and selected the vertices of the missing top face and the missing bottom face and joined the vertices using a bridge - this then created the bars at the back of the chair.</p>
                </div>
                <div  class="card-text" id="thuribleDescription">
                <p><h2>How the thurible was made:</h2> The thurible was created using 3DS MAX 2017 and then imported into blender to then be exported as a X3D file. The first step was to use the pen to draw the outline of one half of the thurible, then </div>
                <div class="card-text" id="chaliceDescription"><p><h2>How the chalice and purificator animation was made:</h2>The first stage was to make the chalice (cup), for this i used Blender. To create the shape of the chalice, i first used the "line" tool to make the outline of half of the chalice, i then used the "spin" tool to extrude selected vertices (all the vertices along the outline) in a 360 degree circle around the centre point. After subdividing the edges of the chalice to reduce the jagged angles, i then used "shade smooth" to smooth out the rough edges and create a smooth round surface with a gold material like that of those used in Church.</p>
                <p>The second stage was to create the purificator (cloth), that would fall from above the chalice to land partly inside and mainly cover the top of the chalice which represents how it would look during a Mass. To begin with i create a white plane that was four times the width and length of the chalice and positioned it above the chalice but slightly more to the left. </p></div>
                <div class="card-text" id="bodyDescription"><p>Some text inside the second card</p></div>
              </div>
            </div>
        </div>
    </div>

    <nav class="navbar navbar-expand-sm footer" id="footer">
        <p>Contact Us:</p>
        <p>Email: test@test.com</p>
        <p>These web pages are submitted as part requirement for the degree of Computing for Digital Media at the University of Sussex.  They are the product of my own labour except where indicated in the web page content. These web pages or contents may be freely copied and distributed provided the source is acknowledged</p>
        <button onclick="changeLook()" style="margin: 10px;">Restyle</button>
    </nav>
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