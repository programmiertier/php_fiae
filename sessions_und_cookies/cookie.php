<?php

	#wir füttern unseren Browser mit Keksen
	
	#der Server erhält mit Aufruf dieses Skripts eine Umgebungsvariable $_COOKIE
	#wenn auf dem Client/Browser ein Keks für die aufgerufene URL hinterlegt ist
	
	#Abfrage bzw. ein Test, ob ein Cookie an den Server übertragen wurde
	#wenn die Umgebungsvariable $_COOKIE nicht übertragen wurde (weil es diese nicht gibt), dann
	#lege einen neuen Cookie an
	#Funktion isset() prüft, ob eine Variable vorhanden ist - wurde ein Cookie übertragen
	#ein Ausrufezeichen vor der Funktion !isset prüft das Gegenteil
	
	/*
	#Aber: Die Variable Keks ist immer vorhanden
	if( !isset($_COOKIE)  )
	{
		#hier gilt: die Variable $_COOKIE ist nicht vorhanden
		#ein Cookie wird erstellt mit der Funktion setcookie()
		#3 Parameter: 1. Name, 2.Inhalt, 3.Ablaufdatum (aktuelle Zeit plus Sekunen)
		setcookie("Keks","Schokokeks", time()+600);
	}
	else
	{
		#hier gilt: ein Cookie wurde übertragen
		print "Ihr Keks hat den Inhalt: ".$_COOKIE["Keks"];
	}
	*/
	
	#wir müssen den Server fragen, ob ein Cookie mit dem Namen Keks vorhanden ist
	#und wenn nicht, dann soll er ihn anlegen
	if( !isset($_COOKIE["Keks"])  )
	{
		#hier gilt: die Variable $_COOKIE ist nicht vorhanden
		#ein Cookie wird erstellt mit der Funktion setcookie()
		#3 Parameter: 1. Name, 2.Inhalt als Zeichenkette, 3.Ablaufdatum (aktuelle Zeit plus Sekunden)
		setcookie("Keks","Schokokeks", time()+600);
	}
	else
	{
		#hier gilt: ein Cookie wurde übertragen
		print "Ihr Keks hat den Inhalt: ".$_COOKIE["Keks"];
	}	
	
	
	
	#wenn ein Cookie mit dem Namen Keks vorhanden ist, dann soll er gelöscht werden
	#der Server muss vom Client mit Aufruf der Seite den Cookie "Keks" erhalten 
	if( isset($_COOKIE['Keks']) )
	{
		setcookie("Keks","Schokokeks",time()-5); #Name ist wichtig, Inhalt kann anders sein
												#von der aktuellen Zeit gehen wir ein paar Sek in die 
												#Vergangenheit
	}

?>
