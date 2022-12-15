<?php get_header() ?>
<?php get_template_part('template-part/design','imagebanner'); ?>
<div class="main-wrapper contact-section marginbottom">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<?php the_content(); ?>
				<h2>Get in touch</h2>
				<div class="contact-form">
					<?php //echo do_shortcode('[contact-form-7 id="416" title="Contact Us"]'); ?>
                    <form method="POST" onsubmit="return submit_ajax_form(this)">
        <?php
        
        $nonce = wp_create_nonce("wp_rest");
        
        
        ?>
        <div class="print-error-msg"></div>
        <input type="hidden" name="form_id" value="2" />
        <input type="hidden" name="action" value="submit_form" />
        <input type="hidden" name="post_id" value="<?php echo $post->ID; ?>" />
        <input type="hidden" name="nonce" value="<?php echo $nonce; ?>" />
        <input type="hidden" name="fname" />
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <input type="text" name="fullname" placeholder="Your Full Name" class="form-control" required="" />
                </div>                
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <input type="email" name="email" placeholder="Your Email Address" class="form-control" required="" />
                </div>                
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <input type="text" name="phone" placeholder="Your Phone Number" class="form-control" required="" />
                </div>                
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <input type="text" name="country" placeholder="Country" class="form-control" required="" />
                </div>                
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <input type="text" name="subject" placeholder="Subject" class="form-control" required="" />
                </div>                
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <textarea name="message" class="form-control" required="" rows="6" placeholder="Message"></textarea>
                </div>
            </div>
        </div>
            
            
            <div class="form-group">
                <button class="btn btn-warning btn-sm btn-flat">SEND</button>
            </div>
        </form>
				</div>
			</div>
			<div class="col-md-4">
				<div class="contact-sidebar">
					<?php echo get_field('contact_address'); ?>
				</div>
			</div>
		</div>
	</div>
</div>


<?php get_footer() ?>