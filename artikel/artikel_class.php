<?php

// wir definieren eine Klasse für Artikel

class Artikel
{
    // Eigenschaften eines Artikels
    private $anr;
    private $bezeichnung;
    private $preis;
    private $beschreibung;
    
    // Konstruktor
    // der Name ist construct mit einem doppelten Unterssricht
    public function __construct ($nr, $bez, $pr, $desc)
    {
        $this->anr = $nr;
        $this->bezeichnung = $bez;
        $this->preis = $pr;
        $this->beschreibung = $desc;
    }

    public function getAnr() { return $this->anr; }

    public function getBezeichnung() { return $this->bezeichnung; }

    public function getPreis() { return $this->preis; }
    
    public function getBeschreibung() { return $this->beschreibung; }

    public function setPreis($prozent)
	{
		$this->preis = $this->preis * (1+$prozent/100);
	}
}
?>