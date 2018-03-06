<?php
require("cookie.php");
$meinwert = "Links"; 

    setcookie("viertel", $meinwert); 
    setcookie("viertel", $meinwert, time()+900); # 15 Minuten 
print "<a href='reiseportal.php'>Reiseportal</a><br/>";
print "<a href='wirtschaftszeitung.php'>Wirtschaftszeitung</a><br/>";
print "<a href='heimwerker.php'>Heimwerkerseite</a><br/>";
print "<a href='bekleidung.php'>Online-Bekleidungsgeschäft</a><br/>";


print "<hr/>";
echo $_COOKIE["viertel"];

?>