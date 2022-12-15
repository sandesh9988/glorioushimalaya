  
<?php
/*
Template Name: Search Page
*/
get_header(); ?>

<?php get_template_part('template-part/design', 'imagebanner'); ?>

<div class="trip-section sell-block search-section marginbottom">
	<div class="container">

   <?php if ( have_posts() ) : ?>

    <div class="page-header">
      <h2><?php printf( esc_html__( 'Search Results for: %s', stackstar ), '<span>' . get_search_query() . '</span>' ); ?>
    </h2>
  </div><!-- .page-header -->
  <div class="row">
    <?php /* Start the Loop */ ?>
    <?php while ( have_posts() ) : the_post(); ?>
     <div class="col-md-4">
      <a href="<?php the_permalink() ?>">
       <div class="trip-block">
        <div class="tp-wrapper">
         <img src="<?php the_post_thumbnail_url(); ?>"/>
         <?php if(get_field('trip_price')) :?>
           <span class="tp-pr">US $<?php echo get_field('trip_price'); ?></span>
           <?php else : endif?>
         </div>
         <div class="tr-high">
          <?php if(get_field('duration')) :?>
           <span class="tp-dur">Duration: <?php echo get_field('duration'); ?></span>
           <?php else : endif; ?>
           <?php if(get_field('grade')) : ?>
             <span class="tp-grade">Grade: <?php echo get_field('grade'); ?></span>
             <?php else : endif ?>
           </div>
           <div class="tp-title"><?php echo the_title(); ?> </div>
         </div>
       </a>
     </div>
   <?php endwhile; ?>

   <?php //the_posts_navigation(); ?>
 </div>

 <?php else : ?>
  <h2><?php printf( esc_html__( 'Search Results for: %s', stackstar ), '<span>' . get_search_query() . '</span>' ); ?>
</h2>
<div>Sorry, but nothing matched your search terms. Please try again with some different keywords.
</div>
<?php endif; ?>

</div>
</div>


<?php get_footer(); ?>