
	<?php
	include ("config.php");
	$id=$_GET['id'];
	?>
<html>
<head>
<title>Ajax Image Upload Using PHP and jQuery</title>

<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="style.css" />
<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed|Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="script.js"></script>



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
	
	
<div class="main">
<h1>Product Picture</h1><br/>
<hr>

<form id="uploadimage" action="" method="post" enctype="multipart/form-data">
	
	<!--form action="" method="post" enctype="multipart/form-data"-->
<div id="image_preview"><img id="previewing" src="images.jpg" /></div>
<hr id="line">
<div id="selectImage">
<label>Select Your Image</label><br/>
<input type="file" name="file" id="file" required />


</div>

</div>
<h4 id='loading' >loading..</h4>
<div id="message"></div>

<div style="position:absolute; top:100px; right:10%; ">

  <font color="150  #00ff80">
  <h2><p color> INPUT ADD DETAILS.</p></h2></font>
  <div class="form-group">
  
  <input class="form-control" id="uname" name="uname" value="<?php 
  $id=$_GET['id'];
  echo "$id";?>" readonly="readonly>
</div>
<br><br><br>

  <div class="form-group">
  
  <input type="text" class="form-control" id="p_name" name="p_name" placeholder="Product name................">
</div>


<div class="form-group">
  
  <textarea class="form-control" rows="5" id="p_diteils" name="p_diteils" placeholder="Product diteils........"></textarea>
</div>

<div class="form-group">
<div id="select_box">
 <select onchange="fetch_select(this.value);" name="day">
  <option>Select Time</option>
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
    
    


<input type="submit" value="Upload" class="submit" name="submit" ><br><br>
<div style="position: absolute;  top:460px; left:70px;">
<a href="\ads/login/edits.php ?id=<?php echo $id ?>" >BACK TO EDIT</a>
</div></div></div></div> 
</form>

</body>
</html>
<style>
a:link, a:visited {
    background-color: #00ff40;
    color: white;
    padding: 14px 25px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    height: 50px;
    width: 300px;
}


a:hover, a:active {
    background-color:   #00bfff;
}
</style>