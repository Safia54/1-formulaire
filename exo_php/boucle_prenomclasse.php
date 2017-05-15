<DOCTYPE!>
<html>
  <head>
    <title> Prénoms des élèves de ma classe de Becode </title>
  </head>
  <body>

<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);


$prenom_classe = array ('Safia', 'Gabriele', 'Santiago','Daniela', 'David', 'Thomas' , 'Jimmy' , 'Hugo' , 'Habib' , 'Ludovic' , 'Jayce' , 'Dan' , 'Eric' , 'Estelle' , 'Nadia' , 'Kreshnik' , 'Salvatore');
foreach ($prenom_classe as $prenom => $value) {
  echo $value . "</br>";
}

?>

  </body>
</html>
