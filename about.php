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

    <div id="aboutPage" class="container-fluid main_contents">
        <div class="card-header">
            <button class="active" id="btnHome">Home</button>
            <button class="active" id="btnThurible">Thurible</button>
            <button class="active" id="btnChalice">Chalice</button>
            <button class="active" id="btnBody">Body</button>
        </div>
        <div class="card-columns">
            <div class="card bg-primary" style="width: 270px;">
              <div class="card-body text-center">
                <div id="homeContents">
                    <div id="audioDescription" style="width: 220px; text-align: center;">
                        <img style="height: 200px; width: 200px;" id="start_stop" src="Assets/Images/StGeorges.JPG" class="card-img-top img-fluid img-thumbnail" alt="PlayButton">
                        <audio style="width: 200px;" id="audio" src="Assets/Audio/Benny Hill Theme Tune.mp4" type="audio/mp3" controls></audio>
                        <h2>Play Audio</h2>
                        <p>There are two options for how to play the audio above, you can either use the controls above to play and pause 
                            the audio or you can click on the picture to play the audio and again to stop.</p>
                    </div>
                </div>
                <div id="ContentsThurible">
                    <div id="audioDescription" style="width: 220px; text-align: center;">
                        <img style="height: 200px; width: 200px;" id="start_stop" src="Assets/Images/gallery_images/3dSmokingthurible.png" class="card-img-top img-fluid img-thumbnail" alt="PlayButton">
                        <audio style="width: 200px;" id="audio" src="Assets/Audio/Benny Hill Theme Tune.mp4" type="audio/mp3" controls></audio>
                        <h2>Play Audio</h2>
                        <p>There are two options for how to play the audio above, you can either use the controls above to play and pause 
                            the audio or you can click on the picture to play the audio and again to stop.</p>
                    </div>
                </div>
                <div id="ContentsChalice">
                    <div id="audioDescription" style="width: 220px; text-align: center;">
                        <img style="height: 200px; width: 200px;" id="start_stop" src="Assets/Images/gallery_images/Chalice.JPG" class="card-img-top img-fluid img-thumbnail" alt="PlayButton">
                        <audio style="width: 200px;" id="audio" src="Assets/Audio/Benny Hill Theme Tune.mp4" type="audio/mp3" controls></audio>
                        <h2>Play Audio</h2>
                        <p>There are two options for how to play the audio above, you can either use the controls above to play and pause 
                            the audio or you can click on the picture to play the audio and again to stop.</p>
                    </div>
                </div>
                <div id="bodyContents">
                    <div id="audioDescription" style="width: 220px; text-align: center;">
                        <img style="height: 200px; width: 200px;" id="start_stop" src="Assets/Images/gallery_images/SmokingThurible.jpg" class="card-img-top img-fluid img-thumbnail" alt="PlayButton">
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
                <p class="card-text" id="homeDescription">Some text inside the second card</p>
                <p class="card-text" id="thuribleDescription">Some text inside the second card</p>
                <p class="card-text" id="chaliceDescription">Some text inside the second card</p>
                <p class="card-text" id="bodyDescription">Some text inside the second card</p>
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