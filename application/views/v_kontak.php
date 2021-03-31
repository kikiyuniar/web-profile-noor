<!DOCTYPE html>
<html class="no-js">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Hubungi Kami</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="Aris Putra Buana" />
    <link rel="shorcut icon" type="text/css" href="<?php echo base_url() . 'assets/images/ICON-noor.png' ?>">
    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="shortcut icon" href="favicon.ico">
    <!-- Animate.css -->
    <link rel="stylesheet" href="<?php echo base_url() . 'theme/css/animate.css' ?>">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="<?php echo base_url() . 'theme/css/icomoon.css' ?>">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="<?php echo base_url() . 'theme/css/bootstrap.css' ?>">
    <!-- Flexslider  -->
    <link rel="stylesheet" href="<?php echo base_url() . 'theme/css/flexslider.css' ?>">
    <!-- Theme style  -->
    <link rel="stylesheet" href="<?php echo base_url() . 'theme/css/style.css' ?>">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/v4-shims.css">
    <!-- Modernizr JS -->
    <script src="<?php echo base_url() . 'theme/js/modernizr-2.6.2.min.js' ?>"></script>

</head>

<body>


    <div id="fh5co-page">
        <header id="fh5co-header" role="banner">
            <div class="container">
                <div class="header-inner">
                    <h1><a href="<?php echo base_url() . '' ?>">NOOR<span>.</span></a></h1>
                    <nav role="navigation">
                        <ul>
                            <li><a href="<?php echo base_url().''?>"><i class="fa fa-home"></i></a></li>
                            <li><a href="<?php echo base_url().'about'?>">About</a></li>
                            <li><a href="<?php echo base_url().'portfolio'?>">Business Scope</a></li>
                            <li><a href="<?php echo base_url().'artikel'?>">Blog</a></li>
                            <li><a href="<?php echo base_url().'gallery'?>">Project</a></li>
                            <li class="active"><a href="<?php echo base_url().'kontak'?>">Contact</a></li>
                            <li class="cta"><a target="_blank"
                                    href="https://api.whatsapp.com/send?phone=6281939123456"><i class="fa fa-whatsapp"
                                        aria-hidden="true"></i> Get Whatsapp</a></li>

                        </ul>
                    </nav>
                </div>
            </div>
        </header>


        <aside id="fh5co-hero" clsas="js-fullheight">
            <div class="flexslider js-fullheight">
                <ul class="slides">
                    <li style="background-image: url(<?php echo base_url() . 'theme/images/slide_3.jpg' ?>);">
                        <div class="overlay-gradient"></div>
                        <div class="container">
                            <div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text">
                                <div class="slider-text-inner">
                                    <h2>Get in touch. Don't be shy.</h2>
                                    <p class="fh5co-lead">Kami siap melayani Anda 24/7</p>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </aside>

        <div class="fh5co-contact animate-box">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <h3>Contact Info.</h3>
                        <ul class="contact-info">
                            <li><i class="icon-map"></i>198 West 21th Street, Suite 721 New York NY 10016</li>
                            <li><i class="icon-phone"></i>+ 1235 2355 98</li>
                            <li><i class="icon-envelope"></i><a href="#">info@yoursite.com</a></li>
                            <li><i class="icon-globe"></i><a href="#">www.yoursite.com</a></li>
                        </ul>
                    </div>

                    <div class="col-md-8 col-md-push-1 col-sm-12 col-sm-push-0 col-xs-12 col-xs-push-0">
                        <p>At PT. Noor Energi Baik, customer satisfaction is very important to us. We are
                            always looking for ways to improve our service and products</p>
                        <?php echo $this->session->flashdata('msg'); ?>
                        <div class="row">
                            <form method="post" action="<?php echo base_url() . 'kontak/kirim_pesan' ?>">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input class="form-control" name="nama" placeholder="Nama" type="text" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input class="form-control" name="email" placeholder="Email" type="email"
                                            required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea name="pesan" class="form-control" id="" cols="30" rows="7"
                                            placeholder="Message" required></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input value="Kirim Pesan" class="btn btn-primary" type="submit">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- <div id="map" class="animate-box" data-animate-effect="fadeIn"></div> -->

        <?php $this->load->view('v_footer'); ?>
    </div>


    <!-- jQuery -->
    <script src="<?php echo base_url() . 'theme/js/jquery.min.js' ?>"></script>
    <!-- jQuery Easing -->
    <script src="<?php echo base_url() . 'theme/js/jquery.easing.1.3.js' ?>"></script>
    <!-- Bootstrap -->
    <script src="<?php echo base_url() . 'theme/js/bootstrap.min.js' ?>"></script>
    <!-- Waypoints -->
    <script src="<?php echo base_url() . 'theme/js/jquery.waypoints.min.js' ?>"></script>
    <!-- Flexslider -->
    <script src="<?php echo base_url() . 'theme/js/jquery.flexslider-min.js' ?>"></script>
    <!-- Google Map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false">
    </script>
    <script src="<?php echo base_url() . 'theme/js/google_map.js' ?>"></script>

    <!-- MAIN JS -->
    <script src="<?php echo base_url() . 'theme/js/main.js' ?>"></script>

</body>

</html>