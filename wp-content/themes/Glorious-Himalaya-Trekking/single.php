<?php get_header(); ?>
<?php get_template_part('template-part/design', 'imagebanner'); ?>
<div class="main-wrapper marginbottom">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<div class="blog-content-section">
					<?php while (have_posts()) : the_post(); ?>
						<h1><?php the_title(); ?></h1>
						<div class="blog-sum">By <span class="blog-aut"><?php echo get_the_author_meta('display_name'); ?></span> on  <span><?php the_date(); ?></span> in <span><?php the_category(', '); ?> </span>
						</div>
						<?php the_content(); ?>
					<?php endwhile; ?>
				</div>
			</div>
			<div class="col-md-4">
				<div class="blog-sidebar">
					<h4>Categories</h4>
					<ul>
						<?php wp_list_categories( array(
							'orderby'    => 'name',
							'show_count' => true,
							'title_li' => '',

						) ); ?> 
					</ul>
				</div>
			</div>
		</div>

		<div class="comment-block">
			<?php comments_template() ?>
		</div>

		<div class="blog-section">
			<h2 class="text-center">Recent Blogs</h2>
			<div class="row">
				<?php $the_query = new WP_Query( 'posts_per_page=3' ); ?>
				<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
					<div class="col-md-4">
						<div class="banner-image" 
						style="background-image: url(
							<?php
							echo wp_get_attachment_url( get_post_thumbnail_id($post->ID));
							?>
							);height: 235px;background-size: cover;" ></div>
							<div class="blog-top">
								<div class="blog-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></div>
								<span><?php echo get_the_date() ?></span>
							</div>
							<p><?php echo wp_trim_words( get_the_content(), 25, '...' );?> </p>
						</div>
						<?php 
					endwhile;
					wp_reset_postdata();
					?>
				</div>
			</div>
		</div>
	</div>

	<?php get_footer(); ?>