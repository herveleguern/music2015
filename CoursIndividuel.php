<?php

class CoursIndividuel extends Cours {

    private $instrument; //instrument concerné par le cours individuel

    public function __construct($unId, $unAgeMini, $unInstrument) { // constructeur
        parent::__construct($unId, $unAgeMini);
        $this->instrument = $unInstrument;
    }

    public function getInstrument() {
        return $this->instrument;
    }


}

?>