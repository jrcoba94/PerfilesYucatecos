<?php

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Práctica 9 - Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--CSS-->
    <link href="../PerfilesYucatecos/asset/css/animations.css" rel="stylesheet" />
    <link href="../PerfilesYucatecos/asset/css/font-awesome.min.css" rel="stylesheet" />
    <link href="../PerfilesYucatecos/asset/css/icon.css" rel="stylesheet" />
    <link href="../PerfilesYucatecos/asset/css/materialize.css" rel="stylesheet" />
    <link href="../PerfilesYucatecos/asset/css/materialize.min.css" rel="stylesheet" />

    <!--JavaScripts-->
    <script src="../PerfilesYucatecos/asset/js/jquery.mask.js"></script>
    <script src="../PerfilesYucatecos/asset/js/jquery.mask.min.js"></script>
    <script src="../PerfilesYucatecos/asset/js/jquery-2.1.4.min.js"></script>
    <script src="../PerfilesYucatecos/asset/js/materialize.js"></script>
    <script src="../PerfilesYucatecos/asset/js/materialize.min.js"></script>
</head>
<body>
<!--<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="nav-wrapper" style="background-color:#000000; color:#747474;">
      <a href="#" class="brand-logo">The modernist</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="sass.html">HOME</a></li>
        <li><a href="badges.html">STYLE DEMO</a></li>
        <li><a href="collapsible.html">FULL WIDTH</a></li>
        <li><a href="collapsible.html">DROPDOWN</a></li>
        <li><a href="collapsible.html">PORTAFOLIO</a></li>
        <li><a href="null.html">GALLERY</a></li>
      </ul>
    </div>
  </nav>-->

  <style>
nav 
{
  background: #290000;
  border-top: 4px solid #76C38F;
}

p
{
    margin-top: 0;
    margin-bottom: 0;
}

.navbar
{
    padding: 48px 0;
}

.navbar-dark .navbar-nav .nav-link
{
    color: #ffffff;
    padding-left: 20px;
    padding-right: 20px;
    font-family: 'Georgia';
    font-size: 13px;
    text-transform: uppercase;
}

.navbar-dark .navbar-nav .nav-link:hover
{
    color: #ffffff;
    background: #76C38F;
    border-radius: 10px;
}

.carousel-inner-1
{
    background: #290000;
    width: 100%;
    overflow: hidden;
}
.slide-img img
{
    width: 380px;
    height: 380px;
    margin-bottom: 50px;
    margin-right: 70px;
}
.rounded-circle
{
    border: 24px solid #6B6B6B;
}
.slide-text 
{
    width: 360px;
    padding: 100px 0 0 70px;
}
h5
{
    font-size: 46px;
    font-family: 'Georgia';
    color: #FFFFFF;
}
.slide-text p
{
    font-family: 'Georgia';
    color: #979797;
    font-size: 12px;
}
.btn-secondary
{
    color: #FFFFFF;
    background: #76C38F;
    border-color: #76C38F;
}
.btn
{
    border-radius: 10px;
    font-family: 'Georgia';
    font-size: 13px;
}
  </style>

  <nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
      <a href="#" class="navbar-brand">
          <img src="" alt="" />
      </a>
          <button class="navbar-toggler", data-toggle="collapse" data-target#menu"">
              <span class="navbar-toogler-icon"> </span>
          </button>
          <div class="collapse navbar-collapse" id="menu">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="#" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">StyleDemo</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Full widht</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Dropdown</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Portafolio</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Gallery</a>
                </li>
            </ul>
          </div>
    </div>
</nav>

<!--Empieza el Slider-->
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner-1">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="slide-text">
                    <h5>Cursus penati saccum nulla.<h5/>
                    <p>Nullamlacus dui ipsum conseque loborttis non euisque morbi penas dapibulum orna. 
                    Urbanaultrices quis curabitur phasellentesque congue magnis vestibulum quismodo nulla et 
                    feugiat adipiscinia pellentum leo.<p/>
                    <a class="waves-effect waves-light btn">Read More Here >></a>
                    <!--<button type="button" class="btn btn-secondary">SUBMIT</button>-->
                </div>
            </div>
            <div class="col-md-6">
                <div class="slide-img float-right">
                    <img src="./asset/img/Imagen1.jpg" class="rounded-circle" alt="" />
                </div>
            </div>
        </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

</body>
</html>