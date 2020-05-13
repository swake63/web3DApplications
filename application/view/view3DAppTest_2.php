<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Homepage</title>
    
    <?php echo "<link rel='stylesheet' href='style/css/bootstrap.css'>";
    echo "<link rel='stylesheet' href='style/css/bootstrap.min.css'>";
    echo "<link rel='stylesheet' type='text/css' href='style/css/style.css' />";
    echo "<link rel='stylesheet' type='text/css' href='style/css/x3dom.css'>";
    echo "<link rel='stylesheet' href='style/css/gallery.css'>";
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
                    <a href="index.php" class="nav-link active">Home</a>
                </li>
            </ul>
        </div>
    </nav>
<h2 style="text-align:center">Gallery</h2>

<div class="row">
  <div class="column">
  <img src='Assets/Images/chalice.png' style='width:100%' onclick='openModal();currentSlide(1)' class='hover-shadow cursor'>
  </div>
  <div class="column">
  <img src='Assets/Images/cube_1.png' style='width:100%' onclick='openModal();currentSlide(2)' class='hover-shadow cursor'>
  </div>
  <div class="column">
  <img src='Assets/Images/thurible_1.png' style='width:100%' onclick='openModal();currentSlide(3)' class='hover-shadow cursor'>
  </div>
  <div class="column">
  <img src='Assets/Images/chalice_1.png' style='width:100%' onclick='openModal();currentSlide(4)' class='hover-shadow cursor'>
  </div>
</div>

<div id="myModal" class="modal" style="display:none;">
  <span class="close cursor" onclick="closeModal()">&times;</span>
  <div class="modal-content"> 

    <div class="mySlides">
      <div class="numbertext">1 / 4</div>
      <img src='Assets/Images/chalice.png' style='width:40%; display: block; top:10%; margin-top: -10px; margin-left: auto; margin-right: auto;'>
    </div>

    <div class="mySlides">
      <div class="numbertext">2 / 4</div>
      <img src='Assets/Images/cube_1.png' style='width:40%; display: block; top:10%; margin-top: -10px; margin-left: auto; margin-right: auto;'>"
    </div>

    <div class="mySlides">
      <div class="numbertext">3 / 4</div>
      <img src='Assets/Images/thurible_1.png' style='width:40%; display: block; top:10%; margin-top: -10px; margin-left: auto; margin-right: auto;'>
    </div>
    
    <div class="mySlides">
      <div class="numbertext">4 / 4</div>
      <img src='Assets/Images/chalice_1.png' style='width:40%; display: block; top:10%; margin-top: -10px; margin-left: auto; margin-right: auto;'>
    </div>
    
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>

    <div class="caption-container">
      <p id="caption"></p>
    </div>
  </div>
</div>

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
