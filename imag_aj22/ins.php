<?php
  // Create database connection
  $db = mysqli_connect("localhost", "root", "", "ad_agence");

  // Initialize message variable
  $msg = "";

  // If upload button is clicked ...
  if (isset($_POST['submit'])) {
  	// Get image name
  	$image = $_FILES['image']['name'];
  	// Get text
  	$image_text = mysqli_real_escape_string($db, $_POST['image_text']);

  	// image file directory
  	$target = "images/".basename($image);


  /*$file=basename($_FILES["file"]["name"]);
  //$fileToUpload=$file;
  echo $file;
  {
  $query="INSERT INTO add_detals(p_name,product_details,p_upload) values ('$P_NAME','$P_DITEILS','$file')";
  mysqli_multi_query($conn, $query);
    //echo "successful";
      }*/

  	$sql = "INSERT INTO add_detals (p_upload, p_name, upload) VALUES ('$image', '$image_text', now())";
  	// execute query
  	mysqli_query($db, $sql);

  	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
  	}
  }
  $result = mysqli_query($db, "SELECT * FROM images");
?>