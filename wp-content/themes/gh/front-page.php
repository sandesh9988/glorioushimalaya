<?php
get_header();
the_post();
?>
<main class="page__home">
    <section class="hero">
        <div class="hero__heading">
            <div class="container">
                <h1 class="hero__title">Experience the Natural Beauty of Nepal</h1>
                <div class="hero__search-button">
                    <input type="search" id="search" name="search" placeholder="Search: Everest Basecamp Trek">
                    <button type="search" class="hero__button">Sign up!</button>
                </div>
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
                <img src="<?php echo get_template_directory_uri(); ?>/uploads/heroSection.jpg"
                    alt="Image of a trekking" />
            </figure>
            <figure class="hero__media">
                <img src="<?php echo get_template_directory_uri(); ?>/uploads/hero.jpg" alt="Image of a trekking" />
            </figure>
            <figure class="hero__media">
                <img src="<?php echo get_template_directory_uri(); ?>/uploads/heroSection.jpg"
                    alt="Image of a trekking" />
            </figure>
        </div>


    </section>
    <section class="post">

        <div class="container">
            <div class="post__description">
                <h2 class="post__title">Eco-Friendly Trekking in Nepal: Adventures for All Levels and Borders</h2>
                <div class="entry-content">
                    <p>We specialize in eco-friendly and down-to-earth adventures, and we are committed to protecting
                        the
                        areas
                        we explore. Our wide range of trekking packages includes options for all levels of fitness, from
                        challenging mountain treks to more leisurely hikes through lush forests and picturesque
                        villages.
                    </p>
                    <p>Our knowledgeable guides are passionate about the outdoors and will help you make the most of
                        your
                        time
                        in Nepal, whether you are seeking an exhilarating challenge or simply looking to relax and enjoy
                        the
                        scenery. We also offer treks beyond Nepal's borders into Tibet and Bhutan, where you can
                        experience
                        different landscapes and cultures. </p>
                </div>

            </div>
            <div class="post__link-content">
                <div class="post__link-wrapper">
                    <p>No matter your age or physical abilities, we believe that everyone can enjoy the unbeatable
                        beauty of Nepal through trekking. Check out our website for more information and to choose the
                        perfect itinerary for you!</p>
                </div>
                <div class="post__link-button">
                    <a href="#">Read more about us </a>
                </div>
            </div>
            <div class="post__stick-wrapper">

                <div class="post__logo-row">
                    <div class="post__fancy-text">
                        Achievement
                    </div>
                    <figure class="post__media post__media--alt">
                        <img src="<?php echo get_template_directory_uri(); ?>/uploads/l1.png"
                            alt="Image of a trekking" />
                    </figure>
                    <figure class="post__media">
                        <img src="<?php echo get_template_directory_uri(); ?>/uploads/l2.png"
                            alt="Image of a trekking" />
                    </figure>
                    <figure class="post__media">
                        <img src="<?php echo get_template_directory_uri(); ?>/uploads/l3.png"
                            alt="Image of a trekking" />
                    </figure>

                </div>
                <div class="post__sticky-content">
                    <figure class="post__sticky-media">
                        <img src="<?php echo get_template_directory_uri(); ?>/uploads/sticky.jpg"
                            alt="Image of a trekking" />
                    </figure>
                </div>
            </div>
            <div class="post__review-content">
                <div class="post__review-title">
                    <p>A beautiful Everest Basecamp Trek</p>
                    <hr class="post__review-line">
                    <figure class="post__review-media">
                        <img src="<?php echo get_template_directory_uri(); ?>/uploads/star.png"
                            alt="Image of a trekking" />
                    </figure>

                </div>
                <div class="post__review-comments">
                    <p>I and my girlfriend were looking for a budget-friendly and short EBC trek and we found this
                        12 days Everest base camp trek with Glorious Himalaya.<br> We wanted to book only EBC trek
                        with a guide, porter, flights and accommodations and they organized it accordingly. We are
                        very satisfied with their guide and porter service.<br> Thank you for organizing our 12 days
                        EBC trek within a short period. Thanks to Ganesh who respond to our emails shortly.<br>Did
                        this trek from 4th to 15th December 2022.</p>
                    <div class="post__profile">
                        <p><strong>By Monalisa and Jevin<br></strong> United Kingdom</p>
                    </div>
                </div>
            </div>


        </div>
    </section>
    <?php include('modules/flex-content/flex-content.php') ?>
</main>
<?php get_footer(); ?>