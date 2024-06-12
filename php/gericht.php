 <?php
 
require_once "db.inc.php";
require_once "functions.inc.php";
session_start();

/* Wenn Userdaten übermittelt wurden, werden diese geprüft 
** und die Authentifizierung durchgeführt */
if (isset($_POST['user'])){ 
	$user = $_POST["user"];
	$pass = $_POST["passw"];

	$result = getPassword($user);

	if( $result-> num_rows == 0) {
		$ausgabe = "Benutzername nicht gefunden";
	} else {
		$row = $result->fetch_assoc();
		if( $pass == $row["passwd"] ) {
			$ausgabe =  "Herzlich willkommen <br>";
			$_SESSION['user']=$user;
		} else {
			$ausgabe =  "Authentifizierung fehlgeschlagen <br>";
		}
	}
} else {
	$ausgabe =  "Keine Authentifizierung <br>";
}

print_head();
	
		if (!isset($_SESSION['user'])){
			echo "$ausgabe<br>";
			echo "Bitte zuerst <a href=\"auth.php\">einloggen</a>";
		} else {
			   echo "Hallo ".$_SESSION['user']."<br>";
			   echo "<h1>Alle Gerichte:</h1>";
			$result = getAlleGerichte();
			printTable($result);
			
			echo "<a href=\"logoff.php\">ausloggen</a>";
 		} 
print_foot(); 		
?>	
 			
