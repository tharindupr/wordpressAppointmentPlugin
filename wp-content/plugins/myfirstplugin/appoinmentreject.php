<?php
require_once('../../../wp-load.php');
global $wpdb;

$id=$_GET['id'];

$email=$wpdb->get_results('select email from wp_appoinment where id='.$id)[0]->email;



$msg = "Your appointment was rejected due to unavoidable circumstance\nSorry for the inconvenience.";

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);

// send email
mail($email,"Sandamali Saloon Appointment",$msg);


$wpdb->query('delete from wp_appoinment where id='.$id);

?>