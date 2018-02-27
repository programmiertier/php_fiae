<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Titel der Seite</title>
    </head>

    <body>
        <h2>Infos vom Client</h2>
        <?php
            // Umgebungsvariable als Array für Abfangen von Nutzereingaben
            // Eingaben erfolgen über die URL im Browser
            // eingaben_vom_nutzer.php?key=value&key=value
        foreach ($_REQUEST as $key => $value) {
            print "$key: $value <br/>";
        }

            // $speicherung der übergebenen Werte in lokalen Variablen
        $zahl1 = $_REQUEST["zahl1"];
        $zahl2 = $_REQUEST["zahl2"];

        ?>
        <!-- öffnender und schließender Tag gleichzeitig / leerer Absatz -->
        <p />
        
            <b>Die Summe der beiden Zahlen ist:</b>
            <?php
            print $zahl1 + $zahl2;
            ?>
		</b>
		<hr/>
		<h2>Pizza-Bestellung</h2>
		<?php
			print "<a href='http://localhost/php_fiae/eingaben_vom_nutzer.php?p=1'>Salami mit Käse</a>";
			print "<br/>";
			print "<a href='http://localhost/php_fiae/eingaben_vom_nutzer.php?p=2'>Schokopizza</a>";
			print "<br/>";
			print "<a href='http://localhost/php_fiae/eingaben_vom_nutzer.php?p=3'>Chicken Peperoni </a>";
		?>
    </body>
</html>