<?php
get_header(); ?>
<div class="main-wrapper">

	<?php get_template_part('template-part/design', 'imagebanner'); ?>
	<div class="container">
		<h1><?php echo the_title(); ?> - <?php echo @$_GET['taxonomies']; ?></h1>
		<div class="main-wrapper contact-section ">
			<div class="" id="booking_form">
				<?php //echo do_shortcode('[contact-form-7 id="4357" title="Package Booking Form"]');?>
                
                
                <form method="POST" id="booking-form" onsubmit="return validate_and_submit_form();">
                
        <?php
        
        $nonce = wp_create_nonce("wp_rest");
        
        
        ?>
        <div class="print-error-msg"></div>
        <input type="hidden" name="form_id" value="3" />
        <input type="hidden" name="action" value="submit_form" />
        <input type="hidden" name="post_id" value="<?php echo $post->ID; ?>" />
        <input type="hidden" name="nonce" value="<?php echo $nonce; ?>" />
        <input type="hidden" name="fname" />
<h3>Personal Information</h3>
<section>
<div class="row">
<div class="col-md-2 mr-auto"><label>Title </label>
<select name="name_title">
    <option value="Mr">Mr</option>
    <option value="Ms">Ms</option>
    <option value="Mrs">Mrs</option>
</select></div>

<div class="col-md-6"><label>Your Full Name </label>
<input type="text" required="" name="fullname" /> </div>

<div class="col-md-6"><label>Your Email Address </label>
<input type="email" required="" name="email" /> </div>
 
<div class="col-md-6"><label>Your Contact Number</label>
<input type="text" required="" name="contact_number" /></div>

<div class="col-md-6"><label>Your Country</label><input type="text" required="" name="country" /></div>

<div class="col-md-6">Trip Name
<select name="trip_name" required="">
<?php $args = array (
    'numberposts'   => -1,
    'post_type'     => 'trips',
    'orderby'       => 'title',
    'order'         => 'ASC',
  );

  $custom_posts = get_posts($args);
  foreach ( $custom_posts as $custom_post ) { ?>
  <option <?php if($custom_post->post_title==@$_GET['taxonomies']) echo ' selected="" '; ?> value="<?php echo $custom_post->post_title; ?>"><?php echo $custom_post->post_title; ?></option>
  <?php
  } ?>
  </select>
  
   </div>

<div class="col-md-6"><label>Your Trip Start Date </label>
<input type="date" name="trip_start_date" value="<?php if(isset($_GET['t'])) echo @date('Y-m-d', $_GET['t']); ?>" required="" /></div>
</section>
<h3>Trip Information</h3>
<section>
<div class="row">
<div class="col-md-6"><label>Number of Travellers</label>
<select class="form-control" name="number_of_travellers">
<?php for($i=1;$i<=15;$i++){ ?>
    <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
<?php } ?>
</select>
</div>

<div class="col-12" style="margin-bottom:28px"><label>Travel Insurance</label><br />
Travel insurance is mendatory to take any adventure trip and it must be covered both medical & emergency evacuation with worth of USD100, 000.00 minimum. However travel insurance is not compulsory for those travelers (s) who is intend cultural/city tours or short hike bellow 2500 meters of altitude.
<label>
<input type="checkbox" name="travel_insurance" required="" />
I have full coverage of Insurance</label><br />
<label>
<input type="checkbox" name="travel_insurance" required="" />
Not yet bought (I will buy insurance later)</label><br />
<label>
<input type="checkbox" name="travel_insurance" required="" />
My trip does not require travel insurance</label>




</div>
<div class="col-md-6">
<label>How did you find us?</label>
<select name="find_us_on" required="" id="findus">
    <option value="Google">Google</option>
    <option value="Facebook">Facebook</option>
    <option value="Trip Advisor">Trip Advisor</option>
    <option value="Friend">Friend</option>
    <option value="Client Reference">Client Reference</option>
    <option value="I am regular client">I am regular client</option>
    <option value="Others">Others</option>
