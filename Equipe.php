<!-- CODE EQUIPES -->

<?php

class Equipe{ // Déclarer la CLASS "Equipes" - pour lister les équipes
   // Déclarer les ATTRIBUTS de la "class"
   private $_paysEquipe;
   private $_nomEquipe;
   private $_nomJoueur;


// __construct pour INIATILIASER "chaque" attributs pour "chaque" équipe
public function __construct($paysEquipe, $nomEquipe){
    $this -> _paysEquipe = $paysEquipe;
    $this -> _nomEquipe = $nomEquipe;
    $this -> _nomJoueur = array(); // INITIALISER le tableau des joueurs
}

//GETTERS
public function getPayEquipe(): mixed{
    return $this -> _paysEquipe;
}
public function getNomEquipe(): mixed{
    return $this -> _nomEquipe;
}
public function getNomJoueur(): mixed{
    return $this -> _nomJoueur;
}

//SETTERS
public function setPaysEquipe($paysEquipe): void{
    $this -> __paysEquipe = $paysEquipe;
    }
    public function setNomEquipe(): void{
        $this -> _nomEquipe = $nomEquipe;
    }
    public function setNomJoueur(): void{
        $this -> _nomJoueur = $nomJoueur;
    }

    //Méthode pour retirer un joueur
}


