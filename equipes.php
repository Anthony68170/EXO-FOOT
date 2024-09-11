<!-- CODE EQUIPES -->

<?php

class Equipes{ // Déclarer la CLASS "Equipes" - pour lister les équipes
   // Déclarer les ATTRIBUTS de la "class"
   private $paysEquipe;
   private $nomEquipe;
   private $nomJoueurs;


// __construct pour INIATILIASER "chaque" attributs pour "chaque" équipe
public function __construct($paysEquipe, $nomEquipe){
    $this -> _paysEquipe = $prenom;
    $this -> _nomEquipe = $nomEquipe;
    $this -> _nomJoueurs = array(); // INITIALISER le tableau des joueurs
}