</select>
<div id="EnterFindUsLabel"><input name="reference" placeholder="Please specify reference"  /></div>
</div>
<div class="col-12">
<b>Flight details</b>
    <div class="row">
        <div class="col-md-4">
            <label>Arrival Date</label>
            <input type="date" name="arrival_date" class="form-control" required="" />
        </div>
        <div class="col-md-4">
            <label>Arrival Time</label>
            <div class="row">
                <div class="col-4">
                    <select name="arrival_hour" required="">
                        <option value="">Hour</option>
                        <?php for($i=1;$i<=12;$i++){ ?>
                            <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="col-4">
                    <select name="arrival_minute" required="">
                        <option value="">Minute</option>
                        <?php for($i=1;$i<=59;$i++){ ?>
                            <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="col-4">
                    <select name="arrival_time_type" required="">
                        <option value="AM">AM</option>
                        <option value="PM">PM</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <label>Arrival Flight No.</label>
            <input type="text" name="arrival_flight_no" class="form-control" required="" />
        </div>
    </div>
</div>
<div class="col-12">
    <div class="row">
        <div class="col-md-4">
            <label>Departure Date</label>
            <input type="date" name="departure_date" class="form-control" required="" />
        </div>
        <div class="col-md-4">
            <label>Departure Time</label>
            <div class="row">
                <div class="col-4">
                    <select name="departure_hour" required="">
                        <option value="">Hour</option>
                        <?php for($i=1;$i<=12;$i++){ ?>
                            <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="col-4">
                    <select name="departure_minute" required="">
                        <option value="">Minute</option>
                        <?php for($i=1;$i<=59;$i++){ ?>
                            <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="col-4">
                    <select name="departure_time_type" required="">
                        <option value="AM">AM</option>
                        <option value="PM">PM</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <label>Departure Flight No.</label>
            <input type="text" name="departure_flight_no" class="form-control" required="" />
        </div>
    </div>
</div>
<div class="col-12">
<label>Extra Requirements</label>
<textarea class="form-control" name="extra_requirements"></textarea>
</div>

<div class="col-12">
<input type="checkbox" name="terms_and_condition" required="" value="I accept Terms and conditions."> I accept <a href="/terms-and-conditions" style="color:#3c85af">terms and condition</a>


</div>




<script language="javascript" type="text/javascript">
// Hide  text field by default
$("#EnterFindUsLabel").hide();
// On every 'Change' of the drop down with the ID call the displayTextField function
$("#findus").on("change", displayTextField);
  function displayTextField() {
    // Get the value of the selected drop down
    var dropDownText =  $("#findus").val();
    // If selected text matches 'Other', display the text field.
    if (dropDownText == "Others") {
      $("#EnterFindUsLabel").show();
    } else {
      $("#EnterFindUsLabel").hide();
    }
  }
</script>

<button class="btn btn-org" type="submit">Submit</button></div>
</div>
</section>

</form>
			</div>
		</div>
	</div>
</div>



<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/additional-methods.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-steps/1.1.0/jquery.steps.min.js" integrity="sha512-bE0ncA3DKWmKaF3w5hQjCq7ErHFiPdH2IGjXRyXXZSOokbimtUuufhgeDPeQPs51AI4XsqDZUK7qvrPZ5xboZg==" crossorigin="anonymous"></script>
<script>

/*
    $("#booking-form ").steps({
        headerTag: "h3",
        bodyTag: "section",
        transitionEffect: "slideLeft",
        autoFocus: true
    });


*/
var booking_validate_fields = {
    rules: {
    'your-name': "required",
    'your-email': {
      required: true,
      email: true
    },
    'tel-109':{
      required:true,
      min:6
    },
    terms_conditions:"required"
  },
  messages: {
    'your-name': "Please specify your name",
    'your-email': {
      required: "We need your email address to contact you",
      email: "Your email address must be in the format of name@domain.com"
    },
    terms_conditions:"You must agree our Terms and Conditions"
  }
};

 var form = $("#booking_form").find('form');
form.validate(booking_validate_fields);



$("#booking-form").steps({
    headerTag: "h3",
    bodyTag: "section",
    transitionEffect: "slideLeft",
    onStepChanging: function (event, currentIndex, newIndex)
    {
        form.validate(booking_validate_fields).settings.ignore = ":disabled,:hidden";
        
        return form.valid();
    },
    onFinishing: function (event, currentIndex)
    {
        form.validate(booking_validate_fields).settings.ignore = ":disabled";
        return form.valid();
    },
    onFinished: function (event, currentIndex)
    { 
      form.validate(booking_validate_fields).settings.ignore = ":disabled";
      
        
        
        return form.valid();
    }
});
function validate_and_submit_form(){
    formm = $('#booking-form');
    formm.validate(booking_validate_fields).settings.ignore = ":disabled";
    if(formm.valid()){
        submit_ajax_form('#booking-form');        
    }
    return false;
}
</script>
<?php get_footer(); ?>
