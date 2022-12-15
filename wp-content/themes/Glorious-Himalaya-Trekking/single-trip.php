<?php
/**
 * Template Name: Single Trip Page
 *
 */
get_header(); ?>
<div class="main-wrapper trip-main-page">
  <?php get_template_part('template-part/design', 'imagebanner'); ?>
  <div class="container">  <h1><?php echo the_title(); ?></h1>
    <?php $duration = get_field('duration'); ?>
    <div class="sm-screen" style="margin-bottom: 30px;">
       <div class="trip-sidebar tripmargin">
          <div class="tr-price sidebar-margin">
            <span>Price From</span><br/>
            <?php if(get_field('trip_price')) : ?>
              <span>
                 <span style='font-size:25px;font-weight: bold;'>US $<?php echo get_field('trip_price') ?></span>
             </span>
             <?php else : ?>
              <span>Ask Us</span>
          <?php endif ?>
      </div>
      <?php if(get_field('trip_price_menu')) : ?>
        <div class="tr-price-menu sidebar-margin">
          <a class="btn btn-link" data-toggle="collapse" data-target="#collapse<?php echo $collapse; ?>" aria-expanded="true" aria-controls="collapse<?php echo $collapse; ?>">
            <i class="fas fa-users"></i> Price Detail<i class="fas fa-angle-down rotate-icon"></i>
        </a>
        <div id="collapse<?php echo $collapse; ?>" class="collapse" aria-labelledby="heading<?php echo $collapse; ?>" data-parent="#accordion<?php echo $accordion; ?>">
            <div class="card-body">
              <?php
              if( have_rows('trip_price_menu') ): ?>
                <table class="table">
                  <tr>
                    <th>People</th>
                    <th>Price</th>
                </tr>
                <?php while ( have_rows('trip_price_menu') ) : the_row(); ?>
                    <tr>
                      <td> <?php echo the_sub_field('number_of_people'); ?></td>         
                      <td>US $<?php echo the_sub_field('price_per_people'); ?></td>
                  </tr>  
                  <?php endwhile;?>
          </table>
      <?php else :  
      endif;
      ?>
  </div>
</div>
</div>
<?php else :
endif;
if(get_field('booking_form')):?>
 <div class="booking-form-embed sidebar-margin"> 
    <?php echo get_field('booking_form'); ?>
</div><!--booking-form-embed -->
<?php else :?>
    <div class="sidebar-margin">
      <a href="<?= get_site_url()."/booking?taxonomies=".$post->post_title ?>" class="btn btn-green" style="width: 100%;text-transform: uppercase;">Book Now</a>
  </div><!--sidebar-margin-->
<?php endif;
$file = get_field('download_pdf');
if( $file ): ?>
    <a href="<?php echo $file['url']; ?>" class="btn btn-org sidebar-margin" target="_blank">Download PDF</a>
<?php endif; ?>
<div class="tr-points" style="margin-top: 20px">
<?php
$id = 2718; // add the ID of the page where the zero is
$p = get_page($id);
echo apply_filters('the_content', $p->post_content);
?>
</div>
<?php if(get_field('trip_map_route')): ?>
    <div class="tr-map sidebar-margin" style="border:1px solid #ede;padding:15px;">
      <span style="display: block;" >Route Map</span>
      <a rel="lightbox" href="<?php the_field('trip_map_route'); ?>"><img src="<?php the_field('trip_map_route'); ?>" alt="<?php the_title(); ?>"  style="margin-top: 10px"/></a>
  </div> <!--tr-map-->
  <?php else : endif; ?>
 </div>
