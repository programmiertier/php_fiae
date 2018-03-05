<?php
header("Content-type: image/png");

$bild = imagecreatetruecolor(400, 300);

// Hintergrundfarbe
imagecolorallocate($bild, 150, 150, 0);

$gelb = imagecolorallocate($bild, 255, 255, 0);
$gruen = imagecolorallocate($bild, 0, 255, 0);
$rot = imagecolorallocate($bild, 255, 0,0);
                        // 30 von links, 250 von oben, 370 von links, 300 von oben
imagefilledrectangle($bild, 30, 250, 370, 300, $rot);

imagefilledellipse($bild, 200, 150, 350, 200, $gelb);
imagefilledellipse($bild, 133, 130, 50, 50, $gruen);
imagefilledellipse($bild, 266, 130, 50, 50, $gruen);

imagepng($bild);



?>