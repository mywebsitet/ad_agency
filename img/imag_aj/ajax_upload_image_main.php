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
<input type="submit" value="Upload" class="submit" name="submit" />
</div>

</div>
<h4 id='loading' >loading..</h4>
<div id="message"></div>

<div style="position:absolute; top:200px; right:10%; ">

  <h2>Input Sizing</h2>
  <p>The form below shows input elements with different heights using .input-lg and .input-sm:</p>
  <div class="form-group">
  
  <input type="text" class="form-control" id="p_name" name="p_name" placeholder="Product name................">
</div>


<div class="form-group">
  
  <textarea class="form-control" rows="5" id="p_diteils" name="p_diteils" placeholder="Product diteils........"></textarea>
</div>

</form>
</form>
</body>
</html>