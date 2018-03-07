<?php
// Verbindung zum host user password database
$db = new mysqli("localhost", "root", "", "projekte");

// Fehler abfangen
if($db->connect_errno)
{
  print "Keine Verbindung";
  print $db->connect_error;
}

print "<form action='datenbank.php'>";
print "<select name='id'>";

$befehl = mysqli_query($db, "select p_id from personal");
while($datensatz = $befehl->fetch_object())
{
  foreach($datensatz as $key => $value)
  {
    print "<option value='$value'>$value</option>";
  }
}



print "</select>";
print "<input type='submit'/>";
print "</form>";

if (isset($_REQUEST['id']))
{
  $id = $_REQUEST['id'];
  $sql = "select pj_name from projekt inner join arbeit using (pj_id) where p_id = $id";

  $befehl = mysqli_query($db, $sql);

  if($befehl)
  {
    $datensatz = $befehl->fetch_object();
    while ($datensatz)
    {
      foreach($datensatz as $spalte=> $wert)
      {
        print "$wert";
      }
      $datensatz = $befehl->fetch_object();
      print "<br/>";
    }
  }
}
?>