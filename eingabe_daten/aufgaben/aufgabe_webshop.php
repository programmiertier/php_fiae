<?php
	$file = 'produkte.txt';
	$inhalt = file($file);
	echo "<h2>Kauf was!</h2>";
	echo "<form action=''>";
	echo "<table border=1>";
	echo "<tr><th>Index</th><th>Artikel</th><th>Preis</th><th>Kaufen</th>";
	foreach ($inhalt as $zeile){
		$dummy = explode("|", $zeile);
		echo "<tr><td align='center'>$dummy[0]</td><td>$dummy[1]</td><td>$dummy[2]</td></td>
			<td align='center'><input type='Radio' name='kaufmich' value=".$dummy[0]."|".$dummy[1]."|".$dummy[2]."></td></tr>";
	}
	echo "<tr><td colspan='4' align='center'><br/>Anzahl Artikel:<br/><input type='Number' name='anzahl' min=0 max=50></td></tr>";

	echo "</table>";
	echo "<br/><input type='submit' value='absenden' />";
	echo "</form>";

	echo "<br/>";

	$file = 'bestellung.txt';
	if ((!empty($_REQUEST["kaufmich"])) && (!empty($_REQUEST["anzahl"]))){
		$zeile = $_REQUEST["kaufmich"];
		$anz = $_REQUEST["anzahl"];
		$dummy = explode("|", $zeile);
		$schreibmich = $dummy[0]."|".$dummy[1]."|".$dummy[2]."|".$anz."|".$anz*$dummy[2]."\n";
		file_put_contents($file, $schreibmich, FILE_APPEND);
	}

	$inhalt = file($file);
	echo "<h2>Die Bestell-Liste</h2>";
	echo "<table border=1>";
	echo "<tr><th>Index</th><th>Artikel</th><th>Preis</th><th>Anzahl</th><th>Endpreis</th>";
	foreach ($inhalt as $zeile){
		$dummy = explode("|", $zeile);
		echo "<tr><td align='center'>$dummy[0]</td><td>$dummy[1]</td><td>$dummy[2]</td>
			<td align='center'>$dummy[3]</td><td align='center'>$dummy[4]</td></tr>";
	}
	echo "</table>";

?>
