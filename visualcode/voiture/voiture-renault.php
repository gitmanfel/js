<?php
class Renault{//on fixe les propriétés "fixes"
  public $modele="Renault utilitaire";
  public $statut="free";
  public $poids="4";
  public $plaque="FR15";
  public $kilometrage="241.000";
  //public $date="02/14/2001";
  // On fixe les propriétés "variables"
  public function affiche_modele($modele){
    echo "'.$modele.'";
  }
}
 ?>