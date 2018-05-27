<?php

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Pérfiles yucatecos</title>
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

<style>
.title
{
  background: #660000;
  padding: 60px 0 65px 0;
}

.title-1
{
  background: #FFFFFF;
  padding: 22px 46px 0 46px;
}
.title-1:hover
{
  background: #76C38F;
}
.img-thumbnail
{
  padding: 0;
  background-color: #FFFFFF;
  border: none;
  border-radius: 0;
  max-width: 120px;
  height: auto;
}

.title-1 a
{
  text-decoration: none;
  color: #333333;
}

.title-1 a:hover
{
  text-decoration: none;
  color: #FFFFFF;
}

.title-1 h4
{
  font-family: 'Georgia';
  font-size: 32px; 
  padding-top: 14px;
}

.title-1 p
{
  font-family: 'Georgia';
  font-size: 12px;
  padding-bottom: 14px;
} 

h1
{
  position: relative;
  text-align: center;
  bottom: 23px;
}

h1 span
{
  font-family: 'Georgia';
  font-size: 32px;
  color: #FFFFFF;
  background: #303030;
  padding: 8px 14px;
  border-radius: 10px;
  position: relative;
  z-index: 1;
}

h1:before
{
  background: #303030;
  content: "";
  display: block;
  height: 4px;
  position: absolute;
  top: 50%;
  width: 100%;
}

h1::before
{
  left: 0;
}

/*Empieza LATEST WORK*/
.latest-work
{
  background: #660000;
  position: relative;
  bottom: 53px;
  padding: 24px 0 60px 0;
}

.box
{
  text-align: center;
  overflow: hidden;
  position: relative;
}

.box img
{
  width: 100%;
  height: auto;
  border: 8px solid #FFFFFF;
  margin-top: 30px;
}

.box:hover img
{
  border: 8px solid #76C38F;
}

.box .box-content
{
  width: 100%;
  position: absolute;
  top: 86%;
  left: 0;
  z-index: 1;
}

.box -title
{
  font-size: 14px;
  font-family: 'Georgia';
  background: rgba(0, 0, 0, 0.3);
  font-weight: 600;
  color: #FFFFFF;
  padding: 12px;
  opacity: 1;
  transition: all 0.9s ease 0s;
}

.box:hover .title
{
  opacity: 0;
}

</style>

</head>
<body>
    <?php
        include 'Navbar.php';
    ?>

    <!--Empieza el contenido-->
    <section class="title">
        <div class="row">
            <div class="col-lg-3 col-sm 6">
                <div class="title-1 text-center">
                    <a href="#">
                      <img src="./asset/img/Imagen5.jpg" alt="" class="img-thumbnail">
                      <h4>SERVICE TITLE</h4>
                      <p>Vestassapede et donec ut est libe ros sus et eget sed eget quisq ueta habitur augue</p>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-sm 6">
                <div class="title-1 text-center">
                    <a href="#">
                      <img src="./asset/img/Imagen5.jpg" alt="" class="img-thumbnail">
                      <h4>SERVICE TITLE</h4>
                      <p>Vestassapede et donec ut est libe ros sus et eget sed eget quisq ueta habitur augue</p>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-sm 6">
                <div class="title-1 text-center">
                    <a href="#">
                      <img src="./asset/img/Imagen5.jpg" alt="" class="img-thumbnail">
                      <h4>SERVICE TITLE</h4>
                      <p>Vestassapede et donec ut est libe ros sus et eget sed eget quisq ueta habitur augue</p>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-sm 6">
                <div class="title-1 text-center">
                    <a href="#">
                      <img src="./asset/img/Imagen5.jpg" alt="" class="img-thumbnail">
                      <h4>SERVICE TITLE</h4>
                      <p>Vestassapede et donec ut est libe ros sus et eget sed eget quisq ueta habitur augue</p>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-sm 6">
                <div class="title-1 text-center">
                    <a href="#">
                      <img src="./asset/img/Imagen5.jpg" alt="" class="img-thumbnail">
                      <h4>SERVICE TITLE</h4>
                      <p>Vestassapede et donec ut est libe ros sus et eget sed eget quisq ueta habitur augue</p>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <div class="container">
        <h1><span>LATES WORK</span></h1>
    </div>

    <!--Empieza el LATES WORK-->
    <section class="lates-work">
      <div class="container">
        <div class="row">
            <div class="col-md-4.col-sm-6">
                <div class="box">
                    <img src="./asset/img/Imagen5.jpg">
                    <div class="box-content">
                      <h3 class="title">LOREM IPSUM COLOR</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-4.col-sm-6">
                <div class="box">
                    <img src="./asset/img/Imagen5.jpg">
                    <div class="box-content">
                      <h3 class="title">LOREM IPSUM COLOR</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-4.col-sm-6">
                <div class="box">
                    <img src="./asset/img/Imagen5.jpg">
                    <div class="box-content">
                      <h3 class="title">LOREM IPSUM COLOR</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-4.col-sm-6">
                <div class="box">
                    <img src="./asset/img/Imagen5.jpg">
                    <div class="box-content">
                      <h3 class="title">LOREM IPSUM COLOR</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-4.col-sm-6">
                <div class="box">
                    <img src="./asset/img/Imagen5.jpg">
                    <div class="box-content">
                      <h3 class="title">LOREM IPSUM COLOR</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-4.col-sm-6">
                <div class="box">
                    <img src="./asset/img/Imagen5.jpg">
                    <div class="box-content">
                      <h3 class="title">LOREM IPSUM COLOR</h3>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </section>

<?php
    include 'Footer.php';
?>

</body>
</html>