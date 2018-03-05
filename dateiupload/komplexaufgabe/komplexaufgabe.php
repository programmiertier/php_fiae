<?php

// header("Content-type: image/png");

$bild = imagecreatetruecolor(100,30);

//Hintergrundfarbe erstellen
imagecolorallocate($bild, 0,0,0);

//Farben festlegen
$farbe1 = imagecolorallocate($bild, 255,255,255);
$farbe2 = imagecolorallocate($bild, 0,0,0);

imagefilledrectangle($bild, 0,0,100,30,$farbe2);

function generateRandomString($length = 5) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
    $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
    }

$textsize = 4;
ImageString($bild, $textsize, 0, 0, generateRandomString(), $farbe1);

//Ausgabe bild
// imagepng($bild);
$target = "bild.png";
imagepng($bild, $target);


?>

<!-- Eingabeformular in html, weil der Aufbau feststeht -->
<html>

<head>
    <title>Captcha</title>
    <meta charset="utf-8" />
</head>

<body>
    <form action="komplexaufgabe.php" enctype="multipart/form-data" method="post">
        <input type="text" name="name" /> Name
        <br/>
        <input type="text" name="mail" /> eMail
        <br/>
        <?php print "<img src='$target'/>"; ?>
        <br/>
        <input type="submit" value="absenden" />
    </form>
</body>

</html>