<DOCTYPE!>
<html>
  <head>
    <title> test loop </title>
  </head>
  <body>

<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);


$pronoms_personnels = array ('Je', 'Tu', 'Il/Elle','Nous', 'Vous', 'Elles/Ils');
foreach ($pronoms_personnels as $i => $v) {
  if ($v == 'Je') {
    $terminaison = 'e';
  }
  elseif ($v == 'Tu') {
    $terminaison = 'es';
  }
  elseif ($v =='Il/Elle') {
    $terminaison = 'e';
  }
  elseif ($v == 'Nous') {
    $terminaison = 'ons';
  }
  elseif ($v == 'Vous') {
    $terminaison = 'ez';
  }
  elseif ($v == 'Elles/Ils') {
    $terminaison = 'ent';
  }
  echo $v . " " . "cod" . $terminaison . '<br/>';

}

?>

  </body>
</html>
