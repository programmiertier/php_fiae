<?php
// einbinden einer Datei
require("buch_class.php");

// Erstellung eines neuen Objekts
$buch1 = new Buch("Die Raupe Nimmersatt");

print "Nummer des Buches: " .$buch1->getNummer()."</br>";
print "Titel des Buches: " .$buch1->getTitel()."<br/>";
print "Anzahl der Bücher: " .Buch::getAnzahl(). "<br/>";

$buch2 = new Buch("Die Gefährten");

print "Nummer des Buches: " .$buch2->getNummer()."</br>";
print "Titel des Buches: " .$buch2->getTitel()."<br/>";
print "Anzahl der Bücher: " .Buch::getAnzahl(). "<br/>";

//----

$liste = array (new Buch("Array Buch1"), new Buch("Array Buch2"));

foreach($liste as $buch)
{
    print"<hr/>";
    print "Nummer des Buches: " .$buch->getNummer()."</br>";
    print "Titel des Buches: " .$buch->getTitel()."<br/>";
    print "Anzahl der Bücher: " .Buch::getAnzahl(). "<br/>";
}

?>