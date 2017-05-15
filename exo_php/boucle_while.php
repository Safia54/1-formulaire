<DOCTYPE!>
<html>
  <head>
    <title> test loop </title>
  </head>
  <body>

<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

$a = 1;
while ($a <= 120) {
  echo $a++ . '</br>';
}


?>

  </body>
</html>
