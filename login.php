<!DOCTYPE html>
<html lang="en">

<head>
    <title>Zwicher</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/main.css">  
</head>

<body>
    <a href="index.php" >Startseite</a>
    <?php include "./php/functions.php";
    session_start();//Veljko
    topbar($_SESSION["uid"]);
    ?>  
     <div class ="login">
        <form action="./handle_login.php" method="post">
            <label for="email">E-mail:</label><br>
            <input class="login_input" id="email" name="email" required type="email" /><br>
            <label for="password">Password:</label><br>
            <input class="login_input" id="password" name="password" required type="password" /><br>
            <div class="login_buttons">
            <input class="login_send" name="login" type="submit" value="Login" />
            <div class="login_register"><a href="./register.php">Register</a></div></divclass>
        </form>
    </div>
</body>

</html>