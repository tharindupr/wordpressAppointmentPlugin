<?php
//Global declarations and required files
require_once('wp-load.php');
$current_user = wp_get_current_user();
global $wpdb;


$type=$_POST['type'];
$date=date('Y-m-d',strtotime($_POST['date']));
$time=$_POST['time'];
$ctime=date('Y-m-d H:i:s');
$email= $current_user->user_email; 

if(isset($_POST['description']))
{
$description=$_POST['description'];
}
else
{
$description="";
}

echo $type;
echo '</br>';
echo ($date);
echo '</br>';
echo $time;
echo '</br>';
echo $ctime;
echo '</br>';
echo $email;

$results = $wpdb->get_results( 'SELECT * FROM wp_appoinment');
print_r($results);

//$wpdb->insert($wp_appoinment,array('email'=>asdasdasdasda));

$wpdb->insert( 
	'wp_appoinment', 
	array( 
		'type' => $type, 
		'date' => $date, 
		'time' => $time, 
		'email' => $email, 
		'description' => $description, 
		'addedDate' => $ctime, 
	) 
);


Header('Location:display.php');

?>