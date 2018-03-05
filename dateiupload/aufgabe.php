<form method="post" enctype="multipart/form-data" action="aufgabe.php">
<input type="file" name="datei" size="60" maxlength="255"/>
<input type="submit"/>
</form>


<?php
//"datei" als Index im Array bezeichnet den im Formular 
//für das input-Feld hinterlegten Namen (Variablenbezeichnung)
//dumdidum

//in der Variablen $_FILES wurde im Formular aus einem input-Feld mit dem namen="datei"
//eine Datei hochgeladen (Dateiname != 0)
$datei = $_FILES["datei"];
if($_FILES["datei"]["name"] != "")
{
    
    $type = "application/vnd.ms-excel";

    if($_FILES["datei"]["type"] == $type)
    {
        $upload = $_FILES["datei"]["tmp_name"];
        $target = $_FILES["datei"]["name"];

        move_uploaded_file($upload, $target);

        $datei = fopen($target, "r");

        while($zeile = fgets($datei))
        {
            $daten = explode(";", $zeile);

            if($daten[1] < 0)
            {
                print "<font color='red'>".$daten[0]." - ".$daten[1]."</font>";
            }
            else
            {
                print "<font color='green'>".$daten[0]." - ".$daten[1]."</font>";
            }
            print "<br/>";
        }

        fclose($datei);
    }
}

?>