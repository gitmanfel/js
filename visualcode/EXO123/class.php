<?php
ini_set('display_errors', 1); 
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require 'class-html.php';
$html=new Html();

?>


<html>
<head>
        <?php
        echo $html->css('stylesheet/main.css');

        echo $html->meta_charset();
        ?>

<title>Title of the document</title>
</head>

<body>
<h1>LINUX POUR LES NULL</h1>

<?php
echo $html->image('a8kc.png','linux pour les null');
?>

<p>The content of the document......Sujet1 </p>

<?php
echo $html->link('https://www.freecodecamp.org/challenges/say-hello-to-html-elements','freecodecamp');
?>


</body>

</html>
