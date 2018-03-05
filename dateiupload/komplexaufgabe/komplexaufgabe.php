<?php

header("Content-type: image/png");
    
$bild = imagecreatetruecolor(100,30);
    
//Hintergrundfarbe erstellen
imagecolorallocate($bild, 0,0,0);
    
//Farben festlegen
$farbe1 = imagecolorallocate($bild, 255,255,255);
$farbe2 = imagecolorallocate($bild, 0,0,0);
    
imagefilledrectangle($bild, 0,0,100,30,$farbe2);
    
$textsize = 4;
ImageString($bild, $textsize, 0, 0, "Captcha", $farbe1);

//Ausgabe bild
imagepng($bild);

?>