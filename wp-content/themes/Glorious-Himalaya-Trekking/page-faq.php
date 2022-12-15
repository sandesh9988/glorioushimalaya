<?php

get_header(); ?>
<div class="main-wrapper">

	<?php get_template_part('template-part/design', 'imagebanner'); ?>

	<div class="container">
		<div class="faq-section marginbottom">
        
        
        <?php $terms =  get_terms('faq_category');
        
        foreach($terms as $ter){ ?>

			<div class="marginbottom">
				<h2><?php echo $ter->name; ?></h2>
				<?php 
				$args = array(
					'tax_query' => array(
						array(
							'taxonomy' => 'faq_category',
							'field' => 'slug',
							'terms' => $ter->slug
						),
					),
					'post_type' => 'trip_faq'
				);
				$myQuery = new WP_Query($args);
				?>						
				<div id="accordion_<?php echo $ter->slug; ?>" role="tablist" aria-multiselectable="true">
					<?php while ($myQuery->have_posts()) : $myQuery->the_post() ?>
						<div class="card">
							<div class="card-header" >
								<h5 class="mb-0">
									<button class="btn btn-link" data-toggle="collapse" data-parent="#accordion_<?php echo $ter->slug; ?>" href="#collapse<?php the_ID() ?>" aria-expanded="false" aria-controls="collapse<?php the_ID() ?>">
										<?php the_title(); ?>		
										<i class="fas fa-angle-down rotate-icon"></i>
									</button>
								</h5>
							</div>

							<div id="collapse<?php the_ID() ?>" class="collapse <?php //echo ($the_query->current_post == 0 ? 'show' : ''); ?>" role="tabpanel" aria-labelledby="heading<?php the_ID() ?>">
								<div class="card-body">
									<span><?php the_content(); ?></span>
								</div>
							</div>
						</div>						
					<?php endwhile;  wp_reset_postdata(); ?>
				</div>
			</div>
            <?php } ?>

			
            
            
            
            
            
		</div>
	</div>

	<?php get_footer(); ?>
