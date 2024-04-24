<?php

class CoursCollectif extends Cours
{

    private $libelle; // libellé du cours collectif
    private $ageMaxi;
    private $nbPlacesMaxi;

    public function __construct($unId, $unAgeMini, $unLibelle, $unAgeMaxi, $unNbPlacesMaxi)
    {
        parent::__construct($unId, $unAgeMini);
        $this->libelle = $unLibelle;
        $this->ageMaxi = $unAgeMaxi;
        $this->nbPlacesMaxi = $unNbPlacesMaxi;
    }

    public function convient($age)
    {
        //TODO
    }

    public function estComplet(){
        return FALSE; //arbitraire, à modifier
    }
}
