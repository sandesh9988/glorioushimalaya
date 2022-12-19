<?php
get_header();
the_post();
?>
<main class="page__home">
    <section class="hero">
        <div class="hero__heading">
            <div class="container">
            <h1 class="hero__title">Adventures Fill Your Soul</h1>
            </div>
        </div>
        <div class="hero__arrow">
            <svg class="icon icon-icon-left-arrow">
                <use xlink:href="#icon-icon-left-arrow"></use>
            </svg>
            <svg class="icon icon-icon-right-arrow">
                <use xlink:href="#icon-icon-right-arrow"></use>
            </svg>
        </div>
        <div class="hero__slider">
            <figure class="hero__media">
                <img src="<?php echo get_template_directory_uri(); ?>/uploads/hero.jpg" alt="Image of a trekking" />
            </figure>
            <figure class="hero__media">
                <img src="<?php echo get_template_directory_uri(); ?>/uploads/hero.jpg" alt="Image of a trekking" />
            </figure>
            <figure class="hero__media">
                <img src="<?php echo get_template_directory_uri(); ?>/uploads/hero.jpg" alt="Image of a trekking" />
            </figure>
        </div>


    </section>
    <?php include('modules/flex-content/flex-content.php') ?>
</main>
<?php get_footer(); ?>