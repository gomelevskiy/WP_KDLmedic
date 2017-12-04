<?php
/*
Template Name: Template usluga page
*/
?>

<?php get_header(); ?>

<!-- Page Banner -->
<div class="page-banner services-banner container-fluid no-padding">
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

<!-- Departments Section -->
<div class="container-fluid no-padding department-section">
    <div class="we-are-best col-md-12 col-sm-12 no-padding">
        <div class="section-header">
            <h3>Стоимость услуг</h3><br/>
        </div>

        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
            <?php $i = 0; $id=3; $recent = new WP_Query("cat=$id&showposts=$n"); while($recent->have_posts()) : $recent->the_post(); ?>
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="dept-heading<?php echo $i ?>">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-parent="#accordion" aria-expanded="false">
                                <?php the_title(); ?><i class="fa fa-plus pull-right"></i>
                            </a>
                        </h4>
                    </div>
                    <div id="dept-type-<?php echo $i ?>" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="dept-heading<?php echo $i ?>">
                        <div class="panel-body">
                            <p><?php the_excerpt(); ?></p>
                        </div>
                    </div>
                </div>
                <?php $i++; endwhile; ?>
        </div>

    </div>

</div><!-- Departments Section /- -->

<?php get_footer(); ?>
