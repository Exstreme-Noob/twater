<?php 
require_once "db.inc.php";
require_once "functions.inc.php";

session_start();

print_head();

if (isset($_SESSION['user'])){
	echo "Tschüss ".$_SESSION["user"]."<br>";
	if(session_destroy()) {
		echo "Abmeldung erfolgreich<br>";
		echo "<a href=\"auth.php\">Anmelden</a><br>";
	} else {
		echo "Abmeldung nicht erfolgreich";
	}
} else {
	echo "Es besteht keine Anmeldung<br>";
	echo "<a href=\"auth.php\">Anmelden</a><br>";
}
print_foot();

?>