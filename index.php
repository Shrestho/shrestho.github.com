<?php require_once("Include/DB.php"); ?>
<?php require_once("Include/Sessions.php"); ?>
<?php require_once("Include/Functions.php"); ?>
<!DOCTYPE html>
<html lang="en">
    <!--<![endif]-->
    <head>
        <!-- Title -->
        <title>The Shooter</title>
        <!-- Meta -->
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <!-- Favicon -->
        <link href="favicon.ico" rel="shortcut icon">
        <!-- Bootstrap Core CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.css" rel="stylesheet">
        <!-- Template CSS -->
        <link rel="stylesheet" href="assets/css/animate.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/font-awesome.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/nexus.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/responsive.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/custom.css" rel="stylesheet">
        <!-- Google Fonts-->
        <link href="http://fonts.googleapis.com/css?family=Roboto+Condensed:400,300" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=PT+Sans" type="text/css" rel="stylesheet">
        <link href="http://fonts.googleapis.com/css?family=Roboto:400,300" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div id="body-bg">
            <ul class="social-icons pull-right hidden-xs">
                <li class="social-rss">
                    <a href="#" target="_blank" title="RSS"></a>
                </li>
                <li class="social-twitter">
                    <a href="#" target="_blank" title="Twitter"></a>
                </li>
                <li class="social-facebook">
                    <a href="#" target="_blank" title="Facebook"></a>
                </li>
                <li class="social-googleplus">
                    <a href="#" target="_blank" title="GooglePlus"></a>
                </li>
            </ul>
            <div id="pre-header" class="container" style="height: 40px">
                <!-- Spacing above header -->
            </div>
            <div id="header">
                <div class="container">
                    <div class="row">
                        <!-- Logo -->
                        <div class="logo">
                            <a href="index.html" title="">
                                <img src="assets/img/logo.png" alt="Logo" />
                            </a>
                        </div>
                        <!-- End Logo -->
                    </div>
                </div>
            </div>

            <!-- Top Menu -->
            <div id="hornav" class="container no-padding">
                <div class="row">
                    <div class="col-md-12 no-padding">
                        <div class="text-center visible-lg">
                            <ul id="hornavmenu" class="nav navbar-nav">
                                <li>
                                    <a href="index.php" class="fa-home">Home</a>
                                </li>
                                <li>
                                    <span class="fa-gears">Services</span>
                                    <ul>
                                        <li>
                                            <a href="wedding.php">Wedding Photography & Cinematography</a>
                                        </li>
                                        <li>
                                            <a href="Cultural.php">Cultural Photography & Cinematography</a>
                                        </li>
                                        <li>
                                            <a href="Social.php">Social & Other Photography+Cinematography</a>
                                        </li>
                                        <li>
                                            <a href="Corporate.php">Corporate Photography+Cinematography</a>
                                        </li>

                                        <li class="parent">
                                            <span>Other Services</span>
                                            <ul>
                                                <li>
                                                    <a href="Event.php">Event Planning</a>
                                                </li>
                                                <li>
                                                    <a href="Lighting.php">Lighting + Sound Management</a>
                                                </li>
                                                <li>
                                                    <a href="Artist.php">Artist management</a>
                                                </li>
                                                <li>
                                                    <a href="Costume.php">Costume Designing & Management</a>
                                                </li>
                                                <li>
                                                    <a href="Cartoon.php">Cartoon Making & Portrate Making</a>
                                                </li>
                                            </ul>
                                        </li>

                                    </ul>
                                </li>
                                <li>
                                    <a href="contact.php" class="fa-comment">Contact</a>
                                </li>
                                <li>
                                    <a href="about.php" class="fa-comment">About Us</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Top Menu -->
            <div id="post_header" class="container" style="height: 10px">
                <!-- Spacing below header -->
            </div>
            <div id="content-top-border" class="container">
            </div>
            <!-- === END HEADER === -->
            <!-- === BEGIN CONTENT === -->
            <div id="content">
                <div class="container background-white">
                    <div class="row margin-vert-30">
                        <div class="col-md-12">
                            <h2>2 Column Portfolio</h2>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 portfolio-group no-padding">
                            <!-- Portfolio Item -->
<?php global $ConnectingDB;

