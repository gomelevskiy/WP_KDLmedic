<?php
/*
Template Name: Template vidi-medical-uslug page
*/
?>

<?php get_header(); ?>

<!-- Page Banner -->
<div class="page-banner about-banner container-fluid no-padding">
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

<!-- Service Section -->
<div id="service-section" class="container-fluid no-padding service-section">
    <!-- Container -->
    <div class="container">
        <!-- Row -->
        <div class="row">
            <!-- Service -->
            <div class="col-md-8 col-sm-12 col-xs-12 service">
                <div class="section-header">
                    <h3>Виды медицинских услуг</h3>
                    <p>
                        <?php
                        $my_post_obj = get_post( 12 );
                        echo $my_post_obj->post_content;
                        ?>
                    </p>
                </div>
                <div class="row">
                    <?php $i = 0; $id=4; $recent = new WP_Query("cat=$id&showposts=$n"); while($recent->have_posts()) : $recent->the_post(); ?>
                    <div id="usluga-<?php echo $i ?>" class="col-md-6 col-sm-6 col-xs-12">
                        <div class="service-block">
                            <div class="service-block-icon">
                                <i><img src="<?php bloginfo('template_directory'); ?>/images/heart-ic.png" alt="heart-ic"/></i>
                                <i><img src="<?php bloginfo('template_directory'); ?>/images/heart-ic-white.png" alt="heart-ic-white"/></i>
                            </div>
                            <div class="service-block-content">
                                <h3><?php the_title(); ?></h3>
                                <p><?php the_excerpt(); ?></p>
                            </div>
                        </div>
                    </div>
                    <?php $i++; endwhile; ?>
                </div>
            </div><!-- Service /- -->
            <div class="col-md-4 col-sm-12 col-xs-12">
                <!-- Appointment Form -->
                <div class="appoinment-form">
                    <h3><img src="<?php bloginfo('template_directory'); ?>/images/appoinment.png" alt="appoinment"/>Заявка на прием</h3>
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
                    <?php the_field('form2',12); ?>

                </div><!-- Appointment Form /- -->
            </div>
        </div>
    </div><!-- Container /- -->
</div><!-- Service Section /- -->

<!-- Team Section -->
<div id="team-section" class="container-fluid no-paddding team-section">
    <div class="container">
        <div class="section-header">
            <h3>Лицензия</h3>
            <p style="text-align: center;">
                <?php the_field('l_text',12); ?>
            </p>
        </div>
        <div class="team-carousel" style="text-align: center;">
            <div class="col-md-12 team-type">
                <a data-lightbox="license" href="<?php the_field('l1_img',12); ?>"><img style="max-width: 350px; border: 6px solid #2098df;" src="<?php the_field('l1_img',12); ?>" alt="license1"/></a>
            </div>
            <div class="col-md-12 team-type">
                <a data-lightbox="license" href="<?php the_field('l2_img',12); ?>"><img style="max-width: 350px; border: 6px solid #2098df;" src="<?php the_field('l2_img',12); ?>" alt="license2"/></a>
            </div>
        </div>
    </div>
</div><!-- Team Section -->



<?php get_footer(); ?>
