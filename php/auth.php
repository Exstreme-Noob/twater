<!doctype html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>What should we eat today</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
  <link rel="stylesheet" href="/style/pagestyle.css">
  <div class="topbar">
            <div class="topbar-left">
                &nbsp;&nbsp;&nbsp;
                <a href="/" class="topbar">Home</a>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="/" class="topbar">Contact Me</a>
            </div>
            <div class="topbar-rigth">
                <a href="/php/gericht.php" class="topbar">Download Virus</a>
                &nbsp;&nbsp;&nbsp;
            </div>
        </div>
  <div class="container mt-3">
    <h1>Bitte geben Sie ihre Zugangsdaten ein:</h1>
		<form action="./gericht.php" method="post">
			<label for="user">User:</label>
			<input type="text" id="user" name="user"><br><br>
			<label for="passw">Kennwort:</label>
			<input type="password" id="passw" name="passw"><br><br>
			<input type="submit" value="Submit">
		</form> 
		</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <div class="bottombar">
            <a href="https://www.ismycomputeronfire.com/">Are you on fire?</a>
            &nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
            <a href="/sub/imprint.html">Imprint</a>
            &nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
            <a href="/">Contact Me</a>
            &nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
            <a href="/">GitHub</a>
  </body>
</html>