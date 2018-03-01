<?php

// Die Datenbasis
// ein Artikel besteht aus ID, bez und preis
$artikelliste[0] = array("id" => "a1", "bez" => "Hose", "preis" => 19.99);
$artikelliste[1] = array("id" => "a2", "bez" => "Hose", "preis" => 18.79);
$artikelliste[2] = array("id" => "a3", "bez" => "Rock", "preis" => 25.99);
$artikelliste[3] = array("id" => "a4", "bez" => "Hemd", "preis" => 12.99);
$artikelliste[4] = array("id" => "a5", "bez" => "Socke", "preis" => 5.99);

// erstellen eines Eingabeformulars, das soll immer angezeigt werden
// Das Eingabeforlumlar besteht aus einer Liste mit den Artikelbezeichnungen (Preise nicht inkludiert, weil SUPRPISE)
// für die Eingabe einer Anzahl

print "<form action='form_in_and_out.php'>";
print "<select name='bez'>";
foreach ($artikelliste as $artikel) {
    print "<option value='" . $artikel['id'] . "'>" . $artikel['bez'] . "</option>";
}

print "</select>";
print "Anzahl: <input type='number' name='menge' value='1'/>";
print "<br/>";
print "<input type='submit' value='nehm ich mit'>";

print "</form>";

print "<hr/>";

// das steht nur da, wenn aus dem Eingabeformular Daten abgesendet wurden
// es sollen Detailinformationen zum Artikel und der Gesamtbetrag angezeigt werden

// wenn eine bez übermittelt wurde
if (isset ($_REQUEST["bez"]))
{
    $id = $_REQUEST["bez"];
    $menge = $_REQUEST["menge"];
    // ich gebe das Array mit allen Artikeln durch, wenn ich die Artikel finde, dann Ausgabe
    foreach($artikelliste as $artikel)
    {
        if($artikel["id"] == $id)
        {
            print "Sie haben sich entschieden für:<br/>";
            print "Bezeichnung: " .$artikel["bez"]."<br/>";
            print "Einzelpreis: " .$artikel["preis"]."<br/>";
            print "Menge: $menge<br/>";
            print "Zahlen sie bitte jetzt: " .($artikel["preis"] * $menge);
            break;  // Schleife beenden, weil Artikel gefunden
        }
    }
}
?>