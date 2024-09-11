<!-- CODE PAYS -->

<?php

class Pays{ // Déclarer la CLASS "Pays" - pour lister les Pays
   private $_nomPays;

   public function __construct($nomPays){
      $this -> _nomPays = $nomPays;
   }

   public function getNomPays(){
      return $this -> _nomPays;
   }
      
}


