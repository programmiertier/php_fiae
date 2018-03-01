<?php
$moebel = $_REQUEST["moebel"];
$wieviel = $_REQUEST["wieviel"];
$summe = 0;


if ($moebel == "29.99") {
    print "Es wurde das Sofa mit $moebel gewählt";
}
if ($moebel == "6.99") {
    print "Es wurde das Sideboard mit $moebel gewählt";
}
if ($moebel == "12.99") {
    print "Es wurde das Boxspringbett mit $moebel gewählt";
}
if ($moebel == "4.59") {
    print "Es wurde das Boxspringbett mit $moebel gewählt";
}
print "<hr/>";
// print "<p>Sie haben eingegeben, als Zahl1: $moebel, Zahl2: $wieviel</p>";
print "<p>Das macht dann bitte: " . $summe = $moebel * $wieviel . " Euro</p>";
?>