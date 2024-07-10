<body>
    <a href="index.php" >Startseite</a>
    <?php include "./php/functions.php";//ChatGPT(leander)
    session_start();
    if (isset($_POST["email"])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $result = getPassword($email);
        

        if ($result->num_rows == 0) {
            echo "Benutzername für $email nicht gefunden";
        } else {
            $row = $result->fetch_assoc();
            if ($password == $row['password']) {
                $_SESSION['email'] = $email;
                $_SESSION['uid']= getUserID($email);
                $_SESSION['user']=getUserName($_SESSION['uid']);
                header("Location: index.php");
            } else {
                echo "Authentifizierung fehlgeschlagen <br>";
            }
        }
    }
    ?>  
</body>