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

</html>