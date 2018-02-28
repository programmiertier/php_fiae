<?php

$rabatt = array(10 => 5, 50 => 7, 100 => 10);

$preis = 12.95;

foreach ($rabatt as $key => $value)
{
    print "Ab $key gibt es $value % Rabatt<br/>";
}

print "<hr/>";
    // muss in adresszeile ?menge=ZAHL angegeben werden
    $menge = $_REQUEST["menge"];
    switch($menge)
    {
        case $menge >= $rabatt[10]: print "Für $menge Kasten Bier zahlen sie: " .($preis * $menge) * (1 - $rabatt[10] / 100); break;
        case $menge >= $rabatt[50]: print "Für $menge Kasten Bier zahlen sie: " .($preis * $menge) * (1 - $rabatt[50] / 100); break;
        case $menge >= $rabatt[100]: print "Für $menge Kasten Bier zahlen sie: " .($preis * $menge) * (1 - $rabatt[100] / 100); break;
    }




?>