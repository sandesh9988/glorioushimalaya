<?php /* Template Name: Trip Details*/
get_header();
the_post();
?>
<main class="page__home">
    <section class="trip-detail">
        <div class="container">
            <div class="trip-detail__heading">
                <h1 class="trip-detail__title">Everest Base Camp Trek</h1>
            </div>
        </div>

    </section>
    <section class="trip-info">
        <div class="container">
            <div class="trip-info__content">
                <div class="trip-info__price">
                    <p>15 Days starting from<br><strong>US $1300</strong></p>
                    <div class="trip-info__link">
                        <a href="#">View dates & prices</a>
                    </div>
                </div>
                <div class="trip-info__rating">
                    <figure class="trip-info__media">
                        <img class="trip-info__image"
                            src="<?php echo get_template_directory_uri(); ?>/uploads/startrip.png"
                            alt="Image of a logo" />
                    </figure>
                    <p>4.5 / 5.0 from 32 Reviews</p>
                </div>
                <div class="trip-info__climate">
                    <dl class="trip-info__list">
                        <div class="trip-info__row">
                            <dt><strong>Grade:</strong></dt>
                            <dd>Moderate</dd>
                        </div>
                        <div class="trip-info__row">
                            <dt><strong>Group Size:</strong></dt>
                            <dd>Min: 1 - Max: 18 Pax</dd>
                        </div>
                        <div class="trip-info__row">
                            <dt><strong>Transport:</strong></dt>
                            <dd>Plane, Car, Jeep</dd>
                        </div>
                        <div class="trip-info__row">
                            <dt><strong>Altitude:</strong></dt>
                            <dd>5,545m/18,193ft</dd>
                        </div>
                        <div class="trip-info__row">
                            <dt><strong>Meals:</strong></dt>
                            <dd>B-14, L-11, D-12</dd>
                        </div>


                    </dl>
                </div>
                <div class="trip-info-verified">
                    <ul>
                        <li><svg class="icon icon-icon-checked">
                                <use xlink:href="#icon-icon-checked"></use>
                            </svg> Best Price Guaranteed</li>
                        <li><svg class="icon icon-icon-checked">
                                <use xlink:href="#icon-icon-checked"></use>
                            </svg> Well Crafted Itinerary</li>
                        <li><svg class="icon icon-icon-checked">
                                <use xlink:href="#icon-icon-checked"></use>
                            </svg> Group Discount Available</li>
                        <li><svg class="icon icon-icon-checked">
                                <use xlink:href="#icon-icon-checked"></use>
                            </svg> Instant Online Booking</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <?php include('modules/flex-content/flex-content.php') ?>
</main>
<?php get_footer();