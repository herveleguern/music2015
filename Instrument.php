<?php

class Instrument {

    private $id;
    private $nom; // intitulé de l’instrument

    public function __construct($id, $nom) { // constructeur
        $this->id = $id;
        $this->nom = $nom;
    }

    public function getNom() { // retourne l'intitulé de l'instrument
        return $this->nom;
    }

}

?>