</div>
<div class="container">
<div class="main-content">
  <body data-spy="scroll" data-target=".navbar" data-offset="50">
    <nav id="trip-tab" class="navbar navbar-expand-sm" >  
      <ul class="navbar-nav">
        <div class="container">
          <li class="nav-item">
            <a class="nav-link" href="#overview">Trip Overview</a>
        </li>
        <?php if(get_field('trip_itinerary')):?>
            <li class="nav-item">
              <a class="nav-link" href="#iti-tab">Itinerary</a>
          </li>
          <?php else : endif;
          if(get_field('trip_includes')) :?>
              <li class="nav-item">
                <a class="nav-link" href="#inc-tab">Include/Exclude</a>
            </li>
            <?php else : endif?>
                <li class="nav-item">
                  <a class="nav-link" href="#date-tab">Date and Costs</a>
              </li>
              <?php if(get_field('trip_info')) :?>
                  <li class="nav-item">
                    <a class="nav-link" href="#info-tab">Trip Info</a>
                </li>
                <?php else : endif?>
                <li class="nav-item">
                    <a class="nav-link" href="#rev-tab">Reviews</a>
                </li>
            </div>
        </ul>
    </nav>
    <div class="row">
      <div class="col-md-8">
        <div class=" single-trip-section lg-screen">
          <section id="overview" class="tripmargin">
            <div class="tr-facts tripmargin section-block">
              <div class="row">

                <div class="col-md-6">
                  <div class="facts-block">
                    <?php if(get_field('duration')) :
                        $field = get_field_object('duration'); ?> 
                       <p><i class="fa fa-calendar" aria-hidden="true"></i><span><?php echo $field['label']; ?></span>: <?php echo $field['value']; ?> days</p>
                       <?php else : endif;
                       if(get_field('starts_at')) :
                            $field = get_field_object('starts_at');  ?>
                         <p><i class="fa fa-map-marker" aria-hidden="true"></i><span><?php echo $field['label']; ?></span>: <?php echo $field['value']; ?></p>
                         <?php else : endif;
                         if(get_field('grade')) :?>
                           <?php $field = get_field_object('grade'); ?>
                           <p><i class="fas fa-signal" aria-hidden="true"></i><span><?php echo $field['label']; ?></span>: 
                              <?php if(strtolower($field['value'])== 'moderate'): ?>
                                Moderate <a data-toggle="tooltip" data-placement="top" title="It is slightly challenging, involves several uphill and downhill walks, and requires reasonable fitness and good health. Expect to walk 6-7 hours each day on a steep hilly landscape where the altitude can go up high to 4500 m with daily ascends of around 400-700m. Previous trekking experience is beneficial.">
                                  <i class="fas fa-question-circle"></i> 
                              </a>
                              <?php elseif(strtolower($field['value'])=='easy'): ?>
                                  Easy <a data-toggle="tooltip" data-placement="top" title=This includes the easiest treks, which require no prior experience, no strenuous climbing, or walk on snowy trails. These treks only include lower elevations where the altitude go up high to 3000m with daily ascents of around 300-600m. Anyone healthy and fit enough to walk for 4-6 hours (approx) a day can accomplish easy treks. ">
                                    <i class="fas fa-question-circle"></i> 
                                </a>
                                <?php elseif(strtolower($field['value'])=='hard'): ?>
                                    Hard <a data-toggle="tooltip" data-placement="top" title="The tiring long walks back to Lukla from Base Camp are replaced by a comfortable ride on a helicopter. The return by Heli trek is perfect for those who wish to have a fantastic trek to Everest Base camp">
                                      <i class="fas fa-question-circle"></i> 
                                  </a>
                                  <?php elseif(strtolower($field['value'])=='difficult'): ?>
                                      Difficult <a data-toggle="tooltip" data-placement="top" title="These treks cover a remote environment that involves 6-8 hours walk on a cross steep hilly terrain with occasional snow-covered high passes at an elevation up to 5700m. Some days, you may have very basic accommodation facilities. You may also need crampons and axes to conquer some parts of this trekking trail in case of heavy snow. Therefore previous trekking experience, reasonable fitness, and a positive attitude are essential.">
                                      <i class="fas fa-question-circle"></i>
                                    </a>
                                    <?php elseif(strtolower($field['value'])=='strenuous'): ?>
                                        Strenuous <a data-toggle="tooltip" data-placement="top" title="Often in very remote areas, strenuous treks involve 6-8 hours walk per day with several longer days (up to 10 hours). This also involves traveling on a very high elevation, over high snow-covered passes, with the availability of few facilities for extended periods. You will require daily ascends and descends of around 500-100 meters. You may need axes and crampons to cross the high passes, in some extreme cases. A high level of physical and mental fitness, an optimum level of experience, and a positive attitude are therefore essential.">
                                          <i class="fas fa-question-circle"></i> 
                                      </a>
                                      <?php elseif(strtolower($field['value'])=='challenging'): ?>
                                          Challenging <a data-toggle="tooltip" data-placement="top" title="Often in very remote areas, strenuous treks involve 6-8 hours walk per day with several longer days (up to 10 hours). This also involves traveling on a very high elevation, over high snow-covered passes, with the availability of few facilities for extended periods. You will require daily ascends and descends of around 500-100 meters. You may need axes and crampons to cross the high passes, in some extreme cases. A high level of physical and mental fitness, an optimum level of experience, and a positive attitude are therefore essential. ">
                                            <i class="fas fa-question-circle"></i> 
                                        </a>
                                        <?php else : endif; ?>                     
                                    </p>
                                    <?php else : endif;
                                    if(get_field('accomodation')) :
                                    $field = get_field_object('accomodation');  ?>
                                      <p><i class="fas fa-hotel" aria-hidden="true"></i><span><?php echo $field['label']; ?></span>: <?php echo $field['value']; ?></p>
                                      <?php else : endif;
                                      if(get_field('transport')) :
                                        $field = get_field_object('transport'); ?>
                                        <p><i class="fa fa-bus" aria-hidden="true"></i><span><?php echo $field['label']; ?></span>: <?php echo $field['value']; ?></p>
                                        <?php else : endif ?>
                                    </div>
                                </div><!--col-md-6-->
                                <div class="col-md-6">
                                  <div class="facts-block ">
                                    <?php if(get_field('altitude')) :
                                        $field = get_field_object('altitude'); ?>
                                       <p><i class="fas fa-arrow-up" aria-hidden="true"></i><span><?php echo $field['label']; ?></span>: <?php echo $field['value']; ?></p>
                                       <?php else: endif;
                                       if(get_field('ends_at')) :
                                       $field = get_field_object('ends_at'); ?>
                                         <p><i class="fa fa-map-marker" aria-hidden="true"></i><span><?php echo $field['label']; ?></span>: <?php echo $field['value']; ?></p>
                                         <?php else: endif;
                                         if(get_field('group_size')) :
                                            $field = get_field_object('group_size'); ?>
                                           <p><i class="fas fa-user-friends" aria-hidden="true"></i><span><?php echo $field['label']; ?></span>: <?php echo $field['value']; ?></p>
                                           <?php else: endif;
                                           if(get_field('meals')) : ?>
                                             <?php $field = get_field_object('meals'); ?>
                                             <p><i class="fas fa-utensils" aria-hidden="true"></i><span><?php echo $field['label']; ?></span>: <?php echo $field['value']; ?></p>
                                             <?php else: endif; ?>
                                         </div>
                                     </div><!--col-md-6-->
                                 </div><!--row-->
                                 <?php
                                 if( have_rows('trip_facts') ): ?>
                                  <div class="row"> 
                                     <?php while ( have_rows('trip_facts') ) : the_row(); ?>
                                       <div class="col-md-6">
                                          <div class="facts-block">
                                            <p>
                                              <span> <?php echo the_sub_field('facts_title'); ?> : </span>
                                              <?php echo the_sub_field('facts_detail'); ?>           
                                          </p>          
                                      </div><!--facts-block-->
                                  </div><!--col-md-6-->
                                  <?php $counter++; if($counter % 4 === 0) :  echo '</div> <div class="row">'; endif;
                                  endwhile; ?>
                          </div><!--row-->
                      <?php endif; ?>
                  </div><!--tr-facts -->
                  <?php if(get_field('trip_highlights')) : ?>
                      <div class="tr-highlight tripmargin section-block" >
                        <h3> Highlights</h3>
                        <?php echo the_field('trip_highlights'); ?>
                    </div><!--trip_highlights -->
                    <?php else :
                    endif;
                    if(get_field('trip_gallery')) { ?>
                    <div class="trip-info tripmargin section-block">
                        <div class="row">
                          <?php if(get_field('trip_gallery')) : ?>
                            <div class="col-3">
                               <?php 
                               $images = get_field('trip_gallery');
                               if($images): ?>
                                  <div class="gallery">   
                                    <?php $i=0; foreach( $images as $image ) : ?>
                                    <a href="<?php echo $image['url']; ?>" target="_blank" data-fancybox="gallery" class="thumbnail" style="color:#373737">
                                      <?php if( $i==0 ) : ?>
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-blue">
                                          <i class="fas fa-image"></i>
                                      </button>
                                      <div>Gallery</div>         
                                  <?php endif; ?>
                              </a>
                              <?php $i++; endforeach; ?>
                          </div><!--gallery-->
                      <?php endif; ?>
                  </div><!--col-md-4-->
                  <?php else :
                  endif; ?>
                  
                  
                          <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
                  <?php
                  if(get_field('trip_checklist')) : ?>
                    <div class="col-3">
                       <div class="trip-checklist">
                          <button type="button" class="btn btn-blue" data-toggle="modal" data-target="#check-list">
                            <i class="fas fa-th-list"></i>  
                        </button>
                        <div>
                            CheckList
                        </div><!--trip-checklist-->
                        <div class="modal fade bd-example-modal-lg" id="check-list" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered  modal-lg" role="document">
                              <div class="modal-content">
                                 <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Checklist</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                  </button>
                              </div><!--modal-header-->
                              <div class="modal-body">
                                <button class="btn btn-green"><a href="javascript:window.print()"><i class="fas fa-print"></i> Print </a></button>
                                <div style="width: 100%;overflow: hidden;">
                                  <?php echo get_field('trip_checklist'); ?>
                              </div>
                          </div><!--modal-body-->
                      </div><!--modal-content-->
                  </div><!--modal-dialog-->
              </div><!--modal-->
          </div><!--trip-checklist-->
      </div><!--col-md-4-->
      <?php else :
      endif;
      if(get_field('trip_video')) {
      
      
      preg_match('/src="([^"]+)"/', get_field('trip_video'), $match);
      if(isset($match[1])){
            $url = $match[1];



 ?>
          <div class="col-3">
            <div class="embed-container">
              <a type="button" class="btn btn-blue" data-fancybox="gallery" href="<?php echo $url; ?>">
                <i class="fas fa-video"></i>
            </a>
            <div>Video</div>
  </div><!--embed-container-->
</div><!--col-md-4-->
            <?php  } ?>
<?php }
      if(get_field('trip_map_embeded')) {
      
      
      preg_match('/src="([^"]+)"/', get_field('trip_map_embeded'), $match);
      if(isset($match[1])){
            $url = $match[1];



 ?>
          <div class="col-3">
            <div class="embed-container">
              <a type="button" class="btn btn-blue" data-type="iframe" data-fancybox href="<?php echo $url; ?>">
                <i class="fas fa-map-marker-alt"></i>
            </a>
            <div>Map</div>
  </div><!--embed-container-->
</div><!--col-md-4-->
            <?php  } ?>
<?php } ?>
</div><!--row-->
</div><!--trip-info-->
<?php } ?>

