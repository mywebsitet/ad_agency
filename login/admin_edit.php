<!DOCTYPE html>
<html>
<head>
	<title> admin edit</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<?php
include "config.php";
$id=$_GET['id'];
?>
<body>
<div style="position: absolute;  top: 20px; right: 100px;">
<div class="container">
  <h2>ADD DETAILS </div></h2>
  

 
             
  <table class="table table-bordered">
    <thead>
      <tr class="info">
        <th>Product name</th>
        <th>Product details</th>
        <th>Images</th>
        <th>Exp Date</th>
        <th>Delet</th>
      </tr>
    </thead>
    <?php
    $de="NULL";
    $query="SELECT * FROM add_detals where email='$id' ";
 	$sd=mysqli_query($conn,$query);
 	while ($row=mysqli_fetch_array($sd))
 	{
 		?>
 	

    <tbody>
      <tr>
        <td><?php echo $row['p_name'];?></td>
        <td><?php echo $row['product_details'];?></td>
        <td align="center"><img src="imag_aj/upload/<?php echo $row['p_upload'];?>" class="img-circle" alt="Cinque Terre" width="100" height="100"></td>
        <td align="center"><?php echo $row['e_date'];?></a></td><td>
        <?php $id=$row['delete_d'];
        if($id=='0')
        	echo 'NO';
        else echo 'YES';
        ?>
</td>
      </tr>

      
      	<tr>
      <?php
          }
      ?>
  </tr>
      
    </tbody>
  </table>
  <a href="view.php">BACK</a>
</body>
</html>