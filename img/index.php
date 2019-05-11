<?php
//Include database configuration file
include_once 'dbConfig.php';

//Get current user ID from session
//$userId = $_SESSION['user_id'];

//Get user data from database
$result = $db->query("SELECT * FROM users");
$row = $result->fetch_assoc();

//User profile picture
$userPicture = !empty($row['picture'])?$row['picture']:'no-image.png';
$userPictureURL = 'uploads/images/'.$userPicture;
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<div class="container">
    <div class="user-box">
        <div class="img-relative">
            <!-- Loading image -->
            <div class="overlay uploadProcess" style="display: none;">
                <div class="overlay-content"><img src="images/loading.gif"/></div>
            </div>
            <!-- Hidden upload form -->
            <form method="post" action="upload.php" enctype="multipart/form-data" id="picUploadForm" target="uploadTarget">
                <input type="file" name="picture" id="fileInput"  style="display:none"/>
            </form>
            <iframe id="uploadTarget" name="uploadTarget" src="#" style="width:0;height:0;border:0px solid #fff;"></iframe>
            <!-- Image update link -->
            <a class="editLink" href="javascript:void(0);"><img src="images/edit.png"/></a>
            <!-- Profile image -->
            <img src="<?php echo $userPictureURL; ?>" id="imagePreview">
        </div>
        <div class="name">
            <h4><?php echo $row['name']; ?></h3>
        </div>
    </div>
</div>