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

// textsize ist die Größe des Textes, als Wert von 1 ... 5
$textsize = 4;
ImageString($bild, $textsize, 150, 150, "Hallo Welt", $farbe2);

// Ausgabe Bild
imagepng($bild);


?>