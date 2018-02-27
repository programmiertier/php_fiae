<?php

// Verwende ein anderes Skript
require("kundendaten.php");

print "<h1>Übersicht über alle Kunden</h1>";

print "<table border='1' width='80%' height='60%'>";

print "<tr><th>Kundennummer</th><th>Name</th><th>Status</th><th>Umsatz</th><th>Details</th></tr>";

foreach ($kundendaten as $kunde) {
    print "<tr>";

    foreach ($kunde as $key => $value) {
        if ($key != "Kunde") {
            print "<td>$value</td>";
        }
    }
    // eine Zelle im Hyperlink
    print "<td>";
    print "<a href='http://localhost/php_fiae/Aufgabe_Kundendaten/kundenWahl.php?wahl=" . $kunde["knr"] . "'>Details</a>";
    print "</tr>";
}

print "</table>";
print "<table>";
print "<tr><th>Gesamtumsatz</th></tr>";
print "<tr><td>";foreach($kunde as $key => value) { if ($key == "Umsatz"){print "$value";}}"</td></tr>";
print "</table>";

?>