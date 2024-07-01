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
    include 'db.php';
    session_start();
    if (isset($_POST["username"])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $result = getPassword($username);
        

        if ($result->num_rows == 0) {
            echo "Benutzername für $username nicht gefunden";
        } else {
            $row = $result->fetch_assoc();
            if ($password == $row['password']) {
                $_SESSION['user'] = $username;
                header("Location: index.php");
            } else {
                echo "Authentifizierung fehlgeschlagen <br>";
            }
        }
    }
    ?>  
     
</body>

</html>