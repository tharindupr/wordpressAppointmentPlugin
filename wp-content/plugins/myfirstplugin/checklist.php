<?php
require_once('../../../wp-load.php');
global $wpdb;

$ctime=date('Y-m-d');


$result = $wpdb->get_results( "SELECT * FROM wp_appoinment where wp_appoinment.Date>='".$ctime."' order by date");



 echo  " 
 
 <script>	$( \".action\" ).click(function() {
			
			$.ajax({    //create an ajax request to load_page.php
			
				type: \"GET\",
				url: \"../wp-content/plugins/myfirstplugin/appoinmentreject.php\",             
				dataType: \"html\",   //expect html to be returned 
				data: { id: $( this ).attr(\"id\")} ,
				success: function(response){                    
					
					
				}
						
				});
		
		});
		
		
		
		
 
 
				  
				  
	
</script>
 

 
 
 <div class='box-header'>
             <h3> &nbsp Appointment List</h3>
            

            <table class='table box-solid'>
                <tbody>
                <tr>
					
                    <td>
                        <label>
                            Client Email
                        </label>
                    </td>
                    <td>
                        <label>
                            Date
                        </label>
                    </td>
                    <td>
                        <label>
                            Time
                        </label>
                    </td>
                    <td>
                        <label>
                            Title
                        </label>
                    </td>
					<td>
                        <label>
                            Special Requirements &nbsp&nbsp&nbsp&nbsp
                        </label>
                    </td>
					
                    <td>
                        
                    </td>
                </tr>
                <!--Apoinment shedule-->



			

                <div class='box box-body no-padding '>";

$i=0;				
while($i<count($result))
{
$vv=$result[$i];


 echo                  " <tr >
                       
                        
                        <td>
                            <div class='hideextra' style='width:100px'>".$vv->email."</div>
                        </td>
                        <td>
                            <div class='hideextra' style='width:80px'>".$vv->date."</div>
                        </td>
						<td>
                            <div class='hideextra' style='width:80px'>".$vv->time."</div>
                        </td>
						<td>
                            <div class='hideextra' style='width:120px'>".$vv->type."</div>
                        </td>
						<td>
                            <div class='hideextra' style='width:150px'>".$vv->description."</div>
                        </td>
						
                        <td>
							
                      
							
							<button class='btn btn-danger pull-right action' onClick=\"window.location.reload()\" type='button' id='".$vv->id."' >Reject</button> 
								
                                                       

                        </td>
                    </tr>";
       $i++;             
   }                 


echo "                </div>


                </tbody>
            </table>";



?>