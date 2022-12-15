<div class="single-trip-section sm-screen trip-mobile">

    <div class="accordion" id="trip-accordion">
      <div class="card">
        <div class="card-header" id="overviewHeading">
          <h4 class="mb-0">
            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#overview-acc" aria-expanded="false" aria-controls="overview-acc">
              OVERVIEW
          </button>
      </h4>
  </div>

  <div id="overview-acc" class="collapse" aria-labelledby="overviewHeading" data-parent="#trip-accordion">
      <div class="card-body">
         <section id="overview" class="tripmargin">
            <div class="tr-facts tripmargin">
              <div class="row">

                <div class="col-md-6">
                  <div class="facts-block">
                    <?php if(get_field('duration')) :?>
                       <?php $field = get_field_object('duration'); ?>
                       <p><i class="fa fa-calendar" aria-hidden="true"></i><span><?php echo $field['label']; ?></span>: <?php echo $field['value']; ?> days</p>
                       <?php else : endif;?>

                       <?php if(get_field('starts_at')) :?>
                         <?php $field = get_field_object('starts_at');  ?>
                         <p><i class="fa fa-map-marker" aria-hidden="true"></i><span><?php echo $field['label']; ?></span>: <?php echo $field['value']; ?></p>
                         <?php else : endif;?>

                         <?php if(get_field('grade')) :?>
                           <?php $field = get_field_object('grade'); ?>
                           <p><i class="fas fa-signal" aria-hidden="true"></i><span><?php echo $field['label']; ?></span>: 
                              <?php if(strtolower($field['value'])== 'moderate'): ?>
                                Moderate <a data-toggle="tooltip" data-placement="top" title="This is a memorable hike that circumnavigates the Annapurna massif, displaying some of the most astounding scenery on the planet. With tarred roads built on both sides of the geographical division">
                                  <i class="fas fa-question-circle"></i> 
                              </a>
                              <?php elseif(strtolower($field['value'])=='easy'): ?>
                                  Easy <a data-toggle="tooltip" data-placement="top" title="The tiring long walks back to Lukla from Base Camp are replaced by a comfortable ride on a helicopter. The return by Heli trek is perfect for those who wish to have a fantastic trek to Everest Base camp">
                                    <i class="fas fa-question-circle"></i> 
                                </a>
                                <?php elseif(strtolower($field['value'])=='hard'): ?>
                                    Hard <a data-toggle="tooltip" data-placement="top" title="The tiring long walks back to Lukla from Base Camp are replaced by a comfortable ride on a helicopter. The return by Heli trek is perfect for those who wish to have a fantastic trek to Everest Base camp">
                                      <i class="fas fa-question-circle"></i> 
                                  </a>
                                  <?php elseif(strtolower($field['value'])=='difficult'): ?>
                                      Difficult <a data-toggle="tooltip" data-placement="top" title="The tiring long walks back to Lukla from Base Camp are replaced by a comfortable ride on a helicopter. The return by Heli trek is perfect for those who wish to have a fantastic trek to Everest Base camp">
                                        <i class="fas fa-question-circle"></i> 
                                    </a>
                                    <?php elseif(strtolower($field['value'])=='strenuous'): ?>
                                        Strenuous <a data-toggle="tooltip" data-placement="top" title="The tiring long walks back to Lukla from Base Camp are replaced by a comfortable ride on a helicopter. The return by Heli trek is perfect for those who wish to have a fantastic trek to Everest Base camp">
                                          <i class="fas fa-question-circle"></i> 
                                      </a>
                                      <?php elseif(strtolower($field['value'])=='challenging'): ?>
                                          Challenging <a data-toggle="tooltip" data-placement="top" title="Your initial flight from Kathmandu to Lukla is an adventure itself. Undergo trekking as you walk across the cerulean landscape of the Sagarmatha and enjoy the coruscating hallmarks of the landscape shadowed by the tallest mountain peaks on the planet">
                                            <i class="fas fa-question-circle"></i> 
                                        </a>
                                        <?php else : endif; ?>                     
                                    </p>
                                    <?php else : endif; ?>                     

                                    <?php if(get_field('accomodation')) : ?>
                                      <?php $field = get_field_object('accomodation');  ?>
                                      <p><i class="fas fa-hotel" aria-hidden="true"></i><span><?php echo $field['label']; ?></span>: <?php echo $field['value']; ?></p>
                                      <?php else : endif ?>

                                      <?php if(get_field('transport')) : ?>
                                        <?php $field = get_field_object('transport'); ?>
                                        <p><i class="fa fa-bus" aria-hidden="true"></i><span><?php echo $field['label']; ?></span>: <?php echo $field['value']; ?></p>
                                        <?php else : endif ?>
                                    </div>
                                </div><!--col-md-6-->

                                <div class="col-md-6">
                                  <div class="facts-block">
                                    <?php if(get_field('altitude')) : ?>
                                       <?php $field = get_field_object('altitude'); ?>
                                       <p><i class="fas fa-arrow-up" aria-hidden="true"></i><span><?php echo $field['label']; ?></span>: <?php echo $field['value']; ?></p>
                                       <?php else: endif; ?>

                                       <?php if(get_field('ends_at')) : ?>
                                         <?php $field = get_field_object('ends_at'); ?>
                                         <p><i class="fa fa-map-marker" aria-hidden="true"></i><span><?php echo $field['label']; ?></span>: <?php echo $field['value']; ?></p>
                                         <?php else: endif; ?>

                                         <?php if(get_field('group_size')) : ?>
                                           <?php $field = get_field_object('group_size'); ?>
                                           <p><i class="fas fa-user-friends" aria-hidden="true"></i><span><?php echo $field['label']; ?></span>: <?php echo $field['value']; ?></p>
                                           <?php else: endif; ?>

                                           <?php if(get_field('meals')) : ?>
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
                                              <span><?php echo the_sub_field('facts_icon'); ?> <?php echo the_sub_field('facts_title'); ?> : </span>
                                              <?php echo the_sub_field('facts_detail'); ?>           
                                          </p>          
                                      </div><!--facts-block-->
                                  </div>
                                  <?php $counter++; if($counter % 4 === 0) :  echo '</div> <div class="row">'; endif; ?>
                              <?php endwhile; ?>
                          </div><!--row-->
                      <?php endif; ?>
                  </div><!--tr-facts-->
                  <?php if(get_field('trip_highlights')) : ?>
                      <div class="tr-highlight tripmargin" >
                        <h3> Highlights</h3>
                        <?php echo the_field('trip_highlights'); ?>
                    </div><!--tr-highlight-->
                    <?php else : ?>
                    <?php endif ?>
                    <div class="trip-info tripmargin">
                        <div class="row no-gutters">
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
                          </div>
                      <?php endif; ?>
                  </div><!--col-md-4-->
                  <?php else : ?>
                  <?php endif?>
                  <?php if(get_field('trip_checklist')) : ?>
                    <div class="col-3">
                       <div class="trip-checklist">
                          <button type="button" class="btn btn-blue" data-toggle="modal" data-target=".check-list">
                            <i class="fas fa-th-list"></i>  
                        </button>
                        <div>CheckList</div>
                        <div class="modal fade bd-example-modal-lg check-list" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                              <div class="modal-content">
                                 <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Checklist</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                  </button>
                              </div>
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
      <?php else : ?>
      <?php endif?>
      <?php if(get_field('trip_video')) :
      
      
       preg_match('/src="([^"]+)"/', get_field('trip_video'), $match);
      if(isset($match[1])){
            $url = $match[1];
            
            
             ?>
          <div class="col-3">
            <div class="embed-container">
              <a type="button" class="btn btn-blue" data-type="iframe" data-fancybox href="<?php echo $url; ?>">
                <i class="fas fa-video"></i>
            </a>
            <div>Video</div>
            <?php /*<div class="modal fade bd-example-modal-lg embed" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered  modal-lg" role="document">
                   <div class="modal-content">
                     <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
                  <?php echo get_field('trip_video'); ?>
              </div><!--modal-content-->
          </div><!--modal-dialog-->
      </div><!--modal-->*/ } ?>
  </div><!--embed-container-->
