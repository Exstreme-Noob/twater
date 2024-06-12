 <?php
 
require_once "db.inc.php";
require_once "functions.inc.php";
session_start();

print_head();

echo "<h1>Gerichte anlegen:</h1>";
	
		if (!isset($_SESSION['user'])){
			
			echo "Bitte zuerst <a href=\"auth.php\">einloggen</a>";
		} else {
			echo "Hallo ".$_SESSION['user']."<br>";
			
			if (isset($_POST["gericht"])){
				$gericht = $_POST["gericht"];				//Variable gericht von Formular
				$beschreibung = $_POST["beschreibung"];		//Variable beschreibung von Formular
				
				$sql = "INSERT INTO gericht (Bezeichnung, Beschreibung) VALUE ('$gericht', '$beschreibung')";
				$result= getSQLQuery($sql);
				if($result) {
					echo " Neue Daten eingetragen <br>";
				}
			}

			
			$result = getAlleGerichte();
			printTable($result); ?>
  
    <h2>Bitte geben Sie die Daten einer Mahlzeit ein:</h2>
		<form action="<?php $PHP_SELF; ?>" method="post">
			<label for="gericht">Name des Gerichts:</label>
			<input type="text" id="gericht" name="gericht"><br><br>
			<label for="beschreibung">Beschreibung:</label>
			<input type="text" id="beschreibung" name="beschreibung"><br><br>
			<label for="beschreibung">Bild Link:</label>
			<input type="text" id="bild" name="bild"><br><br>
			<input type="submit" value="Gericht anlegen">
		</form> 			
			
<?php			
			
			echo "<a href=\"logoff.php\">ausloggen</a>";
 		} 
print_foot(); 		
?>	
 			
