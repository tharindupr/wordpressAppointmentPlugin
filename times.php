<?php
require_once('wp-load.php');
$current_user = wp_get_current_user();
global $wpdb;

$selectedDate=$_GET['d'];
$time = strtotime($selectedDate);

$newformat = date('Y-m-d',$time);
$results = $wpdb->get_results( "SELECT time FROM wp_appoinment where wp_appoinment.date='".$newformat."'");
//sprint_r($results);
$data=array();
//echo $results[0]->time;
$i=0;
while($i<count($results))
{
	array_push($data,$results[$i]->time);
	$i++;
}

//echo date($selectedDate);


$times=array("8.00 AM","9.00 AM","10.00 AM","11.00 AM","1.00 PM","2.00 PM","3.00 PM","4.00 PM");
echo" 
<div class='form-group'>
<label>&nbsp;&nbsp;Time : </label>
&nbsp;&nbsp;
<select class='form-control' id='time' name='time'>";
foreach($times as $a){
	
	if(in_array("$a", $data))
	{
		echo "<option disabled>$a</option>";
	}
	else
	{
		echo "<option>$a</option>";
	}
	


}
echo "</select> </div>";

?>
