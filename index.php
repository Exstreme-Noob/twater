<!DOCTYPE html>
<html lang="en">

<head>
    <title>Zwicher</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/main.css"> 
</head>

<body>
    <?php 
    include "./php/functions.php";
    session_start();
    if($_SESSION["uid"]==null){$_SESSION["uid"]=null;}
    topbar($_SESSION["uid"]);?>
    <div class="content">
    <?php
    content();
    ?>  
    </div>
</body>

</html>