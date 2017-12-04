<?php
/*
Template Name: Template contact page
*/
?>

<?php get_header(); ?>

    <!-- Page Banner -->
    <div class="page-banner contact-banner container-fluid no-padding">
        <!-- Container -->
        <div class="container">
            <h3><?php the_title();?></h3>
        </div><!-- Container /- -->
        <!-- Shape -->
        <div class="banner-shape container-fluid no-padding">
            <div class="col-md-6 col-sm-6 col-xs-6 shape-left no-padding">
                <div class="left-shape-blue">
                    <svg width="100%" height="100%">
                        <clipPath id="clipPolygon2" clipPathUnits="objectBoundingBox">
                            <polygon points="0 0, 0 100, 120 100, 0 0"></polygon>
                        </clipPath>
                    </svg>
                </div>
                <div class="left-shape">
                    <svg width="100%" height="100%">
                        <clipPath id="clipPolygon1" clipPathUnits="objectBoundingBox">
                            <polygon points="0 0, 0 100, 100 100, 0 0"></polygon>
                        </clipPath>
                    </svg>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-6 shape-right no-padding">
                <div class="right-shape-blue">
                    <svg width="100%" height="100%">
                        <clipPath id="clipPolygon3" clipPathUnits="objectBoundingBox">
                            <polygon points="1 0.2, 0 1, 0 0.835, 1 0"></polygon>
                        </clipPath>
                    </svg>
                </div>
                <div class="right-shape">
                    <svg width="100%" height="100%">
                        <clipPath id="clipPolygon4" clipPathUnits="objectBoundingBox">
                            <polygon points="1 0, 0 1, 100 100, 100 0"></polygon>
                        </clipPath>
                    </svg>
                </div>
            </div>
        </div><!-- Shape -->
    </div><!-- Page Banner /- -->

    <!-- Container -->
    <div class="container">
        <!-- Contact Us -->
        <div class="contact-us">
            <div class="col-md-4 col-sm-4">
                <div class="contact-block">
                    <i class="fa fa-map-marker"></i>
                    <span>Адрес</span>
                    <p><?php the_field('address',6); ?></p>
                </div>
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="contact-block">
                    <i class="fa fa-mobile"></i>
                    <span>Телефон</span>
                    <p><?php the_field('tel_1',6); ?></p>
                    <p><?php the_field('tel_2',6); ?></p>
                </div>
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="contact-block">
                    <i class="fa fa-clock-o"></i>
                    <span>Часы приема</span>
                    <p><?php the_field('grafic',6); ?></p>
                </div>
            </div>
        </div><!-- Contact Us /- -->
    </div><!-- Container /- -->

    <!-- Map Section -->
    <div class="map container-fluid no-padding">
        <?php the_field('map',16); ?>
    </div><!--  Map Section /- -->

    <!-- Container -->
    <div class="container">
        <!-- Enquiry Us -->
        <div class="leave-comment enquiry-us">
            <h3 class="section-heading">Напишите нам</h3>
            <form id="contact-form" class="comment-form enquiry-form"  method="post">
                <div class="row">
                    <style>
                        .screen-reader-response {
                            display: none;
                        }
                        .wpcf7-response-output {
                            display: inline-block;
                            width: 100%;
                            margin-top: 20px;
                        }
                        .wpcf7-not-valid {
                            border-color: #ce5454;
                        }
                    </style>
                    <?php the_field('form1',16); ?>
                </div>
            </form>
        </div><!-- Enquiry Us /- -->
    </div><!-- Container /- -->

<?php get_footer(); ?>