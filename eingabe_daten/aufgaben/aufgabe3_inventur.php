<!-- Eingabeformular in html, weil der Aufbau feststeht -->

<html>

<head>
    <title>Eingabedaten</title>
    <meta charset="utf-8" />
</head>
<?php

if (isset($_REQUEST["buchtitel"])) {
    $buchtitel = $_REQUEST["buchtitel"];

    $einzelpreis = $_REQUEST["einzelpreis"];

    $anzahl = $_REQUEST["anzahl"];
    print "$buchtitel | $einzelpreis | $anzahl<br/>";
    $zeile = "$buchtitel | $einzelpreis | $anzahl\r\n";
    $datei = fopen("inventur.txt", "a");

    // wenn kein Zugriff auf die Datei erfolgen kann
    if ($datei == false) {
        echo "Jo, kannste knicken";
    }

    $ergebnis = fwrite($datei, $zeile);

    if ($ergebnis == true) {
        echo "Erfolgreich in Datei geschrieben";
    } else {
        echo "Hier wurde gar nix geschrieben";
    }

    fclose($datei);
}
?>
<body>
    <form action="aufgabe3_inventur.php" method="post">
        
        <input type="text" name="buchtitel" placeholder="Buchtitel"/>Buchtitel
        <br/>
        
        <input type="text" name="einzelpreis" placeholder="Einzelpreis"/>Einzelpreis
        <br/>
         
        <input type="number" name="anzahl" placeholder="Anzahl"/>Anzahl
        <input type="submit" value="und los" />
        <br/>
    </form>

</body>

</html>