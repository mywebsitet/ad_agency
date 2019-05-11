
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
<script src="script2.js"></script>

</head>
<body>
	
	
<div class="main">
<h1>Select Product Picture</h1><br/>
<hr>
 

<form id="uploadimage" action="" method="post" enctype="multipart/form-data">
 
	<?php
    $query="SELECT * FROM add_detals where s_no='$id'";
  $sd=mysqli_query($conn,$query);
  while ($row=mysqli_fetch_array($sd))
  {
    $is=$row['email'];
    ?>
	
<div id="image_preview"><img src="upload/<?php echo $row['p_upload'];?>" id="previewing" /></div>
<hr id="line">
<div id="selectImage">
<label>Select Your Image</label><br/>
<input type="file" name="file" value="<?php echo $row['p_upload'];?>" id="file" />


</div>

</div>
<h4 id='loading' >loading..</h4>
<div id="message"></div>

<div style="position:absolute; top:200px; right:10%; ">

  <font color="150  #00ff80">
  <h2><p color>EDIT INPUT ADD DETAILS</p></h2></font>
  <div class="form-group">
  
  <input class="form-control" size="70px" id="uname" name="uname" value="<?php 
  //$id=$_GET['id'];
  echo $row['email'];
  ?>" readonly="readonly">
  <input class="form-control" id="sn" name="sn" value="<?php 
  
  echo $id;
  ?>" readonly="readonly">
</div>


  <div class="form-group">
  
  <input type="text" class="form-control" id="p_name" name="p_name" value="<?php echo $row['p_name'];?>" placeholder="Product name................">
<!--/div>


<div class="form-group"-->
  
  <textarea  class="form-control" rows="5" name="p_diteils" value="<?php echo $row['product_details'] ; ?>"  placeholder="Product diteils........"> <?php echo $row['product_details'] ; }?></textarea>
</div>
<input type="submit" value="Upload" class="submit" name="submit" />
<div style="position: absolute;  top:380px; left:70px;">
<a href="\ads/login/edits.php ?id=<?php echo $is; ?>" >BACK TO EDIT</a>
</div>
<?php
//}
?>
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