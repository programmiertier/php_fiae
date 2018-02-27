<?php


require("artikeldaten.php");


//wir holen uns die übermittelte Variable
$wahl = $_REQUEST["wahl"];


//wir durchsuchen alle Artikeldaten 
foreach ($artikeldaten as $artikel) {
	//wenn die Artikelnummer dem gesuchten Wert entspricht
    if ($artikel["anr"] == $wahl) {
		//dann Ausgeben Artikel alles
        print "Artikelnummer: " . $artikel["anr"] . "<br/>";
        print "Bezeichnung: " . $artikel["Bezeichnung"] . "<br/>";
        print "Preis: " . $artikel["Preis"] . "</br>";
        print "Beschreibung: " . $artikel["Beschreibung"];
		
		//Verlasse die Schleife
        break;
    }
}

?>