</div><!--col-md-4-->
<?php else : ?>
<?php endif?>
<?php

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
</div>     <!--trip-info-->
<h3> Overview</h3>
<?php while (have_posts()) : the_post(); ?>
  <?php the_content(); ?>
<?php endwhile;?>
</section><!--overview-->
</div><!--card-body-->
</div><!--overview-acc-->
</div><!--card-->

<?php if (get_field('trip_itinerary')): ?>
<div class="card">
  <div class="card-header" id="itiHeading">
    <h4 class="mb-0">
      <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#iti-acc" aria-expanded="false" aria-controls="iti-acc">
        ITINERARY
    </button>
</h4>
</div>
<div id="iti-acc" class="collapse" aria-labelledby="itiHeading" data-parent="#trip-accordion">
    <div class="card-body">
          <section id="iti-tab" class="trip-accordion tripmargin">
            <h3>Itinerary</h3>
            <div onclick="expandCollapse()" id="expand-collapse-mob" align="right">
              Expand All
          </div>
          <?php if( have_rows('trip_itinerary') ): $accordion++; ?>
              <div id="accordion<?php echo $accordion; ?>">
                <?php while ( have_rows('trip_itinerary') ) : the_row(); $collapse++; ?>
                  <div class="card">
                    <div class="card-header" id="heading<?php echo $collapse; ?>">
                      <h5 class="mb-0">
                        <button class=" btn btn-link trigger-buttom collapsed" data-toggle="collapse" data-target="#collapse<?php echo $collapse; ?>" aria-expanded="true" aria-controls="collapse<?php echo $collapse; ?>">
                          <?php the_sub_field("trip_title"); ?><i class="fas fa-angle-down rotate-icon"></i>
                      </button>
                  </h5>
              </div>
              <div id="collapse<?php echo $collapse; ?>" class="collapse multi-collapse" aria-labelledby="heading<?php echo $collapse; ?>" data-parent="#accordion<?php echo $accordion; ?>">
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
                            </div>   <!--trip-extra--> 
                        </div>  <!--col-md-6-->
                    <?php endwhile; ?>
                </div>     <!--row-->
            <?php endif; ?>
        </div>
    </div><!--card-body-->
