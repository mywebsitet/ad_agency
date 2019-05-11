<?php
include("config.php");
//ob_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title> sing up</title>

 <meta charset="utf-8">




  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<style>
.alert {
    padding: 20px;
    background-color: #f44336;
    color: white;
}

.closebtn {
    margin-left: 15px;
    color: white;
    font-weight: bold;
    float: right;
    font-size: 22px;
    line-height: 20px;
    cursor: pointer;
    transition: 0.3s;
}

.closebtn:hover {
    color: black;
}
</style>




</head>
<body>
<?php


if(isset($_POST['submit']))
{
	$NAME=$_POST['name'];
	
	$MAIL=$_POST['mail'];
	$PASSWORD=$_POST['password'];
	$RE_PASSWORD=$_POST['password2'];
	
	{
		if($PASSWORD==$RE_PASSWORD)
		{
		 
		
		//mysql_query
		$query="INSERT INTO log_in(name,mail,password) values ('$NAME','$MAIL','$PASSWORD')";
		$query1="INSERT INTO  company_detals(ow_name,email_id) values ('$NAME','$MAIL')";
		mysqli_multi_query($conn, $query);
		mysqli_multi_query($conn, $query1);
		 echo "<script type='text/javascript'>alert('submitted successfully!')</script>";
       }


	else
	   {
	   	echo "<script type='text/javascript'>alert('password not match!')</script>";
		
	   }
	}
	//mysql_query("INSERT INTO log_in (name,email,password.re_password) values (name,mail,password,password2)");

}
?>
<form action="" method="get" >




<div class="a" style="position:absolute; top:10px; right:5%; "> 
<table height="50px" width="1350px" bgcolor=""><tr><td>
<table align="left" height="px" width="600px">
<font size="+3" color="#FF0000"><marquee>WEL COME </marquee></font></table></td>
<td ><div class="form-group">
  
  <input type="text" class="form-control" id="id" name="id" placeholder="Enter user name......"></div></td><td><div class="form-group">
  <input type="Password" class="form-control" id="pas" name="pas" placeholder="Enter password......">
</div>

</td><td><div class="form-group">
	 <input type="submit" class="btn btn-primary active" name="submit1" value="LOG IN"></div>
</td></tr></table></div></form>

<form action="" method="post">
<div style="position:absolute; top:100px; right:10%; ">
<font size="+3" face="Georgia, Times New Roman, Times, serif" color="#3366CC">CREATE ACCOUNT</font>
<div class="form-group">
  
  <input type="text" class="form-control" id="name" name="name" placeholder="Enter name">
</div>
<div class="form-group">
  
  <input type="email" class="form-control" id="mail" name="mail" placeholder="email/phone...">
</div>
<div class="form-group">
  
  <input type="password" class="form-control" id="password" name="password" placeholder="Enter password">
</div>

	
	<div class="form-group">
  
  <input type="password" class="form-control" id="password2" name="password2" placeholder="Enter Re_password">
</div>

<div class="form-group">
  
  <input type="submit" class="btn btn-primary active" name="submit"><a href="index.php"><input type="button" name="back" class="btn btn-primary active" value="back" /> </a></button>
</div>

</form>
<div style="position: absolute; top: 0px; right: 320px; border: currentColor;">
	
<img src="p2.jpg" width="800px" height="500px;">





</div>


</body>
</html>
<?php
include("config.php");
if(isset($_GET["submit1"]))
{
$id=$_GET['id'];

$pas=$_GET['pas'];


$result = "SELECT mail,password FROM log_in where mail='$id'";
//$sql = $conn->query($result);
$ss = mysqli_query($conn, $result);
//mysqli_multi_query($conn, $result);



while ($row = mysqli_fetch_array($ss))
if($row[0]==$id && $row[1]==$pas)
 {
   echo "<script type='text/javascript'>alert('CenterId Or Password match!')</script>";
 	
 	//$name=$row['name'];
 	header("location:link.php? ids=$id");
 	
 	

 					//header("location:detalis.php? id=$id && name=$name; ");
 				//header("location:imag_aj\ajax_upload_image_main.php? id=$a;");
 
 			
 			
 }
 else
 {
    echo "<script type='text/javascript'>alert('CenterId Or Password does not match!')</script>";
 

 }

}
?>
