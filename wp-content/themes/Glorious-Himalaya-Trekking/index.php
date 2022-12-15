<?php get_header(); ?>

<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/jquery.flipster.min.css" />
 <!--COVERFLOW CAROUSEL JQUERY-->
 <script src="<?php bloginfo('template_url'); ?>/js/jquery.flipster.min.js"></script>

 <!--BACK TO TOP-->
 <script>            
  jQuery(document).ready(function() {
    var offset = 220;
    var duration = 500;
    jQuery(window).scroll(function() {
      if (jQuery(this).scrollTop() > offset) {
        jQuery('.move-to-top').fadeIn(duration);
      } else {
        jQuery('.move-to-top').fadeOut(duration);
      }
    });
    
    jQuery('.move-to-top').click(function(event) {
      event.preventDefault();
      jQuery('html, body').animate({scrollTop: 0}, duration);
      return false;
    })
  });
</script>
<div class="main-wrapper">

	<div class="home-banner-wrapper">
		<?php get_template_part( 'template-part/design', 'banner' ); ?>

		<div class="search-block">
			<div class="container">
				<?php echo do_shortcode('[advance-search-demo]') ?>
			</div>
		</div>
	</div>


	<div class="home-intro marginbottom">
		<div class="container">
			<?php while (have_posts()) : the_post(); ?>
				<?php the_content(); ?>
				<div id="accordion" class="show-more">
					<div class="card">
						<div class="card-header" id="headingOne">
							<h5 class="mb-0">
								<button class="btn btn-link" data-toggle="collapse" data-target="#know-more" aria-expanded="true" aria-controls="collapseOne">
									<?php echo get_field('read_more_button');?><i class="fa" aria-hidden="true"></i>
								</button>
							</h5>
						</div>

						<div id="know-more" class="collapse hide" aria-labelledby="headingOne" data-parent="#accordion">
							<div class="card-body">
								<?php echo get_field('read_more_content');?>
							</div>
						</div>
					</div>
				</div>
			<?php endwhile;?>
		</div>
	</div>
	<div></div>

	<div class="second-block bgcolor marginbottom">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<div class="why-us-block g-block">
						<h3><?php echo get_field('why_us_title'); ?></h3>
						<?php
						if( have_rows('why_us') ): ?>
							<ul> 
								<?php while ( have_rows('why_us') ) : the_row(); ?>
									<li>
										<?php echo the_sub_field('why_us_icon') ?>
										<span><?php echo the_sub_field('why_us_title'); ?></span>
									</li>                            
								<?php endwhile; ?>
							</ul>
						<?php endif; ?>						
					</div>
				</div>
				<div class="col-md-3">
					<div class="ach-block g-block">
						<h3>Achievements</h3>
						<?php 
						$images = get_field('achievement_image');
						if($images): ?>
							<ul>
								<?php foreach( $images as $image ) : ?>
									<li>
										<a href="<?php echo $image['url']; ?>" target="_blank" rel="lightbox" >
											<img src="<?php echo $image['sizes']['thumb_600']; ?>" alt="<?php echo $image['alt']; ?>" />
										</a>
									</li>
								<?php endforeach; ?>								
								</ul>
						<?php endif; ?>
					</div>
				</div>
				<div class="col-md-3">
					<div class="home-rev review-section g-block">
						<h3>Reviews</h3>
						<?php 
						$args = array(
							'post_type' => 'customer_reviews',
							'posts_per_page' => '1'
						);
						$myQuery = new WP_Query($args);
						?>
						<?php while ($myQuery->have_posts()) : $myQuery->the_post() ?>
							<div class="review-block review-list">
								<div class="reviewer_detail">
									<div class="review-title">
										<?php the_title(); ?>
									</div>
									<?php echo get_field('reviewer_rating'); ?>
									<div style="font-size: 14px;margin-bottom: 20px;color: #3a3535;line-height: 23px;">
										<?php 
										echo wp_trim_words( get_the_content(), 30, '...' );
										?>
									</div>
									<div style="text-transform: capitalize;">By 
										<span style="color: #8D8888;">
											<?php echo get_field('reviewer_name'); ?></span>,<br/> <?php echo get_field('reviewer_country'); ?>
										</div>
									</div>
								</div>
							<?php endwhile;  wp_reset_postdata(); ?>
						<a href="/glorious/reviews" target="_blank">read all reviews</a>
						</div>													
					</div>
					<div class="col-md-3">
						<div class="tr-advisor sidebar-margin">
							<div id="TA_selfserveprop103" class="TA_selfserveprop">
								<ul id="wL6afZZeT2We" class="TA_links 
								sWJUE1WJSpcW">
								<li id="qu1iAlV" class="Udkf7kh8">
									<a target="_blank" href="https://www.tripadvisor.com/">
										<img 
										src="https://www.tripadvisor.com/img/cdsi/img2/branding/150_logo-11900-2.png" 
										alt="TripAdvisor"/>
									</a>
								</li>
							</ul>
						</div>
						<script async 
						src="https://www.jscache.com/wejs?wtype=selfserveprop&amp;uniq=103&amp;locationId=10844608&
						amp;lang=en_US&amp;rating=true&amp;nreviews=5&amp;writereviewlink=true&amp;popIdx=true&am
						p;iswide=false&amp;border=true&amp;display_version=2" data-loadtrk 
						onload="this.loadtrk=true"></script> 
					</div><!--tr-advisor-->
				</div>
			</div>
		</div>
	</div>

	<div class="rec-block marginbottom">
		<h3 style="margin-bottom: 20px;"> <?php echo get_field('recommendation_title'); ?></h3>
		<?php 
		$images = get_field('recommendation_image');
		if( $images ): ?>
			<ul>
				<?php foreach( $images as $image ): ?>
					<li>
						<a href="<?php echo get_field('url', $image['id']); ?>" target="_blank">
							<img src="<?php echo $image['sizes']['medium']; ?>" alt="<?php echo $image['alt']; ?>" />
						</a>
					</li>
				<?php endforeach; ?>
			</ul>
		<?php endif; ?>		
	</div>


	<div class="trip-section sell-block bgcolor">
		<div class="container">
			<h2><?php echo get_field('selling_trips_title')?></h2>
			<?php the_field('selling_trips_description')?>
			<div class="row">
				<?php 
				$args = array(
					'tax_query' => array(
						array(
							'taxonomy' => 'homepage_featured',
							'field' => 'slug',
							'terms' => 'homepage_featured'
						),
					),
					'post_type' => 'trips'
				);
				$myQuery = new WP_Query($args);
				?>
				<?php while ($myQuery->have_posts()) : $myQuery->the_post() ?>
					<div class="col-md-4">
						<a href="<?php the_permalink() ?>">
							<div class="trip-block">
								<?php $term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) ); 
								if($tag=get_the_terms(get_post(),'trip_tag')): 
									$tag=$tag[0]; ?>										
									<span class="trip-tag">
										<?php echo $tag->name; ?>
									</span>
									
								<?php endif; ?>
								<div class="tp-wrapper">
									<?php $url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumb_350' )[0];
									echo '<li class="tr-list" style="background: url('. $url.');height: 235px;background-repeat: no-repeat;
									background-size: cover;"></li>';?>
									<span class="tp-pr"><i class="fa fa-tag" aria-hidden="true"></i>USD &nbsp;<?php echo get_field('trip_price'); ?></span>
								</div>
								<div class="tr-high">
									<span class="tp-dur"><i class="fa fa-calendar" aria-hidden="true"></i> <?php echo get_field('duration'); ?></span>&nbsp;Days
									<span class="tp-grade"><i class="fa fa-bar-chart" aria-hidden="true"></i> <?php echo get_field('grade'); ?></span>
								</div>
								<div class="tp-title"><?php echo the_title(); ?>
								<span class="home-review"><i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i></span></div>
								</div>
							</a>
						</div>
					<?php endwhile;  wp_reset_postdata(); ?>
				</div>
			</div>
		</div>


		<div class="lg-screen">
		<?php $image = get_field( 'travel_style_background' );?>
		<?php if ( !empty( $image ) ) { ?>
		<div class="trip-section style-block " style="background-image: url(<?php echo get_field('travel_style_background'); ?>);" ?>
			<div class="container">
				<div class="style-inner-section">
				<h2><?php echo get_field('travel_styles_title')?></h2>
				<?php the_field('travel_styles_description')?>
				<div id="demo-carousel" class="demo">
					<div id="carousel">
						<ul class="flip-items">
							<?php 
							$custom_terms = get_terms('travel_style');
							foreach($custom_terms as $custom_term) {
								wp_reset_query();
								$args = array('post_type' => 'trips',
									'tax_query' => array(
										array(
											'taxonomy' => 'travel_style',
											'field' => 'slug',
											'terms' => $custom_term->slug,
										),
									),
								);
								$loop = new WP_Query($args);?>
								<?php if($loop->have_posts()) { ?>
									<?php
									$image = get_field('taxonomy_image', $custom_term);
									$size = 'medium';
									$medium = $image['sizes'][ $size ];?>
									<li>
										<a href="<?php echo get_term_link( $custom_term->slug, $custom_term->taxonomy ); ?>">
											<img src="<?php echo esc_url($medium); ?>" width="275"  />						
											<h5 ><?php echo $custom_term->name ?></h5></a>
										</li>
									<?php  } ?>
								<?php  } ?>
							</ul>
						</div><!--carousel-->
					</div><!--demo-carousel-->
				</div>
			</div>
		</div><!--container-->
	</div>		
	<?php }?>
