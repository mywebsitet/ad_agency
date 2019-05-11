<?php
include ("config.php");
if(isset($_POST['get_option']))

{


 $state = $_POST['get_option'];
 echo "$state";
 $select="select amount from exp_date where time='$state'";
  //mysqli_multi_query($conn, $select);
  $sd=mysqli_query($conn,$select);
  while($row=mysqli_fetch_array($sd))

 
 
 {
  echo "<option>".$row['amount']."</option>";
 }
 exit;
}
?>