<div class="section-block">
<h3> Overview</h3>
<?php while (have_posts()) : the_post(); the_content(); endwhile;?>
</div>
</section><!--overview-->
<?php if (get_field('trip_itinerary')): ?>
    <section id="iti-tab" class="trip-accordion tripmargin section-block">
      <h3>Itinerary</h3>
      <!-- <button type="button" class="btn btn-primary">Expand/Collapse All</button> -->
      <div onclick="expandCollapse()" id="expand-collapse" align="right">Expand All</div>
      <!--                                                    <button class="btn btn-primary" type="button" data-toggle="collapse" data-target=".multi-collapse" aria-expanded="false" aria-controls="collapse1 collapse2">Toggle both elements</button>-->
      <?php if( have_rows('trip_itinerary') ): $accordion++; ?>
        <div id="accordion<?php echo $accordion; ?>">
          <?php while ( have_rows('trip_itinerary') ) : the_row(); $collapse++; ?>
            <div class="card">
              <div class="card-header" id="heading<?php echo $collapse; ?>">
                <h5 class="mb-0">
                  <button class="btn btn-link trigger-buttom collapsed" data-toggle="collapse" data-target="#collapse<?php echo $collapse; ?>" aria-expanded="true" aria-controls="collapse<?php echo $collapse; ?>">
                    <?php the_sub_field("trip_title"); ?><i class="fas fa-angle-down rotate-icon"></i>
                </button>
            </h5>
        </div><!--card-header-->
        <div id="collapse<?php echo $collapse; ?>" class="collapse  multi-collapse" aria-labelledby="heading<?php echo $collapse; ?>" data-parent="#accordion<?php echo $accordion; ?>">
            <div class="card-body">
              <?php the_sub_field("trip_detail"); ?>
              <div class="trip-extra-wrap">
                <?php
                if( have_rows('trip_extra_information') ): ?>
                  <div class="row">
                     <?php while ( have_rows('trip_extra_information') ) : the_row(); ?>
                        <div class="col-md-6">
                          <div class="trip-extra-wrap-info">
                            <div style="float: left"><?php the_sub_field("trip_extra_icon"); ?></div>
                            <div style="float: left;"><strong><?php the_sub_field("trip_extra_title"); ?></strong><br/>
                              <span><?php the_sub_field("trip_extra_info"); ?></span>
                          </div>
                      </div> <!--trip-extra-->   
                  </div>  <!--col-md-6-->
              <?php endwhile; ?>
          </div>   <!--row-->  
      <?php endif; ?>
  </div><!--trip-extra-wrap-->
