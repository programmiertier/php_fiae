<html>
	<head>
		<title>Warenkorb</title>
	</head>
	<body>
		<ol type="1" start="100">
			<li>
				<a href="session.php?anr=100">Metallica</a>
			</li>
			<li>
				<a href="session.php?anr=101">Helene Fischer</a>
			</li>
			<li>
				<a href="session.php?anr=102">Rhianna</a>
			</li>
		</ol>

<?php
	#wenn die Session-Variable $_SESSION (session =sitzung) nicht existiert
	#dann starte eine session
	
	if( !isset($_SESSION) )
	{
		#im Gegensatz zum Cookie wird nichts übergeben (weder Name noch Inhalt
		#noch Ablaufdatum)
		session_start();
		
		#im Hintergrund wird ein Cookie mit dem Namen PHPSESSID gesetzt
		#Inhalt ist die Verbindungs-ID der Session
	}
	
	print "Name der Session: ";
	print session_name();
	
	print "<br />";
	
	print "ID der Session: ";
	print session_id();
	
	#Füllen eines Warenkorbs
	
	#erster Schritt: wir erstellen für unsere Sitzung eine Variable meinKorb
	#welcher wir anschließend Daten bestehend aus einer Artikelnummer (anr) und
	#einer Menge zuordnen werden
	
	#wenn die Variable meinKorb leer ist, dann mache ich einen neuen Korb
	if(empty($_SESSION["meinKorb"]))
	{
		#dann erstelle ich ein neues Array für meinen Korb
		$_SESSION["meinKorb"] = array();
	}
	
	#die im Korb befindlichen Dinge werden herausgeholt und zwischengespeichert
	#aus einem kleinen Korb wird ein großer Korb
	
	$meinAlterKorb = $_SESSION["meinKorb"];
	
	/*
	#jetzt packen wir zu dem alten Korb noch was dazu
	#anr = 7 ( in die [] bedeutet --> die anr steht für "was soll dem 
	#Korb hinzufügt werden"), menge = 70
	$meinAlterKorb[7] = 60;
	*/
	#wenn die Variable anr übertragen wurde aus dem Hyperlink
	if( isset($_REQUEST["anr"]) )
	{
		#dann kann ich meinen Korb füllen
		#die Artikelnummer entspricht dem Wert der Variablen anr
		$anr = $_REQUEST["anr"];
		
		$meinAlterKorb[$anr] += 1; #die Menge eines Artikels wird immer um 1 erhöht
	}
	
	#Alternative zur Variablen $meinAlterKorb:   $_SESSION["meinKorb"][4] = 56;
	
	#die neu hinzugefügten Daten sind nur lokal auf dem Server in der sehr
	#flüchtigen Variablen $meinAlterKorb hinterlegt
	#flüchtig: die Variable existiert nur, solange bis das Skript zu ende ist
	
	#daher muss der neue Inhalt wieder in die Session-Variable geschrieben werden
	$_SESSION["meinKorb"] = $meinAlterKorb;
	
	#wir lassen uns den Inhalt des Warenkorbs ausgeben
	#print_r wird verwendet, um sich viele Daten auf einmal ausgeben zu lassen
	print_r($_SESSION["meinKorb"]);

	#wir müssen VOR dem Zerstören der Sitzung das session-cookie löschen
	#dazu brauchen wir den cookie-namen: session_name()
	#Inhalt: '' --> leer
	#Ablaufdatum: Ablaufdatum muss vor dem aktuellen Datum sein --> time() - 1 
	#genaue Beschreibung, zu welcher Sitzung das cookie gehört (hängt mit der url zusammen): pfad, domain
	
	$keks_param = session_get_cookie_params();
	print_r($keks_param);
	
	#bei localhost sind die ersten beiden parameter (path und domain) aureichend, aber besser alles 
	setcookie(session_name(), '', time()-1, $keks_param['path'], $keks_param['domain'], $keks_param['secure'], $keks_param['httponly']);
	
	# löschen Session
	$_SESSION = array();
	session_destroy();  
	

?>

	</body>
</html>