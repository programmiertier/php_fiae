<?php
// Variablen
// aber ohne Datentyp

$zahl = 41;
$zahl = "Hallo";

$zahl1 = 3.14;
$zahl2 = 4;

$text1 = "Hallo";
$text2 = "Welt";


// Ausgabe
// echo $zahl;
print $zahl;

// Berechnung in Ausgaben
print "Ergebnis = " .($zahl1 * $zahl2)."<br>";
print "Erste Zahl ist $zahl1 <br>";
print "Zweite Zahl ist $zahl2 <br>";

// Verbinden von zwei Texten
print "DER Satz in der Programmierung = " .$text1.$text2."<br>";

//-----

$umsatz[0] = 1234;
$umsatz[1] = 345.7;
$umsatz[2] = 12456.99;  //kein Ende vorgegeben

print"<hr/>";
print "<h6>Umsatzzahlen:</h6>";
for($i = 0; $i < 3; $i++)
{
    print $umsatz[$i]."<br/>";
}

// ein Array für die Speicherung eines Datensatzes
$kunde["knr"] = 666;
$kunde["name"] = "Heinz";
$kunde["Umsatz"] = 999.99;

print "<hr/>";
print "<h6>Der Kunde</h6>";
foreach($kunde as $key => $value)   // Achtung: NEU
{
    print "$key: $value<br/>";
}

?>