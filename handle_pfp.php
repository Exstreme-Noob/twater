
<body>
  
<a href="index.php">Startseite</a>
<br><?php
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
session_start();//Veljko von W3schools.com kopiert
$target_dir = "pfp/";
$target_file = $target_dir . basename($_FILES["pfp"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["pfp"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}

/*' Check if file already exists
if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}*/

// Check file size
if ($_FILES["pfp"]["size"] > 500000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["pfp"]["tmp_name"], "./pfp/".$_SESSION['uid'].".gif")) {
    header("Location: user.php");
    echo "The file ". htmlspecialchars( basename( $_FILES["pfp"]["name"])). " has been uploaded.";
    die();
  } else {
    echo "<p class=\"error\">Sorry, there was an error uploading your file.</p>";
  }
}?>
</body>
