<?php 
require 'validator.php';

    class Form {

        public function openForm($action) {
            echo '<form action="' . $action . '" method="POST">';
        }

        public function inputText($name) {
            echo '<label>' . $name . '</label>' ;
            echo '<p><input type="text" name="' . $name . '"></p>';
        }

        public function select($pays) {
            echo '<select name="' . $pays . '">';
            echo '<option>Belgique</option>';
            echo '<option>France</option>';
            echo '<option>Rwanda</option>';
            echo '</select><br>';
        }

        public function inputRadio($sexe){
            echo '<p><input type="radio" value="homme" name"' . $sexe . '">Homme</p>';
            echo '<p><input type="radio" value="femme" name"' . $sexe . '">Femme</p>';
        }

        public function inputCheck($sujet) {
            echo '<p><input type="checkbox" name="' . $sujet . '">Sujet 1</p>' ;
            echo '<p><input type="checkbox" name="' . $sujet . '">Sujet 2</p>' ;
        }

        public function textArea($message) {
            echo '<textarea name="' . $message . '"></textarea>';
        }

        public function submit() {
            echo '<p><button type="submit">Envoyer</button></p>';
        }

        public function closeForm() {
            echo '</form>';
        }
            
    }

?>

<?php 
$validator=new Validator();
$form = new Form();
$nom=$_POST['Message'];
$nom_clean=$validator->validate_string($nom);
echo $nom_clean;
echo $form->openForm('form.php'); 
echo $form->inputText('Nom'); 
echo $form->inputText('Prenom'); 
echo $form->inputRadio('Sexe');
echo $form->select('Pays');
echo $form->inputCheck('I<!DOCTYPE html>');
echo $form->textArea('Message');
echo $form->submit('Submit'); 
echo $form->closeForm(); 

?>