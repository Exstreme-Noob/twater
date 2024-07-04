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
    topbar($_SESSION['uid']);
    ?>
    <br>
    <div class="eddit_profile">
        <div class="pfp_uplad">
            <form action="./handle_pfp.php" method="post" enctype="multipart/form-data">
                <label for="pfp">Change Profile Picture:</label><br>
                <input class="pfp_input" id="pfp" name="pfp" required type="file" /><br>
                <input class="pfp_send" name="pfp_submit" type="submit" value="Upload" /><br>
            </form>
        </div>
        <form class="edit" action="./handle_eddit_profile.php" method="post" enctype="multipart/form-data">
            <div class="eddit_name">
                <label for="name">Change Name:</label><br>
                <input class="name_input" id="name" name="name" type="text" /><br>
            </div>
            <div class="eddit_password">
                <label for="password">Change Password:</label><br>
                <input class="password_input" id="password" name="password" type="text" /><br>
            </div>
            <div class="eddit_email">
                <label for="email">Change E-Mail:</label><br>
                <input class="email_input" id="email" name="email" type="email" /><br>
            </div>
            <input class="eddit_send" name="eddit_submit" type="submit" value="Confirm" /><br>
    </div>
</body>