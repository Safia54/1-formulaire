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


  switch ($note) {
    case 0:
    case 1:
    case 2:
    case 3:
      echo "Ce travail est nul.";
      break;
    case 4:
    case 5:
    case 6:
    case 7:
    case 8:
    case 9:
      echo "Ce travail n'est pas terrible.";
      break;
    case 10:
      echo "Tout juste !";
      break;
    case 11:
    case 12:
    case 13:
    case 14:
      echo "Ce n'est pas mal.";
      break;
    case 15:
    case 16:
    case 17:
    case 18:
      echo "Bravo !";
      break;
    case 19:
    case 20:
      echo "Tricheur !";
      break;
  }
?>
