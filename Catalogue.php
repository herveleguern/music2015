<?php
class Catalogue
{
    private $annee;
    private $lesCours; //array

    public function __construct($annee)
    {
        $this->annee = $annee;
    }
    public function ajouterCours($leCours)
    {
        $this->lesCours[] = $leCours;
    }
    public function getLesCoursCollectifsDisponibles()
    {
        //TODO
    }

    public function getNbCoursGuitare()
    {
        //TODO
    }
}
