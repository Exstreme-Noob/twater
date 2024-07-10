<head>
    <title>Zwicher</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/main.css"> 
</head>
<body>
<?php
include "./php/functions.php";
session_start();//Veljko
if (isset($_SESSION['uid'])&&isset($_POST["like"])) {
    $uid = $_SESSION['uid'];
    $zid = $_POST['zid'];

    $sql_check = "SELECT * FROM likes WHERE uid = $uid AND zid = $zid";
    $result = getSQLQuery($sql_check);

    if ($result->num_rows == 0) {
        $sql = "INSERT INTO likes (uid, zid) VALUES ($uid, $zid)";
        getSQLQuery($sql);
    }else{
        $sql = "DELETE FROM likes WHERE uid = $uid AND zid = $zid";
        getSQLQuery($sql);
    }
}
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
?></body>