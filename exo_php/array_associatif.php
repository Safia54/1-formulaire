<DOCTYPE!>
<html>
  <head>
    <title> test array </title>
  </head>
  <body>

<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);


$moi = array( 'prénom'=> 'Safia' , 'aime_le_foot' => true , 'âge' => 26 );
#print_r($moi);
echo $moi['aime_le_foot'];

?>

  </body>
</html>
