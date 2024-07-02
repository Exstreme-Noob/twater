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
            <img src="<?php echo getuserpfp($_SESSION['user']); ?>" alt="error">
            <?php echo $_SESSION['user'] ?>
        </div>
        <div class="pfp_uplad">
        <form action="./handle_pfp.php" method="post" enctype="multipart/form-data">
        <label for="pfp">Profile Picture:</label><br>
        <input class="pfp_input" id="pfp" name="pfp" required type="file"/><br>
        <input class="pfp_send" name="pfp_submit" type="submit" value="Upload" /><br>
        </form>
        </div>
    </body>
    <?php
} else {
    header("Location: index.php");
}
?>