<DOCTYPE!>
<html>
  <head>
    <title> test array </title>
  </head>
  <body>

<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

$papa = array(
  'prénom' => 'Mhamed' ,
  'aime_le_foot' => 'oui' , 'âge' => 66 ,
  'hobby' => array('Télé' , 'manger' , 'dormir')
);

$moi = array(
  'prénom'=> 'Safia' ,
  'aime_le_foot' => 'oui' ,
  'âge' => 26 ,
  'hobby' => array('Jeux-vidéo' , 'manger' , 'dormir') ,
  'papa' => $papa
);

//remplacer des éléments du tableau
$remplacement = array('prénom' => "Dieudonné");
$moi2 = array_replace($moi , $remplacement);

echo '<pre>';
print_r($moi2);
echo '</pre>';

//ajouter des éléments au tableau
array_push($moi['hobby'] , 'rêver');



//compter les éléments du tableau
echo count($moi['hobby']);


?>

  </body>
</html>
