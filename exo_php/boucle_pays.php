<DOCTYPE!>
<html>
  <head>
    <title> Pays </title>
  </head>
  <body>
<!--  <select name="pays" id="pays" required>
    <option value="Belgique" selected>Belgique</option>
    <option value="espagne">Espagne</option>
    <option value="italie">Italie</option>
    <option value="royaume-uni">Royaume-Uni</option>
    <option value="canada">Canada</option>
    <option value="etats-unis">États-Unis</option>
    <option value="chine">Chine</option>
    <option value="japon">Japon</option>
</select>-->
<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

$tableau_pays = ['MA' => 'Maroc', 'SN' => 'Sénégal', 'BE' => 'Belgique', 'UK'=>'Royaume-Uni' , 'US'=>'etats-unis' , 'TN' => 'Tunisie' , 'IR' => 'Iran' , 'EG' => 'Egypte' , 'TR' => 'Turquie', 'CA' => 'Canada'] ;
echo '<select name="pays">';
foreach ($tableau_pays as $ISO => $pays) {
  echo $pays . '<option value=$ISO>' . $pays . '</option>' . '</br>';
}
echo '</select>';
#<input type= "radio" name= "pays" value="pays"> </input>;
?>

  </body>
</html>
