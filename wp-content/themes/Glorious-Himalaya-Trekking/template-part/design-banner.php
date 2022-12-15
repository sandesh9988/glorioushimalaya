<div class="main-banner-wrap marginbottom">
	<div class="banner-image" 
	style="background-image: url(
		<?php
		echo wp_get_attachment_url( get_post_thumbnail_id($post->ID));
		?>
		);">
	</div>
	<div class="banner-overlay"></div>
	<div class="bottom-bg">
		<?php if( get_field('banner') ): ?>
			<img src="<?php echo get_the_field('banner')[0]; ?>" />
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
