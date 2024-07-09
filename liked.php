<head>
    <title>Zwicher</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/main.css"> 
</head>
<?php
include "./php/functions.php";
session_start();
$user= $_SESSION["user"];
echo "<div class=\"liked_head\">Liked by $user</div>";
if ($_SESSION['user'] != null) {
    topbar($_SESSION["uid"]);
    content_liked($_SESSION["uid"])
    ?>    
    
    <?php
} else {
    header("Location: index.php");
}
?>