<iframe width="560" height="315" src="https://www.youtube.com/embed/QH2-TGUlwu4" frameborder="0" allowfullscreen></iframe>
<img src="https://camo.githubusercontent.com/f9b43986af515ac850dfa82609fb2ed6938bf1ac/687474703a2f2f6d65646961302e67697068792e636f6d2f6d656469612f6e734d5068574b3662667848712f67697068792e676966"/>
<?php $prenom = 'Jean-Pierre'; ?>

<h1> Salut <?php echo $prenom; ?> ! Cha va ? </h1>
<?php
//On change la valeur de la variable
$prenom= $_GET['prenom']; ?>

<?php $aime= $_GET['aime']; ?>
<h1> Salut <?php echo $prenom ; ?> ! Cha va?<h1>
<p> Il parait que tu adooooores <?php echo $aime; ?>. C'est vrai ? </p>

<?php  print_r($_GET)?>

<?php
$nom1 = 'Jonh';
$nom2 = '-Rachid';
?>
<h1> Salut <?php echo $nom1 . $nom2;?> ! Cha va? </h1>
