<?php
/**
 * Template Name: About Content With Sidemenu Page
 *
 */
get_header(); ?>
<div class="main-wrapper">

    <?php get_template_part('template-part/design', 'imagebanner'); ?>

    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="side-menu">
                    <?php
					wp_nav_menu(array(
						'theme_location' => 'about-menu',
						'container'      => false,
						'menu_class'     => 'nav navbar-nav',
					));
					?>
                </div>
            </div>
            <div class="col-md-9">
                <div class="main-content marginbottom">
                    <?php while (have_posts()) : the_post(); ?>
                    <h1><?php the_title(); ?></h1>
                    <?php the_content(); ?>
                    <?php endwhile;?>
                    <?php
					if ( is_page( 'Team' )  ) {?>
                    <div class="team-section ">
                        <ul class="nav nav-tabs" id="teamTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="admin-tab" data-toggle="tab" href="#admin" role="tab"
                                    aria-controls="admin" aria-selected="true">Admin</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="trekkers-tab" data-toggle="tab" href="#trekkers" role="tab"
                                    aria-controls="trekkers" aria-selected="false">Guide</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="admin" role="tabpanel"
                                aria-labelledby="admin-tab"><?php 
								$args = array(
									'tax_query' => array(
										array(
											'taxonomy' => 'team_category',
											'field' => 'slug',
											'terms' => array( 'admin' )
										),
									),
									'post_type' => 'team'
								);
								$myQuery = new WP_Query($args);
								?>
                                <?php while ($myQuery->have_posts()) : $myQuery->the_post() ?>
                                <div class="row team-block ">
                                    <div class="col-md-3">
                                        <img src="<?php the_post_thumbnail_url(); ?>" />
                                    </div>
                                    <div class="col-md-9">
                                        <div class="tm-high">
                                            <span class="tm-name"><?php the_title(); ?></span>
                                            <span class="tm-des"><?php echo get_field('team_designation'); ?></span>
                                        </div>
                                        <!--tm-high-->
                                        <?php the_content(); ?>
                                    </div>
                                    <!--col-md-9-->
                                </div>
                                <!--team-block-->
                                <?php endwhile;  wp_reset_postdata(); ?>
                            </div>
                            <!--tab-pane -->
                            <div class="tab-pane fade" id="trekkers" role="tabpanel" aria-labelledby="trekkers-tab">
                                <?php 
								$args = array(
									'tax_query' => array(
										array(
											'taxonomy' => 'team_category',
											'field' => 'slug',
											'terms' => array( 'guide' )
										),
									),
									'post_type' => 'team'
								);
								$myQuery = new WP_Query($args);
								?>
                                <?php while ($myQuery->have_posts()) : $myQuery->the_post() ?>
                                <div class="row team-block ">
                                    <div class="col-md-3">
                                        <img src="<?php the_post_thumbnail_url(); ?>" />
                                    </div>
                                    <div class="col-md-9">
                                        <div class="tm-high">
                                            <span class="tm-name"><?php the_title(); ?></span> -
                                            <span class="tm-des"><?php echo get_field('team_designation'); ?></span>
                                        </div>
                                        <!--tm-high-->
                                        <?php the_content(); ?>
                                    </div>
                                    <!--col-md-9-->
                                </div>
                                <!--team-block-->
                                <?php endwhile;  wp_reset_postdata(); ?>
                            </div>
                            <!--tab-content-->
                        </div>
                        <!--team-section-->
                        <?php } ?>

                        <?php if ( is_page( 'Reviews' )  ) {?>
                        <div class="rev-form">
                            <div id="accordion" class="show-more">
                                <div class="card">
                                    <div class="card-header" id="rev-form-show">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link" data-toggle="collapse" data-target="#show-form"
                                                aria-expanded="true" aria-controls="collapseOne">
                                                Create Your Own Review<i class="fa" aria-hidden="true"></i>
                                            </button>
                                        </h5>
                                    </div>
                                    <!--card-header-->

                                    <div id="show-form" class="collapse hide" aria-labelledby="rev-form-show"
                                        data-parent="#accordion">
                                        <div class="card-body">
                                            <?php //echo do_shortcode('[contact-form-7 id="2236" title="Review Form"]'); ?>

                                            <form method="POST" onsubmit="return submit_ajax_form(this)">

                                                <?php
        
        $nonce = wp_create_nonce("wp_rest");
        
        
        ?>
                                                <div class="print-error-msg"></div>
                                                <input type="hidden" name="form_id" value="4" />
                                                <input type="hidden" name="url" value="<?php the_permalink(); ?>" />
                                                <input type="hidden" name="action" value="submit_form" />
                                                <input type="hidden" name="post_id" value="<?php echo $post->ID; ?>" />
                                                <input type="hidden" name="nonce" value="<?php echo $nonce; ?>" />
                                                <input type="hidden" name="fname" />


                                                <div class="field-wrap">
                                                    <div class="content-column col_half"><label>Trip Name </label></div>
                                                    <div class="content-column col_last last_column"><input
                                                            class="form-control" type="text" name="trip_name"
                                                            required="" placeholder="Trip Name" /></div>
                                                </div>


                                                <div class="field-wrap">
                                                    <div class="content-column col_half"><label>Your Full Name </label>
                                                    </div>
                                                    <div class="content-column col_last last_column"><input
                                                            class="form-control" type="text" name="fullname" required=""
                                                            placeholder="Enter Your Full Name" /></div>
                                                </div>



                                                <div class="field-wrap">
                                                    <div class="content-column col_half"><label>Your Email Address
                                                        </label></div>
                                                    <div class="content-column col_last last_column"><input
                                                            class="form-control" type="email" name="email" required=""
                                                            placeholder="Enter Your Email Address" /> </div>
                                                </div>

                                                <div class="field-wrap">
                                                    <div class="content-column col_half"><label>Your Country</label>
                                                    </div>
                                                    <div class="content-column col_last last_column"><input
                                                            class="form-control" type="text" name="country" required=""
                                                            placeholder="Enter Your Country" /></div>
                                                </div>

                                                <div class="field-wrap">
                                                    <div class="content-column col_half"><label>Review Title</label>
                                                    </div>
                                                    <div class="content-column col_last last_column"><input
                                                            class="form-control" type="text" name="review_title"
                                                            required="" placeholder="Review Title" /></div>
                                                </div>


                                                <div class="field-wrap">
                                                    <div class="content-column col_half"><label>Overall Rating</label>
                                                    </div>
                                                    <div class="content-column col_last last_column">

                                                        <ul class="rating list-unstyled sub-rating pull-left">
                                                            <li class="stars star-cb-group"><input name="rating"
                                                                    value="" type="hidden"><input id="rating-1" class=""
                                                                    title="" name="rating" value="5" required="required"
                                                                    type="radio"><label for="rating-1">5</label><input
                                                                    id="rating-2" class="" title="" name="rating"
                                                                    value="4" required="required" type="radio"><label
                                                                    for="rating-2">4</label><input id="rating-3"
                                                                    class="" title="" name="rating" value="3"
                                                                    required="required" type="radio"><label
                                                                    for="rating-3">3</label><input id="rating-4"
                                                                    class="" title="" name="rating" value="2"
                                                                    required="required" type="radio"><label
                                                                    for="rating-4">2</label><input id="rating-5"
                                                                    class="" title="" name="rating" value="1"
                                                                    required="required" type="radio"><label
                                                                    for="rating-5">1</label></li>
                                                        </ul>
                                                    </div>
                                                </div>


                                                <div class="field-wrap">
                                                    <div class="content-column"><label>Review Experience</label>

                                                        <textarea name="review" class="form-control"></textarea>
                                                        <div></div>

                                                        <button class="btn btn-org">Send</button>

                                            </form>
                                        </div>
                                        <!--card-body-->
                                    </div>
                                    <!--show-form-->
                                </div>
                                <!--card-->
                            </div>
                            <!--accordion-->
                        </div>
                        <!--rev-form-->
                    </div>
                    <!--col-md-9-->
                </div>
                <div class="review-section" style="margin-top: 30px;">
                    <?php 
					$args = array(
						'post_type' => 'customer_reviews',
						'posts_per_page' => '100'
					);
					$myQuery = new WP_Query($args);
					?>
                    <?php while ($myQuery->have_posts()) : $myQuery->the_post() ?>
                    <div class="review-block review-list">
                        <img class="rev-profile" src="<?php the_post_thumbnail_url(); ?>" />
                        <div class="reviewer_detail">
                            <div class="review-title">
                                <?php the_title(); ?>
                            </div>
                            <?php for($i=1;$i<=5;$i++){ 
								    if($i<=get_field('reviewer_rating')){ ?>

                            <i class="fas fa-star"></i>
                            <?php
								        
								    }else{?>
                            <i class="far fa-star"></i>

                            <?php } }?>
                            <div style="text-transform: capitalize;">By
                                <span
                                    style="background-color: #e09365;padding: 2px 13px;border-radius: 20px;color: #fff;margin-right: 5px;">
                                    <?php echo get_field('reviewer_name'); ?></span>,
                                <?php echo get_field('reviewer_country'); ?>
                            </div>
                            <div><span><?php echo get_the_date() ?></span></div>
                        </div>
                        <div class="reviewer-exp">
                            <?php the_content(); ?>
                            <?php
									$images = get_field('reviewer_trip_photos');?>
                            <ul class="rev-gallery">
                                <?php foreach( $images as $image ): ?>
                                <li>
                                    <a href="<?php echo $image['url']; ?>">
                                        <img src="<?php echo $image['url']; ?>">
                                    </a>
                                </li>
                                <?php endforeach; ?>
                            </ul>

                        </div>
                    </div>
                    <?php endwhile;  wp_reset_postdata(); ?>
                </div>

                <?php } ?>
                <?php if ( is_page( ) ) {?>
                <?php } ?>
            </div>
        </div>
    </div>
</div>



<?php get_footer(); ?>