<!-- CODE PAYS des EQUIPES -->

<?php

class Pays{ // Déclarer la CLASS "Pays" - pour lister les Pays
   // Déclarer les ATTRIBUTS de la "class"
   private $_nomPays;

   public function __construct($nomPays){
      $this -> _nomPays = $nomPays;
   }

   public function getNomPays(){
      return $this -> _nomPays;
   }
      
   }