</div>

	<div class="sm-screen">
		<?php $image = get_field( 'travel_style_background' );?>
		<?php if ( !empty( $image ) ) { ?>
		<div class="trip-section style-block " style="background-image: url(<?php echo get_field('travel_style_background'); ?>);" ?>
			<div class="container">
				<div class="style-inner-section">
				<h2><?php echo get_field('travel_styles_title')?></h2>
				<?php the_field('travel_styles_description')?>
				<div id="demo-carousel" class="demo">
					<div id="carousel-sm">
						<ul class="flip-items">
							<?php 
							$custom_terms = get_terms('travel_style');
							foreach($custom_terms as $custom_term) {
								wp_reset_query();
								$args = array('post_type' => 'trips',
									'tax_query' => array(
										array(
											'taxonomy' => 'travel_style',
											'field' => 'slug',
											'terms' => $custom_term->slug,
										),
									),
								);
								$loop = new WP_Query($args);?>
								<?php if($loop->have_posts()) { ?>
									<?php
									$image = get_field('taxonomy_image', $custom_term);
									$size = 'thumbnail';
									$medium = $image['sizes'][ $size ];?>
									<li>
										<a href="<?php echo get_term_link( $custom_term->slug, $custom_term->taxonomy ); ?>">
											<img src="<?php echo esc_url($medium); ?>" width="150"  />						
											<h5 ><?php echo $custom_term->name ?></h5></a>
										</li>
									<?php  } ?>
								<?php  } ?>
							</ul>
						</div><!--carousel-->
					</div><!--demo-carousel-->
				</div>
			</div>
		</div><!--container-->
	</div>		
	<?php }?>
