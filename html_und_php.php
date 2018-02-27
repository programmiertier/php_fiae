<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Titel der Seite</title>
    </head>

    <body>
        <h2>Infos vom Client</h2>
        <table>
            <tr>
                <th>Index</th>
                <th>Wert</th>
            </tr>
        <?php
                // Alle Infos kommen in einem Array beim Server an
                // $_SERVER
                // im Array findet statt einer Zuordnung von einem Schlüssel zu einem Wert
                // Schlüssel: ist der Index im Array (als Bezeichnung)
        foreach ($_SERVER as $key => $value) {
            print "<tr>";
            print "<td>$key</td>";
            print "<td>$value</td>";
            print "</tr>";
                    // print "$key: $value<br/>";
        }

        ?>
        </table>
        <hr/>
        <h2>Einzelne Werte im Array</h2>
        <?php
        print "Verwendeter Browser: " . $_SERVER["HTTP_USER_AGENT"];
        print "<br/>";
        print "Verwendete Server Software: " . $_SERVER["SERVER_SOFTWARE"];
        ?>
    </body>
</html>