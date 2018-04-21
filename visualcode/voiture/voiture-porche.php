<?php
class Porche{//on fixe les propriétés "fixes"
  public $modele="Porche 911 GT";
  public $statut="free";
  public $poids="1,8";
  public $plaque="FR43";
  public $kilometrage="120.000";
  //public $date="02/14/2001";
  // On fixe les propriétés "variables"
  public function affiche_modele($modele){
    echo "'.$modele.'";
  }
}
 ?>