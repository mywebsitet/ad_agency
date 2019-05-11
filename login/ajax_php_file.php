<?php
include ("config.php");
if(isset($_FILES["file"]["type"]))
{
$validextensions = array("jpeg", "jpg", "png");
$temporary = explode(".", $_FILES["file"]["name"]);
$file_extension = end($temporary);
if ((($_FILES["file"]["type"] == "image/png") || ($_FILES["file"]["type"] == "image/jpg") || ($_FILES["file"]["type"] == "image/jpeg")
) && ($_FILES["file"]["size"] < 100000)//Approx. 100kb files can be uploaded.
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


     $ids=1;
	//$ids=$_GET['ids'];
	
     $id=$_POST['uname'];
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


		$query="UPDATE company_detals SET c_name='$NAME',street='$STREET',town='$TOWN',city='$CITY',c_email_id='$MAIL',post_code='$POST_NO',fax_no='$FAX_NO',ph_number='$PHONE',web_url='$URL',p_upload='$file',entry='$ids' where email_id='$id'";
		//$query="INSERT INTO  company_detals(c_name,street,town,city,c_email_id,post_code,fax_no,ph_number,web_url,p_upload,	entry) values ('$NAME','$STREET','$TOWN','$CITY','$MAIL','$POST_NO','$FAX_NO','$PHONE','$URL','$file','$id')";

		mysqli_multi_query($conn, $query);
		
		//echo " successful";
	    }


echo "<span id='success'>Image Uploaded Successfully...!!</span><br/>";
echo "<br/><b>File Name:</b> " . $_FILES["file"]["name"] . "<br>";
echo "<b>Type:</b> " . $_FILES["file"]["type"] . "<br>";
echo "<b>Size:</b> " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
echo "<b>Temp file:</b> " . $_FILES["file"]["tmp_name"] . "<br>";
}
}
//header("location:edits.php? id=$id ");
}
else
{
echo "<span id='invalid'>***Invalid file Size or Type***<span>";
}
}
?>