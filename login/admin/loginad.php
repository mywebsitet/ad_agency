<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<title>admin log in</title>
</head>
<body>
<form action="" method="get" >




<div class="a" style="position:absolute; top:10px; right:5%; "> 
<table height="50px" width="1350px" bgcolor=""><tr><td>
<table align="left" height="px" width="600px">
</table></td>
<td ><div class="form-group">
  
  <input type="text" class="form-control" id="id" name="id" placeholder="Enter user name......"></div></td><td><div class="form-group">
  <input type="Password" class="form-control" id="pas" name="pas" placeholder="Enter password......">
</div>

</td><td><div class="form-group">
	 <input type="submit" class="btn btn-primary active" name="submit1" value="LOG IN"></div>
</td></tr></table></div></form>
</body>
</html>
<?php
include("config.php");
if(isset($_GET["submit1"]))
{
$id=$_GET['id'];

$pass=$_GET['pas'];


$result = "SELECT name,pas FROM admin";
//$sql = $conn->query($result);
$ss = mysqli_query($conn, $result);
//mysqli_multi_query($conn, $result);



while ($row = mysqli_fetch_array($ss))
if($row[0]==$id && $row[1]==$pass)
 {
   echo "<script type='text/javascript'>alert('CenterId Or Password match!')</script>";
 	
 	//$name=$row['name'];
 	header("location:view.php");
 	
 	

 					//header("location:detalis.php? id=$id && name=$name; ");
 				//header("location:imag_aj\ajax_upload_image_main.php? id=$a;");
 
 			
 			
 }
 else
 {
    echo "<script type='text/javascript'>alert('CenterId Or Password does not match!')</script>";
 

 }

}
?>
