<?php
// dieser Skript wird beispielsweise nach Eingabe im Browser wie gefolgt aufgerufen (URL)
// http://localhost/php_fiae/eingabe_daten/eingabe_daten.php?bez=hose$preis=19.99

// wichtig ist hier: bez=hose$preis=19.99
// das sind die übertragenen Daten in der Form: variable=wert$variable=wert

// diese Daten kommen "angefolgen", aber sind nicht automatisch im php-Skript vorhanden
// ich muss diese Daten aktiv abfragen
// Umgebungsvariable: $_REQUEST[variablenbezeichnung]

// ich hole mir die Bezeichnung (bez) und speichere den Wert in einer Variablen

$bez = $_REQUEST["bez"];

$preis = $_REQUEST["preis"];

// Ausgabe als Antwortseite (Erstellen einer html Seite)
print "<p>Sie haben eingegeben: $bez für $preis</p>";

// Schreiben in Date in php! \o/
// 1. Öffnen der Datei mit Funktion fopen
                                    // write erstellen und überschreiben, append daten werden angehangen
// Übergabe: 1. Dateiname, 2. Modus (w - write, a - append)
// wenn Datei nicht vorhande, dann wird diese erstellt
// Rückgabe: ein Zeiger auf die Datei

$datei = fopen("kram.txt", "a");

// wenn kein Zugriff auf die Datei erfolgen kann
if ($datei == false) {
    echo "Jo, kannste knicken";
}

// 2. Zeile zusammensetzen, die in die Datei geschrieben werden soll
                    // Zeilenumbruch \r\n, weil Windows, eben Windows ist
$zeile = "$bez | $preis\r\n";

// 3. Schreiben der Zeile in Datei
// Funktion: fwrite mit Übergabe: 1. $datei, 2. $zeile
// Rückgabe: ergebnis als bool (true or false)

$ergebnis = fwrite($datei, $zeile);

if($ergebnis == true){
    echo "Das hat geklappt";
}
else{
    echo "Schreiben hat nicht funktioniert";
}

fclose($datei);

?>