<?php
$datei = $_FILES["datei"];

if($_FILES["datei"]["tmp_name"] <> "")
{
    $upload = $_FILES["datei"]["tmp_name"];
    $target = "./upload/".$_FILES["datei"]["name"];

    move_uploaded_file($upload, $target);
}


foreach($datei as $key => $value)
{
    print "$key: $value<br/>";
}


?>