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
print "<hr/>";
if($zahl2 == 3)
{
	print "Die Variable zahl2 hat den Wert 3<br/>";
}

while($zahl2 > 0)
{
	print $zahl2."<br/>";
	$zahl2--;
}

do
{
	print $zahl2."<br/>";
	$zahl2++;
}
while($zahl2 < 5);

for( $i = 0; $i < 10; $i++)
{
	print "Immer noch Montag <br/>";
}

//-----
$umsatz[0] = 1234;
$umsatz[1] = 345.7;
$umsatz[2] = 12456.99;  //kein Ende vorgegeben

print"<hr/>";
print "<h5>Umsatzzahlen:</h5>";
for($i = 0; $i < 3; $i++)
{
    print $umsatz[$i]."<br/>";
}

// ein Array für die Speicherung eines Datensatzes
$kunde["knr"] = 666;
$kunde["name"] = "Heinz";
$kunde["Umsatz"] = 999.99;

print "<hr/>";
print "<h5>Der Kunde</h5>";
foreach($kunde as $key => $value)   // Achtung: NEU
{
    print "$key: $value<br/>";
}

// alternative Initialisierung eines Arrays
$artikel = array("anr" => 123, "bezeichnung" => "hose", "preis" => 9.99);

print "<hr/>";
print "<h5>Der Artikel</h5>";
// Testausgabe des Arrays
print_r($artikel);

// ein zweidimensionales Array
$ticketpool[0] = array("tnr" => "T1", "Band" => "Band 1");
$ticketpool[1] = array("tnr" => "T2", "Band" => "Band 2");

print "<hr/>";
print "<h5>Die Tickets</h5>";
foreach($ticketpool as $ticket)
{
    foreach($ticket as $key => $value)
    {
        print "$key: $value<br/>";
    }
}
?>