</div><!--card-body-->
</div><!--collapse-->
</div><!--card-->
<?php endwhile; ?>
</div><!--accordion-->
<?php endif; ?>
</section><!--iti-tab-->
<?php else : endif; if(get_field('trip_includes')) :?>
<section id="inc-tab" class="tripmargin section-block">
    <?php if(get_field('trip_includes')) :?>
      <div class="tr-inc tripmargin">
        <?php
        $field = get_field_object('trip_includes');
        ?>
        <h3><?php echo $field['label']; ?>:</h3> <?php echo $field['value']; ?>
    </div>
    <?php else : endif; if(get_field('trip_exclude')) :?>
        <div class="tr-exc tripmargin">
          <?php
          $field = get_field_object('trip_exclude');
          ?>
          <h3><?php echo $field['label']; ?>:</h3> <?php echo $field['value']; ?>
      </div>
      <?php else : endif; ?>
  </section><!--inc-tab-->
  <?php else : endif;?>

  <section id="date-tab" class="tripmargin section-block">
     <?php if(get_field('available_dates')):?>
     <div class="date-available">
          <h3>Join Our Fixed Trip Date</h3>
          <div style="margin-bottom: 25px;">
            <ul>
               <?php $fields = get_field_object('available', 2718 ); ?>
              <li><span style="color:#333;"><?php echo $fields['label']; ?>: <?php echo $fields['value'] ?></span></li>
               <?php $fields = get_field_object('guarantee', 2718 ); ?>
              <li><span style="color:#333;"><?php echo $fields['label']; ?>: <?php echo $fields['value'] ?></span></li>
               <?php $fields = get_field_object('limited', 2718 ); ?>
              <li><span style="color:#333;"><?php echo $fields['label']; ?>: <?php echo $fields['value'] ?></span></li>
               <?php $fields = get_field_object('sold_out', 2718 ); ?>
              <li><span style="color:#333;"><?php echo $fields['label']; ?>: <?php echo $fields['value'] ?></span></li>
          </ul>
        </div>
            <div style="margin-bottom: 25px;">
        <span class="timeline-title">
          <strong>Check Available Dates &nbsp;&nbsp;</strong>
      </span>
      <select class="year_s dep-select" id="dep_select_year" style="width:120px;padding: 3px;" data-placeholder="Choose a year">
          <?php $yercnd = date('Y'); ?>          
          <option value="<?php echo $yercnd; ?>"><?php echo $yercnd; ?></option>
          <option value="<?php echo ++$yercnd; ?>"><?php echo $yercnd; ?></option> 
          <option value="<?php echo ++$yercnd; ?>"><?php echo $yercnd; ?></option>
      </select>
      <select class="month_s dep-select" id="dep_select_month" style="width:150px;padding: 3px;" data-placeholder="Choose a month">
          <option value="January">Jan</option>
          <option value="February">Feb</option>
          <option value="March">Mar</option>
          <option value="April">Apr</option>
          <option value="May">May</option>
          <option value="June">Jun</option>
          <option value="July">Jul</option>
          <option value="August">Aug</option>
          <option value="September">Sep</option>
          <option value="October">Oct</option>
          <option value="November">Nov</option>
          <option value="December">Dec</option> 
      </select>
  </div>
  <?php
  if( have_rows('available_dates') ): ?>
     <table id="table" class="table table-bordered lg-table">
        <thead>
           <tr>
              <th>Trip Start Date</th>
              <th>Trip End Date</th>         
              <th>Price</th>         
              <th>Availability</th>     
              <th>Book Now</th>
          </tr>  
      </thead>
      <?php $fi=0; while ( have_rows('available_dates') ) : the_row();
      $startdate = get_sub_field('start_date');
      if(date('Y-m-d', strtotime($startdate))>date('Y-m-d')){ 
         $fi++;
         if($fi==1){
            $ssym = date('Y-m', strtotime($startdate));
         } ?>
        <tr class="departure-item <?php echo date('Y F', strtotime($startdate)); if($ssym==date('Y-m', strtotime($startdate))) echo ' active'; ?>" data-year="<?php echo date('Y', strtotime($startdate)); ?>" data-month="<?php echo date('F', strtotime($startdate)); ?>">
          <td><?php echo the_sub_field('start_date'); ?>  </td>
          <td>
            <?php echo getEndDate($startdate,get_field('duration')); ?> 
        </td>
        <td>
            US $<?php echo the_sub_field('trip_cost'); ?>
        </td>  
        <td>
            <?php $field = get_sub_field_object('trip_status');
            if(strtolower($field['value'])== 'available'): ?>
              <span style="color: #039163">Available </span>
              <?php elseif(strtolower($field['value'])== 'guarantee'): ?>
                 <span style="color: #0259ff">Guarantee </span>
                 <?php elseif(strtolower($field['value'])== 'limited'): ?>
                   <span style="color: #e38005">Limited </span>
                   <?php elseif(strtolower($field['value'])== 'sold out'): ?>
                     <span style="color: #ff0000">Sold out </span>
                     <?php else : endif; ?>                     
                 </td> 
                 <td>
                  <?php if(get_field('booking_form')) : ?>
                    <div class="booking-form-embed">
                      <?php echo get_field('booking_form') ?>
                  </div><!--class="booking-form-embed-->
                  <?php else : ?>
                      <a href="<?= get_site_url()."/booking?taxonomies=".$post->post_title ?>&t=<?php echo strtotime($startdate); ?>" class="btn btn-org">Book Now</a>
                  <?php endif; ?>                    
              </td>  
          </tr>  
          <?php }
      endwhile;?>
  </table>
