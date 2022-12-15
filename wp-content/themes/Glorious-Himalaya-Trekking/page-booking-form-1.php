<?php
get_header(); ?>
<div class="main-wrapper">

	<?php get_template_part('template-part/design', 'imagebanner'); ?>
	<div class="container">
		<h1><?php echo the_title(); ?></h1>
		<div class="main-wrapper contact-section marginbottom">
			<?php while (have_posts()) : the_post(); ?>
				<div class="marginbottom"><?php the_content(); ?></div>
			<?php endwhile;?>
			<h2>Personal Information</h2>
			<div class="contact-form">
				<?php echo do_shortcode('[contact-form-7 id="959" title="Booking Form 1"]');?>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>
