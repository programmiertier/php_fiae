<?php

header("Content-type: image/png");

// Bilder mit pixel 400x300 erzeugen
$bild = imagecreatetruecolor(400,300);

// Hintergrundfarbe erstellen
imagecolorallocate($bild, 150, 150, 0);

// Farben festlegen
$farbe1 = imagecolorallocate($bild, 255, 255, 0);
$gruen = imagecolorallocate($bild, 0, 255, 0);
$magenta = imagecolorallocate($bild, 255,0,255);

// Viereck zeichnen mit Koordinaten (x, y) -> (x, y)
imagefilledrectangle($bild, 20, 70, 350, 250, $farbe1);
imagefilledellipse($bild, 133, 130, 50, 50, $gruen);
imagefilledellipse($bild, 266, 70, 100, 100, $gruen);
imagefilledellipse($bild, 70, 200, 125, 20, $magenta);
imagefilledellipse($bild, 70, 30, 30, 60, $magenta);
imagefilledellipse($bild, 100, 120, 30, 30, $magenta);


// textsize ist die Größe des Textes, als Wert von 1 ... 5
$textsize = 2;
ImageString($bild, $textsize, 150, 150, "email@sonstwo.de", $gruen);

// Ausgabe Bild
imagepng($bild);


?>