</div><!--date-available -->
<?php endif;
else :?>
  <h3> Price and date </h3>
  <p style="margin-bottom: 0">This trip is available at an any time of the year. Just let us know your travel date.</p>
<?php endif ?>
</section><!--date-tab-->
<?php if(get_field('trip_info')):?>
<section id="info-tab" class="trip-accordion tripmargin section-block" >
      <h3> Trip Information</h3>
      <div onclick="expandCollapseTrip()" id="expand-collapse-trip-info" align="right">
        Expand All
    </div>
    <?php if( have_rows('trip_info') ): $accordion++; ?>
        <div id="accordion<?php echo $accordion; ?>">
          <?php while ( have_rows('trip_info') ) : the_row(); $collapse++; ?>
            <div class="card">
              <div class="card-header" id="heading<?php echo $collapse; ?>">
                <h5 class="mb-0">
                  <button class="trip-trigger-buttom btn btn-link collapsed" data-toggle="collapse" data-target="#collapse<?php echo $collapse; ?>" aria-expanded="true" aria-controls="collapse<?php echo $collapse; ?>">
                    <?php the_sub_field("trip_info_question"); ?><i class="fas fa-angle-down rotate-icon"></i>
                </button>
            </h5>
        </div>
        <div id="collapse<?php echo $collapse; ?>" class="collapse multi-collapse-trip" aria-labelledby="heading<?php echo $collapse; ?>" data-parent="#accordion<?php echo $accordion; ?>">
            <div class="card-body">
              <?php the_sub_field("trip_info_answer"); ?>
          </div><!--card-body-->
      </div><!--collapse-->
  </div><!--card-->
<?php endwhile; ?>
</div><!--accordion-->
</section><!--info-tab-->
<?php endif; else : endif ?>
<section id="rev-tab" class="section-block">
  <div class="review-section">
    <h3>Reviews</h3>
    <div class="review-section" style="margin-top: 30px;">
      <?php
      $args = array(
          'post_type' => 'customer_reviews',
          'posts_per_page' => '100',
          'meta_key'		=> 'reviewer_trip',
          'meta_value'	=> $post->ID
      );
      $myQuery = new WP_Query($args);
      while ($myQuery->have_posts()) : $myQuery->the_post() ?>
          <div class="review-block review-list">
              <img class="rev-profile" src="<?php the_post_thumbnail_url(); ?>"/>
              <div class="reviewer_detail">
                  <div class="review-title">
                      <?php the_title(); ?>
                  </div>
                  <?php 
                  for($r_i=1;$r_i<=5;$r_i++){
                    if($r_i<=get_field('reviewer_rating')){
                        ?>
                        <i class="fas fa-star" style="color: #E09365;"></i>
                        <?php
                    }else{
                        ?>
                        <i class="far fa-star" style="color: #E09365;"></i>
                        
                        <?php
                    }
                  }
                   ?>
                  <div style="text-transform: capitalize;">By
                      <span style="background-color: #e09365;padding: 2px 13px;border-radius: 20px;color: #fff;margin-right: 5px;">
                          <?php echo get_field('reviewer_name'); ?></span>, <?php echo get_field('reviewer_country'); ?>
                      </div>
                      <div><span><?php echo get_the_date() ?></span></div>
                  </div>
                  <div class="reviewer-exp">
                      <?php the_content(); ?>
                  </div>
              </div>
          <?php endwhile;  wp_reset_postdata(); ?>
      </div>
      <a href="<?= get_site_url()."/review" ?>" >View All Reviews</a>
      <div class="rev-form" style="margin-top: 25px;">
              <div id="accordion" class="show-more">
                <div class="card">
                  <div class="card-header" id="rev-form-show">
                    <h5 class="mb-0">
                      <button class="btn btn-link" data-toggle="collapse" data-target="#show-form" aria-expanded="true" aria-controls="collapseOne">
                        Create Your Own Review<i class="fa" aria-hidden="true"></i>
                      </button>
                    </h5>
                  </div><!--card-header-->

                  <div id="show-form" class="collapse hide" aria-labelledby="rev-form-show" data-parent="#accordion">
                    <div class="card-body">
                      <?php ///echo do_shortcode('[contact-form-7 id="2236" title="Review Form"]'); ?>
                      <form method="POST" onsubmit="return submit_ajax_form(this)">
                      
                      <?php
        
        $nonce = wp_create_nonce("wp_rest");
        
        
        ?>
        <div class="print-error-msg"></div>
        <input type="hidden" name="form_id" value="4" />
        <input type="hidden" name="url" value="<?php the_permalink(); ?>" />
        <input type="hidden" name="action" value="submit_form" />
        <input type="hidden" name="post_id" value="<?php echo $post->ID; ?>" />
        <input type="hidden" name="trip_name" value="<?php the_title(); ?>" />
        <input type="hidden" name="nonce" value="<?php echo $nonce; ?>" />
        <input type="hidden" name="fname" />
                      
                      
                      
                      
                      <div class="field-wrap"><div class="content-column col_half"><label>Your Full Name </label></div>
