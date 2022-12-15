<?php get_header(); ?>
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
				$custom_terms = get_terms('trekking');
				foreach($custom_terms as $custom_term) {
					wp_reset_query();
					$args = array('post_type' => 'trips',
						'tax_query' => array(
							array(
								'taxonomy' => 'trekking',
								'field' => 'slug',
								'terms' => $custom_term->slug,
							),
						),
					);
					$loop = new WP_Query($args);
					if($loop->have_posts()) { ?>
						<div class="col-md-4">
							<div class="trip-block">
								<?php
								$image = get_field('taxonomy_image', $custom_term);?>
								<a href="<?php echo get_term_link( $custom_term->slug, $custom_term->taxonomy ); ?>"><img src="<?php echo $image['url']; ?>" ></a>
								<a href="<?php echo get_term_link( $custom_term->slug, $custom_term->taxonomy ); ?>"><h4 style="margin:10px 0;"><?php echo $custom_term->name ?></h4></a>
								<p class="text-left" style="margin-bottom: 20px;"> <?php echo wp_trim_words( $custom_term->description, 20 ); ?></p>
								<a class="btn btn-green" href="<?php echo get_term_link( $custom_term->slug, $custom_term->taxonomy ); ?>">View all Pakages</a>	
							</div>
						</div>
						<?php while($loop->have_posts()) : $loop->the_post();
                        endwhile;
                        }
                    } ?>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>