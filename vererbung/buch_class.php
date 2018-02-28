<?php

// eine Klasse Buch: ein Buch hat einen Titel, eine laufende Nummer (automatisch vergeben)

class Buch
{
    // objekteigenschaft
    protected $titel;
    protected $nummer;

    // eine Klasseneigenschaft
    protected static $anzahl = 0;

    public function __construct($titel)
    {
        $this->titel = $titel;
        self::$anzahl++;    // erhöht die Anzahl um eins
        $this->nummer = "B" .self::$anzahl;
        print "Konstruktor aufgerufen<br/>"; // Konstruktor wird in Unterklasse nicht aufgerufen
    }

    // Destruktor wird automatisch ausgeführt
    // sobald Objekt zerstört wird (aus RAM entfernt), geschieht, wenn das Skript beendet wird
    function __destruct()
    {
        print "Das Objekt wurde zerstört<br/>";
    }

    // Zugriff auf Objekteigenschaft
    public function getTitel() { return $this->titel; }

    // Zugriff auf Klasseneigensdchaft
    public function getNummer()
    {
        return $this->nummer;
    }

    public static function getAnzahl()
    {
        return self::$anzahl;
    }
}
// ein Taschenbuch ist ein Buch
class Taschenbuch extends Buch
{
    // Eigenschaft
    private $preis;

    public function __construct($titel, $preis)
    {
        $this->titel = $titel;
        $this->preis = $preis;
        self::$anzahl++;
        $this->nummer = "B" .self::$anzahl;
    }

    public function getPreis()
    {
        return $this->preis;
    }
}


?>