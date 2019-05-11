<?php 
include ("config.php");
$id=$_GET['ids'];

$query="SELECT entry,email_id FROM company_detals where email_id='$id'";
 	$sd=mysqli_query($conn,$query);
 	while ($row=mysqli_fetch_array($sd))
 	
 		
 	
 		 if($row[entry]!=1)
 			{
 				//$name=$row['name'];
	 

 					header("location:detalis.php? ids=$id ");
 				//header("location:imag_aj\ajax_upload_image_main.php? id=$a;");
 			}
 			
 			else 
 			{
 				
 			header("location:edits.php? id=$id ");
 			//header("location:imag_aj\ajax_upload_image_main.php? id=$id ");

 					
			}
			?>