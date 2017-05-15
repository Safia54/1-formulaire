<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
?>
<DOCTYPE!>
<html>
  <head>
    <title> test array mari </title>
  </head>
  <body>

<?php
$toi = array(
  'prénom' => 'Gustave' ,
  'aime_le_foot' => 'oui' , 'âge' => 27 ,
  'hobby' => array('Télé' , 'manger' , 'dormir')
);
// echo '<pre>';
// print_r($moi);
// echo '</pre>';

$moi = array(
  'prénom'=> 'Safia' ,
  'aime_le_foot' => 'oui' ,
  'âge' => 26 ,
  'hobby' => array('Jeux-vidéo' , 'manger' , 'dormir')
);

// Pour créer un autre nouveau tableau qui additionne tous les élements des deux tableaux et en faire un seul
$gosses = array_merge ($moi['hobby'] , $toi['hobby'] ) ;
//Pour créer un autre nouveau tableau qui reprend tous les élements communs des deux tableaux
$gosses = array_intersect($moi['hobby'] , $toi['hobby'] ) ;

echo '<pre>';
print_r($gosses);
echo '</pre>';


?>

  </body>
</html>
