<?php
$garten = $_REQUEST["garten"];


if (isset($_REQUEST["garten"])){
    $artikel = $_REQUEST["garten"];
    print"<h2>Gartenartikel</h2>";
    print_r($garten);
    print"<br/>";
    $summe = 0;
    foreach($garten as $wert){
        $summe += $wert;
    }
    print "<br/>";
    print "Die Gartenartikel kosten zusammen $summe €<br/>";
}
?>