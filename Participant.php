<?php
class Participant{
    private $id;
    private $nom;
    private $age;

    public function __construct($id,$nom,$age){
        $this->id=$id;
        $this->nom=$nom;
        $this->age=$age;
    }
}