?>
                            <div class="col-md-6 portfolio-item margin-bottom-40 filer-code">
                                <div>
                                    <a href="Wedding.php">
                                        <figure>
                                            <img src="assets/img/portfolio/image1.jpg" alt="image1">
                                            <figcaption>
                                              <h3 class="margin-top-20">Wedding Photography & Cinematography</h3>                                            </figcaption>
                                            </figcaption>
                                        </figure>
                                    </a>
                                </div>
                            </div>
                            <!-- End Portfolio Item -->
                            <!-- Portfolio Item -->
                            <div class="col-md-6 portfolio-item margin-bottom-40 design">
                                <div>
                                    <a href="Cultural.php">
                                        <figure>
                                            <img src="assets/img/portfolio/image2.jpg" alt="image2">
                                            <figcaption>
                                              <h3 class="margin-top-20">Cultural Photography & Cinematography</h3>
                                            </figcaption>
                                        </figure>
                                    </a>
                                </div>
                            </div>
                            <!-- End Portfolio Item -->
                            <!-- Portfolio Item -->
                            <div class="col-md-6 portfolio-item margin-bottom-40 video">
                                <div>
                                    <a href="Social.php">
                                        <figure>
                                            <img src="assets/img/portfolio/image3.jpg" alt="image3">
                                            <figcaption>
                                              <h3 class="margin-top-20">Social & Other Photography & Cinematography</h3>
                                            </figcaption>
                                        </figure>
                                    </a>
                                </div>
                            </div>
                            <!-- End Portfolio Item -->
                            <!-- Portfolio Item -->
                            <div class="col-md-6 portfolio-item margin-bottom-40 filer-code">
                                <div>
                                    <a href="Corporate.php">
                                        <figure>
                                            <img src="assets/img/portfolio/image4.jpg" alt="image4">
                                            <figcaption>
                                              <h3 class="margin-top-20">Corporate Photography & Cinematography</h3>
                                            </figcaption>
                                        </figure>
                                    </a>
                                </div>
                            </div>
                            <!-- End Portfolio Item -->
                            <!-- Portfolio Item -->
                            <div class="col-md-6 portfolio-item margin-bottom-40 filer-code">
                                <div>
                                    <a href="Event.php">
                                        <figure>
                                            <img src="assets/img/portfolio/image5.jpg" alt="image5">
                                            <figcaption>
                                              <h3 class="margin-top-20">Event planning</h3>
                                            </figcaption>
                                        </figure>
                                    </a>
                                </div>
                            </div>
                            <!-- End Portfolio Item -->
                            <!-- Portfolio Item -->
                            <div class="col-md-6 portfolio-item margin-bottom-40 video">
                                <div>
                                    <a href="Lighting.php">
                                        <figure>
                                            <img src="assets/img/portfolio/image6.jpg" alt="image6">
                                            <figcaption>
                                              <h3 class="margin-top-20">Lighting & Sound management</h3>
                                            </figcaption>
                                        </figure>
                                    </a>
                                </div>
                            </div>
                            <!-- End Portfolio Item -->
                            <!-- Portfolio Item -->
                            <div class="col-md-6 portfolio-item margin-bottom-40 design">
                                <div>
                                    <a href="Artist.php">
                                        <figure>
                                            <img src="assets/img/portfolio/image7.jpg" alt="image7">
                                            <figcaption>
                                              <h3 class="margin-top-20">Artist management</h3>
                                            </figcaption>
                                        </figure>
                                    </a>
                                </div>
                            </div>
                            <!-- End Portfolio Item -->
                            <!-- Portfolio Item -->
                            <div class="col-md-6 portfolio-item margin-bottom-40 design">
                                <div>
                                    <a href="Costume.php">
                                        <figure>
                                            <img src="assets/img/portfolio/image8.jpg" alt="image8">
                                            <figcaption>
                                              <h3 class="margin-top-20">Costume Design & managemen</h3>
                                            </figcaption>
                                        </figure>
                                    </a>
                                </div>
                            </div>
                            <!-- End Portfolio Item -->
                            <!-- Portfolio Item -->
                            <div class="col-md-6 portfolio-item margin-bottom-40 design">
                                <div>
                                    <a href="Cartoon.php">
                                        <figure>
                                            <img src="assets/img/portfolio/image8.jpg" alt="image8">
                                            <figcaption>
                                              <h3 class="margin-top-20">Cartoon making & portrait making</h3>
                                            </figcaption>
                                        </figure>
                                    </a>
                                </div>
                            </div>
                            <!-- End Portfolio Item -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- === END CONTENT === -->
            <!-- === BEGIN FOOTER === -->
            <div id="content-bottom-border" class="container">
            </div>
            <div id="base">
                <div class="container padding-vert-30 margin-top-60">
                    <div class="row">
                        <!-- Contact Details -->
                        <div class="col-md-4 margin-bottom-20">
                            <h3 class="margin-bottom-10">Contact Details</h3>
                            <p>
                                <span class="fa-phone">Telephone:</span>(212)888-77-88
                                <br>
                                <span class="fa-envelope">Email:</span>
                                <a href="mailto:info@joomla51.com">info@joomla51.com</a>
                                <br>
                                <span class="fa-link">Website:</span>
                                <a href="http://www.joomla51.com">www.joomla51.com</a>
                            </p>
                            <p>The Dunes, Top Road,
                                <br>Strandhill,
                                <br>Co. Sligo,
                                <br>Ireland</p>
                        </div>
                        <!-- End Contact Details -->
                        <!-- Sample Menu -->
                        <div class="col-md-3 margin-bottom-20">
                            <h3 class="margin-bottom-10">Sample Menu</h3>
                            <ul class="menu">
                                <li>
                                    <a class="fa-tasks" href="#">Placerat facer possim</a>
                                </li>
                                <li>
                                    <a class="fa-users" href="#">Quam nunc putamus</a>
                                </li>
                                <li>
                                    <a class="fa-signal" href="#">Velit esse molestie</a>
                                </li>
                                <li>
                                    <a class="fa-coffee" href="#">Nam liber tempor</a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <!-- End Sample Menu -->
                        <div class="col-md-1"></div>
                        <!-- Disclaimer -->
                        <div class="col-md-3 margin-bottom-20 padding-vert-30 text-center">
                            <h3 class="color-gray margin-bottom-10">Join our Newsletter</h3>
                            <p>
                                Sign up for our newsletter for all the
                                <br>latest news and information
                            </p>
                            <input type="email">
                            <br>
                            <button class="btn btn-primary btn-lg margin-top-20" type="button">Subscribe</button>
                        </div>
                        <!-- End Disclaimer -->
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <!-- Footer Menu -->
            <div id="footer">
                <div class="container">
                    <div class="row">
                        <div id="footermenu" class="col-md-8">
                            <ul class="list-unstyled list-inline">
                                <li>
                                    <a href="#" target="_blank">Sample Link</a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">Sample Link</a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">Sample Link</a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">Sample Link</a>
                                </li>
                            </ul>
                        </div>
                        <div id="copyright" class="col-md-4">
                            <p class="pull-right">(c) 2014 Your Copyright Info</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Footer Menu -->
            <!-- JS -->
            <script type="text/javascript" src="assets/js/jquery.min.js" type="text/javascript"></script>
            <script type="text/javascript" src="assets/js/bootstrap.min.js" type="text/javascript"></script>
            <script type="text/javascript" src="assets/js/scripts.js"></script>
            <!-- Isotope - Portfolio Sorting -->
            <script type="text/javascript" src="assets/js/jquery.isotope.js" type="text/javascript"></script>
            <!-- Mobile Menu - Slicknav -->
            <script type="text/javascript" src="assets/js/jquery.slicknav.js" type="text/javascript"></script>
            <!-- Animate on Scroll-->
            <script type="text/javascript" src="assets/js/jquery.visible.js" charset="utf-8"></script>
            <!-- Sticky Div -->
            <script type="text/javascript" src="assets/js/jquery.sticky.js" charset="utf-8"></script>
            <!-- Slimbox2-->
            <script type="text/javascript" src="assets/js/slimbox2.js" charset="utf-8"></script>
            <!-- Modernizr -->
            <script src="assets/js/modernizr.custom.js" type="text/javascript"></script>
            <!-- End JS -->
    </body>
</html>
<!-- === END FOOTER === -->