</div><!--collapse-->
</div><!--card-->
<?php endwhile; ?>
</div>
<?php endif; ?>
</section><!--iti-tab-->
</div><!--card-body-->
</div><!--iti-acc-->
</div><!--card-->
<?php else : ?>
<?php endif;?> 

<?php if(get_field('trip_includes')) :?>
<div class="card">
    <div class="card-header" id="inHeading">
      <h4 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#inc-acc" aria-expanded="false" aria-controls="inc-acc">
          INCLUDES/EXCLUDES
      </button>
  </h4>
</div>
<div id="inc-acc" class="collapse" aria-labelledby="inHeading" data-parent="#trip-accordion">
  <div class="card-body">
     <section id="inc-tab">
          <div class="tr-inc tripmargin">
            <?php
            $field = get_field_object('trip_includes');
            ?>
            <h3><?php echo $field['label']; ?>:</h3> <?php echo $field['value']; ?>
        </div>
        <?php else : endif; ?>
        <?php if(get_field('trip_exclude')) :?>
            <div class="tr-exc ">
              <?php
              $field = get_field_object('trip_exclude');
              ?>
              <h3><?php echo $field['label']; ?>:</h3> <?php echo $field['value']; ?>
          </div>
      </section> <!--inc-tab-->
  </div><!--card-body-->
</div><!--inc-acc-->
</div><!--card-->
<?php else : endif; ?>

  <div class="card">
    <div class="card-header" id="dateHeading">
      <h4 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#date-tab" aria-expanded="false" aria-controls="date-tab">
          DATE AND COST
      </button>
  </h4>
