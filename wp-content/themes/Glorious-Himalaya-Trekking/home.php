 <?php
/*
Template Name: Blogs
*/
get_header() ?>

<div class="main-wrapper">

    <?php get_template_part( 'template-part/design', 'imagebanner' ); ?>


    <div class="blog-section marginbottom">
        <div class="container">
         <h1><?php echo the_title(); ?></h1>
         <div class="row">
             <?php $the_query = new WP_Query( 'posts_per_page=-1' ); ?>
             <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
                <div class="col-md-4">
                    <div class="blog-wrap">
                        <a href="<?php the_permalink() ?>">
                       <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
                                    echo '<li class="tr-list" style="background: url('. $url.');height: 235px;background-repeat: no-repeat;
                                        background-size: cover;"></li>';?></a>
                        <div class="blog-top">
                            <div class="blog-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></div>
                            <span><?php echo get_the_date() ?></span>
                        </div> 
                        <p><?php echo wp_trim_words( get_the_content(), 25, '...' );?> </p>
                    </div>
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