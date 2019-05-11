<?php
include ("config.php");
$id=$_GET['id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Edit details</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
	 <h2>COMPANY DETAILS</h2>
   <div style="position: absolute; top: 20px; right: 110px; color: red;"><a href="logout.php"><button type="button" class="btn btn-primary">Logout</button></a> </div>
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
    
    $query="SELECT * FROM company_detals where email_id='$id'";
 	$sd=mysqli_query($conn,$query);
 	while ($row=mysqli_fetch_array($sd))
 	{
 		?>
    <tbody>
      <tr>
        <td align="center"><img src="upload/<?php echo $row['p_upload'];?>" class="img-circle" alt="Cinque Terre" width="100" height="100"></td>
        <td><?php echo $row['c_name'];?></td>
        <td><?php echo $row['ph_number'];?></td>
        <td><?php echo $row['web_url'];}?></td>
       
      </tr></tbody>
  </table>
</div>




<div style="position: absolute;  top: 260px; right: 100px;">
<div class="container">
  <h2>ADD DETAILS <div style="position: absolute; right: 20px; top: 15px;"> <a href="imag_aj/ajax_upload_image_main.php? id=<?php echo $id ?> ">add new ad</a></div></h2>
  

 
             
  <table class="table table-bordered">
    <thead>
      <tr class="info">
        <th>Product name</th>
        <th>Product details</th>
        <th>Images</th>
        <th>Exp Date</th>
        <th>Update exp date</th>
        <th>Edit</th>
        <th>Delet</th>
      </tr>
    </thead>
    <?php
    $de="NULL";
    $query="SELECT * FROM add_detals where email='$id' AND delete_d='0' ";
 	$sd=mysqli_query($conn,$query);
 	while ($row=mysqli_fetch_array($sd))
 	{
 		?>
 	

    <tbody>
      <tr>
        <td><?php echo $row['p_name'];?></td>
        <td><?php echo $row['product_details'];?></td>
        <td align="center"><img src="imag_aj/upload/<?php echo $row['p_upload'];?>" class="img-circle" alt="Cinque Terre" width="100" height="100"></td>
        <td><?php echo $row['e_date'];?></td>

        <td align="center"><a href="update_exp_date.php ?id=<?php echo $row['s_no']?>"><img src="edit.svg" height="50" width="40"></a></td>

        <td align="center"><a href="imag_aj/ad_edit_main.php ?id=<?php echo $row['s_no']?>"><img src="edit.svg" height="50" width="40"></a></td>
<form action="" method="post">
        <input type="hidden" name="ids" value="<?php echo $row['s_no']; ?>" />
        <td align="center"><input type="Image"  name="Delet" value="delete"  src="delet.svg" height="50" width="40" alt='Delete Plan' ></button></td>
      </tr>
</form>
      
      	<tr>
      <?php
          }
      ?>
  </tr>
      
    </tbody>
  </table>
</div>
</div>

</body>
</html>
<?php
if(isset($_POST['Delet']))
{
  $ids=$_POST['ids'];
 
$is='1';
{
$query="UPDATE add_detals SET delete_d='$is' where  s_no='$ids' ";
mysqli_multi_query($conn, $query);
}
}
?>