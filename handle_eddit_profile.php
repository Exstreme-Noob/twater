<body>
    <a href="index.php">Startseite</a>
    <?php include "./php/functions.php";
    session_start();
    $uid = $_SESSION["uid"];
    if ($_POST["name"]!=NULL) {
        $name = $_POST["name"];
        $_SESSION["user"]=$name;
        $sql = "UPDATE users SET `name`='$name' WHERE uid = $uid;";
        getSQLQuery($sql);
    }

    if ($_POST["password"]!=NULL) {
        $password = $_POST["password"];
        $sql = "UPDATE `users` SET `password`='$password' WHERE uid = $uid;";
        getSQLQuery($sql);
    }

    if ($_POST["email"]!=NULL) {
        $email = $_POST["email"];
        $sql = "SELECT `uid` FROM `users` WHERE `email` = $email;";
        $oldmail = mysqli_fetch_array(getSQLQuery($sql))[0];
        if ($oldmail == $uid) {
            $_SESSION["email"]=$email;
            $sql = "UPDATE `users` SET `email`='$email' WHERE `uid` = $uid;";
            getSQLQuery($sql);
        }
        else{
            echo "email aready used";
        }
    } 
    header("Location: user.php")
    ?>
</body>