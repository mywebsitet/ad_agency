<?php
include ("config.php");

if(isset($_FILES["file"]["type"]))
{
$validextensions = array("jpeg", "jpg", "png");
$temporary = explode(".", $_FILES["file"]["name"]);
$file_extension = end($temporary);
if ((($_FILES["file"]["type"] == "image/png") || ($_FILES["file"]["type"] == "image/jpg") || ($_FILES["file"]["type"] == "image/jpeg")
) && ($_FILES["file"]["size"] < 10000000)//Approx. 100kb files can be uploaded.
&& in_array($file_extension, $validextensions)) {
if ($_FILES["file"]["error"] > 0)
{
echo "Return Code: " . $_FILES["file"]["error"] . "<br/><br/>";
}
else
{
if (file_exists("upload/" . $_FILES["file"]["name"])) {
echo $_FILES["file"]["name"] . " <span id='invalid'><b>already exists.</b></span> ";
}
else
{

	
$sourcePath = $_FILES['file']['tmp_name']; // Storing source path of the file in a variable
$targetPath = "upload/".$_FILES['file']['name']; // Target path where file is to be stored
move_uploaded_file($sourcePath,$targetPath) ; // Moving Uploaded file

$P_NAME=$_POST['p_name'];
	
	
	$P_DITEILS=$_POST['p_diteils'];
	//$file=  $_POST['file']; 
	$file=basename($_FILES["file"]["name"]);
	$id=$_POST['uname'];
	$day=$_POST['day'];
	$amount=$_POST['amount'];
	//echo "$amount";
	//$day='30 day';
	$de='0';
	$i=  date("Y-m-d");
echo $i ."<br>";
$date=date_create($i);
date_add($date,date_interval_create_from_date_string("$day"));


$is=date_format($date,"Y-m-d");
	//$fileToUpload=$file;
	
	{
	$query="INSERT INTO add_detals(p_name,product_details,p_upload,email,upload,delete_d,e_date) values ('$P_NAME','$P_DITEILS','$file','$id', now(),'$de','$is')";
	$query1="INSERT INTO bill_details(email_id,day,amount,e_date )values ('$id','$day','$amount', now())";
	mysqli_multi_query($conn, $query);
	mysqli_multi_query($conn, $query1);
		//echo "successful";
	    }

//echo "<span id='success'>Image Uploaded Successfully...!!</span><br/>";
echo "<script type='text/javascript'>alert('Uploaded successfully!')</script>";
}
}
}
else
{
echo "<span id='invalid'>***Invalid file Size or Type***<span>";
}
}
?>