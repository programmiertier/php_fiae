<?php
$umsatzzahlen = array(
	2013 => array("Socken" => 12, "Hutschnur" => 14, "Federboa" => 25),
	2012 => array("Socken" => 7, "Hutschnur" => 11, "Federboa" => 13)
	);

$summe = 0;

print "<h1>Übersicht über alle Jahre</h1>";

print "<table border='1' width='80%' height='60%'>";

print "<tr><th>Socken</th><th>Hutschnur</th><th>Federboa</th></tr>";

foreach ($umsatzzahlen as $jahr => $daten) {
    print "<tr>";

    foreach ($daten as $artikel => $wert) {
        if ($artikel != "Jahr") {
            print "<td>$wert</td>";
        }
        // $summe = $summe + $umsatz["Socken"];
    }
    // eine Zelle im Hyperlink
    print "</tr>";
}

print "</table>";
// print "<b>Gesamtumsatz: $summe</b>";

?>