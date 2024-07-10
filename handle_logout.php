<?php include "./php/functions.php";//Veljko
    session_start();
    session_destroy();
    header("Location: index.php");
