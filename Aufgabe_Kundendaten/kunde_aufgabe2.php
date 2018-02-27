<?php


require("kundendaten.php");

$status = $_REQUEST["status"];


foreach($kundendaten as $kunde)
{

	if($kunde["Status"] == $status)
	{
		print_r($kunde);
		print "<br/>";
	}
}

?>