<div class="content-column col_last last_column"><input class="form-control" type="text" name="fullname" required="" placeholder="Enter Your Full Name" /></div></div>



<div class="field-wrap"><div class="content-column col_half"><label>Your Email Address </label></div>
<div class="content-column col_last last_column"><input class="form-control" type="email" name="email" required="" placeholder="Enter Your Email Address" />  </div></div>

<div class="field-wrap"><div class="content-column col_half"><label>Your Country</label></div>
<div class="content-column col_last last_column"><input class="form-control" type="text" name="country" required="" placeholder="Enter Your Country" /></div></div>

<div class="field-wrap"><div class="content-column col_half"><label>Review Title</label></div>
<div class="content-column col_last last_column"><input class="form-control" type="text" name="review_title" required="" placeholder="Review Title" /></div></div>


<div class="field-wrap"><div class="content-column col_half"><label>Overall Rating</label></div>
<div class="content-column col_last last_column">

<ul class="rating list-unstyled sub-rating pull-left">
                            <li class="stars star-cb-group"><input name="rating" value="" type="hidden"><input id="rating-1" class="" title="" name="rating" value="5" required="required" type="radio"><label for="rating-1">5</label><input id="rating-2" class="" title="" name="rating" value="4" required="required" type="radio"><label for="rating-2">4</label><input id="rating-3" class="" title="" name="rating" value="3" required="required" type="radio"><label for="rating-3">3</label><input id="rating-4" class="" title="" name="rating" value="2" required="required" type="radio"><label for="rating-4">2</label><input id="rating-5" class="" title="" name="rating" value="1" required="required" type="radio"><label for="rating-5">1</label></li>
                          </ul></div></div>


<div class="field-wrap"><div class="content-column"><label>Review Experience</label>

<textarea name="review" class="form-control"></textarea>
<div></div>

<button class="btn btn-org">Send</button>
                    
                    </div><!--card-body-->
                  </div><!--show-form-->  
                      </form>
                </div><!--card-->
              </div><!--accordion-->
            </div><!--rev-form-->
  </div>
</section><!--rev-tab-->
</div><!--lg-screen-->
    <?php get_template_part( 'template-part/design', 'smallscreen' ); ?>
</div><!--col-md--8-->
<div class="col-md-4">
    <div class="trip-sidebar">
      <div class="lg-screen">
        <div class="tr-price sidebar-margin">
          <span>Price From</span><br/>
          <?php if(get_field('trip_price')) : ?>
            <span>
               <span style='font-size:20px;font-weight: bold;'>US $<?php echo get_field('trip_price') ?></span>
           </span>
           <?php else :?>
            <span>Ask Us</span>
        <?php endif ?>
    </div><!--tr-price-->
    <?php if(get_field('trip_price_menu')) : ?>
      <div class="tr-price-menu sidebar-margin">
        <a class="btn btn-link" data-toggle="collapse" data-target="#collapse<?php echo $collapse; ?>" aria-expanded="true" aria-controls="collapse<?php echo $collapse; ?>">
          <i class="fas fa-users"></i> Price Detail<i class="fas fa-angle-down rotate-icon"></i>
      </a>
      <div id="collapse<?php echo $collapse; ?>" class="collapse" aria-labelledby="heading<?php echo $collapse; ?>" data-parent="#accordion<?php echo $accordion; ?>">
          <div class="card-body">
            <?php if( have_rows('trip_price_menu') ): ?>
              <table class="table">
                <tr><th>People</th>
                  <th>Price</th></tr>
                  <?php while ( have_rows('trip_price_menu') ) : the_row();
                    ?>
                    <tr>
                      <td>
                         <?php echo the_sub_field('number_of_people'); ?>     
                     </td>         
                     <td>
                      US $<?php echo the_sub_field('price_per_people'); ?>
                  </td>
              </tr>
              <?php endwhile;?>
      </table>
      <?php else :  endif;  ?>
  </div><!--card-body-->
</div><!--collapse-->
</div><!--tr-price-menu-->
</div><!--lg-screen-->
<?php else : endif;
if(get_field('booking_form')):?>
 <div class="booking-form-embed sidebar-margin"> 
    <?php echo get_field('booking_form'); ?>
</div><!--booking-form-embed -->
<?php else :?>
    <div class="sidebar-margin">
      <a href="<?= get_site_url()."/booking?taxonomies=".$post->post_title ?>" class="btn btn-green" style="width: 100%;text-transform: uppercase;">Book Now</a>
  </div><!--sidebar-margin-->
<?php endif;
$file = get_field('download_pdf');
if( $file ): ?>
    <a href="<?php echo $file['url']; ?>" class="btn btn-org sidebar-margin" target="_blank">Download PDF</a>