</div>
<div id="date-tab" class="collapse" aria-labelledby="dateHeading" data-parent="#trip-accordion">
  <div class="card-body">
   <section id="date-tab" class="tripmargin section-block">
     <?php if(get_field('available_dates')):?>
     <div class="date-available">
          <h3>Join Our Fixed Trip Date</h3>
          <div style="margin-bottom: 25px;">
            <ul>
               <?php
              $fields = get_field_object('available', 2718 );
              ?>
              <li><span style="color:#22c690;"><?php echo $fields['label']; ?>: <?php echo $fields['value'] ?></span></li>
               <?php
              $fields = get_field_object('guarantee', 2718 );
              ?>
              <li><span style="color:#0259ff;"><?php echo $fields['label']; ?>: <?php echo $fields['value'] ?></span></li>
               <?php
              $fields = get_field_object('limited', 2718 );
              ?>
              <li><span style="color:#e38005;"><?php echo $fields['label']; ?>: <?php echo $fields['value'] ?></span></li>
               <?php
              $fields = get_field_object('sold_out', 2718 );
              ?>
              <li><span style="color:#ff0000;"><?php echo $fields['label']; ?>: <?php echo $fields['value'] ?></span></li>
          </ul>
        </div>
            <div style="margin-bottom: 25px;">
        <span class="timeline-title">
          <strong>Check Available Dates &nbsp;&nbsp;</strong>
      </span>
      <select class="year_s mob-dep-select" id="mob-dep_select_year" style="width:120px;padding: 3px;" data-placeholder="Choose a year">
          <?php $yercnd = date('Y'); ?>          
          <option value="<?php echo $yercnd; ?>"><?php echo $yercnd; ?></option>
          <option value="<?php echo ++$yercnd; ?>"><?php echo $yercnd; ?></option> 
          <option value="<?php echo ++$yercnd; ?>"><?php echo $yercnd; ?></option>
      </select>
      <select class="month_s mob-dep-select" id="mob-dep_select_month" style="width:150px;padding: 3px;" data-placeholder="Choose a month">
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
  <div class="mob-departures">
     <table id="table" class="table table-bordered ">
        <!-- <thead>
           <tr>
              <th>Trip Start Date</th>
              <th><?php echo the_sub_field('start_date'); ?> <?php $startdate = get_sub_field('start_date'); ?></th>         
              <th>Price</th>         
              <th>Availability</th>     
              <th>Book Now</th>
          </tr>  
      </thead> -->
      <?php 
       $fi=0;
       
       while ( have_rows('available_dates') ) : the_row();
       
       
        $startdate = get_sub_field('start_date');
      if(date('Y-m-d', strtotime($startdate))>date('Y-m-d')){ 
         $fi++;
         if($fi==1){
            $ssym = date('Y-m', strtotime($startdate));
         } 
        ?>
        <tr>
            <table class="departure-item <?php echo date('Y F', strtotime($startdate)); if($ssym==date('Y-m', strtotime($startdate))) echo ' active'; ?>" data-year="<?php echo date('Y', strtotime($startdate)); ?>" data-month="<?php echo date('F', strtotime($startdate)); ?>" border="0">
                <tbody>
                <tr  style=" border-top: 10px solid #ffffff !important;">
          <th>Trip Start Date</th>
          <td><?php echo the_sub_field('start_date'); ?>  </td>
          <?php $startdate = get_sub_field('start_date'); ?>
        </tr>
        <tr>
          <th>Trip End Date</th>
          <td>
            <?php echo getEndDate($startdate,get_field('duration')); ?> 
        </td>
      </tr>
      <tr>
        <th>Price</th>
        <td>
            US $<?php echo the_sub_field('trip_cost'); ?>
        </td>  
      </tr>
      <tr>
      <th>Availability</th>
        <td>
            <?php $field = get_sub_field_object('trip_status'); ?>
            <?php if(strtolower($field['value'])== 'available'): ?>
              <span style="color: #039163">Available </span>
              <?php elseif(strtolower($field['value'])== 'guarantee'): ?>
                 <span style="color: #0259ff">Guarantee </span>
                 <?php elseif(strtolower($field['value'])== 'limited'): ?>
                   <span style="color: #e38005">Limited </span>
                   <?php elseif(strtolower($field['value'])== 'sold out'): ?>
                     <span style="color: #ff0000">Sold out </span>
                     <?php else : endif; ?>                     
                 </td> 
               </tr>
                 <tr>
                 <th>Book Now</th>
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
                
                </tbody>
            </table>
        </tr>
         
          <?php }
      endwhile;?>
  </table>
  </div>
</div><!--date-available -->
<?php endif; ?>
<?php else :?>
  <h3> Price and date </h3>
  <p style="margin-bottom: 0">This trip is available at an any time of the year. Just let us know your travel date.</p>
