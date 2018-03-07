<?php

//Verbindung aufbauen 
//mit host, user, password, database

//$db ist ein Objekt 
$db = new mysqli("localhost", "root", "", "projekte");


//Fehler abfangen 
if($db->connect_errno)
{
	print "Keine Verbindung";
	print $db->connect_error;
}

//Sql-Befehl aufbauen
$sql = "select * from arbeit";

//abfrage ausführen und ergebnis speichern
//Ergebnis wird am Server als Rohdaten bereitgestellt
$befehl = mysqli_query($db, $sql);

//wenn ergebnis vorhanden
if($befehl)
{
	//nächsten Datensatz aus der Tabelle holen 
	$datensatz = $befehl->fetch_object();
	while($datensatz)
	{
		foreach($datensatz as $spalte=>$wert)
		{
			print "$wert ";
		}
		$datensatz = $befehl->fetch_object();
		print "<br/>";
	}
}

mysqli_close($db);

?>