<?php endif; ?>
<div class="tr-points">
<?php
$id = 2718; // add the ID of the page where the zero is
$p = get_page($id);
echo apply_filters('the_content', $p->post_content);
?>
</div>
<!--   <div id="TA_certificateOfExcellence636" class="TA_certificateOfExcellence"><ul id="It2spVNM1W" class="TA_links Q2GGQoMXx0K"><li id="Ef4gmWIuQ1R" class="mFZMCI4Tr"><a target="_blank" href="https://www.tripadvisor.com/Attraction_Review-g293890-d10844608-Reviews-Glorious_Himalaya_Trekking-Kathmandu_Kathmandu_Valley_Bagmati_Zone_Central_Regio.html"><img src="https://www.tripadvisor.com/img/cdsi/img2/awards/v2/tchotel_2020_L-14348-2.png" alt="TripAdvisor" class="widCOEImg" id="CDSWIDCOELOGO"/></a></li></ul></div><script async src="https://www.jscache.com/wejs?wtype=certificateOfExcellence&amp;uniq=636&amp;locationId=10844608&amp;lang=en_US&amp;year=2020&amp;display_version=2" data-loadtrk onload="this.loadtrk=true"></script> -->
<div class="trip-img lg-screen" style="text-align: center;">
      <?php 
            $images = get_field('trip_sidebar_image',2718);
            if($images): ?>
              <ul class="trip-side-img">
                <?php foreach( $images as $image ) : ?>
                  <li>
                    <a href="<?php echo $image['url']; ?>" target="_blank" rel="lightbox" >
                      <img src="<?php echo $image['sizes']['medium']; ?>" alt="<?php echo $image['alt']; ?>" />
                    </a>
                  </li>
                <?php endforeach; ?>                
                </ul>
            <?php endif; ?>
</div><!--trip-img-->
<?php if(get_field('trip_map_route')): ?>
    <div class="tr-map sidebar-margin" style="border:1px solid #ede;padding:15px;">
      <span >Route Map</span>
      <a rel="lightbox" href="<?php the_field('trip_map_route'); ?>"><img src="<?php the_field('trip_map_route'); ?>" alt="<?php the_title(); ?>"  style="margin-top: 10px"/></a>
  </div> <!--tr-map-->
  <?php else : endif; ?>
</div>

<div class=" sm-screen trip-sidebar"><!-- 
  <div id="TA_certificateOfExcellence636" class="TA_certificateOfExcellence"><ul id="It2spVNM1W" class="TA_links Q2GGQoMXx0K"><li id="Ef4gmWIuQ1R" class="mFZMCI4Tr"><a target="_blank" href="https://www.tripadvisor.com/Attraction_Review-g293890-d10844608-Reviews-Glorious_Himalaya_Trekking-Kathmandu_Kathmandu_Valley_Bagmati_Zone_Central_Regio.html"><img src="https://www.tripadvisor.com/img/cdsi/img2/awards/v2/tchotel_2020_L-14348-2.png" alt="TripAdvisor" class="widCOEImg" id="CDSWIDCOELOGO"/></a></li></ul></div><script async src="https://www.jscache.com/wejs?wtype=certificateOfExcellence&amp;uniq=636&amp;locationId=10844608&amp;lang=en_US&amp;year=2020&amp;display_version=2" data-loadtrk onload="this.loadtrk=true"></script> -->
<div class="trip-img" style="text-align: center;">
 <?php 
            $images = get_field('trip_sidebar_image',2718);
            if($images): ?>
              <ul class="trip-side-img">
                <?php foreach( $images as $image ) : ?>
                  <li>
                    <a href="<?php echo $image['url']; ?>" target="_blank" rel="lightbox" >
                      <img src="<?php echo $image['sizes']['medium']; ?>" alt="<?php echo $image['alt']; ?>" />
                    </a>
                  </li>
                <?php endforeach; ?>                
                </ul>
            <?php endif; ?>  </div><!--trip-img-->
</div>
<div class="enq-det trip-sidebar">      
  <div class="enq-des">
    <h4>This trip is fully customizable</h4>
    <p>We can customize the trip as per your need.
    We can help you make it fit your budget.</p>
</div><!--enq-des-->
<div class="enq-form">
    <h4>Enquiry Form</h4>
    <?php //echo do_shortcode('[contact-form-7 id="401" title="Enquiry from"]'); ?>
    <div>
        <form method="POST" onsubmit="return submit_ajax_form(this)">
        <?php
        
        $nonce = wp_create_nonce("wp_rest");
        
        
        ?>
        <div class="print-error-msg"></div>
        <input type="hidden" name="form_id" value="1" />
        <input type="hidden" name="url" value="<?php the_permalink(); ?>" />
        <input type="hidden" name="action" value="submit_form" />
        <input type="hidden" name="post_id" value="<?php echo $post->ID; ?>" />
        <input type="hidden" name="nonce" value="<?php echo $nonce; ?>" />
        <input type="hidden" name="fname" />
            <div class="form-group">
                <input type="text" name="fullname" placeholder="Your Full Name" class="form-control" required="" />
            </div>
            <div class="form-group">
                <input type="email" name="email" placeholder="Your Email Address" class="form-control" required="" />
            </div>
            <div class="form-group">
                <input type="text" name="phone" placeholder="Your Phone Number" class="form-control" required="" />
            </div>
            <div class="form-group">
                <textarea name="message" class="form-control" required="" placeholder="Message"></textarea>
            </div>
            <div class="form-group">
                <button class="btn btn-warning btn-sm btn-flat">SEND</button>
            </div>
        </form>
    </div>
</div><!--enq-form-->
</div>
<div class="trip-sidebar">
  <div class="tr-advisor sidebar-margin">
    <div id="TA_selfserveprop103" class="TA_selfserveprop">
      <ul id="wL6afZZeT2We" class="TA_links 
      sWJUE1WJSpcW">
      <li id="qu1iAlV" class="Udkf7kh8">
        <a target="_blank" href="https://www.tripadvisor.com/">
          <img 
          src="https://www.tripadvisor.com/img/cdsi/img2/branding/150_logo-11900-2.png" 
          alt="TripAdvisor"/>
      </a>
  </li>
