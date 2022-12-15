<?php
/**
 * Template Name: Content Page
 *
 */
get_header(); ?>
<div class="main-wrapper">

    <?php get_template_part( 'template-part/design', 'imagebanner' ); ?>

	<div class="container">
		<div class="main-content marginbottom">
			<?php while (have_posts()) : the_post(); ?>
				<h1><?php the_title(); ?></h1>
				<?php the_content(); ?>
			<?php endwhile;?>
		</div>
	</div>
</div>

<?php get_footer(); ?>
