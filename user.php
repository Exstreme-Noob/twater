<?php
include "./php/functions.php";
session_start();
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
if ($_SESSION['user'] != null) {
    ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <title>Zwicher</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./style/main.css">
    </head>

    <body>
    <script>
        document.addEventListener("DOMContentLoaded", function(event) { 
            var scrollpos = localStorage.getItem('scrollpos');
            if (scrollpos) window.scrollTo(0, scrollpos);
        });

        window.onbeforeunload = function(e) {
            localStorage.setItem('scrollpos', window.scrollY);
        };
    </script>
        <?php
        topbar($_SESSION['user']);//Veljko
        ?>
        <div class="profile_main">
            <img src="<?php echo getuserpfp($_SESSION['uid']); ?>" alt="error">
            <?php echo $_SESSION['user']?>
            <div class="profile_uid">
            <?php echo "id:".$_SESSION['uid'] ?></div>
            <div class="eddit_profile_button"><a href="eddit_profile.php">Edit Profile</a></div>
        </div>
        <?php content_from($_SESSION["uid"]); ?>
    </body>
    <?php
} else {
    header("Location: index.php");
}
?>