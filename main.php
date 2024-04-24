<?php
require_once 'Instrument.php';
require_once 'Cours.php';
require_once 'CoursCollectif.php';
require_once 'CoursIndividuel.php';
require_once 'Catalogue.php';
require_once 'Participant.php';

$cours1=new CoursCollectif(1, 10,'solfege',15, 5);
//ageMin=10 ageMax=15 nbPlaces=5
var_dump($cours1->convient(37));
//ATTENDU FALSE
//le cours1 de "solfege" ne convient PAS à une personne agée de 37 ans

$guitare=new Instrument('gui', 'Guitare');
$cours2=new CoursIndividuel(1,10,$guitare);

$catalogue=new Catalogue(2024);
$catalogue->ajouterCours($cours1);
$catalogue->ajouterCours($cours2);

var_dump($catalogue->getLesCoursCollectifsDisponibles());
//ATTENDU array avec le cours collectif de solfege :  il n'est pas complet

var_dump($catalogue->getNbCoursGuitare());
//ATTENDU entier 1 : le nombre de cours de guitare du jeu d'essai

//les participants aux cours
//créer des participants 

//inscrire 4 participants au cours collectif de solfege
var_dump($cours1->estComplet());
//ATTENDU : FALSE, le cours n'est pas complet

//inscrire un 5eme participant au cours collectif de solfege
var_dump($cours1->estComplet());
//ATTENDU : TRUE, le cours est complet



?>