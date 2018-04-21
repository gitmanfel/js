<?php
class Ford{//on fixe les propriétés "fixes"
  public $modele="Mustang GT500";
  public $statut="free";
  public $poids="1,2";
  public $plaque="DE31";
  public $kilometrage="125.000";
  //public $date="02/14/2015";
  // On fixe les propriétés "variables"
  public function affiche_modele($modele){
    echo "'.$modele.'";
  }
}
 ?>