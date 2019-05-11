<?php
include ("config.php");

if(isset($_FILES["file"]["type"]))
{
$validextensions = array("jpeg", "jpg", "png");
$temporary = explode(".", $_FILES["file"]["name"]);
$file_extension = end($temporary);
if ((($_FILES["file"]["type"] == "image/png") || ($_FILES["file"]["type"] == "image/jpg") || ($_FILES["file"]["type"] == "image/jpeg")
) && ($_FILES["file"]["size"] < 100000000)//Approx. 100kb files can be uploaded.
&& in_array($file_extension, $validextensions))  {
/*if ($_FILES["file"]["error"] > 0)
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
*/
	
$sourcePath = $_FILES['file']['tmp_name']; // Storing source path of the file in a variable
$targetPath = "upload/".$_FILES['file']['name']; // Target path where file is to be stored
move_uploaded_file($sourcePath,$targetPath) ; // Moving Uploaded file

$ID=$_POST['p_name'];
//echo "$P_NAME";
	
	
	$P_DITEILS=$_POST['p_diteils'];
	
	//$file=  $_POST['file']; 
	$file=basename($_FILES["file"]["name"]);
	//$id=$_POST['uname'];
	//echo "$id";
	$sn=$_POST['sn'];
	//echo $ids;
	//$fileToUpload=$file;
	//echo $id;
	//$ID='DON';
	$de='0';
	{
		//$query="UPDATE add_detals SET p_name='$ID' where  s_no='$ids' ";
          //mysqli_multi_query($conn, $query);
	//$query="UPDATE add_detals SET p_upload='$P_NAME' WHERE s_no='$sn' ";
	$query="UPDATE add_detals SET p_name='$ID',product_details='$P_DITEILS',p_upload='$file',upload=now(),delete_d='$de' where s_no='$sn' ";
	mysqli_multi_query($conn, $query);
		//echo "successful";
	    }

//echo "<span id='success'>Image Uploaded Successfully...!!</span><br/>";
echo "<script type='text/javascript'>alert('Uploaded successfully!')</script>";

//}
//}
}
else
{
echo "<span id='invalid'>***Invalid file Size or Type***<span>";
}
}
?>