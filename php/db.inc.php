<?php


function connectDB() {
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "wswet";
	
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if (!$conn) {
  		die("Connection failed: " . mysqli_connect_error());
	}
	return $conn;
}

function getSQLQuery($sql){
	$conn = connectDB();
	$result =  $conn->query($sql);
	$conn->close();
	return $result;
}

function getPassword($user) {	
	$sql = "SELECT passwd FROM user WHERE name = '$user'";
	return getSQLQuery($sql);
}

function getAlleGerichte() {
	$sql = "SELECT * FROM gericht";
	return getSQLQuery($sql);	
}

function printTable($result) {
	$spalten = $result->fetch_fields();			
	echo "<div class=\"container mt-3\">";
	echo	"<table border=\"2\" class=\"table table-striped\">";
	echo	"<tr>";
			foreach($spalten AS $obj) {
				echo "<th> $obj->name </th>";
			}			
	echo	"</tr>";
		while ($row = $result->fetch_assoc()){ 
			$bild = 0;
			echo	"<tr>";
			foreach($row AS $name) {
				if($bild==3){
					$bild=0;
					echo "<td><img src=\"$name\" class=\"logos\"></td>";
				}
				else{
				echo "<td> $name </td>";
				$bild++;}
			}
			echo 	"</tr>";
		} 

	echo 	"</table>";
	echo 	"</div>";
}


?>
