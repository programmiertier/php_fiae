
<html>
  <head>
    <title>Einfügen in Datenbank</title>
  </head>
  <body>
  <form action="insert_abt.php">
  Name:<input type="text" name="abt" />
  <br/>
  <input type="submit"/>
  </ form>
  <?php
  if(isset($_REQUEST["abt"]))
  {
    $db = new mysqli("localhost", "root", "", "projekte");

    // Fehler abfangen
    if($db->connect_errno)
    {
      print "Keine Verbindung";
      print $db->connect_error;
    }

    // Eintragen von Daten in Tabelle abteilung
    // ich bereite die sql-Anweisung vor


    // PreparedStatementt - für jeden unbekannten Wert ein ?
    $sql = "insert into abteilung (abt_name) values (?)";

    // senden an Server, dieser führt das aber nicht aus, sondern bereitet die Anweisung vor
    $stmt = mysqli_prepare($db, $sql);

    // Die Lücken in der Anweisung werden gebunden an Variablen
    // 1. Wert: Zeichenkette, die bestimmt, welche Datentypen bei den Lücken verwendet werden
    // s - string, i - int, d - double
    // Beispiel: wir haben drei Lücken für drei Zeichenketten ---> "sss"
    // Beispiel, wir haben drei Lücken für 1. Zeichenkette, 2. int, 3. double ---> "sid"
    $stmt->bind_param("s", $abt);

    // festletung der Variablenwerte
    $abt = $_REQUEST["abt"];

    // Ausführung des stmt // statements
    $stmt->execute();

    mysqli_close($db);  
  }

// Eintragen von Daten in Tabelle abteilung



/* $name = "Heinz";
// VORSICHT
// könnte gut was kaputt machen
// $name = ";'delete .... ';";

// $sql ="insert into personal (p_name) values ('delete...')";
// $sql ="insert into personal (p_name) values (?)";
$sql ="insert into personal (p_name) values ('$name')"; */
  ?>
  </body>
</html>