<?php endif ?>
</section><!--date-tab-->
</div><!--card-body-->
</div><!--inf-acc--> 
</div><!--card-->




<?php if(get_field('trip_info')):?>
  <div class="card">
    <div class="card-header" id="infoHeading">
      <h4 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#info-acc" aria-expanded="false" aria-controls="info-acc">
          TRIP INFO
      </button>
  </h4>
</div><!--card-header-->
<div id="info-acc" class="collapse" aria-labelledby="infoHeading" data-parent="#trip-accordion">
  <div class="card-body">
     <section id="info-tab" class="trip-accordion tripmargin">
       <div onclick="expandCollapseTrip()" id="expand-collapse-trip-info-mob" align="right">
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
      </div><!--card-header-->
      <div id="collapse<?php echo $collapse; ?>" class="collapse multi-collapse-trip" aria-labelledby="heading<?php echo $collapse; ?>" data-parent="#accordion<?php echo $accordion; ?>">
          <div class="card-body">
            <?php the_sub_field("trip_info_answer"); ?>
        </div><!--card-body-->
    </div><!--collapse-->
</div><!--card-->
<?php endwhile; ?>
</div><!--accordion-->
<?php endif; ?>
</section><!--info-tab-->    
</div><!--card-body-->
</div><!--inf-acc--> 
</div><!--card-->
<?php else :?>
<?php endif ?>
<div class="card">
  <div class="card-header" id="revHeading">
    <h4 class="mb-0">
      <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#rev-tab" aria-expanded="false" aria-controls="rev-tab">
        REVIEWS
    </button>
</h4>
</div>
<div id="rev-tab" class="collapse" aria-labelledby="revHeading" data-parent="#trip-accordion">
    <div class="card-body">
      <section id="rev-tab">
        <div class="review-section">
            <h3>Reviews</h3>
            <div class="review-section" style="margin-top: 30px;">
              <?php
              $args = array(
                  'post_type' => 'customer_reviews',
                  'posts_per_page' => '100',
                  'meta_key'        => 'reviewer_trip',
                  'meta_value'  => $post->ID
              );
              $myQuery = new WP_Query($args);
              ?>
              <?php while ($myQuery->have_posts()) : $myQuery->the_post() ?>
                  <div class="review-block review-list">
                      <img src="<?php the_post_thumbnail_url(); ?>"/>
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
                          <div style="text-transform: capitalize;float: left;">By
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
                      <?php //echo do_shortcode('[contact-form-7 id="2236" title="Review Form"]'); ?>
                      <form method="POST" onsubmit="return submit_ajax_form(this)">
                      
                      <?php
        
        $nonce = wp_create_nonce("wp_rest");
        
        
        ?>
        <div class="print-error-msg"></div>
        <input type="hidden" name="url" value="<?php the_permalink(); ?>" />
        <input type="hidden" name="form_id" value="4" />
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
                      
                      </form>
                    </div><!--card-body-->
                  </div><!--show-form-->
                </div><!--card-->
              </div><!--accordion-->
            </div><!--rev-form-->
      </div>
  </section>  <!--rev-tab--> 
</div><!--card-body-->
</div><!--rev-tab collapse-->
</div><!--card-->
</div><!--accordion-->
</div><!--sm-screen-->


<script>
    $(document).ready(function(){
      $('#mob-filterDateYear').on('change',function(e){
        var $year=$('#mob-filterDateYear').val();
        var $month=$('#mob-filterDateMonth').val();
        var rexYear = new RegExp($year);
        var rexMonth = new RegExp($month);
        $('.content').hide();
        $('.content').filter(function() {
          return rexYear.test($(this).text()) && rexMonth.test($(this).text());
      }).show();

    });
      $('#mob-filterDateMonth').on('change',function(e){
        var $year=$('#mob-filterDateYear').val();
        var $month=$('#mob-filterDateMonth').val();
        var rexYear = new RegExp($year);
        var rexMonth = new RegExp($month);
        $('.content').hide();
        $('.content').filter(function() {
          return rexYear.test($(this).text()) && rexMonth.test($(this).text());
      }).show();

    });
  });
</script>