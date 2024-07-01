<!DOCTYPE html>
<html lang="en">

<head>
    <title>Zwicher</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/main.css">
</head>

<body>
    <?php include "./php/functions.php"; 
    topbar($_SESSION["users"]);;?>
    <dvi class ="register">
        <form action="./handle_register.php" method="post">
            <label for="username">Username:</label><br>
            <input class="register_input" id="username" name="username" required type="text" /><br>
            <label for="email">Email:</label><br>
            <input class="register_input" id="email" name="email" required type="email" /><br>
            <label for="password">Password:</label><br>
            <input class="register_input" id="password" name="password" required type="password" /><br>
            <div class="register_buttons">
            <input class="register_send" name="register" type="submit" value="Register" />
            <div class="register_login"><a href="./login.php">Login</a></div></divclass>
        </form>
    </dvi>
</body>

</html>