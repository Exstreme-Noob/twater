<?php

function print_head() {	
echo "<!doctype html>";
echo "<html lang=\"de\">";
echo "  <head>";
echo "    <meta charset=\"utf-8\">";
echo "    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">";
echo "    <title>What should we eat today</title>";echo "  </head>";
echo "  <body>";
echo "<link rel=\"stylesheet\" href=\"/style/pagestyle.css\">";
echo "<div class=\"topbar\">";
echo "<div class=\"topbar-left\">";
echo "<a href=\"/\" class=\"topbar\">Home</a>";
echo "      <a href=\"gericht.php\"/\" class=\"topbar\">Gerichte anzeigen</a>";
echo "</div>";
echo "<div class=\"topbar-rigth\">
<a href=\"/\" class=\"topbar\">Contact Me</a></div>
<a href=\"gericht_frm.php\" class=\"topbar\">Gerichte hinzufügen</a>";
echo "</div>";
echo"</div><br>";
}

function print_foot() {
    echo"
    <div class=\"bottombar\">
        <a href=\"https://www.ismycomputeronfire.com/\">Are you on fire?</a>
        &nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
        <a href=\"/sub/imprint.html\">Imprint</a>
        &nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
        <a href=\"/\">Contact Me</a>
        &nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
        <a href=\"/\">GitHub</a>
    </div>";
echo "    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN\" crossorigin=\"anonymous\"></script>";
echo "  </body>";
echo "</html>  ";  
}
     
?> 
		
	