</ul>
</div>
<script async 
src="https://www.jscache.com/wejs?wtype=selfserveprop&amp;uniq=103&amp;locationId=10844608&
amp;lang=en_US&amp;rating=true&amp;nreviews=5&amp;writereviewlink=true&amp;popIdx=true&am
p;iswide=false&amp;border=true&amp;display_version=2" data-loadtrk 
onload="this.loadtrk=true"></script> 
</div><!--tr-advisor-->
<div class="rel-trips">
  <h4 style="font-weight: bold;">Related Trips</h4>
  <?php
  $custom_taxterms = wp_get_object_terms( $post->ID, 'trekking', array('fields' => 'ids') );
  $args = array(
  'post_type'=> 'trips',
  'posts_per_page' => '5',
  'tax_query' => array(
        array (
            'taxonomy' => 'trekking',
            'field' => 'id',
            'terms' => $custom_taxterms
        )
    ),
    'post__not_in' => array ($post->ID),
    
    );
  $myQuery = new WP_Query($args);
  while ($myQuery->have_posts()) : $myQuery->the_post() ?>
    <div class="tr-side" style="margin-bottom: 15px;">
      <div class="row">
        <div class="col-4">
          <a href="<?php the_permalink() ?>">
            <?php the_post_thumbnail('thumbnail'); ?><!--banner-image-->    
      </a>
  </div><!--col-md-4-->
  <div class="col-8">
      <div class="tp-title">
         <a href="<?php the_permalink() ?>">
            <?php echo the_title(); ?></a>
        </div><!--tp-title-->
        <span class="tp-pr" style="font-size: 12px;">US $<?php echo get_field('trip_price'); ?></span><br/>
        <span class="tp-dur" style="font-size: 12px;">Duration: <?php echo get_field('duration'); ?>
    </span>
</div><!--col-md-8-->
</div><!--row-->
</div><!--tr-side-->
<?php endwhile;  wp_reset_postdata(); ?>
</div><!--rel-trips-->
</div><!--trip-sidebar-->
</div><!--col-md-4-->


</div><!--main-content-->
</div><!--container-->
</div><!--main-wrapper-->
<!--Fixed Tab-->
<script type="text/javascript">
    window.onscroll = function() {scrollFunction()};
    function scrollFunction() {
      if (document.body.scrollTop > 40 || document.documentElement.scrollTop > 40) {
        document.getElementById("trip-tab").style.top = "0";
    } else {
        document.getElementById("trip-tab").style.top = "-60px";
    }
}
    $(document).ready(function(){
      $('#filterDateYear').on('change',function(e){
        var $year=$('#filterDateYear').val();
        var $month=$('#filterDateMonth').val();
        var rexYear = new RegExp($year);
        var rexMonth = new RegExp($month);
        $('.content').hide();
        $('.content').filter(function() {
          return rexYear.test($(this).text()) && rexMonth.test($(this).text());
      }).show();

    });
      $('#filterDateMonth').on('change',function(e){
        var $year=$('#filterDateYear').val();
        var $month=$('#filterDateMonth').val();
        var rexYear = new RegExp($year);
        var rexMonth = new RegExp($month);
        $('.content').hide();
        $('.content').filter(function() {
          return rexYear.test($(this).text()) && rexMonth.test($(this).text());
      }).show();

    });
  });
  function expandCollapse() {
    if($(".multi-collapse").css('display') == 'none') {
      $("#expand-collapse").html("Collapse All");
      $("#expand-collapse-mob").html("Collapse All");
      $(".multi-collapse").addClass('show');
      $(".trigger-buttom").removeClass('collapsed');
  } else {
      $("#expand-collapse").html("Expand All");
      $("#expand-collapse-mob").html("Expand All");
      $(".multi-collapse").removeClass('show');
      $(".trigger-buttom").addClass('collapsed');
  }
}
  function expandCollapseTrip() {
      if($(".multi-collapse-trip").css('display') == 'none') {
          $("#expand-collapse-trip-info").html("Collapse All");
          $("#expand-collapse-trip-info-mob").html("Collapse All");
          $(".multi-collapse-trip").addClass('show');
          $(".trip-trigger-buttom").removeClass('collapsed');
      } else {
          $("#expand-collapse-trip-info").html("Expand All");
          $("#expand-collapse-trip-info-mob").html("Expand All");
          $(".multi-collapse-trip").removeClass('show');
          $(".trip-trigger-buttom").addClass('collapsed');
      }
  }
  
  $(function () {
$('.dep-select').on('change', function(e) {
    $('.departure-item').removeClass('active');
    $('.'+$('#dep_select_year').val()+'.'+$('#dep_select_month').val()).addClass('active');
    if($('#DepartureItems').children(':visible').length == 0){
        $('#DepartureItems').find('.departure-item.not-found').addClass('active');
    }
});
var mnt = $('.departure-item.active').data('month');
var yer = $('.departure-item.active').data('year');
$('#dep_select_month').val(mnt);
$('#dep_select_year').val(yer);




$('.mob-dep-select').on('change', function(e) {
    $('.mob-departures .departure-item').removeClass('active');
    $('.'+$('#mob-dep_select_year').val()+'.'+$('#mob-dep_select_month').val()).addClass('active');
});
var mnt = $('.mob-departures .departure-item.active').data('month');
var yer = $('.mob-departures .departure-item.active').data('year');
$('#mob-dep_select_month').val(mnt);
$('#mob-dep_select_year').val(yer);

});
</script>
<script src="https://www.wetravel.com/assets/embed_checkout.js"></script>
<?php get_footer(); ?> 