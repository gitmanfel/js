<?php
class Audit{//on fixe les propriétés "fixes"
  public $modele=">AudiA5";
  public $statut="Reserved";
  public $poids="2.5";
  public $plaque="BE55";
  public $kilometrage="45.000";
  //public $date="02/14/2005";
  // On fixe les propriétés "variables"
  public function affiche_modele($modele){
    echo "'.$modele.'";
  }
}
 ?>