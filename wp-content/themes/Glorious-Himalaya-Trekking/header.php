<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
 <meta charset="<?php bloginfo( 'charset' ); ?>">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">

<!--COVERFLOW CAROUSEL CSS
 <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>-->

 <?php wp_head(); ?>
 
 
<body <?php body_class(); ?>>



  <header>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
 <link href='https://fonts.googleapis.com/css?family=Roboto|Open+Sans' rel='stylesheet'>
    <div class="top-header">
      <div class="container">
        <span style="margin-right: 20px"><i class="fab fa-whatsapp"></i> +977-9813637616</span>
        <a href = "mailto: info@glorioushimalaya.com" style="color: #fff;"><i class="fas fa-envelope"></i>  info@glorioushimalaya.com</a>
      </div>
    </div>
    <div class="container">
      <div class="header-wrap clearfix">
      
      <nav class="ght-main-menu navbar navbar-expand-lg p-0 navbar-light w-100">
      
        <div class="main-logo">
         <?php 
         $custom_logo_id = get_theme_mod( 'custom_logo' );
         $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
         $upload_dir = wp_upload_dir(); ?>
         <span class="lg-logo"><a href="<?= get_site_url()?>"><img src="<?php echo $image[0]; ?>" alt="Glorious Himalaya" > <br><span style="color: #fff;font-size: 11px;float: right;font-weight: lighter;">Dream Dare Discover</span></a></span>
         <span class="sm-logo"><a href="<?= get_site_url()?>"><img src="https://www.glorioushimalaya.com/wp-content/uploads/2020/10/logo.png" alt="Glorious Himalaya" ></a></span>         
       </div>
       <div class="form-menu-wrap order-md-3">
        <!--<div class="top-search-form tab-lg-screen">
         <form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ) ?>">
          <div class="input-group mb-3">
            <input type="search" class="search-field" placeholder="Search" value="<?php echo get_search_query() ?>" name="s" />
            <div class="input-group-prepend">
              <button type="submit" class="search-submit"><i class="fa fa-search"></i></button>
            </div>
          </div>
        </form>
      </div>tab-lg-screen-->

      <div class="top-search-form">
        <button class="openBtn" onclick="openSearch()"> | &nbsp; <i class="fas fa-search"></i></button>
        <div id="myOverlay" class="overlay">
          <span class="closebtn" onclick="closeSearch()" title="Close Overlay">×</span>
          <div class="overlay-content">
            <form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ) ?>">
              <div class="input-group mb-3">
                <input type="search" class="search-field" placeholder="Search" value="<?php echo get_search_query() ?>" name="s" />
                <div class="input-group-prepend">
                  <button type="submit" class="search-submit"><i class="fa fa-search"></i></button>
                </div><!--input-group-prepend-->
              </div><!--input-group mb-3-->
            </form>
          </div><!--overlay-content-->
        </div><!--myOverlay-->
      </div><!--tab-sm-screen-->
    </div>

       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

<div class="collapse navbar-collapse" id="navbarSupportedContent">
    <?php
    wp_nav_menu(array(
      'theme_location' => 'primary',
      'container'      => false,
      'menu_class'     => 'nav navbar-nav main-primary-nav ml-auto',
      'walker'          => new WP_Bootstrap_Navwalker(),      
    ));
    ?> 
    </div>
    </nav> 
  </div>
</div>

<script>
  function openSearch() {
    document.getElementById("myOverlay").style.display = "block";
  }

  function closeSearch() {
    document.getElementById("myOverlay").style.display = "none";
  }
</script>
</header>