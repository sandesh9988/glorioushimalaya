<?php 
get_header();

?>
<?php get_template_part( 'template-part/banner', 'taxonomy' ); ?>

<div class="main-wrapper tax-wrap">
	<div class="trip-section sell-block marginbottom">
		<div class="container"> 
			<?php
			$cus_tax_cat_slug = get_queried_object()->slug;
			$cus_tax_cat_name = get_queried_object()->name;
			?>
			<h1><?php echo $cus_tax_cat_name; ?></h1>
			<div ><?php echo term_description(); ?></div>
			<div class="row">
				<?php
				$al_tax_post_args = array(
					'post_type' => 'trips', 
					'posts_per_page' => -1,
					'order' => 'ASC',
					'tax_query' => array(
						array(
							'taxonomy' => $taxonomy,
							'field' => 'slug',
							'terms' => $cus_tax_cat_slug
						)
					)
				);			
				$al_tax_post_qry = new WP_Query($al_tax_post_args);
				if($al_tax_post_qry->have_posts()) :
					while($al_tax_post_qry->have_posts()) :
						$al_tax_post_qry->the_post();?>
						<div class="col-md-4">
							<a href="<?php the_permalink() ?>">
								<div class="trip-block">
									<div class="tp-wrapper">
										<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
										echo '<li class="tr-list" style="background: url('. $url.');height: 235px;background-repeat: no-repeat;
										background-size: cover;"></li>';?>										<span class="tp-pr"><i class="fa fa-tag" aria-hidden="true"></i>USD &nbsp;<?php echo get_field('trip_price'); ?></span>									</div>
										<div class="tr-high">
											<span class="tp-dur"><i class="fa fa-calendar" aria-hidden="true"></i> <?php echo get_field('duration'); ?></span>&nbsp;Days
											<span class="tp-grade"><i class="fa fa-bar-chart" aria-hidden="true"></i> <?php echo get_field('grade'); ?></span>
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