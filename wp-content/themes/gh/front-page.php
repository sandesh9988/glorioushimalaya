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
                    <button type="search" class="hero__button">Search</button>
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
                <h2 class="post__title">Eco-Friendly Trekking in Nepal:<br>Adventures for All Levels and Borders</h2>
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
                        <figure class="post__profile-media">
                            <img src="<?php echo get_template_directory_uri(); ?>/uploads/profile2.png"
                                alt="Image of a trekking" />
                        </figure>
                        <p><strong>By Monalisa and Jevin<br></strong> United Kingdom</p>
                    </div>
                </div>
            </div>


        </div>
    </section>
    <section class="grid-content">
        <div class="container">

            <h2 class="grid-content__title">Our Best Sellers</h2>
            <div class="grid-content-wrapper">
                <div class="grid-content__row">
                    <figure class="grid-content__media">
                        <img src="<?php echo get_template_directory_uri(); ?>/uploads/s1.jpg"
                            alt="Image of a trekking" />
                        <div class="grid-content__sub-heading">
                            <h3 class="grid-content__subTitle">Annapurna Base Camp Trek</h3>
                        </div>
                        <span class="grid-content__tag">Popular</span>
                    </figure>
                    <div class="grid-content__details">
                        <table class="grid-content__content">
                            <tr class="grid-content__main-row">
                                <th>Trip Days</th>
                                <th>Difficulty</th>
                                <th>Price</th>
                            </tr>
                            <tr class="grid-content__data-row">
                                <td><strong>10 Days</strong></td>
                                <td><strong>Easy</strong></td>
                                <td><strong>$1200</strong>/pp</td>
                            </tr>
                        </table>
                        <div class="grid-content__description">
                            <p>Experience the Costa Rican rainforest, mountains and coast</p>
                        </div>

                        <div class="grid-content__link">
                            <a href="#">View Trip Details</a>
                        </div>
                    </div>

                </div>
                <div class="grid-content__row">
                    <figure class="grid-content__media">
                        <img src="<?php echo get_template_directory_uri(); ?>/uploads/s2.jpg"
                            alt="Image of a trekking" />
                        <div class="grid-content__sub-heading">
                            <h3 class="grid-content__subTitle">Annapurna Base Camp Trek</h3>
                        </div>
                        <span class="grid-content__tag">Popular</span>
                    </figure>
                    <div class="grid-content__details">
                        <table class="grid-content__content">
                            <tr class="grid-content__main-row">
                                <th>Trip Days</th>
                                <th>Difficulty</th>
                                <th>Price</th>
                            </tr>
                            <tr class="grid-content__data-row">
                                <td><strong>10 Days</strong></td>
                                <td><strong>Easy</strong></td>
                                <td><strong>$1200</strong>/pp</td>
                            </tr>
                        </table>
                        <div class="grid-content__description">
                            <p>Experience the Costa Rican rainforest, mountains and coast</p>
                        </div>

                        <div class="grid-content__link">
                            <a href="#">View Trip Details</a>
                        </div>
                    </div>

                </div>
                <div class="grid-content__row">
                    <figure class="grid-content__media">
                        <img src="<?php echo get_template_directory_uri(); ?>/uploads/s3.jpg"
                            alt="Image of a trekking" />
                        <div class="grid-content__sub-heading">
                            <h3 class="grid-content__subTitle">Annapurna Base Camp Trek</h3>
                        </div>
                        <span class="grid-content__tag">Popular</span>
                    </figure>
                    <div class="grid-content__details">
                        <table class="grid-content__content">
                            <tr class="grid-content__main-row">
                                <th>Trip Days</th>
                                <th>Difficulty</th>
                                <th>Price</th>
                            </tr>
                            <tr class="grid-content__data-row">
                                <td><strong>10 Days</strong></td>
                                <td><strong>Easy</strong></td>
                                <td><strong>$1200</strong>/pp</td>
                            </tr>
                        </table>
                        <div class="grid-content__description">
                            <p>Experience the Costa Rican rainforest, mountains and coast</p>
                        </div>

                        <div class="grid-content__link">
                            <a href="#">View Trip Details</a>
                        </div>
                    </div>

                </div>
                <div class="grid-content__row">
                    <figure class="grid-content__media">
                        <img src="<?php echo get_template_directory_uri(); ?>/uploads/s4.jpg"
                            alt="Image of a trekking" />
                        <div class="grid-content__sub-heading">
                            <h3 class="grid-content__subTitle">Annapurna Base Camp Trek</h3>
                        </div>
                        <span class="grid-content__tag">Popular</span>
                    </figure>
                    <div class="grid-content__details">
                        <table class="grid-content__content">
                            <tr class="grid-content__main-row">
                                <th>Trip Days</th>
                                <th>Difficulty</th>
                                <th>Price</th>
                            </tr>
                            <tr class="grid-content__data-row">
                                <td><strong>10 Days</strong></td>
                                <td><strong>Easy</strong></td>
                                <td><strong>$1200</strong>/pp</td>
                            </tr>
                        </table>
                        <div class="grid-content__description">
                            <p>Experience the Costa Rican rainforest, mountains and coast</p>
                        </div>

                        <div class="grid-content__link">
                            <a href="#">View Trip Details</a>
                        </div>
                    </div>

                </div>
                <div class="grid-content__row">
                    <figure class="grid-content__media">
                        <img src="<?php echo get_template_directory_uri(); ?>/uploads/s5.jpg"
                            alt="Image of a trekking" />
                        <div class="grid-content__sub-heading">
                            <h3 class="grid-content__subTitle">Annapurna Base Camp Trek</h3>
                        </div>
                        <span class="grid-content__tag">Popular</span>
                    </figure>
                    <div class="grid-content__details">
                        <table class="grid-content__content">
                            <tr class="grid-content__main-row">
                                <th>Trip Days</th>
                                <th>Difficulty</th>
                                <th>Price</th>
                            </tr>
                            <tr class="grid-content__data-row">
                                <td><strong>10 Days</strong></td>
                                <td><strong>Easy</strong></td>
                                <td><strong>$1200</strong>/pp</td>
                            </tr>
                        </table>
                        <div class="grid-content__description">
                            <p>Experience the Costa Rican rainforest, mountains and coast</p>
                        </div>

                        <div class="grid-content__link">
                            <a href="#">View Trip Details</a>
                        </div>
                    </div>

                </div>
                <div class="grid-content__row">
                    <figure class="grid-content__media">
                        <img src="<?php echo get_template_directory_uri(); ?>/uploads/s6.jpg"
                            alt="Image of a trekking" />
                        <div class="grid-content__sub-heading">
                            <h3 class="grid-content__subTitle">Annapurna Base Camp Trek</h3>
                        </div>
                        <span class="grid-content__tag">Popular</span>
                    </figure>
                    <div class="grid-content__details">
                        <table class="grid-content__content">
                            <tr class="grid-content__main-row">
                                <th>Trip Days</th>
                                <th>Difficulty</th>
                                <th>Price</th>
                            </tr>
                            <tr class="grid-content__data-row">
                                <td><strong>10 Days</strong></td>
                                <td><strong>Easy</strong></td>
                                <td><strong>$1200</strong>/pp</td>
                            </tr>
                        </table>
                        <div class="grid-content__description">
                            <p>Experience the Costa Rican rainforest, mountains and coast</p>
                        </div>

                        <div class="grid-content__link">
                            <a href="#">View Trip Details</a>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>
    <section class="departure">
        <div class="container">
            <div class="blog__heading">
                <h2 class="blog__title">Join Our Fixed Departures</h2>
                <p>Go with the right number of like-minded travellers</p>
            </div>
            <div class="departure__table">
                <div class="departure__date">
                    <label for="date">Filter by:</label>
                    <div class="departure__date-box">
                        <!-- <input type="date" id="year" name="year" placeholder="Year"> -->
                        <p>Year</p>
                        <svg class="icon icon-arrow-copy-2">
                            <use xlink:href="#icon-arrow-copy-2"></use>
                        </svg>
                    </div>
                    <div class="departure__date-box">
                        <p>Jan</p><!-- <input type="date" id="month" name="month" placeholder="Jan"> -->
                        <svg class="icon icon-arrow-copy-2">
                            <use xlink:href="#icon-arrow-copy-2"></use>
                        </svg>
                    </div>
                </div>
                <div class="departure__table-wrapper">
                    <table class="departure__content">
                        <tr class="departure__main-row">
                            <th>Departing</th>
                            <th>Trip Name</th>
                            <th>Days</th>
                            <th>Trip Status</th>
                            <th>Price</th>
                            <th colspan="2"></th>
                        </tr>
                        <tr class="departure__data-row">
                            <td>19th September, 2016</td>
                            <td>Manaslu & Tsum Valley Trek</td>
                            <td>12</td>
                            <td>Booked</td>
                            <td>$1,440.00</td>
                            <td><div class="departure__button"><a href="#">Book Now<svg class="icon icon-rArrow">
                                            <use xlink:href="#icon-rArrow"></use>
                                        </svg></a></div></td>
                        </tr>
                        <tr class="departure__data-row">
                            <td>5th October, 2016</td>
                            <td>Jiri-Lukla Everest Three Passes Trek</td>
                            <td>16</td>
                            <td>Avaliable</td>
                            <td>Upon Request</td>
                            <td><div class="departure__button"><a href="#" >Book Now<svg class="icon icon-rArrow">
                                            <use xlink:href="#icon-rArrow"></use>
                                        </svg></a></div></td>
                        </tr>
                        <tr class="departure__data-row">
                            <td>7th October, 2016</td>
                            <td>Langtang triangle trek 17 days</td>
                            <td>17</td>
                            <td>Avaliable</td>
                            <td>$1,440.00</td>
                            <td><div class="departure__button"><a href="#">Book Now<svg class="icon icon-rArrow">
                                            <use xlink:href="#icon-rArrow"></use>
                                        </svg></a></div></td>
                        </tr>
                        <tr class="departure__data-row">
                            <td>10th October, 2016</td>
                            <td>Everest Base Camp Trek</td>
                            <td>13</td>
                            <td>Avaliable</td>
                            <td>$1,440.00</td>
                            <td><div class="departure__button"><a href="#">Book Now<svg class="icon icon-rArrow">
                                            <use xlink:href="#icon-rArrow"></use>
                                        </svg></a></div></td>
                        </tr>
                        <tr class="departure__data-row">
                            <td>27th October, 2016</td>
                            <td>Manaslu Trek</td>
                            <td>12</td>
                            <td>Avaliable</td>
                            <td>$1,440.00</td>
                            <td><div class="departure__button"><a href="#">Book Now<svg class="icon icon-rArrow">
                                            <use xlink:href="#icon-rArrow"></use>
                                        </svg></a></div></td>
                        </tr>
                        <tr class="departure__data-row">
                            <td>3rd December, 2016</td>
                            <td>Annapurna Panorama Trek</td>
                            <td>8</td>
                            <td>Avaliable</td>
                            <td>$1,440.00</td>
                            <td><div class="departure__button"><a href="#">Book Now<svg class="icon icon-rArrow">
                                            <use xlink:href="#icon-rArrow"></use>
                                        </svg></a></div></td>
                        </tr>
                    </table>
                </div>
                <div class="departure__subHeading">
                    <h3 class="departure__subHeading-title">Choose a Private Trip</h3>
                    <p>If you'd prefer to share this with your own group of friends, we've got good news, it's also
                        available as a Private Adventure!, Our Private Adventure specialists are on hand to give you a
                        quote or talk through some different options. Feel free to give them a call on +977 1 4259 098
                        or Email us at info@golorioushimalaya.com</p>
                </div>
            </div>
        </div>
    </section>
    <section class="blog">
        <div class="container">
            <div class="blog__heading">
                <h2 class="blog__title">Recent from our Blog</h2>
                <p>Places of attraction, travel tips, news and more.</p>
            </div>
            <div class="blog__grid">
                <div class="blog__grid-content">
                    <figure class="grid__media">
                        <img src="<?php echo get_template_directory_uri(); ?>/uploads/h1.jpg"
                            alt="Image of a trekking" />
                    </figure>
                    <h3 class="blog__subtitle">
                        Annapurna Cycling Tour: Complete Ride Encircling the Famous Annapurna Mountains
                    </h3>
                    <p>Cycling in Nepal is a relatively new initiative specifically designed to cater to the needs of
                        the thrill seekers and those with the.</p>

                </div>
                <div class="blog__grid-content">
                    <figure class="grid__media">
                        <img src="<?php echo get_template_directory_uri(); ?>/uploads/h2.jpg"
                            alt="Image of a trekking" />
                    </figure>
                    <h3 class="blog__subtitle">
                        Kailash Tour : Journey to Holy Land of Shiva
                    </h3>
                    <p>The revered Mount Kailash (6638 m) dominates the Tibetan landscape and is a major pilgrimage
                        point for numerous religions; plus its four-sided summit adds a hint of mystery .</p>

                </div>
                <div class="blog__grid-content">
                    <figure class="grid__media">
                        <img src="<?php echo get_template_directory_uri(); ?>/uploads/h4.jpg"
                            alt="Image of a trekking" />
                    </figure>
                    <h3 class="blog__subtitle">
                        Annapurna Cycling Tour: Complete Ride Encircling the Famous Annapurna Mountains
                    </h3>
                    <p>“It is not the mountains that we conquer, but ourselves” said Sir Edmund Hillary, who, along with
                        Tenzing Norgay Sherpa, was one of the first two people to scale Mount Everest.</p>

                </div>
            </div>
        </div>
    </section>
    <?php include 'modules/flex-content/flex-content.php'; ?>
</main>
<?php get_footer(); ?>