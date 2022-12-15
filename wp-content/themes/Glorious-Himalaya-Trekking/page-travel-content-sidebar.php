<?php
/**
 * Template Name: Travel Content With Sidemenu Page
 *
 */
get_header(); ?>
<div class="main-wrapper travel-wrapper">

	<?php get_template_part('template-part/design', 'imagebanner'); ?>

	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<div class="side-menu">
					<?php
					wp_nav_menu(array(
						'theme_location' => 'travel-menu',
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
				</div>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>
