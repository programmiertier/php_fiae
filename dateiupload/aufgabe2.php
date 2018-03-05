<form method="post" enctype="multipart/form-data" action="aufgabe2.php">
<input type="file" name="datei" size="60" maxlength="255"/>
<input type="submit"/>
</form>



<?php
if($_FILES["datei"]["name"] <> "")
{
    $datei = $_FILES["datei"];
    $upload = $_FILES["datei"]["tmp_name"];
    $target = ".upload/".$_FILES["datei"]["name"];
    $type1 = "text/plain";
    $type2 = "application/vnd.openxmlformats-officedocument.wordprossesingml.document";
    if($_FILES["datei"]["type"] != $type1 && $_FILES["datei"]["type"] != $type2)
    {
        echo "Nicht der richtige Typ";
    }
    else
    {
        $result = move_uploaded_file($upload, $target);
    }
}
?>