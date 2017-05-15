<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
?>
<DOCTYPE!>
<html>
  <head>
    <title> test array webdev </title>
  </head>
  <body>

<?php
$web_development = array( 'frontend' => array() , 'backend' => array() );

array_push($web_development['frontend'] , 'xhtml');
array_push($web_development['backend'] , 'ruby on rails');
array_push($web_development['frontend'] , 'CSS');
array_push($web_development['frontend'] , 'flash');
array_push($web_development['frontend'] , 'JavaScript');

$web_development['frontend'][0] = 'html';
unset($web_development['frontend'][2]);


echo '<pre>';
print_r($web_development);
echo '</pre>';
?>

  </body>
</html>
