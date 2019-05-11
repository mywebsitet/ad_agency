<?php
include "config.php";
$id=$_GET['id'];
?><!DOCTYPE html>
<html>
<head>
	<title> update exp date</title>

<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<link rel="stylesheet" type="text/css" href="select_style.css">
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript">
function fetch_select(val)
{
 $.ajax({
 type: 'post',
 url: 'select.php',
 data: {
  get_option:val
 },
 success: function (response) {
  document.getElementById("new_select").innerHTML=response; 
 }
 });
}

</script>
</head>
<body>
<form action="" method="POST">
	<div style="position: absolute; left: 520px; top: 50px;">
    <font size="20" color="#0066ff">UPDATE EXP DATE</font>
	<div class="form-group">
<div id="select_box">
 <select onchange="fetch_select(this.value);" name="day">
  <option>Select Day</option>
  <?php
  include ("config.php");

  $select="select time from exp_date";
  //mysqli_multi_query($conn, $select);
  $sd=mysqli_query($conn,$select);
  while($row=mysqli_fetch_array($sd))
  {
 
   echo "<option >".$row['time']."</option>";
  }
 ?>
 </select>

 <select id="new_select" name="amount">
 </select>
    <input type="submit" value="UPDATE"   name="submit"  >
   
    <?php
 $query="SELECT * FROM add_detals where s_no='$id' ";
  $sd=mysqli_query($conn,$query);
  while ($row=mysqli_fetch_array($sd))
  {
    //$a=$row['e_date'];
    $aa=$row['email'];
  }?>
     <a href="edits.php ?id=<?php echo $aa ?>" ><img src="Back.ico" height="50px" width="50px"></a>
</div></div></div></form>
</body>
</html>

<?php
 $query="SELECT * FROM add_detals where s_no='$id' ";
 	$sd=mysqli_query($conn,$query);
 	while ($row=mysqli_fetch_array($sd))
 	{
 		$a=$row['e_date'];
 		$aa=$row['email'];
 		
 		

 		if(isset($_POST['submit']))
 		{
 			$day=$_POST['day'];
 			$amount=$_POST['amount'];
 			$i=date("Y-m-d");
 			//echo $i;


 			if($i>=$a)
 			{
 				$date=date_create($i);
                 date_add($date,date_interval_create_from_date_string("$day"));
                 $is=date_format($date,"Y-m-d");
                 
 				$query="UPDATE add_detals SET e_date='$is' where s_no='$id' ";
 				mysqli_multi_query($conn, $query);
        $query1="INSERT INTO bill_details (ad_s_no,email_id,day,amount,e_date) values ('$id','$aa','$day','$amount','$is')";
        mysqli_multi_query($conn, $query1);
 				
 			}
 			else 
 			{
 				$date=date_create($a);
                 date_add($date,date_interval_create_from_date_string("$day"));
                 $is=date_format($date,"Y-m-d");
                 
 				$query="UPDATE add_detals SET e_date='$is' where s_no='$id' ";
 				mysqli_multi_query($conn, $query);
        $query1="INSERT INTO bill_details (ad_s_no,email_id,day,amount,e_date) values ('$id','$aa','$day','$amount','$is')";
        mysqli_multi_query($conn, $query1);
 				
 			}
 		}


 		}?>