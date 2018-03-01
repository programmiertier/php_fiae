<?php
// wir bauen einen Datenbestand auf
// zu Artikeln aus dem Baumarkt
// ein Artikel: Bezeichnung, Preis

// der Artikel ist ein Objekt mit den Eigenschaften Bezeichnung und Preis
// ODER artikel ist ein Array mit den Indizes bez und preis
$artikel["bez"] = "Gartenstuhl";
$artikel["preis"] = 29.99;

// Testausgabe
print_r($artikel);

print "<hr/>";
// Die Wertzuweisung zum Array in einer Zeile
$artikel = array("bez" => "Gartenstuhl", "preis" => 29.99);
// Testausgabe
print_r($artikel);
print "<hr/>";

foreach($artikel as $key => $value)
{
    print "$key: $value<br/>";
}
print "<hr/>";

// ein Array bestehdn aus mehreren Artikel
$artikelliste[0] = array("bez" => "Gartenstuhl", "preis" => 29.99);
$artikelliste[1] = array("bez" => "Blumenerde", "preis" => 6.99);
$artikelliste[2] = array("bez" => "Rosenpflanze", "preis" => 12.99);
$artikelliste[3] = array("bez" => "Gießkanne", "preis" => 4.59);

// Testausgabe
print_r($artikelliste);
print "<hr/>";

// Ausgabe in Form einer Tabelle
// jeder Artikel in der Liste ist ein Array bestehtn aud mehreren Werten
foreach($artikelliste as $artikel)
{
    print_r($artikel);
    print "<br/>";
}
print "<hr/>";

foreach($artikelliste as $artikel)
{
    foreach($artikel as $key => $value)
    {
        print "$key: $value <br/>";
    }
    print "<br/>";
}

?>