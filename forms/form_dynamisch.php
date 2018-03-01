<?php
// RadioButtons für Auswahl aus mehreren Werten
/*
// Hier wiederholt sich vieles
// Unterschied: bei value ist 1 bis 4, Anzeige 1 bis 4
print "<input type='radio' name='auswahl' value='1' />1<br/>";
print "<input type='radio' name='auswahl' value='2' />2<br/>";
print "<input type='radio' name='auswahl' value='3' />3<br/>";
print "<input type='radio' name='auswahl' value='4' />4<br/>";
*/
for ($wert = 1; $wert <= 4; $wert++)
{
    print "<input type='radio' name='auswahl' value='$wert' ";
    if($wert == 1)
    {
        print "checked ";
    }
    print "/>$wert<br/>";
}
print "<hr/>";

// Variante für CheckBox
// AUswahl meherer Elemente
// Was wollen wir auf der Pizza?
/*
// als Wiederholung in Schleife
// Problem die Werte sind Zeichenketten, daher eine for-schleife mit Zahlen nicht möglich
print "<input type='checkbox' name='belag[]' value='peperoni' />Peperoni<br/>";
print "<input type='checkbox' name='belag[]' value='knoblauch' />Knoblauch<br/>";
print "<input type='checkbox' name='belag[]' value='salami' />Salami<br/>";
print "<input type='checkbox' name='belag[]' value='shrimp' />Shrimps<br/>";
*/

// ich erstelle ein Array mit den Werten - Die Indizierung beginnt mit 0
$belag = array("Peperoni", "Knoblauch", "Salami", "Shrimps");

foreach($belag as $washammadenn)
{
    print "<input type='checkbox' name='belag[]' value='$washammadenn' />$washammadenn<br>";
}
print "<hr/>";

// Ausgabe der Artikel, jeder hat eine id und eine Bezeichnung
// die id wird verwendet als Daten, die vom Formular übermittelt werden und dient zur
// Suche im Datenbestand
// die Bezeichnung ist nicht eindeutig, dient nur zur Anzeige

/*
// Wiederholung für value und Anzeige sind unterschiedliche Daten hinterlegt
// es gilt allerdings: Zuordnung id => bezeichnung
print "<input type='radio' name'artikel' value'a1'>Hose schwarz<br/>";
print "<input type='radio' name'artikel' value'a2'>Hose blau<br/>";
print "<input type='radio' name'artikel' value'a3'>Hose grau<br/>";
*/

$artikel = array("a1" => "Hose schwarz", "a2" => "Hose blau", "a3" => "Hose grau");

foreach($artikel as $id => $bez)
{
    print "<input type='radio' name'artikel' value'$id'>$bez<br/>";
}
print "<hr/>";

// eine Listenauswahl: Wähle aus vier Kandidaten einen aus für die Abstimmung
/*
print "<select name='kandidaten'>";
print "<option value='k1'>Matze</option>";
print "<option value='k2'>Ole</option>";
print "<option value='k3'>Frieda</option>";
print "</select>";
print "<hr/>";
*/
// nur die Optionen lassen sich mit einer Wiederholung zusammenfassen
// aber auch hier haben wir Zuordnung: value => Name
$kandidat = array("k1" => "Matze", "k2" => "Ole", "k3" => "Frieda");
print "<select name='kandidat'>";
foreach($kandidat as $id => $name)
{
    print "<option value='$id'>$name</option>";
}
print "</select>";

?>