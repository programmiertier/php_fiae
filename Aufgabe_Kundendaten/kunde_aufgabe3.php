<?php

require("kundendaten.php");


// muss dann in Adressleiste als grenze=ZAHL eingegeben werden
$grenze = $_REQUEST["grenze"];


foreach($kundendaten as $kunde)
{
	if($kunde["Umsatz"] > $grenze)
	{
		print_r($kunde);
		print "<br/>";
	}
}


?>