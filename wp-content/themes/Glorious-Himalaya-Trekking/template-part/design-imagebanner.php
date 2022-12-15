<div class="content-banner-wrap marginbottom">
<picture>
<source media="(max-width:600px)" srcset="<?php echo get_the_post_thumbnail_url( $post->ID, 'thumb_600' ); ?>">
	<img class="banner-image" 
	src="<?php
		echo get_the_post_thumbnail_url( $post->ID );
		?>
		">
</picture>
	<div class="banner-overlay"></div>
	
</div> 
