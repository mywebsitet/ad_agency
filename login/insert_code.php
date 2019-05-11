<?php
include("config.php");





if(isset($_POST['submit']))
{
	$id=1;
	$ids=$_GET['ids'];
	

	$NAME=$_POST['c_name'];
	
	$MAIL=$_POST['mail'];
	$PHONE=$_POST['phone'];
	$STREET=$_POST['street'];
	$TOWN=$_POST['town'];
	$CITY=$_POST['city'];
	$POST_NO=$_POST['post_no'];
	$FAX_NO=$_POST['fax_no'];
	$URL=$_POST['url'];
	$file= basename($_FILES["file"]["name"]);
	
	{
		 
		
		//mysql_query
		//$query="UPDATE company_detals SET c_name='$NAME' where email_id='$ids'";


		$query="UPDATE company_detals SET c_name='$NAME',street='$STREET',town='$TOWN',city='$CITY',c_email_id='$MAIL',post_code='$POST_NO',fax_no='$FAX_NO',ph_number='$PHONE',web_url='$URL',p_upload='$file',entry='$id' where email_id='$ids'";
		//$query="INSERT INTO  company_detals(c_name,street,town,city,c_email_id,post_code,fax_no,ph_number,web_url,p_upload,	entry) values ('$NAME','$STREET','$TOWN','$CITY','$MAIL','$POST_NO','$FAX_NO','$PHONE','$URL','$file','$id')";

		mysqli_multi_query($conn, $query);

		echo " successful";
	    }
	    header("location:edits.php? id=$id ");
	}
	?>
	