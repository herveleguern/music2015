<?php

abstract class Cours {

    protected $id;
    protected $ageMini;
    protected $lesParticipants=[]; //array de Participant au cours

    public function __construct($unId, $unAgeMini) {
        $this->id = $unId;
        $this->ageMini = $unAgeMini;
    }

    public function ajouterParticipant($leParticipant) {
        $this->lesParticipants[]=$leParticipant;
    }

}

?>