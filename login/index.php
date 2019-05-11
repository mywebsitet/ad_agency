<?php

//mysql_connect("localhost","root","");
//mysql_select_db("subham");

//include("connect.php");
include("config.php");
//ob_start();
//session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">



<style>
body {margin:0;}

.navbar {
  overflow: hidden;
  background-color: #333;
  position: fixed;
  top: 0;
  width: 100%;
}

.navbar a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.navbar a:hover {
  background: #ddd;
  color: black;
}

.main {
  padding: 16px;
  margin-top: 30px;
  height: 1500px; /* Used in this example to enable scrolling */
}
</style>

<title>main page</title>

</head>

<body bgcolor="#f2f2f2">

 <div class="navbar">
  <a href="index.php">HOME</a>
  <a href="singin.php">LOG IN</a>
  <a href="singin.php">SIGN UP</a>
 
</div>



<div class="main">
<div style="position: absolute;top: 100px;left: 250px;">

      <?php
   
    $i= date("Y-m-d");
    
    $query1="SELECT * FROM add_detals where delete_d='0' AND e_date>='$i'  order by s_no desc";
  $ad=mysqli_query($conn,$query1);
  while ($row=mysqli_fetch_array($ad))
  {
    ?>

      <table>
      <tr><td >

      		<?php
      	
     $id=$row['email'];
     $s=$row['s_no'];
    
    $query="SELECT * FROM company_detals where email_id='$id'";
 	$sd=mysqli_query($conn,$query);

 	while ($row=mysqli_fetch_array($sd))
 	{
 		
 		?><table><tr><td>
 		 <img src="upload/<?php echo $row['p_upload'];?>" class="img-circle" alt="Cinque Terre" width="100" height="100"></td><td><font color="#6666ff">
 		 Company:<?php echo $row['c_name'];?><br>
        Tel:<?php echo $row['ph_number'];?>
        <br>Web url:<?php echo $row['web_url'];?></font></td></tr></table></td></tr>

	<?php
          }
          ?>

<?php
   
    
    $query1="SELECT * FROM add_detals where s_no='$s' ";
  $ad2=mysqli_query($conn,$query1);
  while ($row=mysqli_fetch_array($ad2))
  {
    ?>
      
 		
 			<tr><td>
 				<img src="imag_aj/upload/<?php echo $row['p_upload'];?>" width="800" height="500"></td></tr>
 				<tr>
 					<td><h1>
 						<?php echo $row['product_details'];?>
 					</h1></td></tr>
 				<tr>
 					<td>
          <?php 
        } ?>
 						 				</td></tr>

<tr>
	<td></td>
	<?php }
	
	 ?>
</td></tr></table>
 	





</div></div>
</body>
</html>