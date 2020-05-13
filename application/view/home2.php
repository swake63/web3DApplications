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
    <div class="main_contents">
    
        <div id="home" class="container-fluid main_contents">
            <div class="row">
                <div class="col-sm-12">
                    <div id="main_3d_image" style="background-image:url('Assets/Images/StGeorges.JPG'); background-repeat: no-repeat; background-size: 800px 200px;">
                        <div id="main_text" class="col-xs-12 col-sm-4">
                            <div id="title_home"></div>
                            <div id="subTitle_home"></div>
                            <div id="description_home"></div>
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
                                <h2></h2>
                            </div>
                            <div id="subTitle_left" class="card_subtitle drinksText">
                                <h3></h3>
                            </div>
                            <div id="description_left" class="card-text drinksText">
                                <p></p>
                            </div>
                            <a class="btn btn-primary btn-responsive" href="about.php">Find out more....</a>
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
                                <h2></h2>
                            </div>
                            <div id="subTitle_centre" class="card_subtitle drinksText">
                                <h3></h3>
                            </div>
                            <div id="description_centre" class="card-text drinksText">
                                <p></p>
                            </div>
                            <a class="btn btn-primary btn-responsive" href="about.php">Find out more....</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card img-narrow">
                    <?php
                        echo "<a href='Assets/Images/gallery_images/thurible_1.png' data-caption='My 3D Body render'>
                            <img class='card-img-top img-fluid img-thumbnail' src='Assets/Images/gallery_images/Thurible.png' alt='Body'>"?>
                        </a>
                        <div class="card-body">
                            <div id="title_right" class="card-title drinksText">
                                <h2></h2>
                            </div>
                            <div id="subTitle_right" class="card_subtitle drinksText">
                                <h3></h3>
                            </div>
                            <div id="description_right" class="card-text drinksText">
                                <p></p>
                            </div>
                            <a class="btn btn-primary btn-responsive" href="about.php">Find out more....</a>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            <br>

    <nav class="navbar navbar-expand-sm footer" id="footer">
        <p>Contact Us:</p>
        <p>Email: test@test.com</p>
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