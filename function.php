<?php
// in diesem Fall wird als Zuordnung $key => $value für $key der Index mit 0 beginnend verwendet

$umsatz = array(123.45, 234.55, 12345.78, 438.11);

print "Die Summe aller Umsätze: " .getSum($umsatz);

print "<br/>";

// function mit falscher Übergabe
// print "Die Summe ist: " .getSum(42);
// print "</hr>";

// ich rufe eine Methode auf und speicher das Ergebnis in einer Variablen

$result = getHallo();
print "Das Ergebnis der Funktion getHallo ist $result";
// ich verdopple das Resultat und gebe das Ergebnis aus
// nen Scheiß geht das!
// print $result * 2;  // geht, aber sinnlos: aber ACHTUNG Rückgabe der Funktion beachten vor Verwendung

print "<hr/>";

// function aufrufen printMe("Test");
// Achtung: Funktion hat kein return aber ich speichere ein return
$result = printMe("Test");

print "<br/>Ergebnis ist die Ausführung: $result";
// function für Berechnugn der Summe aller Werte im Array
// Rückgabetyp fält weg, da es in php keine Datentypen gibt
// ACHTUNG Übergabe eines Arrays wird erwartet

function getSum(array $werte)
{
    $summe = 0;
    foreach($werte as $value)
    {
        $summe = $summe + $value;
    }

    // Rückgabe der Summe
    // ACHTUNG es wrid eine Zahl zurück gegeben
    return $summe;
}

// eine Funktion gibt eine Zeichenfolge zurück
function getHallo()
{
	return "hallo";
}

function printMe($text)
{
    print "<br/>Der Text in der Funktion printMe: $text";
}

?>