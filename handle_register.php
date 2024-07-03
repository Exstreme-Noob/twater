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
    if (isset($_POST["username"])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        if(getEmail($email)->num_rows == 0){
        insertUser($username,$email,$password);
        }else{
            echo "<br> $email already registerd";
        }
    }
?>
</body>