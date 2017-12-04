<!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="ie6"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie7"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie8"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html class=""><!--<![endif]-->
<head>

    <title><?php bloginfo('name'); ?><?php '||' . wp_title(); ?></title>


    <title><?php bloginfo('name'); ?><?php '||' . wp_title(); ?></title>
    <meta charset="<?php bloginfo('charset'); ?>"/>
    <meta name="yandex-verification" content="c815fb6e3a7c483a" />
    <meta name="robots" content="index, follow" >
    <meta name="keywords" content="" >
    <meta name="description" content="<?php if ( is_single() ) {
        single_post_title('', true);
    } else {
        bloginfo('name'); echo " - "; bloginfo('description');
    }
    ?>" />

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Standard Favicon -->
    <link rel="icon" type="image/x-icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico" />

    <!-- Library - Loader CSS -->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/libraries/loader/loaders.min.css">

    <!-- Library - Google Font Familys -->
    <link href='https://fonts.googleapis.com/css?family=PT+Sans:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Philosopher:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Library - Bootstrap v3.3.5 -->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/libraries/bootstrap/bootstrap.min.css">

    <!-- Font Icons -->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/libraries/fonts/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/libraries/fonts/elegant-icons.css">

    <!-- Library - OWL Carousel V.2.0 beta -->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/libraries/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/libraries/owl-carousel/owl.theme.css">

    <!-- Library - Animate CSS -->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/libraries/animate/animate.min.css">

    <!-- Library - Lightbox CSS -->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/libraries/lightbox/lightbox.css">

    <!-- Library - Magnific Popup -->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/libraries/magnific-popup/magnific-popup.css">

    <!-- Custom - Common CSS -->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/plugins.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/navigation-menu.css">

    <!--[if IE]>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/all-ie-only.css" />
    <![endif]-->

    <!-- Custom - Theme CSS -->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/style.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/shortcodes.css">

    <!--[if lt IE 9]>
    <script src="<?php bloginfo('template_directory'); ?>/js/html5/respond.min.js"></script>
    <![endif]-->

</head>

<body data-offset="200" data-spy="scroll" data-target=".ow-navigation">

<!-- Loader -->
<div id="site-loader" class="load-complete">
    <div class="loader">
        <div class="loader-inner ball-clip-rotate">
            <div></div>
        </div>
    </div>
</div><!-- Loader /- -->

<a id="top"></a>
<!-- Main Container -->
<div class="main-container">
    <!-- Header -->
    <header class="header-main">
        <!-- Top Header -->
        <div class="top-header container-fluid no-padding">
            <!-- Container -->
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <p><b><?php the_field('slogan',6); ?></b></p>
                    </div>
                    <div class="col-md-6 text-right">
                        <ul>
                            <li><a href="<?php the_field('vk_group',6); ?>" title="Группа ВКонтакте"><i class="fa fa-vk"></i></a></li>
                        </ul>
                        <a href="/kontakty/" title="Book Appointment"><span>+</span>Записаться на приём</a>
                    </div>
                </div>
            </div><!-- container /- -->
        </div><!-- Top Header /- -->
        <!-- Logo Block -->
        <div class="middle-header container-fluid no-padding">
            <!-- Container -->
            <div class="container">
                <div class="row">
                    <div class="col-md-3 logo-block pull-left">
                        <a href="#" title="Logo"><img src="<?php the_field('logo',6); ?>" alt="<?php bloginfo('name'); ?>" /></a>
                    </div>
                    <div class="col-md-9 text-right pull-right">
                        <div class="location">
                            <h3><img src="<?php bloginfo('template_directory'); ?>/images/location-ic.png" alt="<?php bloginfo('name'); ?>" /> Мы находимся</h3>
                            <p><?php the_field('address',6); ?></p>
                        </div>
                        <div class="phone">
                            <h3><img style="position: relative; top: 15px;" src="<?php bloginfo('template_directory'); ?>/images/phone-ic.png" alt="<?php bloginfo('name'); ?>" /> <?php the_field('tel_1',6); ?><br/>
                                <span class="seccond-phone"><?php the_field('tel_2',6); ?></span>
                            </h3>
                            <p><?php the_field('grafic',6); ?></p>
                        </div>
                    </div>
                </div>
            </div><!-- Container -->
        </div><!-- Logo Block /- -->
        <!-- Navigation -->
        <nav class="navbar ow-navigation">
            <div class="container">
                <div class="row">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Навигация</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse">
                        <?php
                        wp_nav_menu( array(
                            'menu_class'=>'nav navbar-nav',
                            'theme_location'=>'main'
                        ) );
                        ?>
                    </div>
                </div>
            </div>
        </nav>
    </header>

