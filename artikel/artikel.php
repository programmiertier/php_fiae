<?php

// Verwende ein anderes Skript
require("artikeldaten.php");

print "<h1>Übersicht über alle Artikel</h1>";

print "<table border='1' width='80%' height='60%'>";

print "<tr><th>Anr</th><th>Bezeichnung</th><th>Preis</th></tr>";

foreach ($artikeldaten as $artikel) {
    print "<tr>";

    foreach ($artikel as $key => $value) {
        if ($key != "Beschreibung") {
            print "<td>$value</td>";
        }
    }
    // eine Zelle im Hyperlink
    print "<td>";
    print "<a href='http://localhost/php_fiae/artikel/artikelWahl.php?wahl=" . $artikel["anr"] . "'>Details</a>";
    print "</tr>";
}

print "</table>";

?>