</div>

	<div class="trip-section off-block bgcolor marginbottom">
		<div class="container">
			<h2><?php echo get_field('off_the_beaten_treks_title')?></h2>
			<?php the_field('off_the_beaten_treks_description')?>
			<div class="row">
				<div class="col-md-6">
					<?php 
					$args = array(
						'tax_query' => array(
							array(
								'taxonomy' => 'trekking',
								'field' => 'slug',
								'terms' => 'off_the_beaten_treks'
							),
						),
						'post_type' => 'trips',
						'posts_per_page' => 1
					);
					$myQuery = new WP_Query($args);
					?>
					<?php while ($myQuery->have_posts()) : $myQuery->the_post() ?>
						<a href="<?php the_permalink() ?>">
							<div class="trip-block first-block">
								<div class="tp-wrapper">
									<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
									echo '<li class="tr-list" style="background: url('. $url.');height: 350px;background-repeat: no-repeat;
									background-size: cover;"></li>';?>									<div class="trip-det">
										<span class="tp-title"><?php echo the_title(); ?> </span>
									</div>
								</div>
							</div>
						</a>
					</div>
				<?php endwhile;  wp_reset_postdata(); ?>
				<div class="col-md-6">
					<?php 
					$args = array(
						'tax_query' => array(
							array(
								'taxonomy' => 'trekking',
								'field' => 'slug',
								'terms' => array( 'off_the_beaten_treks' )
							),
						),
						'post_type' => 'trips',
						'posts_per_page' => 4,
						'offset' => 1
					);
					$myQuery = new WP_Query($args);
					?>
					<div class="row">
						<?php while ($myQuery->have_posts()) : $myQuery->the_post() ?>
							<div class="col-md-6">
								<a href="<?php the_permalink() ?>">
									<div class="trip-block" style="margin-bottom: 0">
										<div class="tp-wrapper">
											<?php $url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumb_450' )[0];
											echo '<li class="tr-list" style="background: url('. $url.');height: 160px;background-repeat: no-repeat;
											background-size: cover;"></li>';?>											<div class="trip-det">
												<span class="tp-title"><?php echo the_title(); ?> </span>
											</div>
										</div>
									</div>
								</a>
							</div>
						<?php endwhile;  wp_reset_postdata(); ?>
					</div>
				</div>
			</div>
		</div>
	</div>


	<div class="video-block marginbottom">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<h3 style="line-height: 1.4"><?php echo get_field('video_title');?></h3>
					<p><?php echo get_field('video_content');?></p>
				</div>
				<div class="col-md-6">
					<div class="video-wrap">
						<?php echo get_field('video');?>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="bottom-block bgcolor">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="blog-block ">
						<h3>Latest Posts</h3>
						<?php $the_query = new WP_Query( 'posts_per_page=4' ); ?>
						<div class="row">
							<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
								<div class="col-md-6">
									<a href="<?php the_permalink() ?>">
										<div class="blog-wrapper">
											<?php if (has_post_thumbnail()): ?>
												<?php $url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumb_450' )[0];
												echo '<li class="tr-list" style="background: url('. $url.');height: 180px;background-repeat: no-repeat;
												background-size: cover;"></li>';?>	
											<?php endif; ?> 
											<div class="blog-title">
												<span><?php echo get_the_date() ?></span>
												<h4><?php the_title(); ?></h4>
											</div><!--blog-title-->
										</div><!--blog-wrapper-->
									</a>
								</div><!--col-md-6-->
								<?php 
							endwhile;
							wp_reset_postdata();
							?>
						</div>
					<a href="/glorious/blogs" target="_blank">Read more blogs</a>
					</div>
				</div>
				<div class="col-md-6">
					<h3>Insta Feed</h3>
					<div class="desk-inst"><?php echo do_shortcode('[instagram-feed num=12 cols=4]');?></div>
					<div class="small-inst"><?php echo do_shortcode('[instagram-feed num=4 cols=2]');?></div>
				</div>
			</div>
		</div>
	</div>
</div>

<script>
	var carousel = $("#carousel").flipster({		
		style: 'coverflow', 
		start: 'center',
		enableKeyboard: true, 
		scrollwheel: false, 
		enableTouch: true, 
		enableNav: false, 
		buttons: true,
	});
</script>
<script>
	var carousel = $("#carousel-sm").flipster({		
		style: 'coverflow', 
		start: 'center',
		enableKeyboard: true, 
		scrollwheel: false, 
		enableTouch: true, 
		enableNav: false, 
		buttons: true,
	});
</script>

<?php get_footer(); ?>
