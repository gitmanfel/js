<!DOCTYPE html>
<html>
<head>
<title>Title of the document</title>
</head>

<body>
  <p>Bonjour <?php

ini_set('display_errors', 1);
// Enregistrer les erreurs dans un fichier de log
ini_set('log_errors', 1);
// Nom du fichier qui enregistre les logs (attention aux droits à l'écriture)
ini_set('error_log', dirname(__file__) . '/log_error_php.txt');
// Afficher les erreurs et les avertissements
error_reporting();
?></p>


</body>

</html>
