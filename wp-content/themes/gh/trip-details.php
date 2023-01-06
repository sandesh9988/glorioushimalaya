<?php /* Template Name: trip details*/
get_header();
the_post();
?>
<main class="page__home">
    <?php if ( get_field('image')): ?>
    <section class="trip-detail"
        style="background-image: linear-gradient(0deg, rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('<?php the_field('image'); ?>');, #d9d9d9">
        <div class="container">
            <div class="trip-detail__heading">
                <h1 class="trip-detail__title"><?php  the_field('trip-detail-title');?></h1>
            </div>
        </div>
    </section>
    <?php endif; ?>


    <section class="trip-info">
        <div class="container">
            <div class="trip-info__content">
                <div class="trip-info__price">
                    <p>15 Days starting from<br><strong>US $1300</strong></p>
                    <div class="trip-info__link">
                        <a href="#"><?php  the_field('info-list-link');?>View dates & prices</a>
                    </div>
                </div>
                <div class="trip-info__rating">
                    <figure class="trip-info__media">
                        <img class="trip-info__image"
                            src="<?php echo get_template_directory_uri(); ?>/uploads/startrip.svg"
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
    <section class="breadcrumbs">
        <div class="container">
            <ul class="breadcrumbs__list">
                <li><a href="#" class="breadcrumbs__links">Home</a><svg class="icon icon-breadcump">
                        <use xlink:href="#icon-breadcump"></use>
                    </svg> </li>
                <li><a href="#" class="breadcrumbs__links">Destination</a><svg class="icon icon-breadcump">
                        <use xlink:href="#icon-breadcump"></use>
                    </svg> </li>
                <li><a href="#" class="breadcrumbs__links">Trip</a><svg class="icon icon-breadcump">
                        <use xlink:href="#icon-breadcump"></use>
                    </svg> </li>
                <li><a href="#" class="breadcrumbs__links breadcrumbs__links--alt">Everest Basecamp Trek</a></li>
            </ul>
        </div>
    </section>
    <section class="tab-bar">
        <div class="container">
            <div class="tab-bar__row">
                <ul class="tab-bar__list">
                    <li><a href="#trip__overview" class="tab-bar__link ">Trip Overview</a></li>
                    <li><a href="#itinerary" class="tab-bar__link ">Itinerary</a></li>
                    <li><a href="#include__exclude" class="tab-bar__link">Include/Exclude</a></li>
                    <li><a href="#cost__dates" class="tab-bar__link">Cost & Dates</a></li>
                    <li><a href="#trip__info" class="tab-bar__link">Trip Info</a></li>
                    <li><a href="#reviews" class="tab-bar__link">Reviews</a></li>
                </ul>
            </div>
        </div>
    </section>
    <section class="trip-overview" id="trip__overview">
        <div class="container">
            <div class="trip-overview__wrapper">
                <div class="trip-overview__content entry-content">
                    <h1 class="trip-overview__title">Highlights</h1>
                    <ul>
                        <li>8% of all profits goes to support our <a href="#">philanthropy campaigns</a>.</li>
                        <li>Hike to the Mt. Everest Base Camp (5,364m) and Kala Patthar (5,545m) view point.</p>
                        </li>
                        <li>Lifetime adventurous journey towards the base camp of the tallest peak on earth.</li>
                        <li>Superb views of the world’s highest peaks Mt. Everest (8,848.86m), Makalu (8,463m), Cho Oyu
                            (8,201m), and Lhotse (8,516m).</li>
                        <li>The impressive sight of the other mountains such as Amadablam (6,812m), Pumori (7,161m), and
                            Nuptse (7,861 m).</li>
                        <li>Discover Namche Bazar, which is the largest town in the heart of the Khumbu region.</li>
                        <li>Explore the Sherpa settlements and their living style.</li>
                        <li>Exciting mountain flight experiences.</li>
                        <li>Visit the 17th-century oldest Tengboche monastery.</li>
                        <li>Sightseeing tour at world heritage sites in the Kathmandu Valley.</li>
                    </ul>
                </div>
                <div class="trip-overview__content entry-content">
                    <div class="entry-content">
                        <h1 class="trip-overview__title">Overview</h1>
                        <p>5,364m Everest base camp trek goes through a legendary route where the landscapes & welcoming
                            Sherpa’s touch your soul. So, hike between giants & test your mental strength as you view
                            high
                            mountain lakes & milky rivers. Likewise, you will also see lovely green valley’s loaded with
                            purple blossoms if your trip to <a
                                href="https://www.glorioushimalaya.com/about-nepal/">Nepal</a> is in spring. Life is
                            about
                            moments. Create them, don’t wait for them. There’s never a dull moment on the Everest base
                            camp
                            trek…</p>
                        <p>Everest Base Camp <a href="https://www.glorioushimalaya.com/30-best-treks-in-nepal/">Trek in
                                Nepal</a> is one of the hottest destinations for adventure anywhere on earth. In other
                            words, it’s dreaming big when you book an Everest base camp trek. This is one of those trips
                            that give meaning to your holiday dreams in the sunshine. For example, hiking on the
                            legendary
                            foothills just below the mighty mountains brings you closer to the world’s super peaks. That
                            can
                            only be the king of all peaks – <a
                                href="https://www.glorioushimalaya.com/where-is-mount-everest-located/">Mt.Everest</a>.
                            The
                            breathtaking views of the master peaks are only in the <a
                                href="https://www.glorioushimalaya.com/hiking/everest-region/">Everest Region</a>.</p>
                    </div>
                </div>
                <div class="trip-overview__content entry-content">
                    <div class="entry-content">
                        <h1 class="trip-overview__title">Everest Base Camp Trek is all about self discovery…</h1>
                        <p>We leave behind the comforts of our hotel in Kathmandu & take a fairytale flight to Lukla. At
                            Lukla, we meet up with our friendly trekking team & hit the trails. We hike by the banks of
                            the Dudh Kosi River through welcoming pretty Sherpa villages. After crossing several airy
                            swing bridges, we walk into the bustling capital of <a
                                href="https://www.glorioushimalaya.com/namche-bazaar/">Namche bazaar</a>.</p>

                        <p>Our Everest base camp trek itinerary gives you enough time to acclimatize in this town.
                            Namche sits within the Sagarmatha National Park, & is the capital of the Khumbu. Likewise,
                            this is a natural spot to get familiar with the thin air at higher levels. Notwithstanding
                            the great views in this area, we also visit the famous <a
                                href="https://www.glorioushimalaya.com/tengboche-monastery/">Tengboche monastery</a>.
                            This is the largest monastery in the region. There is so much we get to enjoy here. These
                            mountains teach us a lot about life & ourselves.</p>
                        <p>Famous climbers use the trails we now walk by to summit Everest. Some made it, some did not.
                            However, these same trails offer us so much of unforgettable beauty. The trek is difficult
                            but many cozy teahouses on these trails offer good food. The warm beds shelter us from
                            unkind weather.</p>
                        <p>We walk deep into the Khumbu, into forests of rhododendron, birch trees & pine. On the way,
                            we come across colorful villages where we enjoy a sincere welcome by the <a
                                href="https://www.glorioushimalaya.com/trekking-in-nepal-like-a-local-sherpa/">local
                                Sherpa</a> people. We finally arrive at base camp, the main reason for our trip. The
                            next day we climb up to Kalapatthar at 5,545m for a stunning early morning sunrise. The
                            views from here are simply mind-blowing, leaving us breathless for a while!
                            This is where our trip ends as we head back to Kathmandu via Namche to <a
                                href="https://www.glorioushimalaya.com/lukla-airport/">Lukla</a> for our flight.</p>
                    </div>
                </div>
                <div class="trip-overview__content entry-content">
                    <div class="entry-content">
                        <h1 class="trip-overview__title">Everest Base Camp Trek is all about self discovery…</h1>
                        <p>Why shouldn’t you be so? You don’t need any technical experience for this great adventure.
                            What you do need is some good walking habits of about 3-4 hours a day.</p>

                        <p>Walking up the stairs to the 6th-7th floor of your building everyday would be ideal. You must
                            be physically fit. This trek is fairly hard to difficult. But it can be done by anyone, from
                            the young to the aged. This trek can even be done by greenhorns. You spend 11-12 days on the
                            trail each day. Your max hiking time on the trails is 8 hours to a min of 3 hours uphill &
                            downhill. While trekking you go higher by 400 to 800 meters each day. The highest point you
                            must get to is 5,545m at <a href="https://www.glorioushimalaya.com/kala-patthar/">Kala
                                Patthar</a> to view some of the best scenery on earth.</p>

                        <p>The route is overall gentle on your body with some steep areas & some downhill hikes. You
                            must hike through pretty rough gravel paths. There’s no need to worry about any technical
                            moves, just go easy & hike to your pace. You will love it when you stop for your meals &
                            some rest at the local mountain lodges. This is an adventure in the wild. Difficult roads
                            often lead to beautiful destinations.</p>
                    </div>
                </div>
                <div class="trip-overview__content entry-content">
                    <div class="entry-content">
                        <h1 class="trip-overview__title">Alternatives EBC Trek packages</h1>
                        <p>We have other shorter versions of <a
                                href="https://www.glorioushimalaya.com/trips/12-days-everest-base-camp-trek-itinerary/">12
                                days EBC Trek</a> and <a
                                href="https://www.glorioushimalaya.com/trips/14-days-everest-base-camp-trek-itinerary/">14
                                days Trek to Everest Base Camp</a> packages. Moreover, would you like to trek in a
                            luxurious way? Check out <a
                                href="https://www.glorioushimalaya.com/trips/everest-base-camp-luxury-trek/">Everest
                                Luxury Trek</a>.</p>
                        <p>In the meantime, if you do not have enough time for this trek, you can opt for <a
                                href="https://www.glorioushimalaya.com/other-activities/everest-helicopter-day-tour/">1
                                day Everest helicopter tour</a>.</p>
                    </div>
                </div>
                <div class="trip-overview__content entry-content">
                    <div class="entry-content">
                        <h1 class="trip-overview__title">Why Everest base camp trek with the GHT team?</h1>
                        <p>Glorious Himalaya is an authentic tour company based in Kathmandu, Nepal. We are a team of
                            expert mountain leaders having more than a decade of experience in adventure tourism. Below
                            are some reasons to choose us.</p>
                        <ol>
                            <li>Over the 10 years, we are operating this venture for thousands of thrill seekers</li>
                            <li>We give 8% of our profit to the Philanthropy campaign to support the needy locals.</li>
                            <li>Owned by local experts.</li>
                            <li>Deliver top-notch travel service to the customers.</li>
                            <li>We operate tours by following the sustainable eco-tourism guidelines.</li>
                            <li>Authentic local guides and porters having years of mountain experience.</li>
                            <li>Provides hygienic foods and the best local lodges for your comfort stays in the mountain
                                region.</li>
                        </ol>
                        <p><strong>Get other essential pieces of information about the Everest Base Camp Trek.</strong>
                        </p>
                        <ul>
                            <li><a href="https://www.glorioushimalaya.com/what-to-pack-for-everest-base-camp-trek/">What
                                    to pack for Everest Base Camp Trek?</a></li>
                            <li><a href="https://www.glorioushimalaya.com/toilet-hot-shower-accommodations-on-everest/">Toilets,
                                    Hot Shower and Accommodations on EBC Trek
                                </a></li>
                            <li><a
                                    href="https://www.glorioushimalaya.com/wifi-internet-charging-facilities-on-everest-base-camp-trek/">Internet
                                    & Charging Facilities on Everest Base Camp Trek</a></li>
                            <li><a href="https://www.glorioushimalaya.com/best-time-for-everest-base-camp-trek/">Best
                                    time for Everest Base Camp Trek.</a></li>
                            <li><a href="https://www.glorioushimalaya.com/everest-base-camp-trek-training-program/">Everest
                                    Base Camp Trek Training Program.</a></li>
                            <li><a href="https://www.glorioushimalaya.com/everest-base-camp-trek-difficulty/">How
                                    difficult is the EBC Trek?</a></li>
                            <li><a href="https://www.glorioushimalaya.com/everest-base-camp-weather/">Everest Base Camp
                                    Weather.</a></li>
                            <li><a href="https://www.glorioushimalaya.com/everest-base-camp-trek-routes/">Everest Base
                                    Camp Trek Routes.</a></li>
                            <li><a href="https://www.glorioushimalaya.com/10-reasons-to-do-everest-base-camp-trek/">Top
                                    10 Reasons to do Everest Base Camp Trek</a></li>
                            <li><a href="https://www.glorioushimalaya.com/lukla-airport/">Lukla Airport</a></li>
                            <li><a href="https://www.glorioushimalaya.com/kala-patthar/">Kala Patthar | Best Mount
                                    Everest View Point</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="trip-overview__map">
                <div class="trip-overview__map-wrapper">
                    <h2 class="trip-overview__map-title">Route Map</h2>
                    <a href="<?php echo get_template_directory_uri(); ?>/uploads/map.jpg">
                        <figure class="trip-overview__media">
                            <img src="<?php echo get_template_directory_uri(); ?>/uploads/map.jpg"
                                alt="Image of a trekking" />
                        </figure>
                    </a>
                </div>
                <a href="#">
                    <div class="trip-overview__link">
                        <p><strong>Any Questions?</strong><br>Please feel free to ask</p>
                    </div>
                </a>
            </div>

            <div class="trip-overview__mediaList">
                <ul class="trip-overview__lists">
                    <li><a href="#" target="_blank"><svg class="icon icon-icons8-twitter">
                                <use xlink:href="#icon-icons8-twitter"></use>
                            </svg></a></li>
                    <li><a href="#" target="_blank"><svg class="icon icon-icons8-sms">
                                <use xlink:href="#icon-icons8-sms"></use>
                            </svg></a></li>
                    <li><a href="#" target="_blank"><svg class="icon icon-icons8-whatsapp">
                                <use xlink:href="#icon-icons8-whatsapp"></use>
                            </svg></a></li>
                    <li><a href="#" target="_blank"><svg class="icon icon-icons8-instagram_new">
                                <use xlink:href="#icon-icons8-instagram_new"></use>
                            </svg></a></li>
                    <li><a href="#" target="_blank"><svg class="icon icon-icons8-facebook">
                                <use xlink:href="#icon-icons8-facebook"></use>
                            </svg></a></li>
                    <li><a href="#" target="_blank"><svg class="icon icon-icons8-facebook_messenger">
                                <use xlink:href="#icon-icons8-facebook_messenger"></use>
                            </svg></a></li>

                </ul>
            </div>

        </div>
    </section>
    <section class="accordion" id="itinerary">
        <div class="container">
            <div class="faq__button">
                <button id="expandCollapse">Expand All</button>

            </div>
            <div class="accordion__heading-wrapper">
                <div class="accordion__heading ">
                    <div class="accordion__fancy-text">

                        <span><strong>01</strong></span>
                        <span>DAY</span>
                    </div>
                    <h2 class="accordion__title">Arrival in Kathmandu and transfer to the hotel (1,400m)</h2>
                </div>
                <div class="accordion__content">
                    <div class="accordion__content-left">
                        <figure class="accordion__media">
                            <img src="<?php echo get_template_directory_uri(); ?>/uploads/ii1.jpg"
                                alt="Image of a trekking" />

                        </figure>
                        <div class="accordion__info">

                            <div class="accordion__column">
                                <div class="accordion__row">
                                    <p><strong>Destination:</strong></p>
                                    <p><strong>Meals Included</strong></p>
                                </div>
                                <div class="accordion__row">
                                    <p>Kathmandu</p>
                                    <p>No meal</p>

                                </div>
                            </div>
                            <div class="accordion__column">
                                <div class="accordion__row">
                                    <p><strong>Accomodations:</strong></p>
                                    <p><strong>Altitude:</strong></p>
                                </div>
                                <div class="accordion__row">
                                    <p>Luxury Hotel</p>
                                    <p>1400m</p>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="accordion__content-right">
                        <p>Welcome to Kathmandu, Nepal</p><br>
                        <p>One of our office representatives will be waiting for you at the airport exit terminal with a
                            Glorious Himalaya placard. Upon arrival at the Kathmandu airport, you will be warmly greeted
                            in
                            a traditional way with a fresh garland. And then transferred to the respective hotel for
                            your
                            pleasant stay.</p><br>
                        <p>Check in at the hotel. Take a rest for a while in your hotel’s room after a long and tiring
                            flight. The capital city- Kathmandu is a vast museum of ancient art, cultures, and sacred
                            temples. Indulge in the beauties of Kathmandu valley and roam around the Thamel-tourist hub.
                        </p><br>
                        <p>In the evening, your trip leader will come to the hotel and give a briefing about EBC Trek.
                            He
                            also assists you to purchase any missing or needy trekking gear (equipment) nearby your
                            hotel
                            from the clothing stores.</p>

                    </div>
                </div>


            </div>
            <div class="accordion__heading-wrapper accordion__heading-wrapper--alt__color">
                <div class="accordion__heading">
                    <div class="accordion__fancy-text">

                        <span><strong>02</strong></span>
                        <span>DAY</span>
                    </div>
                    <h2 class="accordion__title">Sightseeing of the UNESCO Heritage sites of Kathmandu</h2>
                </div>
                <div class="accordion__content">
                    <div class="accordion__content-wrapper">
                        <div class="accordion__content-left accordion__content-left--row">

                            <figure class="accordion__media">
                                <img src="<?php echo get_template_directory_uri(); ?>/uploads/ii2.jpg"
                                    alt="Image of a trekking" />
                               
                            </figure>
                            <div class="accordion__content-right accordion__content-right">
                                <p>Today is the day to explore the cultural, religious, and historical sites of
                                    Kathmandu
                                    valley. Out of the seven, you will visit four UNESCO world heritage sites. They are
                                    Pashupatinath temple, Swyambhunath (also known as the monkey temple), Boudhanath
                                    Stupa,
                                    and
                                    Kathmandu Durbar Square.</p><br>

                                <p>Kathmandu is the heart of Nepal for its ancient history and culture. It is a
                                    well-known
                                    destination for both international and domestic tourists. The city is a marvelous
                                    amalgamation of Hinduism, Buddhism, and Western cultural influences. It has a rich
                                    historical, cultural, and religious legacy. This entire legacy is reflected in many
                                    temples,
                                    monuments, and artifacts that it contains.</p><br>

                                <p>Have your hot breakfast at the hotel. You will be taken on a full-day guided
                                    sightseeing
                                    tour
                                    of Kathmandu valley.
                                </p>
                            </div>
                        </div>
                        <div class="accordion__description">
                            <p>Your city tour guide will pick you up from the hotel at 9’o clock in the morning. He has
                                core information about all the related heritage sites that you are going to
                                visit.<br>You will begin your tour from Swyambhunath stupa and Kathmandu Durbar Square.
                                Thereafter, discover the most famous and revered Hindu shrine ‘Pashupatinath temple.
                                And the largest Buddhist stupa in south Asia- the Boudhanath stupa, contains both
                                Buddhist and Hindu shrines. It stands as testimony to the religious harmony that
                                exists in the country.</p>

                            <p>Kathmandu durbar square is located at the heart of the bustling city. It is one of
                                three old Durbar Squares (royal palace) inside the valley. It is also known as the
                                Basantapur or Hanuman Dhoka Durbar Square. The Royal Palace is full of temples and
                                ancient buildings that are dedicated to Hindu gods. Hence, it is a prime attraction
                                for first-time visitors with its intricate wood carvings and rich history.</p>
                            <p>Pashupatinath Temple is one of the sacred Hindu temples of Nepal dedicated to an
                                incarnation of the Hindu god Shiva. The holiest temple of Hindus is situated on both
                                banks of the Bagmati river on the eastern outskirts of Kathmandu. It is also known as
                                the “temple of living beings” that stands as a symbol of faith, religion, culture, and
                                tradition. The shrine is famous for its awe-inspiring and notable pagoda architecture.
                                The main temple of Pashupatinath is a building with a bunk roof and a gold spire. Every
                                year, this holy place attracts thousands of elderly followers of Hinduism to pay respect
                                and seek blessings from Lord Shiva. It is a temple with a special atmosphere of death.
                                Death is present in almost every ritual and every corner of it.</p>
                            <p>Boudhanath Stupa is also known as “Boudhanath Khasti Chaitya” and “Khasa Chaitya ”.
                                Located about 11km from the center and northeastern boundaries of Kathmandu, Nepal. The
                                Stupa is a semicircle-shaped structure. It is built by a Tibetan King around 600 AD to
                                reflect the cosmological beliefs of Buddhism. Towering over the surrounding town is a
                                giant Mandala of peace and beauty.</p>
                            <p>Swayambhunath Stupa or Chaitya is also known as a “Monkey Temple”. The stupa has stood as
                                a symbol of belief and harmony for decades, with the Hindu temple and goddess interwoven
                                into Buddhist sites. It represents the Buddha’s mind. And it offers peace, freedom, and
                                joy to the whole world and ultimately helps us to obtain enlightenment. Swayambhunath is
                                located on the highest point of a twin-peaked hill rising in the Kathmandu Valley.
                                Climbing up the hill’s eastern side’s long row of steps and ascending the final section
                                of stairs. You can overlook the panoramic view of the Kathmandu valley from the hilltop.

                            </p>
                            <p>After a full-day sightseeing tour, you will be transferred to the hotel. An orientation
                                session for the trek, which commences the following day will be organized in the
                                evening. If necessary, you can buy the remaining trekking equipment around Thamel.</p>
                        </div>
                        <div class="accordion__content-left">
                            <div class="accordion__info">

                                <div class="accordion__column">
                                    <div class="accordion__row">
                                        <p><strong>Destination:</strong></p>
                                        <p><strong>Meals Included</strong></p>
                                    </div>
                                    <div class="accordion__row">
                                        <p>Kathmandu</p>
                                        <p>No meal</p>

                                    </div>
                                </div>
                                <div class="accordion__column">
                                    <div class="accordion__row">
                                        <p><strong>Accomodations:</strong></p>
                                        <p><strong>Altitude:</strong></p>
                                    </div>
                                    <div class="accordion__row">
                                        <p>Luxury Hotel</p>
                                        <p>1400m</p>
                                    </div>
                                </div>

                            </div>
                        </div>


                    </div>

                </div>

            </div>



            <div class="accordion__heading-wrapper">
                <div class="accordion__heading">
                    <div class="accordion__fancy-text">

                        <span><strong>03</strong></span>
                        <span>DAY</span>
                    </div>
                    <h2 class="accordion__title">Flight to Lukla (2,846) and trek to Phakding (2,610m) - 3/4 hrs walk
                    </h2>
                </div>
                <div class="accordion__content">
                    <div class="accordion__content-wrapper">
                        <div class="accordion__content-left accordion__content-left--row">

                            <figure class="accordion__media">
                                <img src="<?php echo get_template_directory_uri(); ?>/uploads/ii3.jpeg"
                                    alt="Image of a trekking" />
                               
                            </figure>
                            <div class="accordion__content-right accordion__content-right">
                                <p>Today is the most exciting day as you are going to begin your real adventure journey
                                    onwards.</p><br>

                                <p>Mostly, the weather in the mountain regions is pleasant in the morning. Thus, your
                                    trekking guide will pick you up from the hotel early in the morning as the mountain
                                    flights are operating for the morning to ensure that you will be able to land at
                                    Lukla.</p><br>


                                <p>A 35-minute thrilling scenic flight to Lukla and a landing on a steep mountain runway
                                    bring us to the start of our trek at the village of Lukla [2,846m]. If weather
                                    permits during the flight, you will have breathtaking views of the snow-capped
                                    Himalayas from the windows of your twin-otter (small plane).
                                </p>



                            </div>
                        </div>
                        <div class="accordion__description">
                            <div class="accordion__content-left accordion__content-left--row">

                                <figure class="accordion__media">
                                    <img src="<?php echo get_template_directory_uri(); ?>/uploads/ii4.jpeg"
                                        alt="Image of a trekking" />
                                    
                                </figure>
                                <div class="accordion__content-right accordion__content-right">
                                    <p>After landing at the small Lukla airport, take a short tea break and meet our
                                        porters (if
                                        porters include in your package). Then, commence your trek with a gradual walk
                                        through
                                        the beautiful alpine forest along the Dudh Koshi River with the distant views of
                                        Mount
                                        Khumbila from Cheplung village. Along the way, you will also cross a suspension
                                        bridge
                                        that will add some thrill to your journey. This is your first day in the
                                        mountain
                                        region, stay overnight at a local tea house in Phakding at an altitude of
                                        2,610m. Have
                                        enough rest as you have to walk a long day tomorrow.
                                        <br>After landing at the small Lukla airport, take a short tea break and meet
                                        our
                                        porters (if
                                        porters include in your package). Then, commence your trek with a gradual walk
                                        through
                                        the beautiful alpine forest along the Dudh Koshi River with the distant views of
                                        Mount
                                        Khumbila from Cheplung village. Along the way, you will also cross a suspension
                                        bridge
                                        that will add some thrill to your journey. This is your first day in the
                                        mountain
                                        region, stay overnight at a local tea house in Phakding at an altitude of
                                        2,610m. Have
                                        enough rest as you have to walk a long day tomorrow.
                                    </p>



                                </div>
                            </div>




                        </div>

                        <div class="accordion__content-left">
                            <div class="accordion__info">

                                <div class="accordion__column">
                                    <div class="accordion__row">
                                        <p><strong>Destination:</strong></p>
                                        <p><strong>Meals Included</strong></p>
                                    </div>
                                    <div class="accordion__row">
                                        <p>Kathmandu</p>
                                        <p>Lunch, Dinner</p>

                                    </div>
                                </div>
                                <div class="accordion__column">
                                    <div class="accordion__row">
                                        <p><strong>Accomodations:</strong></p>
                                        <p><strong>Altitude:</strong></p>
                                    </div>
                                    <div class="accordion__row">
                                        <p>Luxury Hotel</p>
                                        <p>1400m</p>
                                    </div>
                                </div>

                            </div>
                        </div>


                    </div>

                </div>

            </div>
            <div class="accordion__heading-wrapper accordion__heading-wrapper--alt__color">
                <div class="accordion__heading">
                    <div class="accordion__fancy-text">

                        <span><strong>04</strong></span>
                        <span>DAY</span>
                    </div>
                    <h2 class="accordion__title">Trek to Namche Bazaar (3,440m) - 6 hrs walk</h2>
                </div>
                <div class="accordion__content">
                    <div class="accordion__content-wrapper">
                        <div class="accordion__content-left accordion__content-left--row">

                            <figure class="accordion__media">
                                <img src="<?php echo get_template_directory_uri(); ?>/uploads/ii5.jpeg"
                                    alt="Image of a trekking" />
                                
                            </figure>
                            <div class="accordion__content-right accordion__content-right">
                                <p>After a good breakfast at Phakding, we set out for the mountain junction town of
                                    Namche; we cross and re-cross the river on high airy suspension bridges. Beyond
                                    Monjo is the entrance to the Sagarmatha National Park which was set up to protect
                                    and preserve the fragile mountain environment.</p><br>


                                <p>We then take a steep hike to Namche Bazar. If the weather is clear, we get the first
                                    glimpse of Mt Everest. Namche is the main trading village in the Khumbu and has a
                                    busy Saturday market – a meeting place for the Hindus and Buddhists traders from the
                                    lowlands and the Tibetan yak caravans that have crossed the glaciated Nangpa La.
                                    Namche is the gateway to the Khumbu. This is where we crash out for the night.
                                    monuments, and artifacts that it contains.</p>


                            </div>
                        </div>

                        <div class="accordion__content-left">
                            <div class="accordion__info">

                                <div class="accordion__column">
                                    <div class="accordion__row">
                                        <p><strong>Destination:</strong></p>
                                        <p><strong>Meals Included</strong></p>
                                    </div>
                                    <div class="accordion__row">
                                        <p>Kathmandu</p>
                                        <p>No meal</p>

                                    </div>
                                </div>
                                <div class="accordion__column">
                                    <div class="accordion__row">
                                        <p><strong>Accomodations:</strong></p>
                                        <p><strong>Altitude:</strong></p>
                                    </div>
                                    <div class="accordion__row">
                                        <p>Luxury Hotel</p>
                                        <p>1400m</p>
                                    </div>
                                </div>

                            </div>
                        </div>


                    </div>

                </div>

            </div>
            <div class="accordion__heading-wrapper">
                <div class="accordion__heading">
                    <div class="accordion__fancy-text">

                        <span><strong>05</strong></span>
                        <span>DAY</span>
                    </div>
                    <h2 class="accordion__title">Acclimatization in Namche Bazaar (3,440m)</h2>
                </div>
                <div class="accordion__content">
                    <div class="accordion__content-wrapper">
                        <div class="accordion__content-left accordion__content-left--row">

                            <figure class="accordion__media">
                                <img src="<?php echo get_template_directory_uri(); ?>/uploads/ii6.jpeg"
                                    alt="Image of a trekking" />
                               
                            </figure>
                            <div class="accordion__content-right accordion__content-right">
                                <p>Namche is tucked away between two ridges amidst the giant peaks of the Khumbu and has
                                    an abundance of lodges, tea shops, and souvenir shops. It is an ideal place to spend
                                    a day, acclimatizing to the new altitude before heading off towards Tengboche.</p>
                                <br>
                                <p>To acclimatize, you visit Khunde Hospital set up by Sir Edmund Hillary, or take a
                                    one-hour walk up to the Everest View Hotel above Namche for the sunset view of Ama
                                    Dablam, Nuptse, Lhotse, and Everest. We then go to Khumjung where we visit a school
                                    established by Hillary.</p><br>
                                <p>We begin our hike after enjoying lunch; bypassing the route of Khimde. There are also
                                    good views from the National Park Centre and Museum just above the town. After going
                                    through our acclimatization drills, we head down to our lodge for some beers & good
                                    sleep.</p>



                            </div>
                        </div>

                        <div class="accordion__content-left">
                            <div class="accordion__info">

                                <div class="accordion__column">
                                    <div class="accordion__row">
                                        <p><strong>Destination:</strong></p>
                                        <p><strong>Meals Included</strong></p>
                                    </div>
                                    <div class="accordion__row">
                                        <p>Kathmandu</p>
                                        <p>No meal</p>

                                    </div>
                                </div>
                                <div class="accordion__column">
                                    <div class="accordion__row">
                                        <p><strong>Accomodations:</strong></p>
                                        <p><strong>Altitude:</strong></p>
                                    </div>
                                    <div class="accordion__row">
                                        <p>Luxury Hotel</p>
                                        <p>1400m</p>
                                    </div>
                                </div>

                            </div>
                        </div>


                    </div>

                </div>

            </div>
            <div class="accordion__heading-wrapper accordion__heading-wrapper--alt__color">
                <div class="accordion__heading">
                    <div class="accordion__fancy-text">

                        <span><strong>06</strong></span>
                        <span>DAY</span>
                    </div>
                    <h2 class="accordion__title">Trek to Tengboche (3,860m) - 5 hrs walk</h2>
                </div>
                <div class="accordion__content">
                    <div class="accordion__content-wrapper">
                        <div class="accordion__content-left accordion__content-left--row">

                            <figure class="accordion__media">
                                <img src="<?php echo get_template_directory_uri(); ?>/uploads/ii7.jpeg"
                                    alt="Image of a trekking" />
                                
                            </figure>
                            <div class="accordion__content-right accordion__content-right">
                                <p>After breakfast in Namche, we start our trek towards Tengboche enjoying the superb
                                    view of Mt. Everest, Nuptse, Lhotse, Ama Dablam and close up view of Thamserku.</p>
                                <br>


                                <p>Our trek follows on the gradual trail with few ups and downs overlooking a
                                    magnificent view of the great Himalaya. Along the way, we can spot wild lives like
                                    pheasant, musk deer, or a herd of Himalayan Thar. The trail goes gradually down up
                                    to Kyangjuma. The path eventually reaches Sanasa which is the major trail junction
                                    to Gokyo valley and Everest Base Camp.

                                </p><br>
                                <p>The track then follows through the pine forests and after we cross the prayer flags
                                    festooned bridge over Dudh Kosi River, we reach Phunki Tenga, a small settlement
                                    with a
                                    couple of teahouses and a small army post amidst the alpine woods.


                                </p>


                            </div>
                        </div>
                        <div class="accordion__description">
                            <p>After having a
                                relaxed lunch at Phunki Tenga we then have a little tough climb steep up through the
                                pine forests while before we reach Tengboche.Tengboche is a great place for close up
                                views of Ama-Dablam, Nuptse, and Everest and
                                it has the biggest Buddhist Monastery all over in the Khumbu region. Overnight stay at
                                the lodge in Tengboche.
                            </p>


                        </div>
                        <div class="accordion__content-left">
                            <div class="accordion__info">

                                <div class="accordion__column">
                                    <div class="accordion__row">
                                        <p><strong>Destination:</strong></p>
                                        <p><strong>Meals Included</strong></p>
                                    </div>
                                    <div class="accordion__row">
                                        <p>Kathmandu</p>
                                        <p>No meal</p>

                                    </div>
                                </div>
                                <div class="accordion__column">
                                    <div class="accordion__row">
                                        <p><strong>Accomodations:</strong></p>
                                        <p><strong>Altitude:</strong></p>
                                    </div>
                                    <div class="accordion__row">
                                        <p>Luxury Hotel</p>
                                        <p>1400m</p>
                                    </div>
                                </div>

                            </div>
                        </div>


                    </div>

                </div>

            </div>

            <div class="accordion__heading-wrapper ">
                <div class="accordion__heading">
                    <div class="accordion__fancy-text">

                        <span><strong>07</strong></span>
                        <span>DAY</span>
                    </div>
                    <h2 class="accordion__title">Trek to Dingboche (4,410m) - 5 hrs walk</h2>
                </div>
                <div class="accordion__content">
                    <div class="accordion__content-wrapper">
                        <div class="accordion__content-left accordion__content-left--row">

                            <figure class="accordion__media">
                                <img src="<?php echo get_template_directory_uri(); ?>/uploads/ii8.jpeg"
                                    alt="Image of a trekking" />
                               
                            </figure>
                            <div class="accordion__content-right accordion__content-right">
                                <p>Before leaving Tengboche, don’t miss capturing the stunning sunrise view over Ama
                                    Dablam. This will be one of the points of interest you will cherish for a lifetime.
                                </p>
                                <br>
                                <p>After a hot breakfast, we will be following the route to Dingboche. Dingboche is one
                                    of the high-altitude Sherpa’s settlements in the Everest region. We descend downhill
                                    through a forest, cross the Imja Khola and climb steadily to the village of
                                    Pangboche. This place is one of the best points to capture the striking views of Mt.
                                    Ama Dablam 6,812 meters (22,349 ft).

                                </p><br>
                                <p>The trail further leads along the glacial river until we arrive at today’s
                                    destination, Dingboche. En route, we will be passing through various small villages,
                                    prayer flags, mani walls, Chorterns, and prayer wheels. </p>


                            </div>
                        </div>
                        <div class="accordion__description">
                            <p>Dingboche is situated at an altitude of 4,410 meters, where trekkers begin feeling the
                                detrimental outcomes of excessive altitude. Drinking plenty of hot fluids will keep your
                                body hydrated. Hence, we suggest you drink water, tea, coffee, and soups adequately.
                                Additionally, walk easily, ascent slowly, and take a rest. In addition, hold your
                                mindset positive and follow your leader’s advice. We bunk out for the night at
                                Dingboche.
                            </p>


                        </div>
                        <div class="accordion__content-left">
                            <div class="accordion__info">

                                <div class="accordion__column">
                                    <div class="accordion__row">
                                        <p><strong>Destination:</strong></p>
                                        <p><strong>Meals Included</strong></p>
                                    </div>
                                    <div class="accordion__row">
                                        <p>Kathmandu</p>
                                        <p>No meal</p>

                                    </div>
                                </div>
                                <div class="accordion__column">
                                    <div class="accordion__row">
                                        <p><strong>Accomodations:</strong></p>
                                        <p><strong>Altitude:</strong></p>
                                    </div>
                                    <div class="accordion__row">
                                        <p>Luxury Hotel</p>
                                        <p>1400m</p>
                                    </div>
                                </div>

                            </div>
                        </div>


                    </div>

                </div>

            </div>
            <div class="accordion__heading-wrapper accordion__heading-wrapper--alt__color">
                <div class="accordion__heading">
                    <div class="accordion__fancy-text">

                        <span><strong>08</strong></span>
                        <span>DAY</span>
                    </div>
                    <h2 class="accordion__title">A day to rest and chill out (4,410m)</h2>
                </div>
                <div class="accordion__content">
                    <div class="accordion__content-wrapper">
                        <div class="accordion__content-left accordion__content-left--row">

                            <figure class="accordion__media">
                                <img src="<?php echo get_template_directory_uri(); ?>/uploads/ii9.jpeg"
                                    alt="Image of a trekking" />
                              
                            </figure>
                            <div class="accordion__content-right accordion__content-right">
                                <p>This is a day to rest, acclimatize and give our weary bones a breather. However, we
                                    don’t remain idle; we also get to wander up the valley to look at a lake, the Tshola
                                    Tsho, and the perpendicular walls of Cholatse and Tawache.</p>
                                <br>
                                <p>We can climb up onto the ridge overlooking Dingboche for the view of the Imja Valley
                                    and the incredible south face of Mt. Lhotse. The views here steal your breath away.
                                    We bunk out in the village of Dingboche for the night stay.
                                </p>


                            </div>
                        </div>

                        <div class="accordion__content-left">
                            <div class="accordion__info">

                                <div class="accordion__column">
                                    <div class="accordion__row">
                                        <p><strong>Destination:</strong></p>
                                        <p><strong>Meals Included</strong></p>
                                    </div>
                                    <div class="accordion__row">
                                        <p>Kathmandu</p>
                                        <p>No meal</p>

                                    </div>
                                </div>
                                <div class="accordion__column">
                                    <div class="accordion__row">
                                        <p><strong>Accomodations:</strong></p>
                                        <p><strong>Altitude:</strong></p>
                                    </div>
                                    <div class="accordion__row">
                                        <p>Luxury Hotel</p>
                                        <p>1400m</p>
                                    </div>
                                </div>

                            </div>
                        </div>


                    </div>

                </div>

            </div>
            <div class="accordion__heading-wrapper">
                <div class="accordion__heading">
                    <div class="accordion__fancy-text">

                        <span><strong>09</strong></span>
                        <span>DAY</span>
                    </div>
                    <h2 class="accordion__title">Trek to Lobuche (4,940m) - 5 hrs walk</h2>
                </div>
                <div class="accordion__content">
                    <div class="accordion__content-wrapper">
                        <div class="accordion__content-left accordion__content-left--row">

                            <figure class="accordion__media">
                                <img src="<?php echo get_template_directory_uri(); ?>/uploads/ii10.jpeg"
                                    alt="Image of a trekking" />
                                
                            </figure>
                            <div class="accordion__content-right accordion__content-right">
                                <p>We continue up the wide valley beneath the impressive peaks of Cholatse and Tawache
                                    on the left. We then turn right and take a steep climb towards the foot of the
                                    Khumbu Glacier. The tea house at Duglha is a good spot to have lunch.</p>
                                <br>
                                <p>The trail zigzags up through the boulders of the glacier’s terminal moraine. At the
                                    top of this climb, there are many stone cairns, built as memorials to the many
                                    Sherpas who have died while climbing Mt Everest. The path then climbs gently along
                                    the glacier, to eventually reach the cluster of houses at Lobuche.
                                </p>


                            </div>
                        </div>

                        <div class="accordion__content-left">
                            <div class="accordion__info">

                                <div class="accordion__column">
                                    <div class="accordion__row">
                                        <p><strong>Destination:</strong></p>
                                        <p><strong>Meals Included</strong></p>
                                    </div>
                                    <div class="accordion__row">
                                        <p>Kathmandu</p>
                                        <p>No meal</p>

                                    </div>
                                </div>
                                <div class="accordion__column">
                                    <div class="accordion__row">
                                        <p><strong>Accomodations:</strong></p>
                                        <p><strong>Altitude:</strong></p>
                                    </div>
                                    <div class="accordion__row">
                                        <p>Luxury Hotel</p>
                                        <p>1400m</p>
                                    </div>
                                </div>

                            </div>
                        </div>


                    </div>

                </div>

            </div>
            <div class="accordion__heading-wrapper accordion__heading-wrapper--alt__color">
                <div class="accordion__heading">
                    <div class="accordion__fancy-text">

                        <span><strong>10</strong></span>
                        <span>DAY</span>
                    </div>
                    <h2 class="accordion__title">Trek to Everest Base Camp (5,364m) & back to Gorakshep (5,164m) - 8 hrs
                        walk</h2>
                </div>
                <div class="accordion__content">
                    <div class="accordion__content-wrapper">
                        <div class="accordion__content-left accordion__content-left--row">

                            <figure class="accordion__media">
                                <img src="<?php echo get_template_directory_uri(); ?>/uploads/ii11.jpeg"
                                    alt="Image of a trekking" />
                                
                            </figure>
                            <div class="accordion__content-right accordion__content-right">
                                <p>Today it’s a long and gritty day. After a hot breakfast at our lodge, we climb
                                    through meadows and moraine stones steps to reach Gorakshep, by either climbing to
                                    Kala Patthar or continue heading to Everest base camp.

                                </p><br>

                                <p>We suggest that you make a beeline for the Everest base camp. By the way, from
                                    Everest base camp we do not see Mount Everest. However, from Kala Patthar, we get to
                                    see the entire south face of Mt. Everest and well-known peaks nearby; this also
                                    includes great sights of the skyline of the Tibet plateau. Overnight at the height
                                    of (5,164m) at a lodge.</p>

                            </div>
                        </div>
                        <div class="accordion__description">
                            <div class="accordion__content-left accordion__content-left--row">

                                <figure class="accordion__media">
                                    <img src="<?php echo get_template_directory_uri(); ?>/uploads/ii12.jpg"
                                        alt="Image of a trekking" />
                                   
                                </figure>
                            </div>




                        </div>

                        <div class="accordion__content-left">
                            <div class="accordion__info">

                                <div class="accordion__column">
                                    <div class="accordion__row">
                                        <p><strong>Destination:</strong></p>
                                        <p><strong>Meals Included</strong></p>
                                    </div>
                                    <div class="accordion__row">
                                        <p>Kathmandu</p>
                                        <p>No meal</p>

                                    </div>
                                </div>
                                <div class="accordion__column">
                                    <div class="accordion__row">
                                        <p><strong>Accomodations:</strong></p>
                                        <p><strong>Altitude:</strong></p>
                                    </div>
                                    <div class="accordion__row">
                                        <p>Luxury Hotel</p>
                                        <p>1400m</p>
                                    </div>
                                </div>

                            </div>
                        </div>


                    </div>

                </div>

            </div>
            <div class="accordion__heading-wrapper">
                <div class="accordion__heading">
                    <div class="accordion__fancy-text">

                        <span><strong>11</strong></span>
                        <span>DAY</span>
                    </div>
                    <h2 class="accordion__title">Hike to Kalapatthar (5,545m) and Trek to Pheriche (4,371m) - 7 hrs walk
                    </h2>
                </div>
                <div class="accordion__content">
                    <div class="accordion__content-wrapper">
                        <div class="accordion__content-left accordion__content-left--row">

                            <figure class="accordion__media">
                                <img src="<?php echo get_template_directory_uri(); ?>/uploads/ii13.jpeg"
                                    alt="Image of a trekking" />
                               
                            </figure>
                            <div class="accordion__content-right accordion__content-right">
                                <p>Early in the morning, we climb to Kalapatthar at (5,545m.) and enjoy a spectacular
                                    sunrise view. From Kala Patthar, you can have a panoramic view of Mt. Everest and
                                    many other mountain peaks. It includes a host of famous ones: Mt. Pumori, Mt.
                                    Lingtren, Mt. Khumbetse, Mt. Nuptse, and Mt. Lhotse, Mt. Ama Dablam, Mt. Thamserku,
                                    and many more huge peaks.</p><br>

                                <p>Yaks are normally regarded as four-legged porters in this area. Due to their tough
                                    terrain which would be difficult for human porters. The town of Pheriche is also
                                    known as a highly windy town. Hereabouts, you can see the perpendicular walls of
                                    Cholatse and Tawache.</p>
                            </div>
                        </div>
                        <div class="accordion__description">
                            <div class="accordion__content-left accordion__content-left--row">

                                <figure class="accordion__media">
                                    <img src="<?php echo get_template_directory_uri(); ?>/uploads/ii4.jpeg"
                                        alt="Image of a trekking" />
                                  
                                </figure>
                                <div class="accordion__content-right accordion__content-right">
                                    <p>The Himalayan Rescue Association Aid Post is also located here. And foreign
                                        volunteer doctors provide medical treatment to trekkers as well as local people
                                        in this area. We stay overnight at a lodge.
                                    </p>



                                </div>
                            </div>




                        </div>

                        <div class="accordion__content-left">
                            <div class="accordion__info">

                                <div class="accordion__column">
                                    <div class="accordion__row">
                                        <p><strong>Destination:</strong></p>
                                        <p><strong>Meals Included</strong></p>
                                    </div>
                                    <div class="accordion__row">
                                        <p>Kathmandu</p>
                                        <p>No meal</p>

                                    </div>
                                </div>
                                <div class="accordion__column">
                                    <div class="accordion__row">
                                        <p><strong>Accomodations:</strong></p>
                                        <p><strong>Altitude:</strong></p>
                                    </div>
                                    <div class="accordion__row">
                                        <p>Luxury Hotel</p>
                                        <p>1400m</p>
                                    </div>
                                </div>

                            </div>
                        </div>


                    </div>

                </div>

            </div>
            <div class="accordion__heading-wrapper accordion__heading-wrapper--alt__color">
                <div class="accordion__heading">
                    <div class="accordion__fancy-text">

                        <span><strong>12</strong></span>
                        <span>DAY</span>
                    </div>
                    <h2 class="accordion__title">Trek back to Namche (3,440m) - 6 hrs walk</h2>
                </div>
                <div class="accordion__content">
                    <div class="accordion__content-wrapper">
                        <div class="accordion__content-left accordion__content-left--row">

                            <figure class="accordion__media">
                                <img src="<?php echo get_template_directory_uri(); ?>/uploads/ii15.jpeg"
                                    alt="Image of a trekking" />
                              
                            </figure>
                            <div class="accordion__content-right accordion__content-right">
                                <p>We retrace our steps with a Trek back to Namche about 6 hours from Pheriche and do an
                                    overnight at the bustling & hustling village town of Namche with full board meals
                                    (Breakfast/Dinner/Lunch). We chill out here with some beers and enjoy some relevant
                                    comfort. Overnight at lodge in Namche.</p>



                            </div>
                        </div>

                        <div class="accordion__content-left">
                            <div class="accordion__info">

                                <div class="accordion__column">
                                    <div class="accordion__row">
                                        <p><strong>Destination:</strong></p>
                                        <p><strong>Meals Included</strong></p>
                                    </div>
                                    <div class="accordion__row">
                                        <p>Kathmandu</p>
                                        <p>No meal</p>

                                    </div>
                                </div>
                                <div class="accordion__column">
                                    <div class="accordion__row">
                                        <p><strong>Accomodations:</strong></p>
                                        <p><strong>Altitude:</strong></p>
                                    </div>
                                    <div class="accordion__row">
                                        <p>Luxury Hotel</p>
                                        <p>1400m</p>
                                    </div>
                                </div>

                            </div>
                        </div>


                    </div>

                </div>

            </div>
            <div class="accordion__heading-wrapper ">
                <div class="accordion__heading">
                    <div class="accordion__fancy-text">

                        <span><strong>13</strong></span>
                        <span>DAY</span>
                    </div>
                    <h2 class="accordion__title">Trek back to Lukla (2,846m) - 7 hrs walk</h2>
                </div>
                <div class="accordion__content">
                    <div class="accordion__content-wrapper">
                        <div class="accordion__content-left accordion__content-left--row">

                            <figure class="accordion__media">
                                <img src="<?php echo get_template_directory_uri(); ?>/uploads/ii16.jpeg"
                                    alt="Image of a trekking" />
                               
                            </figure>
                            <div class="accordion__content-right accordion__content-right">
                                <p>This is our last day on these lovely mountains that have been home to us all of these
                                    days. We continue to backtrack our hike towards Lukla along the Dudh Koshi River
                                    which is about 7 hours from Namche and do an overnight at Lukla.</p>
                            </div>
                        </div>

                        <div class="accordion__content-left">
                            <div class="accordion__info">

                                <div class="accordion__column">
                                    <div class="accordion__row">
                                        <p><strong>Destination:</strong></p>
                                        <p><strong>Meals Included</strong></p>
                                    </div>
                                    <div class="accordion__row">
                                        <p>Kathmandu</p>
                                        <p>No meal</p>

                                    </div>
                                </div>
                                <div class="accordion__column">
                                    <div class="accordion__row">
                                        <p><strong>Accomodations:</strong></p>
                                        <p><strong>Altitude:</strong></p>
                                    </div>
                                    <div class="accordion__row">
                                        <p>Luxury Hotel</p>
                                        <p>1400m</p>
                                    </div>
                                </div>

                            </div>
                        </div>


                    </div>

                </div>

            </div>
            <div class="accordion__heading-wrapper accordion__heading-wrapper--alt__color">
                <div class="accordion__heading">
                    <div class="accordion__fancy-text">

                        <span><strong>14</strong></span>
                        <span>DAY</span>
                    </div>
                    <h2 class="accordion__title">Flight back to Kathmandu and farewell dinner in the evening (1,400m) -
                        45
                        minutes flight</h2>
                </div>
                <div class="accordion__content">
                    <div class="accordion__content-wrapper">
                        <div class="accordion__content-left accordion__content-left--row">

                            <figure class="accordion__media">
                                <img src="<?php echo get_template_directory_uri(); ?>/uploads/ii17.jpeg"
                                    alt="Image of a trekking" />
                               
                            </figure>
                            <div class="accordion__content-right accordion__content-right">
                                <p>Most flights from Lukla to Kathmandu are scheduled for early morning to avoid the
                                    strong winds. It’s a scenic flight from Lukla to Kathmandu for about forty-five
                                    minutes. We touch down at Kathmandu and transferred to our hotel.</p>

                            </div>
                        </div>
                        <div class="accordion__description">
                            <div class="accordion__content-left accordion__content-left--row">

                                <figure class="accordion__media">
                                    <img src="<?php echo get_template_directory_uri(); ?>/uploads/ii18.jpeg"
                                        alt="Image of a trekking" />
                                   
                                </figure>
                                <div class="accordion__content-right accordion__content-right">
                                    <p>In the evening we will organize a farewell dinner with Nepalese cuisine and a
                                        cultural dance show in Kathmandu.
                                    </p>



                                </div>
                            </div>

                        </div>

                        <div class="accordion__content-left">
                            <div class="accordion__info">

                                <div class="accordion__column">
                                    <div class="accordion__row">
                                        <p><strong>Destination:</strong></p>
                                        <p><strong>Meals Included</strong></p>
                                    </div>
                                    <div class="accordion__row">
                                        <p>Kathmandu</p>
                                        <p>No meal</p>

                                    </div>
                                </div>
                                <div class="accordion__column">
                                    <div class="accordion__row">
                                        <p><strong>Accomodations:</strong></p>
                                        <p><strong>Altitude:</strong></p>
                                    </div>
                                    <div class="accordion__row">
                                        <p>Luxury Hotel</p>
                                        <p>1400m</p>
                                    </div>
                                </div>

                            </div>
                        </div>


                    </div>

                </div>

            </div>
            <div class="accordion__heading-wrapper ">
                <div class="accordion__heading">
                    <div class="accordion__fancy-text">

                        <span><strong>15</strong></span>
                        <span>DAY</span>
                    </div>
                    <h2 class="accordion__title">Departure from Nepal</h2>
                </div>
                <div class="accordion__content">
                    <div class="accordion__content-wrapper">
                        <div class="accordion__content-left accordion__content-left--row">

                            <figure class="accordion__media">
                                <img src="<?php echo get_template_directory_uri(); ?>/uploads/ii19.jpeg"
                                    alt="Image of a trekking" />
                                
                            </figure>
                            <div class="accordion__content-right accordion__content-right">
                                <p>After breakfast and our last day in Kathmandu, our vehicle and escorts will be on
                                    standby to drop you to the international airport three hours before our scheduled
                                    flight back home. At Glorious Himalaya, meeting you has been a great honor and we
                                    pray for your Safe journey home and will reflect on the wonderful times we spent
                                    together. Bon Voyage!!! We hope to see you again someday…</p>

                            </div>
                        </div>
                        <div class="accordion__description">
                            <div class="accordion__content-left accordion__content-left--row">

                                <figure class="accordion__media">
                                    <img src="<?php echo get_template_directory_uri(); ?>/uploads/ii20.jpeg"
                                        alt="Image of a trekking" />
                                    
                                </figure>

                            </div>




                        </div>

                        <div class="accordion__content-left">
                            <div class="accordion__info">

                                <div class="accordion__column">
                                    <div class="accordion__row">
                                        <p><strong>Destination:</strong></p>
                                        <p><strong>Meals Included</strong></p>
                                    </div>
                                    <div class="accordion__row">
                                        <p>Kathmandu</p>
                                        <p>No meal</p>

                                    </div>
                                </div>
                                <div class="accordion__column">
                                    <div class="accordion__row">
                                        <p><strong>Accomodations:</strong></p>
                                        <p><strong>Altitude:</strong></p>
                                    </div>
                                    <div class="accordion__row">
                                        <p>Luxury Hotel</p>
                                        <p>1400m</p>
                                    </div>
                                </div>

                            </div>
                        </div>


                    </div>

                </div>

            </div>

        </div>
    </section>

    <section class="trip-list" id="include__exclude">
        <div class="container">
            <div class="trip-overview__content entry-content">
                <h1 class="trip-overview__title">Trip Includes:</h1>
                <ul class="trip-lists__lists">
                    <li>All the airport pick-ups and drop-offs by private vehicles.</li>
                    <li>3 nights of luxury hotel accommodation in Kathmandu city inclusive of breakfast.
                    </li>
                    <li>11 nights of twin sharing basis local lodges accommodations while on the trek.</li>
                    <li>Meals on full board while on the trek in the mountain region (Breakfast/Lunch/Dinner)</li>
                    <li>Total: 14-Breakfasts, 11-Lunches & 12-Dinners throughout the trip.</li>
                    <li>We serve seasonal fruits every day after your dinner during the trek.</li>
                    <li>One day Kathmandu sightseeing tour guided by a city tour guide with private transport.</li>
                    <li>Experienced and government-certified trekking guide for the trek.</li>
                    <li>Supporting porters to carry your belongings during the trek. (1 porter for 2 clients)</li>
                    <li>An assistant guide for a group above 10 people.</li>
                    <li>Salary, accommodations, transport, meals, and accidental insurance of all our trekking guides
                        and porters.</li>
                    <li>Domestic flights (Kathmandu-Lukla-Kathmandu) including airport taxes.</li>
                    <li>All the necessary paper works and trekking permits for the trek.</li>
                    <li>Emergency helicopter rescue service in case of health issues while on the trek. (In this case,
                        you should have travel insurance)
                    </li>
                    <li>Rain protection duffel bag and sleeping bag to use for the trek. (provided on request)
                    </li>
                    <li>A comprehensive first aid medical kit and oximeter to check your pulse and oxygen level while on
                        the trek – useful for high altitude sickness while on the trek.
                    </li>
                    <li>Trip achievement certificate after successful trip completion.</li>
                    <li>All government taxes and company service charges.</li>
                    <li>At the end, we offer a Nepalese cuisine farewell dinner in Kathmandu with a cultural dance
                        performance.</li>
                    <li>Pre-meeting at Kathmandu before the trek.</li>
                </ul>
            </div>
            <div class="trip-overview__content entry-content">
                <h1 class="trip-overview__title">Trip Exclude:</h1>
                <ul class="trip-lists__lists trip-lists__lists--cross">
                    <li>International airfares.</li>
                    <li>Nepal entry visa fees. Visit <a href="https://www.immigration.gov.np/page/tourist-visa">the
                            link</a> for the Nepal tourist visa information.</p>
                    </li>
                    <li>Your personal entrance fees for Kathmandu sightseeing.</li>
                    <li>Your extra expenses such as the use of WIFI, hot shower, and battery charging while on the trek.
                    </li>
                    <li>Cold and hot drinks during the trek.</li>
                    <li>Extra hotel nights accommodation in Kathmandu or in Lukla if other than the scheduled itinerary.
                    </li>
                    <li>Your personal trekking equipment and travel insurance.</li>
                    <li>Gratitude to the trekking guides</li>
                    <li>Excess baggage of more than 10 kg for Lukla flight.</li>
                </ul>
            </div>
            <div class="trip-list__icon-bar">
                <div class="trip-list__link">
                    <a href="<?php echo get_template_directory_uri(); ?>/uploads/popup.jpg" data-fancybox><svg
                            class="icon icon-gallery">
                            <use xlink:href="#icon-gallery"></use>
                        </svg> Gallery
                        <img class="screen-reader-text"
                            src="<?php echo get_template_directory_uri(); ?>/uploads/popup.jpg"
                            alt="Image of a trekking" />
                    </a>
                </div>

                <div class="trip-list__link">
                    <a href="#popup" data-fancybox> <svg class="icon icon-menu-bar">
                            <use xlink:href="#icon-menu-bar"></use>
                        </svg> Checklist</a>

                    <div class="trip-list__popup-content" id="popup">
                        <h3 class="trip-list__content-title">Checklist</h3>
                        <div class="trip-list__content-link">
                            <a href="javascript:window.print()"><svg class="icon icon-printer">
                                    <use xlink:href="#icon-printer"></use>
                                </svg>
                                Print
                            </a>
                        </div>
                        <div class="entry-content">
                            <h4><strong>Gear Checklist for EBC Trek</strong></h4>
                            <h5><strong>Head</strong></h5>
                            <ul>
                                <li>Bandana or headscarf, also useful for dusty conditions.</li>
                                <li>Warm hat that covers your ears (wool or synthetic)</li>
                                <li>Headlamp with extra batteries and bulbs.</li>
                                <li>Sunglasses with UV protection</li>
                                <li>Prescription sunglasses (if required)</li>
                            </ul>
                            <h5><strong>Upper Body</strong></h5>
                            <ul>
                                <li>Polypropylene shirts (1 half sleeve and 2 long sleeves)</li>
                                <li>Light and expedition weight thermal tops.</li>
                                <li>Fleece wind-stopper jacket or pullover.</li>
                                <li>Waterproof shell jacket (preferably breathable fabric)</li>
                                <li>Down jacket</li>
                                <li>Gore-Tex jacket with hood, waterproof and breathable</li>

                            </ul>
                            <h5><strong>Hands</strong></h5>
                            <ul>
                                <li>1 pair of lightweight poly-liner gloves.</li>
                                <li>1 pair of lightweight wool of fleece gloves.</li>
                                <li>1 pair of mittens, consists of 1 Gore-Tex over mitt matched with a very warm
                                    polar-fleece mitt liner (seasonal)</li>


                            </ul>
                            <h5><strong>Lower Body</strong></h5>
                            <ul>
                                <li>Non-cotton underwear briefs.</li>
                                <li>1 pair of hiking shorts.</li>
                                <li>1 pair of lightweight thermal bottoms (seasonal)</li>
                                <li>1 pair of fleece or woolen trousers</li>
                                <li>1 pair of waterproof shell pants, breathable fabric</li>


                            </ul>
                            <h5><strong>Feet</strong></h5>
                            <ul>
                                <li>2 pairs of thin, lightweight inner socks.</li>
                                <li>2 pairs of heavy poly or wool socks.</li>
                                <li>1 pair of hiking boots with spare laces (sturdy, soles, water resistant, ankle
                                    support, “broken in”)</li>
                                <li>1 pair of trainer or running shoes/sandals</li>
                                <li>Cotton socks (optional)</li>
                                <li>Gaiters (winter only), optional, “low” ankle high version</li>

                            </ul>
                            <h5><strong>Sleeping</strong></h5>
                            <ul>
                                <li>1 sleeping bag (-20 degrees)</li>
                                <li>Fleece sleeping bag liner (optional)</li>

                            </ul>
                            <h5>Rucksack and Travel Bags</h5>
                            <ul>
                                <li>1 medium rucksack (50-70 liters/3000-4500 cubic inches, can be used for an airplane
                                    carryon)</li>
                                <li>1 large duffel bag</li>
                                <li>A small daypack/backpack for carrying your valuables should have good shoulder
                                    padding</li>
                                <li>Small padlocks for duffel-kit bags</li>
                                <li>2 large waterproof rucksack covers (optional)</li>

                            </ul>
                            <h5><strong>Medical</strong></h5>
                            <ul>
                                <li>Small, personal first-aid kit. (Simple and light)</li>
                                <li>Aspirin, first-aid tape, and plasters (Band-Aids)</li>
                                <li>1 skin-blister repair kit</li>
                                <li>Anti-diarrhea pills</li>
                                <li>Anti-headache pills</li>
                                <li>Cough and/or cold medicine</li>
                                <li>Anti-altitude sickness pills: Diamox or Acetylzolamide</li>
                                <li>Stomach antibiotic: Ciprofloxacin, etc. Do not bring sleeping pills as they are a
                                    respiratory depressant.</li>
                                <li>Water purification tablets or water filter.</li>
                                <li>1 set of earplugs</li>
                                <li>Extra pair of prescription glasses, contact lens supplies.</li>
                            </ul>
                            <h5><strong>Practical Items</strong></h5>
                            <ul>
                                <li>1 small roll of repair tape, 1 sewing-repair kit</li>
                                <li>1 cigarette lighters, 1 small box of matches</li>
                                <li>1 compass or GPS (optional)</li>
                                <li>1 alarm clock/watch</li>
                                <li>1 digital camera with extra cards and batteries</li>
                                <li>Large Ziplocs</li>
                                <li>2 water bottles (1 ltrs. each)</li>
                                <li>1 small folding knife</li>
                                <li>Binoculars (optional)</li>
                                <li>4 large, waterproof, disposable rubbish sacks.</li>
                            </ul>
                            <h5><strong>Toiletries</strong></h5>
                            <ul>
                                <li>1 medium-sized quick-drying towel</li>
                                <li>Toothbrush/paste (preferably biodegradable)</li>
                                <li>Multi-purpose soap (preferably biodegradable)</li>
                                <li>Deodorants</li>
                                <li>Nail clippers</li>
                                <li>Face and body moisturizer</li>
                                <li>Female hygiene products</li>
                                <li>Small mirror</li>
                            </ul>
                            <h5><strong>Personal Hygiene</strong></h5>
                            <ul>
                                <li>Wet wipes (baby wipes)</li>
                                <li>Tissue/toilet roll</li>
                                <li>Anti-bacterial hand wash</li>

                            </ul>
                            <h5><strong>Extras/Luxuries</strong></h5>
                            <ul>
                                <li>Reading books</li>
                                <li>Trail map/guide book</li>
                                <li>Journal and pen</li>
                                <li>iPod</li>
                                <li>Travel game i.e. chess, backgammon, scrabble, playing cards (to help you pass the
                                    time at teahouses or camps)</li>
                                <li>1 modest swimsuit</li>
                                <li>Voltage converter</li>
                                <li>Plug adapter (2 round pegs to 2 flat pegs)</li>
                                <li>Lightweight pillowcase (in case if your teahouses do not provide you)</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="trip-list__link">
                    <a href="https://youtu.be/GV1huCrnGPQ" data-fancybox><svg class="icon icon-video1">
                            <use xlink:href="#icon-video1"></use>
                        </svg> Videos</a>
                </div>
                <div class="trip-list__link">
                    <a data-type="iframe"
                        href="https://www.google.com/maps/d/u/0/embed?mid=1Jnu69JCdyhgxgi3pxCQtKBJNYA9j7vk&ehbc=2E312F"
                        data-fancybox><svg class="icon icon-map">
                            <use xlink:href="#icon-map"></use>
                        </svg> Route Map</a>
                </div>
            </div>
        </div>
    </section>

    <section class="departure" id="cost__dates">
        <div class="container">
            <div class="blog__heading">
                <h2 class="blog__title">Join Our Fixed Departures</h2>
                <p>Go with the right number of like-minded travellers</p>
            </div>
            <div class="departure__table--trips">
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

                            <th>Days</th>
                            <th>Trip Status</th>
                            <th>Price</th>
                            <th colspan="2"></th>
                        </tr>
                        <tr class="departure__data-row">
                            <td>19th September, 2016</td>

                            <td>12</td>
                            <td>Booked</td>
                            <td>$1,440.00</td>
                            <td>
                                <div class="departure__button"><a href="#">Book Now<svg class="icon icon-rArrow">
                                            <use xlink:href="#icon-rArrow"></use>
                                        </svg></a></div>
                            </td>
                        </tr>
                        <tr class="departure__data-row">
                            <td>5th October, 2016</td>

                            <td>16</td>
                            <td>Avaliable</td>
                            <td>Upon Request</td>
                            <td>
                                <div class="departure__button"><a href="#">Book Now<svg class="icon icon-rArrow">
                                            <use xlink:href="#icon-rArrow"></use>
                                        </svg></a></div>
                            </td>
                        </tr>
                        <tr class="departure__data-row">
                            <td>7th October, 2016</td>

                            <td>17</td>
                            <td>Avaliable</td>
                            <td>$1,440.00</td>
                            <td>
                                <div class="departure__button"><a href="#">Book Now<svg class="icon icon-rArrow">
                                            <use xlink:href="#icon-rArrow"></use>
                                        </svg></a></div>
                            </td>
                        </tr>
                        <tr class="departure__data-row">
                            <td>10th October, 2016</td>

                            <td>13</td>
                            <td>Avaliable</td>
                            <td>$1,440.00</td>
                            <td>
                                <div class="departure__button"><a href="#">Book Now<svg class="icon icon-rArrow">
                                            <use xlink:href="#icon-rArrow"></use>
                                        </svg></a></div>
                            </td>
                        </tr>
                        <tr class="departure__data-row">
                            <td>27th October, 2016</td>

                            <td>12</td>
                            <td>Avaliable</td>
                            <td>$1,440.00</td>
                            <td>
                                <div class="departure__button"><a href="#">Book Now<svg class="icon icon-rArrow">
                                            <use xlink:href="#icon-rArrow"></use>
                                        </svg></a></div>
                            </td>
                        </tr>
                        <tr class="departure__data-row">
                            <td>3rd December, 2016</td>

                            <td>8</td>
                            <td>Avaliable</td>
                            <td>$1,440.00</td>
                            <td>
                                <div class="departure__button"><a href="#">Book Now<svg class="icon icon-rArrow">
                                            <use xlink:href="#icon-rArrow"></use>
                                        </svg></a></div>
                            </td>
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
        </div>
    </section>
    <section class="faq" id="trip__info">
        <div class="container">
            <div class="faq__heading">
                <h2 class="faq__title">Frequently Asked Questions (FAQs)</h2>
            </div>
            <div class="faq__button">
                <button id="expandCollapseButton">Expand All</button>

            </div>
            <div class="faq__content-wrapper">
                <div class="faq__content">
                    <div class="faq__content-heading">
                        <h3 class="faq__content-title">01) Will somebody be there to receive me at Kathmandu airport?
                        </h3>

                    </div>
                    <div class="faq__content-description">
                        <p>Yes, our office representative will be waiting to greet you at the airport. He will be
                            holding the Glorious Himalaya placard with your name beneath. He will then transfer you to
                            the hotel and help you to check-in.<br>

                            Also after your EBC trek, at the departure time, our office representative will arrive at
                            your hotel three hours prior to your scheduled flight. After helping check out, he will drop
                            you at the airport for your flight back home.</p>
                    </div>
                </div>
                <div class="faq__content">
                    <div class="faq__content-heading">
                        <h3 class="faq__content-title">02) What's the success rate of your EBC Trek?
                        </h3>

                    </div>
                    <div class="faq__content-description">
                        <p>Since our company’s establishment, we have operated EBC trek for more than 700 groups. And
                            the flights play a vital role in the Everest base camp trek, which is beyond our
                            control.<br>

                            Besides the flights, we have a 98% success rate on this trek. Our 12 days hiking itinerary
                            includes enough 2 days for acclimatization.</p>
                    </div>
                </div>
                <div class="faq__content">
                    <div class="faq__content-heading">
                        <h3 class="faq__content-title">03) What happens if there is an emergency?
                        </h3>

                    </div>
                    <div class="faq__content-description">
                        <p>All of our guides have a wealth of knowledge. They are aware of any potential medical
                            emergencies or crises that could occur while on the journey. Local guides are prepared to
                            tackle any tragedy since they have had rigorous first aid training.<br>

                            There are health posts run by local and international doctors for any minor ailments.

                            In case of an emergency, the guides are qualified to deliver the First-Aid service. If
                            required, you will transfer to the nearby hospitals. Or, in case of an emergency, you will
                            request an immediate airlift to Kathmandu.<br>

                            When there are serious problems of AMS (Acute Mountain Sickness), our guides give Diamox.
                            And immediately take the patient to a lower elevation.<br>

                            Since the initial costs of the rescue operation will need to be reimbursed by your insurance
                            company or by using cash or credit. Which we have paid for them.</p>
                    </div>
                </div>
                <div class="faq__content">
                    <div class="faq__content-heading">
                        <h3 class="faq__content-title">04) Do I require to be insured for this trek?
                        </h3>

                    </div>
                    <div class="faq__content-description">
                        <p>In case of a severe illness or any casualties, we’ll do everything to move on to the closest
                            hospital to save your life (that has happened to us a few times). And you’re utterly
                            accountable for all the expenses incurred in evacuation/rescue. Therefore, please be certain
                            these costs are covered by your insurance coverage before assigning to the trek. Or even be
                            ready to pay your own after returning to Kathmandu. So make sure that you’ve fully insured
                            which can cover helicopter rescue expenses before performing the excursion.</p>
                    </div>
                </div>
                <div class="faq__content">
                    <div class="faq__content-heading">
                        <h3 class="faq__content-title">05) Do I have to Book this trip early?
                        </h3>

                    </div>
                    <div class="faq__content-description">
                        <p>We highly recommend you book your trip a few months in advance. We will need to reserve your
                            flights to Lukla earlier. Especially during the peak trekking season, when there is a large
                            number of trekkers. However, if you arrive and want to organize your trip we can also
                            arrange Last MINUTE BOOKINGS !!! The earliest is best for us.</p>
                    </div>
                </div>
                <div class="faq__content">
                    <div class="faq__content-heading">
                        <h3 class="faq__content-title">06) Where do i purchase trekking gears?
                        </h3>

                    </div>
                    <div class="faq__content-description">
                        <p>It is not necessary to invest a great deal of money buying gear for your Everest Base Camp
                            Trek in your country. As the majority of those gears can be purchased at reasonable prices
                            in Kathmandu. Besides, we are happy to provide you with trekking poles, sleeping bags, and
                            rain protection duffel bags for the trek. (No charge, to be returned).</p>

                    </div>
                </div>
                <div class="faq__content">
                    <div class="faq__content-heading">
                        <h3 class="faq__content-title">07) What sort of hotel can I expect in Kathmandu?
                        </h3>

                    </div>
                    <div class="faq__content-description">
                        <p>In our given EBC trek package, we provide luxurious 3-star standard hotels in Kathmandu. Such
                            as Hotel Thamel Park, Kathmandu Eco Hotel, etc.
                            However, we will reserve the above standard with an extra cost or budget hotels as per your
                            desire. You just need to tell us your requirement.</p>

                    </div>
                </div>
                <div class="faq__content">
                    <div class="faq__content-heading">
                        <h3 class="faq__content-title">08) Food & Accommodation during the Everest Base Camp trek
                        </h3>

                    </div>
                    <div class="faq__content-description">
                        <p>You will spend your nights at the common local Teahouse or lodges during your EBC trek. It is
                            the classic form of trekking accommodation on the trail. All are set and operated by local
                            villagers. And provide you with basic yet optimal facilities like comfortable rooms, and
                            westernized washrooms with WIFI service. While at dinner, you can also meet other
                            interesting people from different nationalities with their exciting stories.<br>

                            Besides the tea house’s accommodation, there are also a number of luxury hotels available on
                            the Everest base camp trail. It can be managed at an extra cost.<br>

                            While both vegetarian and non-vegetarian foods are available for meals that are hygienic as
                            well as healthy. You can order your favorites as per the menu of the teahouse/lodge. On the
                            lower elevations, you can taste a wider variety of dishes like Nepali, Indian, Continental,
                            Chinese, etc. While Tea, coffee, eggs, bakery items, snacks, bars, etc can easily be found
                            on your trek.</p>

                    </div>
                </div>
                <div class="faq__content">
                    <div class="faq__content-heading">
                        <h3 class="faq__content-title">09) Are Hot showers amd Laundry services available at Everest
                            Base Camp Trek?
                        </h3>

                    </div>
                    <div class="faq__content-description">
                        <p>In the initial days, it was difficult for the trekkers to take shower and wash clothes. But
                            these days there are certain laundry and showers facilities made possible for the trekkers.
                            You will get gas geyser for a hot shower in the bathroom at most of the places. Hot shower
                            facilities are available for trekkers till to Gorakshep village, close to Everest Base Camp.
                            Some lodges also provide you with hot water in a bucket.<br>

                            Trekkers are required to pay for a hot shower that ranges from USD $2 to 4 per use. The cost
                            of a hot shower increases accordingly with the increase in height of the place. Trekkers
                            mostly have their own quick-drying towels for use. In case you don’t have one, lodges
                            provide you with towels upon request.<br>

                            Tea houses and Lodges provide hot showers and laundry services on Everest Base Camp Trek.
                            Laundry facilities are available till Namche Bazaar which costs USD $1 to 3 or Nepalese
                            Currency Rs 100-300 per piece, according to the size of the cloth. Hot showers facilities
                            are available in each and every lodge during EBC Trek in Nepal.</p>

                    </div>
                </div>
                <div class="faq__content">
                    <div class="faq__content-heading">
                        <h3 class="faq__content-title">10) Are Hot showers amd Laundry services available at Everest
                            Base Camp Trek?
                        </h3>

                    </div>
                    <div class="faq__content-description">
                        <p>Generally, the flights connecting Kathmandu and Lukla are reliable.
                            However, it can be delayed for some hours or even be canceled for the whole day due to the
                            inclement weather. If your flight is canceled, we will promptly reschedule for the next
                            day’s flight. We may also be able to provide a choice for a privately chartered
                            helicopter.<br>

                            If you choose to take the helicopter service, this will cost an extra $500 or more. Prices
                            are depending upon the group size and availability.
                            Additional Hotel nights and meals in Kathmandu are not covered in the package during flight
                            delays. Although, we will make arrangements for our clients. Further, you are responsible
                            for extra hotel accommodation and meals in case of flight cancelation.<br>

                            Therefore, we strongly suggest our clients add at least 2 or 3 extra days to the end of your
                            trip. This will give you some flexibility in the case of any interruptions so that you will
                            not have to miss your international flight.</p>

                    </div>
                </div>
                <div class="faq__content">
                    <div class="faq__content-heading">
                        <h3 class="faq__content-title">11) What is the weight limit for Kathmandu to Lukla flight?
                        </h3>

                    </div>
                    <div class="faq__content-description">
                        <p>Basically, the weight limit on flights to Lukla from Kathmandu is 15 kg total- checked in and
                            carry on.

                            This also holds true for every mountain airports like Phaplu, Simikot, Jomsom, etc</p>

                    </div>
                </div>
                <div class="faq__content">
                    <div class="faq__content-heading">
                        <h3 class="faq__content-title">12) Do i need a prior Trekking Experience for EBC Trek?
                        </h3>

                    </div>
                    <div class="faq__content-description">
                        <p>Some prior trekking experiences are beneficial. However, any novice or experienced trekker
                            with moderate fitness should be able to complete the trek.

                            For those who are used to hiking long distances with a weighted backpack, they might find
                            the trek easy.<br>

                            Furthermore, those who don’t have any such experiences can try jogging, sprinting, swimming,
                            and exercising a few weeks before trekking. It helps to boost your endurance level and also
                            brings your body in proper shape condition. Hike around nearby places, and focus on building
                            your strength. The trek is challenging but rewarding in every way. With a sort of training
                            and determination, you can conquer the trek. Tick it off your bucket list.</p>

                    </div>
                </div>
                <div class="faq__content">
                    <div class="faq__content-heading">
                        <h3 class="faq__content-title">13) What are the benefits of having a guide for EBC Trek?
                        </h3>

                    </div>
                    <div class="faq__content-description">
                        <p>Hiring a professional licensed guide will add more trekking experience. Some of the ways that
                            having a guide will benefit you are:</p>
                        <ol>
                            <li>Lead or suggest the best trails to take.</li>
                            <li>Manage all your permits and flights.</li>
                            <li>Recommend the best spots to rest, eat at, and stay overnight.</li>
                            <li>Monitor your health regularly.</li>
                            <li>Provide first aid treatment in case of emergencies.</li>
                            <li>Assist you to communicate with the locals.</li>
                            <li>Get the latest updates on the weather conditions of the trails.</li>
                            <li>Provide you information on the surroundings such as the names of the mountains/peaks,
                                their height, plus Local names.</li>
                            <li>Give information on the culture, flora and fauna of the region, and some interesting
                                stories.</li>

                        </ol>
                        <p>Besides, having a guide is also having a friend and a guardian who is always there to
                            look after you. You don’t have to focus on making lots of decisions while on the trek
                            and make the most of your trip. Moreover, you are employing someone and also
                            contributing to a local economy.</p>

                    </div>
                </div>
                <div class="faq__content">
                    <div class="faq__content-heading">
                        <h3 class="faq__content-title">14) How much can a Porter Carry?
                        </h3>

                    </div>
                    <div class="faq__content-description">
                        <p>As a porter carries the bags for two clients, the maximum suggested load for a porter is
                            30kg, which means 15kg per client. It does not matter a bit less or extra weight.<br>

                            However, this is more of a limit than a plan, as 30 kg is quite heavy for a single person to
                            carry. Besides, he also requires to carry his own bag. So you should thoughtfully decide
                            what you intend to bring on the trek with you. It is a helpful idea to make a single bag
                            between 2 of you.<br>

                            The hotels and Lodges will also offer the service of a luggage storeroom so you may leave
                            any non-required items of clothing, footwear, and personal items in a spare bag with them.
                        </p>


                    </div>
                </div>
                <div class="faq__content">
                    <div class="faq__content-heading">
                        <h3 class="faq__content-title">15) Passportand Visa
                        </h3>

                    </div>
                    <div class="faq__content-description">
                        <p>The VISA process to Nepal is very quick and easy. All Visitors (except Indian nationals) are
                            required a Valid Visa to access into Nepal. You can easily obtain a VISA upon arrival at
                            Tribhuwan International Airport, or at any Nepal entrance borders of India or China. The
                            citizens of China, member countries of SAARC, and the children under 10(except the US) will
                            get a free Visa (Gratis Visa).<br>

                            For <a href="http://online.nepalimmigration.gov.np/tourist-visa">Visa Application</a>, you
                            will require a passport (with at least 6 months until expiration)
                            and one passport-size photo. The current visa cost for 15 and 30 days is USD 30 and 50 (To
                            be paid only on Cash), although you can also pay the equivalent amount by other currencies
                            (no Indian currency). You can also easily extend your Visa from Kathmandu or Pokhara.<br>

                            Countries not entitled to get an arrival visa are Cameroon, Zimbabwe, Ghana, Swaziland,
                            Somalia, Liberia, Ethiopia, Afghanistan, Nigeria, Iraq, Cameroon, and Palestine. If you are
                            from the above countries please contact your nearby diplomatic missions
                            (Embassies/consulates) of the Nepal Government. We recommend scheduling your trip at least
                            1-2 days extra in the case of delays. We will arrange additional activities if no delay
                            occurs.<br>

                            Please be advised to check the <a
                                href="http://www.nepalimmigration.gov.np/page/tourist-visa">current regulation</a> for a
                            more detailed and recent update.


                        </p>


                    </div>
                </div>

                <div class="faq__content">
                    <div class="faq__content-heading">
                        <h3 class="faq__content-title">16) Money and Exchange
                        </h3>

                    </div>
                    <div class="faq__content-description">
                        <p><strong>1 USD=~120 Nepali Rupees (NPR/Rs.)</strong>
                            You can exchange most of the foreign currency through local Banks or Money Exchanges
                            in
                            Kathmandu, and all-around Thamel …. <a
                                href="https://www.glorioushimalaya.com/money-exchange/">READ MORE.</a>


                        </p>


                    </div>
                </div>
                <div class="faq__content">
                    <div class="faq__content-heading">
                        <h3 class="faq__content-title">17) Can I recharge my electronic gadgets during the EBC trek?
                        </h3>

                    </div>
                    <div class="faq__content-description">
                        <p>Yes, recharge facilities are available during your trek. Electricity is obtained via solar
                            panels in the Everest Region. You can charge your electronic gadgets at any teahouses or
                            lodges. Plus, this will cost you an extra NPR 200-300 per hour.<br>

                            It is beneficial to bring a universal travel adapter. We recommend our clients to bring a
                            solar charger and power banks on their trip.


                        </p>


                    </div>
                </div>
                <div class="faq__content">
                    <div class="faq__content-heading">
                        <h3 class="faq__content-title">18) Communication on Everest Base Camp Trek
                        </h3>

                    </div>
                    <div class="faq__content-description">
                        <p>It’s a great thing to be <strong>“connected”</strong> with your loved ones. The Internet is
                            the most popular
                            means of communication used by most of the trekkers. Use Viber, WhatsApp, Skype, or facetime
                            where you can call. Though the internet speed experience during your trek may not be as fast
                            as in the city areas cause the farther up the height you get, the slower, less reliable, and
                            more expensive these service becomes. Your Hotels in the cities will provide free WIFI, but
                            the lodges and tea-houses on the trek will charge an extra 1 to 2 Dollars per day.<br>

                            Most of the routes have mobile coverage, though the service may still not be reliable.
                            This will also depend upon the type of network SIM you use and will cost you a fair bit of
                            money to keep using it. Though some days at a higher altitude, the mobile network is not
                            reachable. Upon your request, we will provide you with a local SIM card.<br>

                            <em>In case of emergencies, your emergency contacts and information will be with us before
                                you
                                leave for the trek.</em>


                        </p>

                    </div>
                </div>
                <div class="faq__content">
                    <div class="faq__content-heading">
                        <h3 class="faq__content-title">19) How to Avoid Altitude Sickness?
                        </h3>

                    </div>
                    <div class="faq__content-description">
                        <p>Altitude Sickness is non-discriminatory and can happen to people of any age, gender, shape or
                            size. It is common when people gain higher elevation quickly. Your best defense against
                            altitude sickness is to ascend slowly and to be prepared by following the tips below.
                        </p>
                        <ol>
                            <li>Drink Plenty of warm water ( 3-5 liters at least, no-exceptions) </li>
                            <li>Proper Acclimatization and rest. Avoid rapid gains in elevation.</li>
                            <li>Eat well, more, and often than normal.</li>
                            <li>Avoid Alcohol, Tobacco & Cigarettes.</li>
                            <li>Do not spend too much time at high altitudes pass.</li>
                            <li>Use proper Medications for AMS.</li>
                            <li>Listen to your body, know the early signs and symptoms of AMS, and take action to
                                prevent it from worsening.</li>
                        </ol>


                    </div>
                </div>
                <div class="faq__content">
                    <div class="faq__content-heading">
                        <h3 class="faq__content-title">20) Tips to Minimize Trek Cost
                        </h3>

                    </div>
                    <div class="faq__content-description">
                        <ul>
                            <li>Get yourself a solar-powered charger or a power bank.</li>
                            <li>Rent trekking gears and clothing from local stores in Thamel. </li>
                            <li>Carry chocolates, biscuits, energy bars, Dried Fruits, and other snacks to save money.
                            </li>
                            <li>Carry water thermos and water purifying tablets. Bottled water at some high elevations
                                costs up to $3.</li>
                            <li>Do not consume alcoholic beverages.</li>
                            <li>Spend wisely!</li>
                        </ul>


                    </div>
                </div>
                <div class="faq__content">
                    <div class="faq__content-heading">
                        <h3 class="faq__content-title">21) Extra Personal Expenses during Trek
                        </h3>

                    </div>
                    <div class="faq__content-description">
                        <p>Most of the services are included in our Everest base camp trek package such as meals,
                            accommodations, transportation, permits, flights, etc. However, your personal expenses are
                            not included in our packages. Please, bear in your mind that you should be prepared for the
                            extra expenses below.<br></p>
                        <p>
                            Drinking-Water: Available at $1 to $ 3 in the teahouses.<br>
                            Hot Shower at Teahouses: $ 2 to $ 5 / day<br>
                            Wifi Use at Teahouses : $1 to $ 3 / day<br>
                            Gadgets Charging: $1 to $3 / hr<br>
                            Hot Drinks : $0.5 – $1.5/ cup<br>
                            <strong>Total: USD 10-15 / day</strong> (Beverages Extra)<br>

                        </p>
                        <p>
                            Others: <br>Tipping to Guides and Porters<br>Souvenirs
                        </p>

                    </div>
                </div>
                <div class="faq__content">
                    <div class="faq__content-heading">
                        <h3 class="faq__content-title">22) Useful Nepali Words
                        </h3>

                    </div>
                    <div class="faq__content-description">
                        <p>The few words in the native language goes a long way and bring smiles on the faces of
                            locals.<br></p>
                        <p>Hi! / Greetings = Namaste<br>
                            Thank you = Dhanyabad<br>
                            My name is = Mero Naam<br>
                            Your name? = Tapai ko Naam?<br>
                            I’m fine = Malai Sanchai cha<br>
                            How are you?= Tapailai Kasto Cha?<br>
                            Let’s go= Jum<br>
                            Yes = Ho<br>
                            No = Hoena<br>
                            Hot Water = Tato Pani<br>
                            Cold Water = Cold Water<br>
                            Tasty = Mitho Cha<br>
                            How much is this? = Yo Kati Ho?<br>
                            Good = Ramro<br>
                            Pardon/Excuse me? = Maaf Garnus<br>
                            How much? = Kati Ho<br>
                            Good morning! = Suva Pravath<br>
                            Good Night = Subha Ratri<br>
                            How long? = Kati Tada ?<br>
                            See You Again = Feri Bhetaula<br>
                            Bye = tata</p>

                    </div>
                </div>
                <div class="faq__content">
                    <div class="faq__content-heading">
                        <h3 class="faq__content-title">23) Why Everest Base Camp Trek with GHT?
                        </h3>

                    </div>
                    <div class="faq__content-description">
                        <p>With more than a decade of experience in the industry, GHT has already organized Everest Base
                            Camp Trek and different tour packages for thousands of guests from around the world.<br>

                            We have spent years refining our services and packages and helped make dreams come true of
                            hundreds of trekkers by guiding them to the roof of the world, creating memories that last
                            lifelong.<br>

                            In praise to our dedication to becoming the best trekking agency in Nepal, we’ve been
                            honored with the <strong>TripAdvisor Certificate of Excellence</strong> and also awarded the
                            <strong>“2020 Travelers
                                Choice Award”</strong>, a feat given to agencies for providing outstanding service and
                            customer care.<br>

                            With our devoted team working around the clock to render quality services 24 hrs/day, we’ve
                            gained the support of numerous returning customers. You can also read the ratings and views
                            written by travelers from around the world on our <a
                                href="https://www.tripadvisor.com/Attraction_Review-g293890-d10844608-Reviews-Glorious_Himalaya_Trekking-Kathmandu_Kathmandu_Valley_Bagmati_Zone_Central_Regio.html">trip
                                advisor page</a>.<br>

                            Our qualified guides are supported by a network of experts who will guarantee the best
                            services during the trek. Every client is accompanied by our certified, highly professional,
                            first aid trained, and experienced team of leaders, who are trained and experienced to
                            handle every situation in all the years gone by.<br>

                            And while we specifically design our trips to maximize the value of every dollar and time
                            you spend, our prices are arguably some of the best in our country and are planned in ways
                            to make prices affordable to our clients. But we’ll never compromise when it comes to
                            quality and your travel experience with GHT.<br>

                            Also, we offer a tailor-made trip to our customers to plan the itinerary as per their
                            preference.<br>

                            All in all, your safety and satisfaction is our foremost priority, and with cheerful
                            dispositions and expert advice, our expert team will help you to make the most of your
                            journey, every step of the way.<br>

                            <strong>Let us show you rightly why we’re the best operator in Nepal!</strong>
                        </p>
                    </div>
                </div>
                <div class="faq__content">
                    <div class="faq__content-heading">
                        <h3 class="faq__content-title">24) Is Nepal safe for solo female travelers?
                        </h3>

                    </div>
                    <div class="faq__content-description">
                        <p>Generally, Nepal is safe a country for solo women travelers. Also, Nepal is much safer than
                            other South-Asian countries like India, and Bangladesh. The country holds 76th rank for the
                            safest country out of 163 nations worldwide, and also is the 3rd safest in South Asia next
                            to Bhutan and Srilanka.

                            There is a popular belief in the Nepali culture saying “The guests are gods”, and people are
                            always welcoming you by hearts. However, women should still be cautious and traveling solo
                            is not advisable in the trekking routes of Nepal, especially in the remote destinations,
                            where you could face many problems during the trek.
                        </p>

                    </div>
                </div>
                <div class="faq__content">
                    <div class="faq__content-heading">
                        <h3 class="faq__content-title">25) Do i require any official documents for the EBC trek?
                        </h3>

                    </div>
                    <div class="faq__content-description">
                        <p>Yes, you will require a valid passport, a tourist Visa, 2 photographs (passport-sized) for
                            trekking permits, and necessary travel insurance for this trek.
                        </p>

                    </div>
                </div>
                <div class="faq__content">
                    <div class="faq__content-heading">
                        <h3 class="faq__content-title">26) I am a solo traveler; can i join a group?
                        </h3>

                    </div>
                    <div class="faq__content-description">
                        <p>We also operate several group-joining trips with fixed departure dates, so if you are a solo
                            traveler and we welcome you to join in with our group. In case there are no other travelers
                            or an insufficient number of people on the dates you have booked, we will still run your
                            trip.
                        </p>

                    </div>
                </div>
                <div class="faq__content">
                    <div class="faq__content-heading">
                        <h3 class="faq__content-title">27) Can i book a private trek?
                        </h3>

                    </div>
                    <div class="faq__content-description">
                        <p>Absolutely! We organize group treks as well as private treks. We will plan and customize your
                            trip according to your requirements and preferences. You can choose your activities, style
                            of accommodations, and destinations. We can add or deduct the number of days on our
                            itineraries. Also, for the private trips, we can arrange guaranteed departure dates all year
                            round.
                        </p>

                    </div>
                </div>
                <div class="faq__content">
                    <div class="faq__content-heading">
                        <h3 class="faq__content-title">28) General ideas about AMS (Acute Mountain Sickness)
                        </h3>

                    </div>
                    <div class="faq__content-description">
                        <p><strong>AMS (Acute Mountain Sickness) Signs:</strong>

                            Headache, often with loss of appetite, nausea, vomiting, tiredness, dizziness, disturbed
                            sleep.

                            What to do if you have AMS signs?

                            Stay at height for 1-3 days for acclimatization. If you still feel uncomfortable descend and
                            use Diamox (250mg every 12 hours).</p>
                        <p>
                            <strong>HACE (High Altitude Cerebral Edema) Signs:</strong>

                            Severe headache, loss of balance/coordination, staggering, irrational behavior, confusion,
                            drowsiness, coma, unconscious.

                            What to do if you have HACE signs?
                        </p>
                        <ul>
                            <li>
                                DESCEND immediately, even at night at least 1000 meters with someone else, Gamow bag,
                                oxygen, keep patient warm and use Diamox.
                            </li>
                        </ul><br>

                        <p>
                            <strong>HAPE (High Altitude Pulmonary Edema) Signs:</strong>

                            Breathless (Even at rest), dry cough/pink or rusty spit, blue lips/nails, very tired, low
                            fever, gurgling breath, drowsy.

                            What to do if you have HAPE signs?
                        </p>
                        <ul>
                            <li>DESCEND immediately, even at night at least 1000 meters with someone else, Gamow bag,
                                oxygen, keep patient warm and use Diamox.</li>
                        </ul>
                        <p>
                            <strong>Prevention:</strong>

                            Ascend slow, don’t exert yourself, eat high carbohydrate foods, drink lots of water (better
                            hot water), garlic soup. Avoid alcohol, smoking, and caffeine.
                        </p>

                    </div>
                </div>
                <div class="faq__content">
                    <div class="faq__content-heading">
                        <h3 class="faq__content-title">29) Is it possible for me to Book an Everest Base Camp Trek with
                            my children?
                        </h3>

                    </div>
                    <div class="faq__content-description">
                        <p>Of course, you can book the Everest base camp with your kids. But it requires a travel permit
                            including Pasang Lhamu Rural Municipality Permit and Sagarmatha National Park. EBC is not
                            only a top destination for adult travelers. It is also an adventurous and fantastic place
                            for families to fulfill their bucket lists to make an unforgettable memory.<br>

                            While the trek to Everest Base Camp (EBC) with kids can get to learn about different
                            cultures, nature, and traditions. For your children’s safety, it’s crucial to follow a few
                            guidelines while trekking to EBC. If your kid is under 6 years old then we are not advised
                            to bring them on the trip. Because it is an extremely high-altitude trek and kids will be in
                            distress instead of enjoying it. But, we will guide you on how to enjoy the breathtaking
                            view and beauty of the world’s highest Mount Everest by taking your kids.
                        </p>

                    </div>
                </div>
                <div class="faq__content">
                    <div class="faq__content-heading">
                        <h3 class="faq__content-title">30) What is the total length of EBC Trek?</h3>

                    </div>
                    <div class="faq__content-description">
                        <p>On our crafted itinerary, there is a total of 11 days hike from Lukla to Lukla. Therefore,
                            the overall length of this trek is 130km. Every day you have to walk about 5-7 hours through
                            the rocky and snowy terrain.<br>

                            The trail of the trek is gradual ups, down, and sometimes plane land. Trekking to EBC is
                            quite strenuous for beginners as you have to walk about 12-15 km each day for 11 days.
                        </p>

                    </div>
                </div>
                <div class="faq__content">
                    <div class="faq__content-heading">
                        <h3 class="faq__content-title">31) How crowded is the trek to Everest Base Camp?</h3>

                    </div>
                    <div class="faq__content-description">
                        <p>One of the most well-known journeys in the world is to Everest Base Camp. The peak seasons,
                            which go from late September to November and March to early May, are filled with hikers
                            every day. Planning your vacation beyond the busiest months can help you escape the
                            overcrowding on the route. If you want to escape from the crowd, the best times to trek are
                            at the beginning of September, December, late February, and the end of May.
                        </p>

                    </div>
                </div>
                <div class="faq__content">
                    <div class="faq__content-heading">
                        <h3 class="faq__content-title">32) Can I spend a night at Everest Base Camp?</h3>

                    </div>
                    <div class="faq__content-description">
                        <p>One of the most well-known journeys in the world is to Everest Base Camp. The peak seasons,
                            which go from late September to November and March to early May, are filled with hikers
                            every day. Planning your vacation beyond the busiest months can help you escape the
                            overcrowding on the route. If you want to escape from the crowd, the best times to trek are
                            at the beginning of September, December, late February, and the end of May.
                        </p>

                    </div>
                </div>
                <div class="faq__content">
                    <div class="faq__content-heading">
                        <h3 class="faq__content-title">33) Can I store my extra equipment in Kathmandu?</h3>

                    </div>
                    <div class="faq__content-description">
                        <p>Yes, you can leave your extra luggage in Kathmandu that you would not need for the hike. You
                            will receive the luggage tag from our hotel representative in Kathmandu before starting your
                            journey. Your additional items will be carefully stored at our hotel. Our office
                            representative will deliver all of your stored bags to your hotel after you return safely
                            from the trek.
                        </p>

                    </div>
                </div>
                <div class="faq__content">
                    <div class="faq__content-heading">
                        <h3 class="faq__content-title">34) Is it possible to take a drive to Everest Base Camp?</h3>

                    </div>
                    <div class="faq__content-description">
                        <p><strong>South side of Everest Base Camp:</strong> The territory around Everest can only be
                            reached by road
                            from Kathmandu up to Tham Danda. To get to Everest Base Camp, you have to hike for an
                            additional 8 to 10 days. Consequently, it is not possible to take a drive from Kathmandu to
                            Everest Base Camp. The South side of the Everest Base Camp Trail is more well-liked by
                            hikers than the China Side.<br>

                            <strong>North side of Everest Base Camp:<strong> From Tibet’s side, there is a fine road
                                    that leads to
                                    Everest Base Camp. From Lhasa, Tibet, you may easily get to Everest Base Camp.
                        </p>

                    </div>
                </div>
                <div class="faq__content">
                    <div class="faq__content-heading">
                        <h3 class="faq__content-title">35) Can I see Mt.Everest form Everest Base Camp?</h3>

                    </div>
                    <div class="faq__content-description">
                        <p>Everest Base Camp has two sides: a north side and a south side. So, it depends on which side
                            you are visiting Everest Base Camp. From the southern side of Nepal, you cannot see Mount
                            Everest’s top. Instead, you can view Nuptse and the Khumbu Ice falls in large part from base
                            camp. Everest’s summit is really obscured from view. Therefore, for a better view of Mount
                            Everest and other numerous peaks, trekkers hike to Kalapather (5,545m). And we have included
                            the Kalapather visit in our itinerary.<br>

                            But, if you travel to Everest’s northern side from Tibet, you can see the breathtaking views
                            of Everest. It is possible to travel to the base camp on the Tibetan side as part of an
                            overland tour or as part of the hike to the advanced base camp, which is at a height of 6400
                            meters.
                        </p>

                    </div>
                </div>
                <div class="faq__content">
                    <div class="faq__content-heading">
                        <h3 class="faq__content-title">36) Do I need crampons/microspikes or any climbing gear for this
                            trek?</h3>

                    </div>
                    <div class="faq__content-description">
                        <p>If you wish to go hiking in the spring (March to May) or fall (September to November), you do
                            not require crampons or any other climbing equipment. However, if you are trekking in
                            January or February during the winter season, it is advisable to carry crampons or
                            microspikes with you. It will be challenging to trek on a snowy route without crampons.
                            There’s a chance that snow will cover the paths then. Please be aware that having a pair of
                            good hiking boots may increase your enjoyment of the activity.
                        </p>

                    </div>
                </div>
                <div class="faq__content">
                    <div class="faq__content-heading">
                        <h3 class="faq__content-title">37) How many days that i required for safe Everest Base Camp
                            Trek?</h3>

                    </div>
                    <div class="faq__content-description">
                        <p>A minimum of 12 days is required for a safe Everest base camp trek starting and ending at
                            Kathmandu. You will have two enough days to acclimatize at Namche and Dingboche throughout
                            these 12 days. It takes 8 days to reach the base camp from Kathmandu including 2
                            acclimatization days. And within 4 days you will return to Kathmandu from Everest Base Camp.
                            To make it happen, you may engage in regular exercise or cardio at least 4 to 8 weeks before
                            this excursion.
                        </p>

                    </div>
                </div>
                <div class="faq__content">
                    <div class="faq__content-heading">
                        <h3 class="faq__content-title">38) Are there Laundry and hot shower facilities on the EBC Trek?
                        </h3>

                    </div>
                    <div class="faq__content-description">
                        <p>On this trek, about 95% of the local teahouses offer hot shower facilities that are available
                            at an additional cost. And all the cold water is heated by solar power for the hot shower.
                            Therefore, hot showers are unavailable during the rainy season or on gloomy days. We thus
                            advise you to carry wet wipes in case hot showers are not possible. The cost of a hot shower
                            varies depending on the amenities and elevation. On this EBC trek, you can get better hot
                            shower facilities at Lukla, Phakding, and Namche. For each hot shower, teahouses typically
                            charge between the $2 to $4. The price will then increase with elevation and range from $4
                            to $8.<br>

                            Regarding the laundry service for the EBC trip, Namche Bazar and Lukla are the only places
                            where you can find it. Due to the unavailability of high voltage electricity above Namche,
                            laundry service is not possible in every place. And laundry is excessively expensive in
                            Namche & Lukla. Bring adequate clothing for the 11-day journey, and it is best to clean your
                            clothes in Kathmandu after the trek.
                        </p>

                    </div>
                </div>
                <div class="faq__content">
                    <div class="faq__content-heading">
                        <h3 class="faq__content-title">39) How safe is Everest Base Camp Trek?</h3>

                    </div>
                    <div class="faq__content-description">
                        <p>This is another concern topic for the trekkers while planning the EBC journey. Every year,
                            thousands of trekkers traveled to the Everest base camp. And 90% of them succeed in
                            completing their journey without any issues. About 10% of travelers are not able to complete
                            the trek because of their health issues. Therefore, it is often risk-free and doable for all
                            hikers. There is no risk of avalanches and landslides on this trek. Travelers have given the
                            tagline of a dangerous airport in the world for Lukla airport because of its inaccessible
                            location. However, Lukla flights are also safer as well. In recent days, the trail to the
                            Everest base camp is well constructed. During the peak season, it is filled with
                            international travelers.<br>

                            The most difficult aspect of this hike is likely altitude sickness. Thus, you must make the
                            proper preparations before the expedition. Do some internet research or consult with
                            Himalayan experts for advice on the right equipment, a well-prepared itinerary, and training
                            beforehand. Our 12-day schedule includes adequate time for two days of acclimatization in
                            Namche and Dingboche. You just need to be in good physical and mental health. Eat wisely,
                            drink plenty of fluids and take enough rest during the trek.
                        </p>

                    </div>
                </div>
                <div class="faq__content">
                    <div class="faq__content-heading">
                        <h3 class="faq__content-title">40) Why Everest Base Camp Trek is popular among the hikers?</h3>

                    </div>
                    <div class="faq__content-description">
                        <p>Who doesn’t want to visit the world’s most popular destinations? Don’t you want to spend your
                            hard-earned money by visiting worthwhile places on earth? Everyone wants to travel to
                            European Alps, the Eifel tower in Paris, Argentina’s Patagonia, Niagara falls in Canada, and
                            so on. Likewise, if you are a hiking enthusiast, you must have dreamed about Everest Base
                            Camp Trek.<br>

                            Consequently, every trekking lover put this epic journey on their travel bucket list. Mount
                            Everest – 8848.86 meters is the tallest peak on the planet. And reaching the top of Mount
                            Everest is not possible for every dreamer. But, if you are physically and mentally fit you
                            can at least reach the base camp of Everest without investing millions of dollars.
                            Backpackers from around the world have their dream to visit the entire trekking destination
                            in the world. But it is not possible to visit each of the world’s hiking places in their
                            lifetime. So, they make their travel plan according to the popularity of the places. And
                            definitely, everyone wants to visit Everest Base Camp at least once in their lifetime.
                        </p>

                    </div>
                </div>
                <div class="faq__content">
                    <div class="faq__content-heading">
                        <h3 class="faq__content-title">41) How can I book this Trek? And what are your payments terms?
                        </h3>

                    </div>
                    <div class="faq__content-description">
                        <p>Initially, you have to make a 20% deposit as an advance payment to confirm this trip with us.
                            And remaining 80% should pay after your arrival in Kathmandu (before the trek). Once we
                            received your advance payment, we will send you an e-receipt via email for your
                            confirmation.<br>
                            You can pay advance payments through bank transfers or western union. And for the remaining
                            payment, we accept visa/master cards as well as cash. However, we always prefer remaining
                            payments in cash as we have to send the cash with our guide to pay your food and
                            accommodation bills throughout the trek.
                        </p>

                    </div>
                </div>
                <div class="faq__content">
                    <div class="faq__content-heading">
                        <h3 class="faq__content-title">42) Do I need extra money on the trek? If yes, how much should I
                            carry?
                        </h3>

                    </div>
                    <div class="faq__content-description">
                        <p>Yes, indeed you need some additional cash on the trek. As you are aware, even if you purchase
                            full board service from us, usages of the internet, hot showers, battery charging, cold
                            beverages, beers, etc. in the mountain region are not included. Therefore, you can pay
                            yourself at the teahouses along the trail for these extra services. It is the optional
                            amenities. So, if you don’t want to use it, you don’t have to pay for it.<br>

                            Normally, an additional $15-25 for each day is enough for your extra expenses. However,
                            you’ll need more extra cash if you want to drink beer or shop for items in the mountain.<br>

                            We advise you to carry cash in local currency from Kathmandu. Because teahouses prefer to
                            accept cash in Nepalese rupees. You can get local currency from the money exchange shop in
                            Thamel or withdraw from ATMs. You can also find ATMs machines in Namche but it is not sure
                            whether it works or not.
                        </p>

                    </div>
                </div>
                <div class="faq__content">
                    <div class="faq__content-heading">
                        <h3 class="faq__content-title">43) Tips for the Guide and Porters
                        </h3>

                    </div>
                    <div class="faq__content-description">
                        <p>Tipping is not compulsory or even customary in Nepal, but it is a nice way to say thanks to
                            your guides and porters. The wages of workers in Nepal are significantly less than the
                            average income of other developed countries. Tourist guides and porters are employed only
                            when tourist make their visit to Nepal. And the rest of the time, they won’t have a job.
                            They need to make money during the tourist season to support their family till the next
                            season. Therefore, all tourist guides and porters accept thanks or tips from visitors after
                            their treks or tours. It’s also a great way to motivate them for their generous involvement
                            in tourism in the years to come.<br>

                            Even more, your gratitude will encourage them to work harder and serve better on their next
                            trips.<br>
                            In general, tip them at least 10% of your trip cost or USD 10 -12 per day for the guide and
                            USD 7-9 for the porters. However, if you are satisfied and feel the staff did an excellent
                            job, you can tip them more than the mentioned.
                        </p>

                    </div>
                </div>
                <div class="faq__content">
                    <div class="faq__content-heading">
                        <h3 class="faq__content-title">44) What mountains can i see during this Trek?
                        </h3>

                    </div>
                    <div class="faq__content-description">
                        <p>Below are the mountains that you can see while on the Everest Base Camp Trek. You can see all
                            these mountains from different parts and viewpoints of this trek.
                        </p>
                        <ol>
                            <li>Mt Everest (8,848m)</li>
                            <li>Lhotse (8,516m)</li>
                            <li>Lhotse Shar (8,382m)</li>
                            <li>Makalu (8,485m)</li>
                            <li>Cho Oyu (8,188m)</li>
                            <li>Ama Dablam (6,814m)</li>
                            <li>Pumori (7,165m)</li>
                            <li>Nuptse (7,861m)</li>
                            <li>Thamserku (6,618m)</li>
                            <li>Kangtega (6,783m)</li>
                            <li>Khumbila (5,765m)</li>
                            <li>Nangkar Tshang (5,616m)</li>
                            <li>Gonggila (5,808m)</li>
                            <li>Hinku Himal (6,769m)</li>
                            <li>Number (6,75m)</li>
                            <li>Kondge (6,186m)</li>
                            <li>Kusum Kangkaru (6,370m)</li>
                            <li>Tabuche peak (6,495m)</li>
                            <li>Cholatse (6,335m)</li>
                            <li>Lobuche (6,135m)</li>
                            <li>Nirekha Peak (6,159m)</li>
                            <li>Changri (6,027m)</li>
                            <li>Khumbu (6,859m)</li>
                            <li>Khumbutshe (6,639m)</li>
                        </ol>

                    </div>
                </div>
                <div class="faq__content">
                    <div class="faq__content-heading">
                        <h3 class="faq__content-title">45) What is the highest and lowest sleeping point of this trek?
                        </h3>

                    </div>
                    <div class="faq__content-description">
                        <p>The highest sleeping point of this trek is 5,164 meters at Gorakshep and the lowest sleeping
                            point of this trek is 2,650 meters which is Phakding.
                        </p>

                    </div>
                </div>
                <div class="faq__content">
                    <div class="faq__content-heading">
                        <h3 class="faq__content-title">46) Are there any age restriction for this trek?
                        </h3>

                    </div>
                    <div class="faq__content-description">
                        <p>There isn’t any age restriction for this hike. However, it is a strenuous hike at a high
                            altitude that passes over mountains, rocky terrain through rivers, and alpine woods.
                            Therefore, we advise anyone between the ages of 15 – 55 to take part in this walk. But, if
                            you are a seasoned hiker in your 60s or 70s and in good physical shape, you can also
                            participate in this activity and successfully complete the walk.
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="reviews" id="reviews">
        <div class="container">
            <div class="post__review-content">
            <div class="post__review-heading">
                    <h3 class="post__review-title">A beautiful Everest Basecamp Trek</h3>
                    <hr class="post__review-line">


                </div>
                <div class="post__review-comments post__review-comments--line">
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
                <div class="post__review-comments post__review-comments--line">
                    <p>Base camp arrival was the best and first look of Everest! For future climbers a kind reminder
                        that it is not easy and if it were easy everybody could do it. 🙂 As a sidenote, if you try to
                        send post cards ask about buying post stamps upfront. Overall experience is fascinating.</p>
                    <div class="post__profile">
                        <figure class="post__profile-media">
                            <img src="<?php echo get_template_directory_uri(); ?>/uploads/rr1.jpeg"
                                alt="Image of a trekking" />
                        </figure>
                        <p><strong>By Dadusan<br></strong> Croatia</p>
                    </div>
                </div>
            </div>
            <div class="reviews__link">
                <button id="reviewsAccordion">Share your experience and story with the world</button>
                <div class="reviews__link-form">

                    <form method="POST" onsubmit="return submit_ajax_form(this)">
                        <?phP 
                        $nonce = wp_create_nonce("wp_rest");
                           ?>
                        <div class="reviews__link-field">
                            <label for="fname">Your Full Name:</label>
                            <input type="text" id="fname" name="fname" value="John Depp" required="">
                        </div>
                        <div class="reviews__link-field">
                            <label for="email">Your Email Address:</label>
                            <input type="email" id="email" name="email" value="john@gmail.com" required="">
                        </div>
                        <div class="reviews__link-field">
                            <label for="country">Your Country:</label>
                            <input type="country" id="country" name="country" value="United States">
                        </div>
                        <div class="reviews__link-field">
                            <label for="review">Review Title:</label>
                            <input type="review" id="review" name="review" value="Best Trekking">
                        </div>
                        <div class="reviews__link-field">
                            <label for="review">Overall Rating:</label>
                            <div class="reviews__rating">

                                <input type="radio" name="rating" id="rating-4" value="4">
                                <label for="rating-4"></label>
                                <input type="radio" name="rating" id="rating-3" value="3">
                                <label for="rating-3"></label>
                                <input type="radio" name="rating" id="rating-2" value="2">
                                <label for="rating-2"></label>
                                <input type="radio" name="rating" id="rating-1" value="1">
                                <label for="rating-1"></label>
                                <input type="radio" name="rating" id="rating-5" value="5">
                                <label for="rating-5"></label>
                            </div>
                        </div>
                        <div class="reviews__link-field reviews__link-field--column">
                            <label for="text">Review Experience</label>
                            <textarea name="comment" form="usrform"></textarea>
                        </div>

                        <input type="submit" value="Submit" id="submit">
                    </form>
                </div>
            </div>
            <div class="reviews__toggle">
                <button id="reviewsToggle">Load More Reviews(30)</button>
            </div>
            <div class="reviews__more-comments">
                <div class="post__review-comments post__review-comments--line">
                    <p>“It was my first time in Nepal having the Himalayan experience. My husband and I were planning to
                        spend our holiday in Nepal for a long time, and also it was my longtime dream to trek to
                        Himalaya and be in the mountains. We then finally decided to venture for both Gokyo and Everest
                        Base Camp which later turned into a lifetime experience for us. Having completed this trek
                        successfully with the help of the Glorious Himalaya Team, we had luck with the weather and
                        everything went as per the plan. Despite the cold weather and physical challenges, we made it
                        with the help of porters and our guide Roshan. We enjoyed every moment in the mountains and
                        would like to thank the entire team of Glorious Himalaya for excellently organizing this trip
                        for us. We will definitely be back to Nepal with our children shortly and recommend this trek to
                        everyone!!!”</p>
                    <div class="post__profile">
                        <figure class="post__profile-media">
                            <img src="<?php echo get_template_directory_uri(); ?>/uploads/rr2.jpeg"
                                alt="Image of a trekking" />
                        </figure>
                        <p><strong>By Sofie<br></strong> Denmark</p>
                    </div>
                </div>
                <div class="post__review-comments post__review-comments--line">
                    <p>Before we book this trip with Glorious Himalaya, we were in trouble choosing the best and most
                        reliable local agency amongst the hundreds of tour companies in Nepal. And finally, we decided
                        to go Everest base camp trek with this agency after we researched in many ways. Their instant
                        response, reasonable price, a fair and ethical policy for looking after the porters and guides
                        impressed us to book with them.<br>

                        From the arrival to departure they managed all our hotel bookings, transfers and meals during
                        our Nepal stay.<br>

                        We had good times in the mountains during the trek. We did 12 days Everest base camp trek and 1
                        day sightseeing tour in Kathmandu. Our trekking guide Suman was exceptional and
                        well-experienced. Though the weather was not clear at Kalapather however overall trip was great
                        and well organized. Thanks to our porters’ shiva, raju and dal. Without your support, it would
                        not have been possible.<br>

                        We are happy to recommend your agency to adventure seekers who are planning to visit Nepal for
                        their holiday. Please go with this agency and we are sure you won’t be disappointed.<br>

                        Best regards from,<br>

                        Sean, Jordan, Michelle, Albert, Emma and Olivia</p>
                    <div class="post__profile">
                        <figure class="post__profile-media">
                            <img src="<?php echo get_template_directory_uri(); ?>/uploads/rr3.jpeg"
                                alt="Image of a trekking" />
                        </figure>
                        <p><strong>By Sean Paul<br></strong> United States</p>
                    </div>
                </div>
                <div class="post__review-comments post__review-comments--line">
                    <p>It was an awesome Everest base camp trek in the month of December with the Glorious Himalaya. It
                        was a bit cold in the month of December but the views were crystal clear and the flow of
                        tourists was low. We couldn’t imagine the sunrise view from the Kalapather that we had
                        experienced on this trek. If you are going on this trip don’t miss it.<br>

                        Due to our limited time, we spent only 2 nights in Namche bazaar for acclimatization. After
                        Namche, we continued the hike to Base camp without acclimatizing in Dingboche. Normally,
                        trekkers stay two nights at Dingboche for better acclimatization but we skipped it due to our
                        short holiday time.<br>

                        Our guide Siva was superb and porter Anis was superhuman. Even at the high altitude, he carried
                        our belongings easily. Hats up to your hard work man. Through this review, we would like to
                        suggest all the trekkers who are hiring guides and porters, please make them happy by giving
                        some tips at the end of the trek in Lukla as they work very hard in the high altitudes to make
                        your trip successful.<br>

                        In the end, we would like to thank Ganesh, who managed our EBC trek including our flights,
                        accommodations, meals, guide and porter.

                        Good luck team and will visit Nepal again with your agency.</p>
                    <div class="post__profile">
                        <figure class="post__profile-media">
                            <img src="<?php echo get_template_directory_uri(); ?>/uploads/rr4.jpeg"
                                alt="Image of a trekking" />
                        </figure>
                        <p><strong>By Henry And Suzane<br></strong> France</p>
                    </div>
                </div>
                <div class="post__review-comments post__review-comments--line">
                    <p>I am a solo traveler from Germany and did the Everest Base Camp trek in December 2019 with GHT.
                        From my arrival to the departure, everything was well planned and organized. Could not ask for
                        more. Thanks to the entire team from GHT. Wouldn’t have been possible without them!</p>
                    <div class="post__profile">
                        <figure class="post__profile-media">
                            <img src="<?php echo get_template_directory_uri(); ?>/uploads/rr5.jpeg"
                                alt="Image of a trekking" />
                        </figure>
                        <p><strong>By Jake Muller<br></strong> Germany</p>
                    </div>
                </div>
                <div class="post__review-comments post__review-comments--line">
                    <p>Excellent porters and guide. especially Budi. I will recommend you to my friend.
                        everything was very well organized.</p>
                    <div class="post__profile">
                        <figure class="post__profile-media">
                            <img src="<?php echo get_template_directory_uri(); ?>/uploads/rr6.jpeg"
                                alt="Image of a trekking" />
                        </figure>
                        <p><strong>By Kemal P<br></strong> Croatia</p>
                    </div>
                </div>
                <div class="post__review-comments post__review-comments--line">
                    <p>The trek went wonderfully and Ganesh went above and beyond to make sure I was having the best
                        time and worked tirelessly to ensure I could get to and back from Lukla effortlessly! Loved it!
                    </p>
                    <div class="post__profile">
                        <figure class="post__profile-media">
                            <img src="<?php echo get_template_directory_uri(); ?>/uploads/rr7.jpeg"
                                alt="Image of a trekking" />
                        </figure>
                        <p><strong>By Nathan H<br></strong> Australia</p>
                    </div>
                </div>
                <div class="post__review-comments post__review-comments--line">
                    <p>We were on Everest base camp trekking from 15.-30.04.2022. organized by the Gloroius Himalaya
                        agency, the group consisted of 14 mountaineers, the guides were Bisal and Buddi … everything was
                        perfectly organized, the guides were excellent and professional, all the recommendations and
                        praise.</p>
                    <div class="post__profile">
                        <figure class="post__profile-media">
                            <img src="<?php echo get_template_directory_uri(); ?>/uploads/rr8.jpg"
                                alt="Image of a trekking" />
                        </figure>
                        <p><strong>By Renato Milovski<br></strong> Croatia</p>
                    </div>
                </div>
                <div class="post__review-comments post__review-comments--line">
                    <p>The trekking has shown us wonderful natural environment, interesting places, people and culture,
                        as well as demanding physical challenge. The organization was excellent, and our guides Buddhi
                        and Bishal have shown competence, friendliness and a lot of motivation. Some of us had to return
                        eariler due to problems with altitude, and team did everything to organize return, welcome us in
                        Kathmandu and show us many interesting places there. Thanks for everything!</p>
                    <div class="post__profile">
                        <figure class="post__profile-media">
                            <img src="<?php echo get_template_directory_uri(); ?>/uploads/rr9.jpeg"
                                alt="Image of a trekking" />
                        </figure>
                        <p><strong>By Sven<br></strong> Croatia</p>
                    </div>
                </div>
                <div class="post__review-comments post__review-comments--line">
                    <p>🙌 Everest Base Camp Trekking was amazing, would recommend it to everyone. Buddy and Bishal are
                        the best guides !!<br>

                        Thank you to all Sherpas!</p>
                    <div class="post__profile">
                        <figure class="post__profile-media">
                            <img src="<?php echo get_template_directory_uri(); ?>/uploads/rr10.jpeg"
                                alt="Image of a trekking" />
                        </figure>
                        <p><strong>By Josip E<br></strong> Croatia</p>
                    </div>
                </div>
                <div class="post__review-comments post__review-comments--line">
                    <p>I found Glorious to be one of the most comprehensive companies when prepping you from the Everest
                        base camp trek.

                        The package actually covers you from start to finish once you land in Kathmandu and fly out for
                        there.<br>

                        My guide Roshan made the effort to fulfil every single request that I have thrown to him, it’s
                        not easy but he tries his best to ensure that I have the best experience possible and making
                        this trip a dream come through, I’ll definitely look at glorious again If I am ever looking to
                        do this again!</p>
                    <div class="post__profile">
                        <figure class="post__profile-media">
                            <img src="<?php echo get_template_directory_uri(); ?>/uploads/rr11.jpeg"
                                alt="Image of a trekking" />
                        </figure>
                        <p><strong>By SengAnn G<br></strong> Singapore</p>
                    </div>
                </div>
                <div class="post__review-comments post__review-comments--line">
                    <p>We enjoyed a great trekking experience in the Khumbu valley last October. Our trek was well
                        organized by the Glorious Himalaya Trekking agency: plane tickets to/from Lukla, friendly guide
                        and porters, good choice of lodges. Great thanks to you all 🙏</p>
                    <div class="post__profile">
                        <figure class="post__profile-media">
                            <img src="<?php echo get_template_directory_uri(); ?>/uploads/rr12.jpeg"
                                alt="Image of a trekking" />
                        </figure>
                        <p><strong>By Alain Beriner<br></strong> France</p>
                    </div>
                </div>
                <div class="post__review-comments post__review-comments--line">
                    <p>Again a great trip to the most beautiful spot on earth! Excellent organization and the best
                        guide/porter I could have. Will definitely try to come back in 2022.</p>
                    <div class="post__profile">
                        <figure class="post__profile-media">
                            <img src="<?php echo get_template_directory_uri(); ?>/uploads/rr3.jpeg"
                                alt="Image of a trekking" />
                        </figure>
                        <p><strong>By Villa D<br></strong> Poland</p>
                    </div>
                </div>
                <div class="post__review-comments post__review-comments--line">
                    <p>We wanted to do a shortened Everest Base Camp trek with our family (two kids of 13 and 9 years).
                        We choose Glorious Himalaya Agency without knowing them before. We were not disappointed, on
                        contrary, but impressed. Everything worked on time and as planned. The staff was friendly and
                        extremely professional and helpful. Exceptional porters and guides, too. Next trekking? Only
                        with them!</p>
                    <div class="post__profile">
                        <figure class="post__profile-media">
                            <img src="<?php echo get_template_directory_uri(); ?>/uploads/rr13.jpeg"
                                alt="Image of a trekking" />
                        </figure>
                        <p><strong>By Stefan<br></strong> Switzerland</p>
                    </div>
                </div>
                <div class="post__review-comments post__review-comments--line">
                    <p>We recently did 12 days Everest base camp trek through the Glorious Himalaya team. The views and
                        scenery were amazing throughout the trek.<br>

                        In the first part, we were stuck in Kathmandu for 2 days due to the foggy and windy weather. On
                        the 3rd day, we succeeded to fly to Lukla from where our trek begins. We trek via Phakding –
                        Namche Bazar – Tengboche – Dingboche – Gorakshep and then to Everest Base camp, which is the
                        main destination of our trip. The final hike from Gorakshep to Kalapather was a bit difficult
                        and exhausting but the views were magnificent once we reached the top – 5555 meters above sea
                        level. Even more, were stunned by the sunrise views.<br>

                        Overall, our trip was amazing and worth every penny.
                        In the end, we would like to thanks all the trekking staff of Glorious Himalaya. Due to their
                        assistance, we were able to complete this trek without any difficulties. Hence, we strongly
                        recommend GHT team for any kind of Nepal tour. They are a highly experienced, reliable, and
                        trustworthy company in Nepal.</p>
                    <div class="post__profile">
                        <figure class="post__profile-media">
                            <img src="<?php echo get_template_directory_uri(); ?>/uploads/rr14.jpeg"
                                alt="Image of a trekking" />
                        </figure>
                        <p><strong>By Kamal D<br></strong> Bhutan</p>
                    </div>
                </div>
                <div class="post__review-comments post__review-comments--line">
                    <p>“I was on a trek on a group of 6 with Buddhi. He is a dynamic, energetic, and supportive guide.
                        He always kept us motivated, continuously interacting with us on our health and conditions to
                        make sure that we are coping well with the height. He was regularly asking if there are ways to
                        make ourselves more comfortable. His abundance of experience as a trekking guide really made our
                        trek easier. I highly recommend Buddhi and thank all the team members of Glorious for organizing
                        the amazing experience we had on the EBC trek.”</p>
                    <div class="post__profile">
                        <figure class="post__profile-media">
                            <img src="<?php echo get_template_directory_uri(); ?>/uploads/rr15.jpeg"
                                alt="Image of a trekking" />
                        </figure>
                        <p><strong>By Leon Steiner<br></strong> Austria</p>
                    </div>
                </div>
                <div class="post__review-comments post__review-comments--line">
                    <p>“Everest was phenomenal !!! Even if we did not had luck with the weather, we still enjoyed the
                        trip. Bishal was the greatest guide in Nepal. He wouldn’t leave my side even though I was hours
                        behind the main party. He even braved rafting the Trisuli River with us althoudh he did mention
                        he would NEVER go rafting again. (doesn’t like getting tossed around and overboard on our raft)”
                    </p>
                    <div class="post__profile">
                        <figure class="post__profile-media">
                            <img src="<?php echo get_template_directory_uri(); ?>/uploads/rr16.jpeg"
                                alt="Image of a trekking" />
                        </figure>
                        <p><strong>By Leon Steiner<br></strong> Austria</p>
                    </div>
                </div>
                <div class="post__review-comments post__review-comments--line">
                    <p>“I was on a trek on a group of 6 with Buddhi. He is a dynamic, energetic, and supportive guide.
                        He always kept us motivated, continuously interacting with us on our health and conditions to
                        make sure that we are coping well with the height. He was regularly asking if there are ways to
                        make ourselves more comfortable. His abundance of experience as a trekking guide really made our
                        trek easier. I highly recommend Buddhi and thank all the team members of Glorious for organizing
                        the amazing experience we had on the EBC trek.”</p>
                    <div class="post__profile">
                        <figure class="post__profile-media">
                            <img src="<?php echo get_template_directory_uri(); ?>/uploads/rr17.jpeg"
                                alt="Image of a trekking" />
                        </figure>
                        <p><strong>By Jenny<br></strong> Canada</p>
                    </div>
                </div>
                <div class="post__review-comments post__review-comments--line">
                    <p>“The trek experience with this company was amazing! Ganesh made everything possible within 2 days
                        of booking including a good briefing answering all the relevant questions!
                        The guide Dakman and Porter Kumal were very helpful and knowledgeable about the mountains,
                        granting me the best experience possible for EBC. I definitely recommend booking via this
                        company!”</p>
                    <div class="post__profile">
                        <figure class="post__profile-media">
                            <img src="<?php echo get_template_directory_uri(); ?>/uploads/rr18.jpeg"
                                alt="Image of a trekking" />
                        </figure>
                        <p><strong>By Maximilan<br></strong> Germany</p>
                    </div>
                </div>
                <div class="post__review-comments post__review-comments--line">
                    <p>““Glorious Himalaya gave us a competitive package and excellent service right from the first
                        contact over email. Ganesh, who runs the company is very punctual, proficient, welcoming and has
                        an excellent team. His expertise and guidance on the EBC trek supported us to finalize this
                        grand trek in a remarkably short time.<br>

                        The guide (Buddhi), porters and all the combinations throughout our trek were great. Buddhi was
                        very humble and even played football with my young boys. He made sure we are happy and
                        comfortable. The hotels and lodges arranged by Ganesh/Buddhi throughout the whole trek (Namche
                        Bazar, Tengboche, Lukla) were really comfortable, well placed, neat and tidy with the delicacy
                        of meals and service.<br>

                        I would highly recommend Glorious Himalaya for trekking in Nepal.<br>”AMAZING COMPANY WITH
                        EXCELLENT
                        SERVICE AND FLEXIBILITY</p>
                    <div class="post__profile">
                        <figure class="post__profile-media">
                            <img src="<?php echo get_template_directory_uri(); ?>/uploads/rr19.jpeg"
                                alt="Image of a trekking" />
                        </figure>
                        <p><strong>By Amelie Chevrolet<br></strong> France</p>
                    </div>
                </div>
                <div class="post__review-comments post__review-comments--line">
                    <p>“Wonderfully Organized Ganesh and His Team!!!
                        Everything was very professional and perfectly planned.
                        It felt like more of a journey than a trip.<br>

                        Our Local Guide Dakman knew much more than the rest of the guides and explained to us everything
                        that we saw while on the trek. It was interesting that he knew every hotel and lodge owner. We
                        couldn’t have completed this trip without his knowledge, experience, and guidance was perfect.
                        He was continually asking about our health and comfort for the 12 days. With the fantastic
                        guidance and care of Dakman, our amazing group of 9 reached EBC with only minimal effects from
                        the altitude.<br>

                        In General, I considered our Guide, Porters and Company was very professional and well
                        experienced, responsible and caring all the way.<br>

                        Thank you to Glorious, Dakman and all the Porters for a remarkable trip!”</p>
                    <div class="post__profile">
                        <figure class="post__profile-media">
                            <img src="<?php echo get_template_directory_uri(); ?>/uploads/rr20.jpeg"
                                alt="Image of a trekking" />
                        </figure>
                        <p><strong>By Arnellie<br></strong> United Kingdom</p>
                    </div>
                </div>
                <div class="post__review-comments post__review-comments--line">
                    <p>I have on this Nepal trip with Glorious Himalaya Trekking team twice. This season (May 2014), I
                        did Everest base camp trek with my family (Father / Husband / Son / Daughter) and it was a
                        brilliant trip for us with the assist of GHT member. From our arrival in Kathmandu airport to
                        the departure dates, company members take all the responsibility very well and we really like
                        their way of traditionally welcome to the guest by “Namastee”.<br>

                        Guide of this company is very experienced, skilled, knowledgeable and have ability to handle the
                        critical situations. During this trip my father had some food poison problem but he get well
                        with in two days because of our Guide “Chandra” guidance. He knows very well about the food
                        poison treatment which is one of the most important part of the Himalayan guide. And our porters
                        Ram and Guru was very helpful and smiley faces and friendly as well. We had lots of memorable
                        moments during this trip with my family.<br>

                        Well, me and my family members do not have hesitation to recommend this trekking company for
                        your adventure holidays to my friends, relatives and the adventure travelers. And I can’t wait
                        to organize my next trip with this company in near future.

                    </p>
                    <div class="post__profile">
                        <figure class="post__profile-media">
                            <img src="<?php echo get_template_directory_uri(); ?>/uploads/rr21.jpeg"
                                alt="Image of a trekking" />
                        </figure>
                        <p><strong>By Lucia's Family<br></strong> Mexico City</p>
                    </div>
                </div>
                <div class="post__review-comments post__review-comments--line">
                    <p>“It was such a memorable moment in our life. Everest base camp trek offers not only the views of
                        giant mountains, but it also gives a chance to explore the culture of the Sherpa community,
                        valleys and the remoteness of Khumbu region.”


                    </p>
                    <div class="post__profile">
                        <figure class="post__profile-media">
                            <img src="<?php echo get_template_directory_uri(); ?>/uploads/rr22.jpeg"
                                alt="Image of a trekking" />
                        </figure>
                        <p><strong>By Christina Perry<br></strong> Australia</p>
                    </div>
                </div>
                <div class="post__review-comments post__review-comments--line">
                    <p>“We successfully completed EBC Trek last October with the help of Ganesh and His Team.
                        The thrilling flight to Lukla was an adventure in itself.
                        The trek was challenging but rewarding in every way.
                        Standing on the lap of Everest was the most exciting and unique experience we’ve ever had.

                        Everything was well organized and the service could not have been better.
                        We can’t ask for more but only to thank them for our successful trip.
                        Thanks to our Guide, Porters, and the entire team for helping us complete this trek.
                        Our guide Ram was very professional, well informed and explained to us very well.
                        Accommodation and meals were very appreciated.

                        We carried wonderful memories flying back home and still miss the mountains!!!
                        See you on our more future trips to Nepal. I would definitely recommend this once in a lifetime
                        trek to Everyone. Thank you! Ganesh and his team for organizing this trip”

                    </p>
                    <div class="post__profile">
                        <figure class="post__profile-media">
                            <img src="<?php echo get_template_directory_uri(); ?>/uploads/rr23.jpeg"
                                alt="Image of a trekking" />
                        </figure>
                        <p><strong>By Ruben<br></strong> Holland</p>
                    </div>
                </div>
                <div class="post__review-comments post__review-comments--line">
                    <p>Ktm-Lukla-Gokyo-Kalapathar-Base Camp-Lukla-Ktm. I did the typical tourists up hits at the famous
                        Mt. Everest Trek in Solokhumbhu. The trek was scheduled for 17 days but we completed the trek in
                        15, because of good weather. It was really fun and exhausting at the same time. The highlight
                        was not the Base Camp but the Chola Pass. (Bhes, my Guide was right saying that Base Camp is not
                        worth visiting and Chola is the best) Bhes is a very experienced guide and a very friendly
                        person. He actually made this trip a unique experience not only in terms of sportive action but
                        also in cultural exchange. Thank you very much for this experience.
                    </p>
                    <div class="post__profile">
                        <figure class="post__profile-media">
                            <img src="<?php echo get_template_directory_uri(); ?>/uploads/rr24.jpeg"
                                alt="Image of a trekking" />
                        </figure>
                        <p><strong>By Karther<br></strong> Germany</p>
                    </div>
                </div>
                <div class="post__review-comments post__review-comments--line">
                    <p>“We really enjoyed our EBC trip which was our unforgettable moments in our life. Full of
                        adventure, majestic mountain views, valleys and landscapes.”


                    </p>
                    <div class="post__profile">
                        <figure class="post__profile-media">
                            <img src="<?php echo get_template_directory_uri(); ?>/uploads/rr26.jpeg"
                                alt="Image of a trekking" />
                        </figure>
                        <p><strong>By Kimber Alex<br></strong> Canada</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php include 'modules/flex-content/flex-content.php'; ?>
</main>
<?php get_footer();