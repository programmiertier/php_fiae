<?php
require("umsatzzahlen.php");

$summe = 0;

print "<h1>Übersicht über alle Jahre</h1>";

print "<table border='1' width='80%' height='60%'>";

print "<tr><th>Jahr</th><th>Socken</th><th>Hutschnur</th><th>Federboa</th></tr>";

foreach ($umsatzzahlen as $umsatz) {
    print "<tr>";

    foreach ($umsatz as $key => $value) {
        if ($key != "Jahr") {
            print "<td>$value</td>";
        }
        $summe = $summe + $umsatz["Socken"];
    }
    // eine Zelle im Hyperlink
    print "</tr>";
}

print "</table>";
print "<b>Gesamtumsatz: $summe</b>";

?>