<?php
$niederschlaege = array (0 => 24, 1 => 0, 2 => 13, 3 => 0, 4 => 47, 5 => 55, 6 => 0);

$max = $niederschlaege[0];
$summe = 0;


foreach ($niederschlaege as $wert)
{
    $summe = $summe +$wert;
    if ($wert > $max)
    {
        $max = $wert;
    }
}

print "Höchster Wert: $max<br/>";
print "Summe: $summe<br/>";
print "Durchschnitt: " .number_format($summe/6,2);

?>