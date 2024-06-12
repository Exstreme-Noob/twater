<!doctype html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Was wird es heute zum Essen geben?</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
  <h1>Gericht anlegen:</h1>
    <h2>Bitte geben Sie die Daten einer Mahlzeit ein:</h2>
		<div class="white-text">
    <form action="./gericht_proc.php" method="post">
			<label for="gericht">Name des Gerichts:</label>
			<input type="text" id="gericht" name="gericht"><br><br>
			<label for="beschreibung">Beschreibung:</label>
			<input type="text" id="beschreibung" name="beschreibung"><br><br>
			<label for="beschreibung">Bild Link:</label>
			<input type="text" id="bild" name="bild"><br><br>
      <input type="submit" value="Gericht anlegen">
		</form> 
  </div></body>
</html>