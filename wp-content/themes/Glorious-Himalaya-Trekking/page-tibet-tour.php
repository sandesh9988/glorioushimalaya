  
<?php
get_header(); ?>

<div class="main-wrapper">

	<?php get_template_part( 'template-part/design', 'imagebanner' ); ?>
	<div class="container">  <h1><?php echo the_title(); ?></h1></div>

	<div class="container">
		<div class="col-md-12">
			<div class="row">
				<?php while (have_posts()) : the_post(); ?>
					<div class="contentbottom"><?php the_content(); ?></div>
				<?php endwhile;?>
			</div>
		</div>

		<div class="trip-section sell-block marginbottom">
			<div class="row">
				<?php 
				$args = array(
					'tax_query' => array(
						array(
							'taxonomy' => 'destinations',
							'field' => 'slug',
							'terms' => 'tibet'
						),
					),
					'post_type' => 'trips',
					'posts_per_page' => -1			
				);
				$myQuery = new WP_Query($args);
				?>				
				<?php while ($myQuery->have_posts()) : $myQuery->the_post() ?>
					<div class="col-md-4">
						<a href="<?php the_permalink() ?>">
							<div class="trip-block">
								<div class="tp-wrapper">
									<img src="<?php the_post_thumbnail_url(); ?>"/>
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
				<?php endwhile;  wp_reset_postdata(); ?>
			</div>
		</div>
	</div>
</div>


<?php get_footer(); ?>