<?php
include "config.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title> company detalis</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
	 <h2>COMPANY DETAILS</h2><a href="logout.php">Logout here</a> 
<table class="table">
    <thead>
      <tr class="success">
        <th>Company icon</th>
        <th>Company name</th>
        <th>phone no</th>
        <th>web url</th>
        <th>Edit details</th>
      </tr>
    </thead>
    <?php
    
    $query="SELECT * FROM company_detals ";
 	$sd=mysqli_query($conn,$query);
 	while ($row=mysqli_fetch_array($sd))
 	{
 		?>
    <tbody>
      <tr>
        <td align="center"><img src="admin\upload/<?php echo $row['p_upload'];?>" class="img-circle" alt="Cinque Terre" width="100" height="100"></td>
        <td><?php echo $row['c_name'];?></td>
        <td><?php echo $row['ph_number'];?></td>
        <td><?php echo $row['web_url'];?></td>
        
        <td align="center"><a href="imag_aj/ad_edit_main.php ?id=<?php echo $row['s_no'];?>"><img src="edit.svg" height="50" width="40"></a></td>
       
      </tr><tr>
      <td>
        <?php } ?></td></tr></tbody>
  </table>
</div>


</body>
</html>