<!DOCTYPE html>
<html lang="en-US">

<head>

    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="style.css" class="stylesheet">
    <link rel=“stylesheet” href=“https://use.typekit.net/ojw1zlp.css”>
    <!-- Included via Site Options -->
    <?php if (get_field('site_header_code') != '') {
        echo $get_field('site_header_code');
    } ?>
    <!-- End Site Options -->

    <?php wp_head(); ?>


<body <?php body_class(); ?>>
    <!-- Included via Site Options -->
    <?php if (get_field('site_header_code') != '') {
        echo $get_field('site_body_code');
    } ?>
    <!-- End Site Options -->
    <header class="header js-header">
        <div class="container">
            <div class="logo__container">
                <div class="header__logo">
                    <a href="<?php echo esc_url(
                        home_url('/')
                    ); ?>" class="logo__link">
                        <figure class="logo__wrap">
                            <img class="header__logo-image"
                                src="<?php echo get_template_directory_uri(); ?>/uploads/glorious.png"
                                alt="Image of a logo" />
                        </figure>
                        <meta itemprop="name" content="<?php bloginfo(
                            'name'
                        ); ?>">
                    </a>
                </div>
                <div class="header__info">
                    <div class="header__info-wrapper">
                        <div class="header__contact">
                            <p>We are open, 24/7!</p>
                            <p><a href="tel:+977 1 4259 098"><svg class="icon icon-icon-phone">
                                        <use xlink:href="#icon-icon-phone"></use>
                                    </svg> +977 1 4259 098</a></p>
                        </div>
                        <figure class="header__profile">
                            <img src="<?php echo get_template_directory_uri(); ?>/uploads/profile.png"
                                alt="Image of a trekking" />
                        </figure>
                    </div>
                    <div class="header__details">
                        <div class="header__details-phoneNo">
                            <svg class="icon icon-icon-whatsapp">
                                <use xlink:href="#icon-icon-whatsapp"></use>
                            </svg>
                            <svg class="icon icon-icon-viber">
                                <use xlink:href="#icon-icon-viber"></use>
                            </svg>
                            <a href="tel:+977 1 4259 098">+977 1 4259098</a>
                        </div>
                        <div class="header__email">
                           
                            <svg class="icon icon-icon-email">
                                <use xlink:href="#icon-icon-email"></use>
                            </svg>
                            <a href="mailto:info@glorioushimalaya.com">info@glorioushimalaya.com</a>
                        </div>
                    </div>
                </div>

            </div>
          


            <?php
// $menuArgs = array(
//     'container' => false,
//     'menu' => 'Main Navigation',
//     'menu_class' => 'primaryNav'
// );
// wp_nav_menu($menuArgs);
?>


        </div>
        <div class="header__mainNav">
            <div class="container">
                <ul class="header__navList">
                    <li class="header__navLinks"><a href="#">Nepal</a></li>
                    <li class="header__navLinks"><a href="#">Tibet</a></li>
                    <li class="header__navLinks"><a href="#">Nepal Trekking</a></li>
                    <li class="header__navLinks"><a href="#">About Us</a></li>
                    <li class="header__navLinks"><a href="#">GHT Special Trips</a></li>
                    <li class="header__navLinks"><a href="#">Travel Guides</a></li>
                    <li class="header__navLinks"><a href="#">Contact Us</a></li>
                </ul>
                <div class="burger">
                    <a href="#" class="mobileNav__toggle js-nav-toggle">
                        <span class="accessible-text">Click to toggle navigation menu.</span>
                        <div class="menuBar__container">
                            <span class="menuBar"></span>
                            <span class="menuBar"></span>
                            <span class="menuBar"></span>
                        </div>
                    </a>
                </div>
                <div class="header__search">
                    <button>
                        <svg class="icon icon-icon-search">
                            <use xlink:href="#icon-icon-search"></use>
                        </svg>
                    </button>
                </div>

            </div>
        </div>
    </header>