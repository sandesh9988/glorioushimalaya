<?php
get_header();
$term = get_queried_object(); ?>
<div class="main-wrapper">

  <div class="main-banner-wrap marginbottom">
	
	<div class="banner-overlay"></div>
	<div class="bottom-bg">
		<?php if( get_field('banner', $term) ): ?>
		<img src="<?php echo (get_field('banner', $term)['url']); ?>" />
		
		<?php endif; ?>
	</div>
	<div class="title-wrapper">
		<div class="container">
			<div class="top-title">
				<h2>
					<?php
					if(is_front_page() ){
						echo the_title();
					}
					else{}
						?>
				</h2>
			</div>
		</div>   
	</div>
</div> 

    <div class="blog-section marginbottom">
        <div class="container"> 
           <h1><?php echo single_cat_title( '', false ) ?></h1>
           <?php if ( have_posts() ) : ?>
            <div class="row">
                <?php while ( have_posts() ) : the_post(); ?>
                    <div class="col-md-4">
                        <div class="blog-wrap">
                            <a href="<?php the_permalink() ?>">
                                <img src="<?php the_post_thumbnail_url(); ?>"/></a>
                                <div class="blog-top">
                                    <div class="blog-title">
                                        <a href="<?php the_permalink() ?>">
                                            <?php the_title(); ?></a>
                                        </div>
                                        <span><?php echo get_the_date() ?></span>
                                    </div>
                                    <p><?php echo wp_trim_words( get_the_content(), 25, '...' );?> </p>
                                </div>
                            </div>
                            <?php 
                        endwhile;
                        wp_reset_postdata();
                        ?>                  
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <?php get_footer(); ?>

