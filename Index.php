<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>El encuentro | Bar & Cafe</title>

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" type="text/css" href="./css/animations.css">
    <link rel="stylesheet" type="text/css" href="./css/materialize.css">
    <link rel="stylesheet" type="text/css" href="./iconfont/material-icons.css">
    <link rel="stylesheet" type="text/css" href="./css/style.css">


    <script src="./js/jquery-2.1.4.min.js"></script>
    <script src="./js/materialize.js"></script>
    <script src="./js/jquery.scrollTo.min.js"></script>
    <script>
        $(document).ready(function () {
            $('.slider').slider();
        });
    </script>
</head>

<body>
    <div class="contentt-box">
        <div class="col m12 m6 baner-box">
            <?php include 'navbar.php'; ?>

            <div class="col m12 m6 container slider">
                <ul class="slides" style="background:transparent;">
                    <li style="height:500px!important;">
                        <div class="col m4 slider-box row">
                            <div class="col s4 slider-text">
                            <p>Cursus penati saccum nulla.</p>
                                <small style="padding-bottom:2rem">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque scelerisque in mauris et
                                    vestibulum. Fusce luctus, tellus in vestibulum pretium, diam elit sagittis est, porta
                                    semper quam elit at quam.</small>
                                <a class="btnSlide">Read more here</a>
                            </div>
                            <div class="col s4 slider-box-img">
                                <div class="slider-img">
                                    <image class="circle responsive-img" src="./img/imagen2.jpg" />
                                </div>
                            </div>
                        </div>
                    </li>
                    <li style="height:500px!important;">
                        <div class="col m4 slider-box row">
                            <div class="col s4 slider-text">
                                <p>Cursus penati saccum nulla.</p>
                                <small style="padding-bottom:2rem">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque scelerisque in mauris et
                                    vestibulum. Fusce luctus, tellus in vestibulum pretium, diam elit sagittis est, porta
                                    semper quam elit at quam.</small>
                                <a class="btnSlide">Read more here</a>
                            </div>
                            <div class="col s4 slider-box-img">
                                <div class="slider-img">
                                    <image class="circle responsive-img" src="./img/imagen5.jpg" />
                                </div>
                            </div>
                        </div>
                    </li>
                    <li style="height:500px!important;">
                        <div class="col m4 slider-box row">
                            <div class="col s4 slider-text">
                                <p>Cursus penati saccum nulla.</p>
                                <small style="padding-bottom:2rem">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque scelerisque in mauris et
                                    vestibulum. Fusce luctus, tellus in vestibulum pretium, diam elit sagittis est, porta
                                    semper quam elit at quam.</small>
                                <a class="btnSlide">Read more here</a>
                            </div>
                            <div class="col s4 slider-box-img">
                                <div class="slider-img">
                                    <image class="circle responsive-img" src="./img/imagen3.jpg" />
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col s12 services">
            <div class="col s3 services-content">
                <i class="large material-icons" aria-hidden="true">wb_sunny</i>
                <p>service title</p>
                <small>Cras imperdiet felis vel lectus commodo pharetra. Aenean consectetur nec nisl id luctus. </small>
            </div>
            <div class="col s3 services-content">
                <i class="large material-icons" aria-hidden="true">wb_sunny</i>
                <p>service title</p>
                <small>Cras imperdiet felis vel lectus commodo pharetra. Aenean consectetur nec nisl id luctus. </small>
            </div>
            <div class="col s3 services-content">
                <i class="large material-icons" aria-hidden="true">wb_sunny</i>
                <p>service title</p>
                <small>Cras imperdiet felis vel lectus commodo pharetra. Aenean consectetur nec nisl id luctus. </small>
            </div>
            <div class="col s3 services-content">
                <i class="large material-icons" aria-hidden="true">wb_sunny</i>
                <p>service title</p>
                <small>Cras imperdiet felis vel lectus commodo pharetra. Aenean consectetur nec nisl id luctus. </small>
            </div>
        </div>        
        <div class="col m12 latestwork">
            <div class="col m12 latestwork-btn">Top</div>
            <div class="col m12 latestwork-box-img">
                <div class="col m4">
                    <div class="latestwork-img">
                        <img class="responsive-img" style='max-width: 100%;max-height: 100%; height:200rem' src="./img/imagen1.jpg" alt="" />
                    </div>
                    <div class="latestwork-img">
                        <img class="responsive-img" style='max-width: 100%;max-height: 100%; height:200rem' src="./img/imagen2.jpg" alt="" />
                    </div>
                </div>
                <div class="col m4">
                    <div class="latestwork-img">
                        <img class="responsive-img" style='max-width: 100%;max-height: 100%; height:200rem' src="./img/imagen3.jpg" alt="" />
                    </div>
                    <div class="latestwork-img">
                        <img class="responsive-img" style='max-width: 100%;max-height: 100%; height:200rem' src="./img/imagen1.jpg" alt="" />
                    </div>
                </div>
                <div class="col m4">
                    <div class="latestwork-img">
                        <img class="responsive-img" style='max-width: 100%;max-height: 100%; height:200rem' src="./img/imagen6.jpg" alt="" />
                    </div>
                    <div class="latestwork-img">
                        <img class="responsive-img" style='max-width: 100%;max-height: 100%; height:200rem' src="./img/imagen5.jpg" alt="" />
                    </div>
                </div>
            </div>
        </div>
        <br/>
        <?php include 'footer.php'; ?>
</body>

</html>