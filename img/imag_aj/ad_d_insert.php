<?php
include ("config.php");
include ("ajax_upload_image_main.php");
if(isset($_POST['submit']))
{
	$P_NAME=$_POST['p_name'];
	$id=$_GET['id'];
	
	$P_DITEILS=$_POST['p_diteils'];
	$file=  $_POST['file']; 
	//$file=basename($_FILES["file"]["name"]);
	//$fileToUpload=$file;
	echo $file;
	{
	$query="INSERT INTO add_detals(p_name,product_details,p_upload,email) values ('$P_NAME','$P_DITEILS','$file','$id')";
	mysqli_multi_query($conn, $query);
		//echo "successful";
	    }
	}
	?>
	