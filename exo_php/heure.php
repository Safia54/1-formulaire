<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

  // $heure= date("H:m");

  $heure= date("H");
  $minute= date("i");

  echo $heure ." ".":"." ".$minute;

  if($heure <= 9) {
    $affiche = "Bonjour !";
  }elseif ($heure <= 12) {
    $affiche = "Bonne journée !";
  }elseif ($heure <= 16) {
    $affiche = "Bon après-midi !";
  }elseif ($heure <= 21) {
    $affiche = "Bonne soirée !";
  }elseif ($heure <= 4 AND $minute==59) {
    $affiche = "Bonne nuit !";
  }

  echo $affiche;

?>
