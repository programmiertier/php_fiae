<?php

$summe = 0;

// Verwende ein anderes Skript
require("kundendaten.php");

print "<h1>Übersicht über alle Kunden</h1>";

print "<table border='1' width='80%' height='60%'>";

print "<tr><th>Kundennummer</th><th>Name</th><th>Status</th><th>Umsatz</th></tr>";

foreach ($kundendaten as $kunde) {
    print "<tr>";

    foreach ($kunde as $key => $value) {
        if ($key != "Kunde") {
            print "<td>$value</td>";
        }
        $summe = $summe + $kunde["Umsatz"];
    }
    // eine Zelle im Hyperlink
    print "</tr>";
}

print "</table>";
print "<b>Gesamtumsatz: $summe</b>";

?>