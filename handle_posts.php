<body>
    <?php include "./php/functions.php";
    session_start();
    if (isset($_SESSION["user"])) {
        $_SESSION["user"] = null;
        $_SESSION["uid"] = null;
        header('Location:index.php');
    } else {
        $_SESSION['user'] = null;
        $_SESSION["uid"] = null;
        header('Location:index.php');
    }
    ?>  grgf
</body>

</html>