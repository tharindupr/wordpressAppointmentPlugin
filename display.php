<!doctype html>
<html lang='en'>
<head>
  <?php
  require_once('wp-load.php');
  
   if ( is_user_logged_in() )
  
  {
  
  echo"
  

  <!-- bootstrap 3.0.2 -->
  <link href='wp-content\plugins\myfirstplugin\css\bootstrap.min.css' rel='stylesheet' type='text/css' />
  <link rel='stylesheet' href='//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css'>
  <script src='wp-content\plugins\myfirstplugin\js\jquery-2.1.3.js' type='text/javascript'></script>
  <script src='//code.jquery.com/ui/1.11.2/jquery-ui.js'></script>
  <link rel='stylesheet' href='/resources/demos/style.css'>
  <script>
    $(function() {
    $( '#datepicker' ).datepicker({minDate: 0});
	});
	
	

	

  
  
  </script>
  
  
  <script>
  

  
  
  $(document).ready(function() {
  
   
	$('.date').datepicker({
				 
	onSelect: function(dateText, inst) {
		$(this).change();
					
	}
	});
	
	
	
	$('.date').change(function() {                

			  $.ajax({    //create an ajax request to load_page.php
				type: 'GET',
				url: 'times.php?d='+$('.date').val(),             
				dataType: 'html',   //expect html to be returned                
				success: function(response){                    
					$('#responsecontainer').html(response); 
					//alert(response);
				}
				
				
				

				});
			
			});
  
  
  
  });
  
  </script>
</head>
<body>

 <div class='row'>
                        <!-- Left col -->
                        <section class='col-lg-7 connectedSortable'>


                            <!-- Custom tabs (Charts with tabs)-->
                            <div class='nav-tabs-custom'>
                                <!-- Tabs within a box -->
                                <ul class='nav nav-tabs pull-right'>
                                    <li class='active'><a href='#add-appoinment' data-toggle='tab'>Add Appointment</a></li>
                                  
                                  
                                </ul>
								
								
								
							
							
							
							
						<div class='tab-content no-padding'>
                                    <!-- Morris chart - Sales -->
                                    <div class='chart tab-pane active' id='add-appoinment' style='position: relative; height: 1000px;'>


                                        <!--Add Appoinment box-->
                                        <!-- general form elements disabled -->
                                        <div class='tab-pane'>
                                            <div class='box-header'>
                                                <h3 class='box-title'>&nbsp;&nbsp;Create a new appoinment</h3>
                                            </div><!-- /.box-header -->
                                            <div class='box-body'>
                                                <form role='form' action='appoinmentpost.php' method='POST'>
                                                    <!-- appoinment title input -->
                                                    <div class='form-group'>
                                                        <label>&nbsp;&nbsp;Type :</label>
                                                        &nbsp;&nbsp;<select class='form-control' id='type' name='type' required>
																	<option>Nail Treatment </option>
																	<option>Hair Cut </option>
																	<option>Waxing </option>
																	<option>Facial </option>
																	</select>
                                                    </div>
                                                    
                                                    <div class='form-group'>
                                                        <label>&nbsp;&nbsp;Type here if you have some special requirements:</label>
                                                        &nbsp;&nbsp;<textarea class='form-control' rows='3' placeholder='Enter appoinment discription ...' name='description'></textarea>
                                                    </div>
                                                    <!--/Discription of appoinment -->
                                                    <!-- Date dd/mm/yyyy -->
                                                    <div class='form-group'>
                                                        <label>&nbsp;&nbsp;Appointment Date:</label>
														&nbsp;&nbsp;
							
							
													<input class='date form-control' type='text' id='datepicker' name='date' required>
													</div>
													
													
													
													
												
													<div id='responsecontainer'>
													</div>
													
													<div class='form-group'>
													<button class='btn btn-primary' type='submit' id='add'>&nbsp;&nbsp;Add</button>
													</div>
							
						        </form>
								</div>
								</div>
								
								</div>
								
								
								 <div class='chart tab-pane' id='edit-appoinment' style='position: relative; height: 1000px;'>
                                        <div class='box-header' style='cursor: move;'>
                                            <h3 class='box-title'>&nbsp;&nbsp;Delete Appointment</h3>
                                        </div>
									</br>
                                       
										<form method='POST' action=''> 
										<div id='delete' >
										</div>
											&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
													&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
                                                     &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
													  &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
													   &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
													    &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
														 &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
														  &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
														   &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
														    &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
															 &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
															  &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
										<button class='btn btn-danger' type='submit' id='deletebutton'>Delete</button>
										
										
										<form>
										<div id='ok'></div>



                                    </div>
                                </div>
                            </div>
								
							</div>	
							
							</div>
								
								
								
							
										
										



		
	


                </section><!-- /.content -->";

}

else

{
echo"

 <!-- bootstrap 3.0.2 -->
  <link href='wp-content\plugins\myfirstplugin\css\bootstrap.min.css' rel='stylesheet' type='text/css' />
  <link rel='stylesheet' href='//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css'>
  <script src='wp-content\plugins\myfirstplugin\js\jquery-2.1.3.js' type='text/javascript'></script>
  <script src='//code.jquery.com/ui/1.11.2/jquery-ui.js'></script>
  <link rel='stylesheet' href='/resources/demos/style.css'>

</head>
<body>

 
<center><div class='alert-danger'><h1>Please login</h1></div><center>
 
 
";





}
echo "<label class='alert-success'>Appointment Sent</label>";
if(isset($_GET['s']))
{
	echo "<label class='alert-success'>Appointment Sent</label>";
}


echo "	</body> </html>";
  ?>