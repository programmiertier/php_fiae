<?php

header("Content-type: image/png");

// Bilder mit pixel 400x300 erzeugen
$bild = imagecreatetruecolor(400,300);

// Hintergrundfarbe erstellen
imagecolorallocate($bild, 150, 150, 0);

// Farben festlegen
$farbe1 = imagecolorallocate($bild, 255, 255, 0);
$farbe2 = imagecolorallocate($bild, 0, 255, 0);

// Viereck zeichnen mit Koordinaten (x, y) -> (x, y)
imagefilledrectangle($bild, 20, 70, 350, 250, $farbe1);

// Ellipse mit (x,y) -> radiusx, radiusy
imagefilledellipse($bild, 100, 100, 150, 200, $farbe2);

// Ausgabe Bild
imagepng($bild);


?>