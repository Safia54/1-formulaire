<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

$prenom = 'Safia';
$age= 26;
$faim= true;
$couleur_yeux= 'bruns foncés';
$famille= array(0=>'Baba', 1=>'Mama', 2=> 'Hmad', 3=>'Sfeya', 4=>'Toutmène', 5=>'Raniania', 6=>'Taba Lyant');

echo $prenom;
echo $age;
echo $faim;
echo $couleur_yeux;
echo '<pre>' . print_r($famille, true) . '</pre>';
 ?>
