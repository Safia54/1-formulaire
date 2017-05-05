<form method= "get">
<input type="text" id="age" name="age" placeholder="quel est ton âge?" required/> </br>

<input type="radio" name="sexe" id="feminin" value="feminin" required> F </input>
<input type="radio" name="sexe" id= "masculin" value="masculin" required> H </input> </br>

<p> Do you speak English ? </p>
<input type="radio" name="english" id="yes" value="yes" required> Yes </input>
<input type="radio" name="english" id="no" value="no" required> No </input> </br>

<button type="submit" value="submit"> Validez </button>

<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

$age = $_GET["age"];
$sexe = $_GET["sexe"];
$english = $_GET["english"];

if ($age < 12 AND $sexe == "masculin" AND $english == "yes") {
  $affiche = "Hello little boy";
}elseif ($age < 12 AND $sexe == "masculin") {
  $affiche = "Salut petit gamin";
}elseif ($age < 12 AND $sexe == "feminin" AND $english == "yes") {
  $affiche = "Hello little girl";
}elseif ($age < 12 AND $sexe == "feminin") {
  $affiche = "Salut petite gamine";
}elseif ($age < 29 AND $sexe == "masculin" AND $english == "yes") {
  $affiche = "Hello Teenage boy";
}elseif ($age < 29 AND $sexe == "masculin") {
  $affiche = "Salut le boutonneux";
}elseif ($age < 29 AND $sexe == "feminin" AND $english == "yes") {
  $affiche = "Hello Teenage Girl";
}elseif ($age < 29 AND $sexe == "feminin") {
  $affiche = "Salut la boutonneuse";
}elseif ($age == 33 AND $english == "yes") {
  $affiche = "Hey ! But you have the same age as Jesus when he died !";
}elseif ($age == 33) {
  $affiche = "Hey ! Mais t'as l'âge du Christ à sa mort !";
}elseif ($age <= 83 AND $sexe == "masculin" AND $english == "yes") {
  $affiche = "Hello old Sir";
}elseif ($age <= 83 AND $sexe == "masculin") {
  $affiche = "Salut le vieux";
}elseif ($age <= 83 AND $sexe == "feminin" AND $english == "yes") {
  $affiche = "Hello old Lady";
}elseif ($age <= 83 AND $sexe == "feminin") {
  $affiche = "Salut la vieille";
}elseif ($age > 83 AND $english == "yes") {
  $affiche = "What?! Still alive?!";
}elseif ($age > 83) {
  $affiche = "Quoi?! Tu n'as toujours pas clamsé?!";
}
echo $affiche;
?>
