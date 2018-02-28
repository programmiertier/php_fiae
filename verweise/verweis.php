<?php

// Die Datenbasis
$daten = array(
    array("Cat" => "Horror", "Titel" => "Blutrausch", "Sprache" => "D", "Preis" => 34.99),
    array("Cat" => "Horror", "Titel" => "Angriff der Killertomaten", "Sprache" => "D", "Preis" => 25.67),
    array("Cat" => "Roman", "Titel" => "Die Firma", "Sprache" => "D", "Preis" => 19.99),
    array("Cat" => "Haushalt", "Titel" => "Do it yourself", "Sprache" => "E", "Preis" => 39.95)
);

// Das soll immer dastehen
print "<h2>Die Datenbasis</h2>";
print "<table>";
foreach ($daten as $buch) {
    print "<tr>";
    foreach ($buch as $key => $value) {
        print "<td>$value</td>";
    }
    print "</tr>";
}
print "</table>";

// verschiende Möglichkeiten zum Einschränken der Anzeige stehen auch immer da
print "<p>Anzeige einschränken: </br>";

// dieser Hyperlink verweist auf DIESES php-Skript
$link = "http://localhost/php_fiae/verweise/verweis.php?cat=Horror";
print "<a href='$link'>Alle Horrorbuecher</a></br>";
$link = "http://localhost/php_fiae/verweise/verweis.php?cat=Roman";
print "<a href='$link'>Alle Romane</a></br>";
$link = "http://localhost/php_fiae/verweise/verweis.php?d";
print "<a href='$link'>Alle Bücher auf Deutsch</a></br>";
$link = "http://localhost/php_fiae/verweise/verweis.php?e";
print "<a href='$link'>Alle Bücher auf Englisch</a></br>";

// wennd as d übermittelt wurde
if(isset($_REQUEST["d"]))
{
    print "<hr/>";
    print "Ihre Suche nach Sprache <br/>";
    print "<table>";
    foreach ($daten as $buch) {
        if ($buch["Sprache"] == "D") {
            print "<tr>";
            foreach ($buch as $key => $value) {
                print "<td>$value</td>";
            }
            print "</tr>";
        }
    }
    print "</table>";
}

// wennd as e übermittelt wurde
if(isset($_REQUEST["e"]))
{
    print "<hr/>";
    print "Ihre Suche nach Sprache <br/>";
    print "<table>";
    foreach ($daten as $buch) {
        if ($buch["Sprache"] == "E") {
            print "<tr>";
            foreach ($buch as $key => $value) {
                print "<td>$value</td>";
            }
            print "</tr>";
        }
    }
    print "</table>";
}

// das was nach Suche eventeull noch ausgegeben werden muss
// WENN die Variable cat übergeben wurde an das Skript
if (isset($_REQUEST["cat"])) {
    $cat = $_REQUEST["cat"];
    print "<hr/>";
    print "Ihre Suche nach $cat <br/>";

    print "<table>";
    foreach ($daten as $buch) {
        if ($buch["Cat"] == $cat) {
            print "<tr>";
            foreach ($buch as $key => $value) {
                print "<td>$value</td>";
            }
            print "</tr>";
        }
    }
    print "</table>";
}


?>