<?php
/*
Plugin Name: My First Plugin
Plugin URI:https://www.abcd.com 
Description : A first plugin alternative to the Hello World examples
Version :1.0
Author URI :https://www.abcd.com  
*/


/** Step 2 (from text above). */
add_action( 'admin_menu', 'my_plugin_menu' );


add_action('admin_menu', 'my_dashboard_menu');

function my_dashboard_menu() {
	add_dashboard_page('My Plugin Dashboard', 'Appointments', 'read', 'my-unique-identifier', 'my_plugin_options');
}
/** Step 1. */
function my_plugin_menu() {
	add_options_page( 'My Plugin Options', 'Appoinments', 'manage_options', 'my-unique-identifier', 'my_plugin_options' );
}

/** Step 3. */
function my_plugin_options() {
	if ( !current_user_can( 'manage_options' ) )  {
		wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
	}
/*	echo '<div class="wrap">';
	echo '<p>Here is where the form would go if I actually had options.</p>';
	echo '</div>';
	
	 $current_user = wp_get_current_user();
    /**
     * @example Safe usage: $current_user = wp_get_current_user();
     * if ( !($current_user instanceof WP_User) )
     *     return;

    echo 'Username: ' . $current_user->user_login . '<br />';
    echo 'User email: ' . $current_user->user_email . '<br />';
    echo 'User first name: ' . $current_user->user_firstname . '<br />';
    echo 'User last name: ' . $current_user->user_lastname . '<br />';
    echo 'User display name: ' . $current_user->display_name . '<br />';
    echo 'User ID: ' . $current_user->ID . '<br />'; */
	
?>

<head>
  <link href="..\wp-content\plugins\myfirstplugin\css\bootstrap.min.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
  <script src="..\wp-content\plugins\myfirstplugin\js\jquery-2.1.3.js" type="text/javascript"></script>
  <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>


	<script type="text/javascript">
	
		
	$(document).ready(function() {

			
				              
				
			  $.ajax({    //create an ajax request to load_page.php
				type: "GET",
				url: "../wp-content/plugins/myfirstplugin/checklist.php",             
				dataType: "html",   //expect html to be returned                
				success: function(response){                    
					$("#list").html(response); 
					//alert(response);
				}
						
				});
		
		});
	
	
	</script>

</head>

<body>

	<section class="col-lg-12 connectedSortable" id="list">

   
    <div class="box  box-solid">
        
	
	

	</div>
       
    </section>


</body>	
	
	
<?php	
	
}


?>















