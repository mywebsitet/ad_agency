<?php

include ("config.php");

//include ("insert_code.php");

?>
<!DOCTYPE html>
<html>
<head>
<title>COMAPNY DETAILS</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>



<link rel="stylesheet" href="style.css" />
<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed|Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="script.js"></script>
<body>
<form id="uploadimage" action="" method="post" enctype="multipart/form-data">


<div class="main">
<h1>Product Picture</h1><br/>
<hr>

<div id="image_preview"><img id="previewing" src="images.jpg" /></div>
<hr id="line">
<div id="selectImage">
<label>Select Your Image</label><br/>
<input type="file" name="file" id="file" required />

</div>

</div>
<h4 id='loading' >loading..</h4>
<div id="message"></div>
  

  





  <div style="position:absolute; top:40px; right:20%; ">
<font size="+3" face="Georgia, Times New Roman, Times, serif" color="#3366CC">PROFILE DETAILS</font>
<div class="form-group">
  <input class="form-control" id="uname" name="uname" value="<?php 
  $id=$_GET['ids'];
  echo "$id";?>" readonly="readonly" style="border: none">
  
  <input type="text" class="form-control" id="c_name" name="c_name" placeholder="Enter company name" required="required">
</div>
<div class="form-group">
  
  <input type="email" class="form-control" id="mail" name="mail" placeholder="Enter company email..." required="required">
</div>
<div class="form-group">
  
  <input type="number" class="form-control" id="phone" name="phone" placeholder="phone no...." required="required">
</div>

<div class="form-group">
  
  <input type="text" class="form-control" id="street" name="street" placeholder=" street...." required="required">
</div>
<div class="form-group">
  
  <input type="text" class="form-control" id="town" name="town" placeholder="town/suburb...." required="required">
</div>
<div class="form-group">
  
  <input type="text" class="form-control" id="city" name="city" placeholder="city....">
</div>
<div class="form-group">
  
  <input type="text" class="form-control" id="post_no" name="post_no" placeholder="post code...." required="required">
</div>
<div class="form-group">
  
  <input type="text" class="form-control" id="fax_no" name="fax_no" placeholder="Fax no...." required="required">
</div>
<div class="form-group">
  
  <input type="text" class="form-control" id="url" name="url" placeholder="company Website URL...." required="required">
</div>

	
  
  
  <input type="submit" value="Upload" class="submit" name="submit" /> 
  <div style="position: absolute;  top:600px; left:45px;">
<a href="edits.php ?id=<?php echo $id ?>" > EDIT AD DETAILS</a>
</div>  
</div>
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