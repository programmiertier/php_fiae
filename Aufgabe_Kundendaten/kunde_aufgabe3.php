<?php

require("kundendaten.php");

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