<!DOCTYPE>
<html>
<head>
  <title> bonjour </title>
</head>
<body>

  <form method="get">

    <input type="radio" name="genre" value="F" required> F </input>
    <input type="radio" name="genre" value="H" required> H </input>

    <button type="submit" > Soumettre </button>

  </form>

</body>
</html>

<?php

$genre = $_GET['genre'];


$bonjour = ($genre == "F") ? 'Bonjour Madame' : 'Bonjour Monsieur';
  echo $bonjour;
 ?>
