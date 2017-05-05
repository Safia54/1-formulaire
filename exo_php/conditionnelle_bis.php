<!DOCTYPE>
<html>
  <head>
    <title> conditionnelle </title>
  </head>
  <body>

    <p> <b> Êtes-vous une des personnes que nous cherchions pour jouer les figurants dans notre prochain film ? </b> </p>

    <form method=get>

      <input type="radio" name="sexe" value="femme" required> Femme </input>
      <input type="radio" name="sexe" value="homme" required> Homme </input>

      <input type="text" name="age" placeholder="Quel âge avez-vous?" required/>

      <button type="submit" > Soumettre </button>

    </form>

  </body>
</html>

<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

$age = $_GET['age'];
$sexe =  $_GET['sexe'];

$affiche = "Désolé, vous ne remplissez pas les critères de sélection.";
if ($age >= 21 AND $age <= 40 AND $sexe == "femme") {
   $affiche = "Bonjour, bienvenue parmi nous!";
}
 echo $affiche; 
 ?>
