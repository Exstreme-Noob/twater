<?php
include "./php/functions.php";
session_start();
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
        <?php
        topbar($_SESSION['user']);
        ?>
        <div class="profile_main">
            <img src="<?php echo getuserpfp($_SESSION['uid']); ?>" alt="error">
            <?php echo $_SESSION['user']
            ?><div class="eddit_profile_button"><a href="eddit_profile.php">Eddit Profile</a></div>
        </div>
    </body>
    <?php
} else {
    header("Location: index.php");
}
?>