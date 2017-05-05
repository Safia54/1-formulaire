<DOCTYPE!>
<html>
  <head>
    <title> test array </title>
  </head>
  <body>

<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);


$famille = array( 'Baba', 'Mama', 'Hmed', 'Sfeya', 'Toutmène' );
print_r($famille);
#echo $famille;

$plat = array( 'Lasagnes', 'Escalopes de veau', 'Pâtes' );
print_r($plat);
#echo $plat;

$film = array( 'La ligne verte', 'Dirty pretty things', 'Precious');
print_r($film[1]);
#echo $film[1];
?>

  </body>
</html>
