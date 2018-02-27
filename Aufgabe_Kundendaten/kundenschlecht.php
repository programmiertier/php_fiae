<?php
print "<h1>Übersicht über alle Kunden</h1>";
print "<table border='1' width='80%' height='60%'>";
print "<tr><th>Kundennummer</th><th>Name</th><th>Status</th><th>Umsatz</th><th>Details</th></tr>";

foreach ($kundendaten as $kunde) {
    print "<tr>";

    
        if ($kunde("Status") == "Schlecht") {
            foreach($kunde as $key => $value)
            {
                print "<td>$value</td>";
            }
        }
    // eine Zelle im Hyperlink
    print "<td>";
    print "<a href='http://localhost/php_fiae/Aufgabe_Kundendaten/kundenWahl.php?wahl=" . $kunde["knr"] . "'>Details</a>";
    print "</tr>";
}


?>