<?php
if(isset($_POST["durations"]) && $_POST["durations"] != "all"){
    $durations=$_POST["durations"];
    $duraltionRange=explode("-",$durations);
    $range = range($duraltionRange[0], $duraltionRange[1]);
}

$trekkingTerm=get_terms("trekking");
$trekkingList=[];
foreach ($trekkingTerm as $key=>$value){
    $trekkingList[]=$value->name;
}
get_header();

?>
<?php get_template_part('template-part/design', 'imagebanner'); ?>


<div class="main-wrapper tax-wrap search-section">
    <div class="trip-section sell-block marginbottom">
        <div class="container">
            <div class="page-header">
              <h2>Search Results    </h2>
              <div class="row">
                <?php
                if(isset($_POST['destination']) && $_POST['destination']!="all"){
                    if(isset($_POST['activities']) && $_POST['activities']!="all"){
                        if($_POST['activities'] != "trekking"){
                            $args = array(
                                'post_type' => 'trips',
                                'posts_per_page' => -1,
                                'order' => 'ASC',
                                'tax_query' => array(
                                    'relation' => 'AND',
                                    array(
                                        'taxonomy' => 'destinations',
                                        'field'    => 'term_id',
                                        'terms'    => $_POST['destination'],
                                    ),
                                    array(
                                        'taxonomy' => 'tour',
                                        'field'    => 'term_id',
                                        'terms'    => $_POST['activities'],
                                    ),
                                ),
                                'meta_key' => 'duration',
                                'meta_value'=>$range
                            );
                        }else{
                            $args = array(
                                'post_type' => 'trips',
                                'posts_per_page' => -1,
                                'order' => 'ASC',
                                'tax_query' => array(
                                    'relation' => 'AND',
                                    array(
                                        'taxonomy' => 'destinations',
                                        'field'    => 'term_id',
                                        'terms'    => $_POST['destination'],
                                    ),
                                    array(
                                        'taxonomy' => 'trekking',
                                        'field' => 'name',
                                        'terms' => $trekkingList
                                    ),
                                ),
                                'meta_key' => 'duration',
                                'meta_value'=>$range
                            );
                        }

                    } else {
                        $args = array(
                           'post_type' => 'trips',
                           'posts_per_page' => -1,
                           'order' => 'ASC',
                           'tax_query' => array(
                            array(
                                'taxonomy' => 'destinations',
                                'field'    => 'term_id',
                                'terms'    => $_POST['destination'],
                            ),
                        ),
                           'meta_key' => 'duration',
                           'meta_value'=>$range
                       );
                    }

                }else{
                    $args = array(
                        'post_type' => 'trips',
                        'posts_per_page' => -1,
                        'order' => 'ASC',
                        'meta_key' => 'duration',
                        'meta_value'=>$range
                    );
                }

                $myQuery = new WP_Query($args);
                if($myQuery->have_posts()) :
                    while($myQuery->have_posts()) :
                        $myQuery->the_post();?>
                        <div class="col-md-4">
                            <a href="<?php the_permalink() ?>">
                                <div class="trip-block">
                                    <div class="tp-wrapper">
                                        <img src="<?php the_post_thumbnail_url('thumb_350'); ?>"/>
                                        <span class="tp-pr">US $<?php echo get_field('trip_price'); ?></span>
                                    </div>
                                    <div class="tr-high">
                                        <span class="tp-dur">Duration: <?php echo get_field('duration'); ?></span>
                                        <span class="tp-grade">Grade: <?php echo get_field('grade'); ?></span>
                                    </div>
                                    <div class="tp-title"><?php echo the_title(); ?> </div>
                                </div>
                            </a>
                        </div>
                        <?php
                    endwhile;
                endif;

                ?>
            </div>
        </div>
    </div>
</div>



<?php

get_footer();
?>