<?php
session_start();//Veljko
include "./php/functions.php";
$uid=$_SESSION["uid"];
    $text = $_POST["post_text"];
    $target_dir="./postmedia";
    $uid = $_SESSION["uid"];
    if(isset($_FILES["media"])){
    $uploadOk = 1;
    $target_file = $target_dir . basename($_FILES["media"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
      $check = getimagesize($_FILES["media"]["tmp_name"]);
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
    if ($_FILES["media"]["size"] > 500000) {
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
      if (move_uploaded_file($_FILES["media"]["tmp_name"], "./pfp/".$_SESSION['uid'].".gif")) {
        header("Location: user.php");
        echo "The file ". htmlspecialchars( basename( $_FILES["pfp"]["name"])). " has been uploaded.";
        $sql = "INSERT INTO zwicherts ( uid , text, media) VALUES ($uid, $text, $finallocation);";
        getSQLQuery($sql);
        header("Location: user.php");
        die();
    
      } else {
        echo "<p class=\"error\">Sorry, there was an error uploading your file.</p>";
      }
    }} else {
      $sql = "INSERT INTO `zwicherts` (`zid`, `uid`, `text`, `media`) VALUES (NULL, $uid, '$text','');";
        getSQLQuery($sql);
        header("Location: user.php");
    }


