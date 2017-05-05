<!DOCTYPE html>
  <html>
    <head>
      <title> Note philo </title>
    </head>
    <body>

      <h1> Signification philosophique de la note octroyée au TP de philo BA1 </h1>

<form method="get">
 <input type= "text" id="note" name="note" placeholder="Introduisez votre note..."/>
</form>

    </body>
  </html>

<?php
  ini_set('display_errors', 1);
  error_reporting(E_ALL);

  $note = $_GET["note"];


  if ($note <= 3) {
    $affiche = "Ce travail est nul.";
  }
  elseif ($note <= 9) {
    $affiche = "Ce travail n'est pas terrible.";
  }
  elseif ($note == 10) {
    $affiche = "Tout juste !";
  }
  elseif ($note <= 14) {
    $affiche = "C'est pas mal.";
  }
  elseif ($note <= 18) {
    $affiche = "Bravo!";
  }
  elseif ($note <= 20) {
    $affiche = "Tricheur. Convocation chez le doyen.";
  }
 echo $affiche
?>
