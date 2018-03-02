<?php
// Dieses Skript wird direkt aufgerufen

// es soll der Inhalt einer Datei gelesen und angezeigt werden
// Die Datei muss vorhanden sein, sonst geht das nicht
// Funktion: fopen mit modus r (read)

// 1. Datei öffnen

$datei = fopen("kram.txt", "r");

// 2. Prüfen, ob das funktioniert hat
if($datei == false)
{
    echo "Ich habe heute leider keine Datei für dich";
}

// 2. Daten einer Zeile aus Datei
// Funktion: fgets($datei), Rückgabe: false, wenn nix drin ist
// fgets() holt eine Zeile aus der Datei und rückt eine Zeile vor

$zeile = fgets($datei);

// solange noch eine Zeile gelesen werden kann
while($zeile != false)
{
    // Ausgabe der Zeile
    print $zeile."<br/>";

    // lesen der nächsten zeile
    $zeile = fgets($datei);
}

// 4. schließen der datei
fclose($datei);



?>