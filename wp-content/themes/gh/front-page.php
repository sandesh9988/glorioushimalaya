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
                <img src="<?php echo get_template_directory_uri(); ?>/uploads/heroS.jpg" alt="Image of a trekking" />
            </figure>
            <figure class="hero__media">
                <img src="<?php echo get_template_directory_uri(); ?>/uploads/heroS.jpg" alt="Image of a trekking" />
            </figure>
            <figure class="hero__media">
                <img src="<?php echo get_template_directory_uri(); ?>/uploads/heroS.jpg" alt="Image of a trekking" />
            </figure>
        </div>



    </section>
    <section class="post">

        <div class="container">

            <h2 class="post__title">Eco-Friendly Trekking in Nepal:<br>Adventures for All Levels and Borders</h2>
            <div class="post__description">
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
                    <a
                        href="https://www.tripadvisor.com/Attraction_Review-g293890-d10844608-Reviews-Glorious_Himalaya_Trekking-Kathmandu_Kathmandu_Valley_Bagmati_Zone_Central_Regio.html">
                        <figure class="post__sticky-media">
                            <img src="<?php echo get_template_directory_uri(); ?>/uploads/sticky.jpg"
                                alt="Image of a trekking" />
                        </figure>
                    </a>
                </div>
            </div>
            <div class="post__review-content">
                <div class="post__review-heading">
                    <h3 class="post__review-title">A beautiful Everest Basecamp Trek</h3>
                    <hr class="post__review-line">


                </div>
                <div class="post__review-comments">
                    <p>I and my girlfriend were looking for a budget-friendly and short EBC trek and we found this
                        12 days Everest base camp trek with Glorious Himalaya.</p>
                    <p> We wanted to book only EBC trek
                        with a guide, porter, flights and accommodations and they organized it accordingly. We are
                        very satisfied with their guide and porter service.</p>
                    <p>Thank you for organizing our 12 days
                        EBC trek within a short period. Thanks to Ganesh who respond to our emails shortly.</p>
                    <p>Did
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

    <!-- dynamic content -->
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
                                <td><strong>$1200</strong>/PP</td>
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
    <section class="fancy">
        <div class="container">
            <div class="fancy__heading">
                <h2 class="fancy__title"><?php echo get_field('travel_styles_title')?></h2>
            </div>

            <div class="fancy__arrow-field fancy__arrow-field--left">
                <svg class="icon icon-LA">
                    <use xlink:href="#icon-LA"></use>
                </svg>
            </div>
            <div class="fancy__arrow-field fancy__arrow-field--right">
                <svg class="icon icon-RA">
                    <use xlink:href="#icon-RA"></use>
                </svg>
            </div>


            <div class="fancy__slider">
                <div class="fancy__slider-list">
                    <a href="#" class="fancy__media-link">
                        <figure class="fancy__media">

                            <img src="<?php echo get_template_directory_uri(); ?>/uploads/aa4.jpg"
                                alt="Image of a trekking" />
                            <div class="fancy__content">
                                <h3 class="fancy__subtitle">Nepal Trekking</h3>
                            </div>

                        </figure>
                    </a>
                </div>
                <div class="fancy__slider-list">
                    <a href="#" class="fancy__media-link">
                        <figure class="fancy__media">
                            <img src="<?php echo get_template_directory_uri(); ?>/uploads/aa3.jpg"
                                alt="Image of a trekking" />
                            <div class="fancy__content">
                                <h3 class="fancy__subtitle">Nepal Cultural Tours</h3>
                            </div>

                        </figure>
                    </a>
                </div>
                <div class="fancy__slider-list">
                    <a href="#" class="fancy__media-link">
                        <figure class="fancy__media">

                            <img src="<?php echo get_template_directory_uri(); ?>/uploads/aa2.jpg"
                                alt="Image of a trekking" />
                            <div class="fancy__content">
                                <h3 class="fancy__subtitle">Nepal Climbing Peaks</h3>
                            </div>

                        </figure>
                    </a>
                </div>
                <div class="fancy__slider-list">
                    <a href="#" class="fancy__media-link">
                        <figure class="fancy__media">

                            <img src="<?php echo get_template_directory_uri(); ?>/uploads/aa1.jpg"
                                alt="Image of a trekking" />
                            <div class="fancy__content">
                                <h3 class="fancy__subtitle">Adventure Activities</h3>
                            </div>

                        </figure>
                    </a>
                </div>
                <div class="fancy__slider-list">
                    <a href="#" class="fancy__media-link">
                        <figure class="fancy__media">
                            <a href="#">
                                <img src="<?php echo get_template_directory_uri(); ?>/uploads/aa3.jpg"
                                    alt="Image of a trekking" />
                                <div class="fancy__content">
                                    <h3 class="fancy__subtitle">Nepal Cultural Tours</h3>
                                </div>
                            </a>
                        </figure>
                    </a>
                </div>
                <div class="fancy__slider-list">
                    <a href="#" class="fancy__media-link">
                        <figure class="fancy__media">
                            <a href="#">
                                <img src="<?php echo get_template_directory_uri(); ?>/uploads/aa2.jpg"
                                    alt="Image of a trekking" />
                                <div class="fancy__content">
                                    <h3 class="fancy__subtitle">Nepal Climbing Peaks</h3>
                                </div>
                            </a>
                        </figure>
                    </a>
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
                    <p>Filter by:</p>
                    <div class="departure__date-box">

                        <select name="year" id="year">
                            <option value="">Year</option>
                            <?php
                     $currentYear = date("Y");
                          for ($i = $currentYear; $i >= $currentYear - 10; $i--) {
                     echo '<option value="'.$i.'">'.$i.'</option>';
                             }
                         ?>
                        </select>
                    </div>
                    <div class="departure__date-box">

                        <select id="month" name="month">
                            <option value="">Month</option>
                            <?php
                               $months = array(
        "01" => "January",
      "02" => "February",
      "03" => "March",
      "04" => "April",
      "05" => "May",
      "06" => "June",
      "07" => "July",
      "08" => "August",
      "09" => "September",
      "10" => "October",
      "11" => "November",
      "12" => "December"
    );
    foreach ($months as $monthNumber => $monthName) {
      echo '<option value="'.$monthNumber.'">'.$monthName.'</option>';
    }
                           ?>
                        </select>
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
                        <div class="departure__sub-row">
                            <tr class="departure__data-row">
                                <td class="departure__list-item">19th September, 2016</td>
                                <td class="departure__list-name">Manaslu & Tsum Valley Trek</td>
                                <td class="departure__list-days">12</td>
                                <td class="departure__list-status">Booked</td>
                                <td class="departure__list-price">$1,440.00</td>
                                <td>
                                    <div class="departure__button"><a href="#">Book Now<svg class="icon icon-rArrow">
                                                <use xlink:href="#icon-rArrow"></use>
                                            </svg></a></div>
                                </td>
                            </tr>
                            <tr class="departure__data-row">
                                <td class="departure__list-item">5th October, 2016</td>
                                <td class="departure__list-name">Jiri-Lukla Everest Three Passes Trek</td>
                                <td class="departure__list-days">16</td>
                                <td class="departure__list-status">Avaliable</td>
                                <td class="departure__list-price">Upon Request</td>
                                <td>
                                    <div class="departure__button"><a href="#">Book Now<svg class="icon icon-rArrow">
                                                <use xlink:href="#icon-rArrow"></use>
                                            </svg></a></div>
                                </td>
                            </tr>
                            <tr class="departure__data-row">
                                <td class="departure__list-item">7th October, 2016</td>
                                <td class="departure__list-name">Langtang triangle trek 17 days</td>
                                <td class="departure__list-days">17</td>
                                <td class="departure__list-status">Avaliable</td>
                                <td class="departure__list-price">$1,440.00</td>
                                <td>
                                    <div class="departure__button"><a href="#">Book Now<svg class="icon icon-rArrow">
                                                <use xlink:href="#icon-rArrow"></use>
                                            </svg></a></div>
                                </td>
                            </tr>
                            <tr class="departure__data-row">
                                <td class="departure__list-item">10th October, 2016</td>
                                <td class="departure__list-name">Everest Base Camp Trek</td>
                                <td class="departure__list-days">13</td>
                                <td class="departure__list-status">Avaliable</td>
                                <td class="departure__list-price">$1,440.00</td>
                                <td>
                                    <div class="departure__button"><a href="#">Book Now<svg class="icon icon-rArrow">
                                                <use xlink:href="#icon-rArrow"></use>
                                            </svg></a></div>
                                </td>
                            </tr>
                            <tr class="departure__data-row">
                                <td class="departure__list-item">27th October, 2016</td>
                                <td class="departure__list-name">Manaslu Trek</td>
                                <td class="departure__list-days">12</td>
                                <td class="departure__list-status">Avaliable</td>
                                <td class="departure__list-price">$1,440.00</td>
                                <td>
                                    <div class="departure__button"><a href="#">Book Now<svg class="icon icon-rArrow">
                                                <use xlink:href="#icon-rArrow"></use>
                                            </svg></a></div>
                                </td>
                            </tr>
                            <tr class="departure__data-row">
                                <td class="departure__list-item">3rd December, 2016</td>
                                <td class="departure__list-name">Annapurna Panorama Trek</td>
                                <td class="departure__list-days">8</td>
                                <td class="departure__list-status">Avaliable</td>
                                <td class="departure__list-price">$1,440.00</td>
                                <td>
                                    <div class="departure__button"><a href="#">Book Now<svg class="icon icon-rArrow">
                                                <use xlink:href="#icon-rArrow"></use>
                                            </svg></a></div>
                                </td>
                            </tr>
                        </div>
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