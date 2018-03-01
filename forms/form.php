<?php
// wir holen die Variable mit dem Wert aus dem Eingabeformular

// dort war die Variablenbezeichnung txt im input-Feld
// den dazugehörigen Wert speichern wir uns in einer lokalen Variablen ab

$txt = $_REQUEST["txt"];


// wir erstellen eine Antwortseite
// AUsgaben erfolgen büer dei Anweisung print
// in der Ausgabe werden die html-Tags eingebaut
print "<p>Sie haben eingegeben: $txt</p>";
print "<hr/>";

$zahl1 = $_REQUEST["zahl1"];
$zahl2 = $_REQUEST["zahl2"];

// bevor man speichert in einer lokalen Variablen, abfragen ob etwas vorhanden ist!
/*
if(!empty($_REQUEST["oper]))...
*/
$oper = $_REQUEST["oper"];


print "<p>Sie haben eingegeben, als Zahl1: $zahl1, Zahl2: $zahl2 und Operation: $oper</p>";
// wenn ein + eingegeben wird, dann addiere zahl1 und zahl2, sonst rechne zahl1 - zahl2
if ($oper == "+") {
    $ergebnis = $zahl1 + $zahl2;
    print "Die Summe ist: $ergebnis";
} else {
    $ergebnis = $zahl1 - $zahl2;
    print "Die Differenzt ist: $ergebnis";
}
print "<hr/>";

// wir holen das Array mit den Tieren
// bevor ich das speicher, abfragen, ob die Variable übertragen wurde
// if(isset($_REQUEST["tier"]))...

$tier = $_REQUEST["tier"];
print "Sie haben ausgewählt: ";
print_r($tier); // Testausgabe eines Arrays
// wir lassen uns die Tiere im Array als Liste ausgeben
print "<ul>";
// für jeden Wert im Array
foreach($tier as $index => $wert)
{
    print "<li>$wert</li>";
}
print "</ul>";
print "<hr/>";

$typ = $_REQUEST["typ"];
print "Sie haben ausgewählt: $typ<br/>";
switch($typ)
{
    case "it": print "Pizza... mit Peperoni... natürlich :>"; 
        break;
    case "fr": print "Heute gibt es Schnecken";
        break;
    case "de": print "Lecker Sauerbraten";
        break;
    case "en": print "Uh... Minzsoße";
        break;
}
?>