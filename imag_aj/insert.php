<?php
include ("config.php");
//include ("ajax_upload_image_main.php");
if(isset($_POST['submit']))
{
	//$P_NAME=$_POST['p_name'];
	//$id=$_GET['id'];
	
	//$P_DITEILS=$_POST['p_diteils'];
	//$file=  $_POST['file']; 
	$file=basename($_FILES["file"]["name"]);
	//$fileToUpload=$file;
	echo $file;
	{
	$query="INSERT INTO exam(pic) values ('$file')";
	mysqli_multi_query($conn, $query);
		//echo "successful";
	    }
	}
	?>