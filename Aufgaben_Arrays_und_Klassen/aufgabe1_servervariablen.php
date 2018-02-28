<?php
print "<h2>Infos vom Client</h2>";
print "<table>";
            print "<tr>";
                "<th>Index</th>";
                "<th>Wert</th>";
            "</tr>";
foreach ($_SERVER as $key => $value) {
    print "<tr>";
    print "<td>$key</td>";
    print "<td>$value</td>";
    print "</tr>";
}
print "</table>";
print "<hr/>";

print "Aufruf: " . $_SERVER["REQUEST_TIME"]."</br>";
print "Skriptname:" .$_SERVER["SCRIPT_FILENAME"]."<br/>";
print "verwendeter Browser" .$_SERVER["HTTP_USER_AGENT"]."<br/>";
print "Name vom Server: " .$_SERVER["SERVER_NAME"]."<br/>";
print "Port vom Server: " .$_SERVER["SERVER_PORT"]."<br/>";

print "<hr/>";

echo "<h2>\"Server\" abfragen</h2>";
echo "Zeitpunkt des Aufrufs: $_SERVER[REQUEST_TIME] = ";
echo date('Y-m-d H:i:s', $_SERVER['REQUEST_TIME'])."<br/>";
echo "Name des Scripts: $_SERVER[SCRIPT_NAME]<br/>";
echo "Verwendeter Browser $_SERVER[HTTP_USER_AGENT]<br/>";
echo "Name des Servers: $_SERVER[SERVER_NAME]<br/>";
echo "Server-Port: $_SERVER[SERVER_PORT]<br/>";

?>