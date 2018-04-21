<?php
try
{
	// On se connecte à MySQL
	$bdd = new PDO('mysql:host=localhost;dbname=weatherapp;charset=utf8', 'root', 'root');
}
catch(Exception $e)
{
	// En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
}

$resultat = $bdd->query('SELECT * FROM Météo');

while ($donnees = $resultat->fetch())
{
  echo $donnees['ville']."<br />"." ".$donnees['bas'];

}
$resultat->closeCursor();

?>
test
