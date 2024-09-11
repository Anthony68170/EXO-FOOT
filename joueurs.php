<!-- CODE JOUEURS -->
 <?php

 class Joueurs{ // Déclarer la CLASS "Joueurs" - pour lister les joueurs
    // Déclarer les ATTRIBUTS de la "class"
    private $prenom;
    private $nom;
    private $paysOrigine;
    private array $equipe; // Créer le TABLEAU pour les "équipes"

// __construct pour INIATILIASER "chaque" attributs pour "chaque" joueur
    public function __construct($prenom, $nom, $paysOrigine){
        $this -> _prenom = $prenom;
        $this -> _nom = $nom;
        $this -> _paysOrigine = $paysOrigine;
        $this -> __equipe = $equipe = array(); // INITIALISER le TABLEAU des équipes
    }

    //GETTERS
    public function getPrenom(){
        return $this -> _prenom;
    }
    public function getNom(){
        return $this -> _nom;
    }
    public function -> getpaysOrigine(){
        return $this -> _paysOrigine;
    }
 }