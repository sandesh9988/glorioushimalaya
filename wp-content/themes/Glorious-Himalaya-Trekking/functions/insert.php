<?php
///session_start();
/*
echo "<pre>";
print_r($_SERVER);
echo "</pre><pre>";
*/
//print_r($_POST);


//print_r($_SESSION);

function check($field)
 {  
    $field  =  trim($field);
   	$field  =  stripslashes($field);
   	$field  =  strip_tags($field);
    //$field = mysql_real_escape_string($field);
   	return $field;
 }
function change_key( $array, $old_key, $new_key ) {

    if( ! array_key_exists( $old_key, $array ) )
        return $array;

    $keys = array_keys( $array );
    $keys[ array_search( $old_key, $keys ) ] = $new_key;

    return array_combine( $keys, $array );
}
global $errors;
if($_POST) {
    if(isset($_POST['nonce'])){
        unset($_POST['nonce']);
    }
  // collect all input and trim to remove leading and trailing whitespaces
  $name = trim($_POST['fullname']);
  $email = trim($_POST['email']);
  
  $errors = array();
  
  // Validate the input
 
  if (strlen($name) == 0)
    array_push($errors, "Please enter your name <br>");

   if (empty($email)) {
    array_push($errors, "Please enter you Email <br>");
   }else{
   	if(!filter_var($email, FILTER_VALIDATE_EMAIL))
    array_push($errors, "Please specify a valid email address <br>");
}
    

    
  // If no errors were found, proceed with storing the user input
  if (count($errors) == 0) {


//echo $_SESSION['token'].'<br>';
//echo $_POST['token'];
global $wpdb;


if (!empty($_POST['form_id'])) {
    $subject = 'Form Submission';
    
    if ($_POST['form_id'] == 3){
        
        $_POST['Arrival_Time']=$_POST['arrival_hour'].':'.$_POST['arrival_minute'].' '.$_POST['arrival_time_type'];
        unset($_POST['arrival_hour']);
        unset($_POST['arrival_minute']);
        unset($_POST['arrival_time_type']);
        
        $_POST['Departure_Time']=$_POST['departure_hour'].':'.$_POST['departure_minute'].' '.$_POST['departure_time_type'];
        unset($_POST['departure_hour']);
        unset($_POST['departure_minute']);
        unset($_POST['departure_time_type']);
        
        
    }
    
    
    $email_post = $_POST;
    $success_msg = '';
    if($_POST['form_id'] == 4){
        $subject = 'New Submission from review form';
        $success_msg = "Thank you for your review. It has been sent. ";
    } elseif($_POST['form_id'] == 1) {
        $subject = 'New Submission from inquiry form';
        $success_msg = "Your inquiry has been sent. Thank you.";        
    }elseif ($_POST['form_id'] == 2){
        $subject = 'New Submission from contact form';
        $success_msg = "Your message has been sent. Thank you.";
    } elseif ($_POST['form_id'] == 3){
        $subject = 'New Submission from booking form';
        $success_msg = "Your booking has been sent. Thank you.";
        
        
    } else{
        $success_msg = "Thank you for contacting us. ";
    } 
    
    
    if(isset($_POST['action'])){
        unset($_POST['action']);
    }
    if(isset($_POST['fname'])){
        unset($_POST['fname']);
    }
$form_id = check($_POST['form_id']);
$post_id	   = check($_POST['post_id']);
$client_name   = check($_POST['fullname']);
$client_email   = check($_POST['email']);
$post_url       = get_the_permalink(); 
$client_ip          = $_SERVER['REMOTE_ADDR'];
$date = current_time('mysql');
//$date = date('Y-m-d H:i:s');


// $sql = "INSERT INTO `{$wpdb->prefix}ct_form_entries`(`form_id`, `post_id`, `post_url`, `client_name`, `client_email`, `client_ip`, `date`) VALUES ('$form_id', '$post_id', '$post_url', '$client_name', '$client_email', '$client_ip','$date')";

// $wpdb->query($sql); 

$wpdb->insert( 
  $wpdb->prefix.'ct_form_entries', 
  array( 
    'form_id' => $form_id, 
    'post_id' => $post_id ,
    'post_url' => $post_url ,
    'client_name' => $client_name ,
    'client_email' => $client_email ,
    'client_ip' => $client_ip ,
    'date' => $date ,
  ), 
  array( 
    '%d', 
    '%d',
    '%s',
    '%s',
    '%s',
    '%s',
    '%s' 
  ) 
);
$entry_id = $wpdb->insert_id; 

unset($_POST['form_id']);
unset($_POST['fullname']);
unset($_POST['post_id']);
unset($_POST['email']);




$form_posts = $_POST;

    
    
    
foreach ($form_posts as $k => $form_post) {
	$name_val = explode('_', $k);
	$name_val = implode(' ', $name_val);
    $form_post = check($form_post);

//$sql = "INSERT INTO `{$wpdb->prefix}form_entries_detail`(`entry_id`, `name`, `value`) VALUES ('$entry_id', '$name_val', '$form_post')";
//$wpdb->query($sql);  

$wpdb->insert( 
  $wpdb->prefix.'form_entries_detail', 
  array( 
    'entry_id' => $entry_id, 
    'name' => $name_val ,
    'value' => $form_post ,
  ), 
  array( 
    '%d', 
    '%s',
    '%s' 
  ) 
);

}
$subject_name = $email_post['form_name'];
unset($email_post['form_name']);
//unset($email_post['token']);
unset($email_post['submitBtn']);

unset($email_post['action']);
unset($email_post['nonce']);
unset($email_post['fname']);


$email_from = $email_post['email'];
$main_message = '<table width="99%" border="0" cellpadding="1" cellspacing="0" bgcolor="#EAEAEA"><tr><td><table width="100%" border="0" cellpadding="5" cellspacing="0" bgcolor="#FFFFFF">';
foreach ($email_post as $k => $form_post) {
	$name_val = explode('_', $k);
	$name_val = implode(' ', $name_val);
    $form_post = check($form_post);    
    $main_message .='<tr bgcolor="#EAF2FA"><td colspan="2"><font style="font-family: sans-serif; font-size:12px;"><strong>';
    $main_message .= $name_val ;
    $main_message .='</strong></font></td></tr>
    ';
    $main_message .='<tr bgcolor="#FFFFFF"><td width="20"></td><td><font style="font-family: sans-serif; font-size:12px;">';
    $main_message .=$form_post;
    $main_message .='</font></td></tr>
    ';   
}
$main_message .= '</table></td></tr></table><br />';
$main_message .=$client_ip;
//echo $main_message; 
//$subject = 'New Submission from website';
$to      = get_option( 'admin_email' );
//$to      = 'sumansuwal2010@gmail.com';
$message = $main_message;
$headers = 'From: '.$email_from . "\r\n" .
    'Reply-To: '.$email_from."\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
$success  =  wp_mail($to, $subject, $message, $headers);
echo json_encode(['msg'=>$success_msg]);
}
}else{
    echo json_encode(['errors'=>$errors]);
}
}
//global $token;
//$token = md5(uniqid(microtime(), true));
//$_SESSION['_token'] = $token;