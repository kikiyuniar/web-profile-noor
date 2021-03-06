<!DOCTYPE html>
<html class="no-js">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Welcome To Noor Energi Baik</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="" />
    <meta name="keywords" content="" />

    <link rel="shorcut icon" type="text/css" href="<?php echo base_url().'assets/images/ICON-noor.png'?>">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/v4-shims.css">
    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="shortcut icon" href="<?php echo base_url().'theme/favicon.ico'?>">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/v4-shims.css">
    <!-- Animate.css -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/animate.css'?>">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/icomoon.css'?>">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/bootstrap.css'?>">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Flexslider  -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/flexslider.css'?>">
    <!-- Theme style  -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/style.css'?>">

    <!-- Modernizr JS -->
    <script src="<?php echo base_url().'theme/js/modernizr-2.6.2.min.js'?>"></script>
    <?php
            error_reporting(0);
            function limit_words($string, $word_limit){
                $words = explode(" ",$string);
                return implode(" ",array_splice($words,0,$word_limit));
            }

        ?>

</head>

<body>


    <div id="fh5co-page">
        <header id="fh5co-header" role="banner">
            <div class="container">
                <div style="background-color: #0000005c;" class="header-inner">

                    <img style="width: 200px; " src="assets/images/noor.png" alt="">
                    <nav role="navigation">
                        <ul>
                            <li class="active"><a href="<?php echo base_url().''?>"><i class="fa fa-home"></i></a>
                            </li>
                            <li><a href="<?php echo base_url().'about'?>">About</a></li>
                            <li><a href="<?php echo base_url().'portfolio'?>">Business Scope</a></li>
                            <li><a href="<?php echo base_url().'artikel'?>">Blog</a></li>
                            <li><a href="<?php echo base_url().'gallery'?>">Project</a></li>
                            <li><a href="<?php echo base_url().'kontak'?>">Contact</a></li>
                            <li class="cta"><a target="_blank"
                                    href="https://api.whatsapp.com/send?phone=6281939123456"><i class="fa fa-whatsapp"
                                        aria-hidden="true"></i> Get Whatsapp</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>


        <aside id="fh5co-hero" class="js-fullheight">
            <div class="flexslider js-fullheight">
                <ul class="slides">
                    <li style="background-image: url(<?php echo base_url().'theme/images/bg-1.jpg'?>);">
                        <div class="overlay-gradient"></div>
                        <div class="container">
                            <div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text">
                                <div class="slider-text-inner">
                                    <h2>Start Your Business With This Source</h2>
                                    <p><a href="#" class="btn btn-primary btn-lg">Get started</a></p>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li style="background-image: url(<?php echo base_url().'theme/images/slide_2.jpg'?>);">
                        <div class="container">
                            <div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text">
                                <div class="slider-text-inner">
                                    <h2>Take Your Business To The Next Level</h2>
                                    <p><a href="#" class="btn btn-primary btn-lg">Get started</a></p>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li style="background-image: url(<?php echo base_url().'theme/images/slide_3.jpg'?>);">
                        <div class="container">
                            <div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text">
                                <div class="slider-text-inner">a
                                    <h2>We Think Different That Others Can't</h2>
                                    <p><a href="#" class="btn btn-primary btn-lg">Get started</a></p>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </aside>

        <div id="fh5co-why-us" class="animate-box">
            <div class="container">
                <div class="row">

                    <div class="col-md-4 text-center item-block">
                        <span class="icon"><img src="<?php echo base_url().'theme/images/30.svg'?>"
                                class="img-responsive"></span>
                        <h3>SOFTWARE & PROGRAM</h3>
                        <p>Tingkatkan kinerja perusahaan dengan Software yang sesuai dengan Business Process anda.</p>
                        <p><a href="<?php echo base_url().'portfolio'?>"
                                class="btn btn-primary btn-outline with-arrow">Learn more <i
                                    class="icon-arrow-right"></i></a></p>
                    </div>
                    <div class="col-md-4 text-center item-block">
                        <span class="icon"><img src="<?php echo base_url().'theme/images/18.svg'?>"
                                class="img-responsive"></span>
                        <h3>IT CONSULTING</h3>
                        <p>Konsultasi kan kebutuhan IT anda pada kami dan ketahui layanan lain yang kami berikan.</p>
                        <p><a href="<?php echo base_url().'portfolio'?>"
                                class="btn btn-primary btn-outline with-arrow">Learn more <i
                                    class="icon-arrow-right"></i></a></p>
                    </div>
                    <div class="col-md-4 text-center item-block">
                        <span class="icon"><img src="<?php echo base_url().'theme/images/27.svg'?>"
                                class="img-responsive"></span>
                        <h3>WEB DESIGN</h3>
                        <p>Bangun identitas bisnis dan usaha anda di dunia Internet melalui Website.</p>
                        <p><a href="<?php echo base_url().'portfolio'?>"
                                class="btn btn-primary btn-outline with-arrow">Learn more <i
                                    class="icon-arrow-right"></i></a></p>
                    </div>
                </div>
            </div>
        </div>


        <div class="fh5co-section-with-image">

            <img src="<?php echo base_url().'theme/images/image_1.jpg'?>" alt="" class="img-responsive">
            <div class="fh5co-box animate-box">
                <h2>Berpikir Maju</h2>
                <p>Kami selalu membangun aplikasi dengan teknologi terbaru.</p>
                <p><a href="<?php echo base_url().'portfolio'?>" class="btn btn-primary btn-outline with-arrow">Get
                        started <i class="icon-arrow-right"></i></a></p>
            </div>

        </div>



        <div id="fh5co-blog" class="animate-box">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
                        <h2>ARTIKEL TERBARU</h2>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <?php
				foreach ($post->result_array() as $j) :
					$post_id=$j['tulisan_id'];
					$post_judul=$j['tulisan_judul'];
					$post_isi=$j['tulisan_isi'];
					$post_author=$j['tulisan_author'];
					$post_image=$j['tulisan_gambar'];
					$post_tglpost=$j['tanggal'];
					$post_slug=$j['tulisan_slug'];
			?>
                    <div class="col-md-4">
                        <a class="fh5co-entry" href="<?php echo base_url().'artikel/'.$post_slug;?>">
                            <figure>
                                <img src="<?php echo base_url().'assets/images/'.$post_image;?>" alt=""
                                    class="img-responsive">
                            </figure>
                            <div class="fh5co-copy">
                                <h3><?php echo $post_judul;?></h3>
                                <span class="fh5co-date"><?php echo $post_tglpost.' | '.$post_author;?></span>
                                <?php echo limit_words($post_isi,20).'...';?>
                            </div>
                        </a>
                    </div>
                    <?php endforeach;?>

                    <div class="col-md-12 text-center">
                        <p><a href="<?php echo base_url().'artikel'?>"
                                class="btn btn-primary btn-outline with-arrow">View More <i
                                    class="icon-arrow-right"></i></a></p>
                    </div>
                </div>
            </div>
        </div>


        <?php $this->load->view('v_footer');?>
    </div>


    <!-- jQuery -->
    <script src="<?php echo base_url().'theme/js/jquery.min.js'?>"></script>
    <!-- jQuery Easing -->
    <script src="<?php echo base_url().'theme/js/jquery.easing.1.3.js'?>"></script>
    <!-- Bootstrap -->
    <script src="<?php echo base_url().'theme/js/bootstrap.min.js'?>"></script>
    <!-- Waypoints -->
    <script src="<?php echo base_url().'theme/js/jquery.waypoints.min.js'?>"></script>
    <!-- Flexslider -->
    <script src="<?php echo base_url().'theme/js/jquery.flexslider-min.js'?>"></script>

    <!-- MAIN JS -->
    <script src="<?php echo base_url().'theme/js/main.js'?>"></script>
    <script>
    $('#myTab a').on('click', function(e) {
        e.preventDefault()
        $(this).tab('show')
    })
    </script>

</body>

</html>