<?php
require("artikel_class.php");

// Erstellen eines neuen Objekts der Klasse
$myArtikel = new Artikel("1", "Hose", 23.55, "schwarz und lang");

print "<br/>Anr:";
print $myArtikel->getAnr();

print "<br/>Bezeichnung:";
print $myArtikel->getBezeichnung();

print "<br/>Preis:";
print $myArtikel->getPreis();

print "<br/>Beschreibung:";
print $myArtikel->getBeschreibung();

print "<br/><font color='red'><br>+++ ACHTUNG +++ ACHTUNG +++ NUR HEUTE +++ 10% Rabatt +++</b></font>";

print "<br/>";

?>