<?php

// eine Klasse Buch: ein Buch hat einen Titel, eine laufende Nummer (automatisch vergeben)

class Buch
{
    // objekteigenschaft
    private $titel;
    private $nummer;

    // eine Klasseneigenschaft
    private static $anzahl = 0;

    public function __construct($titel)
    {
        $this->titel = $titel;
        self::$anzahl++;    // erhöht die Anzahl um eins
        $this->nummer = "B" .self::$anzahl;
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


?>