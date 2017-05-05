<!DOCTYPE html>
<html>

  <head>
    <title> formulaire test en plus </title>
    <meta charset="utf-8">
  </head>

  <body>


    <h1> Générateur d'excuses </h1>
    <h2> Trouvez une excuse pour sêcher les cours </h2>



    <form method="get">

      <input type="text" name="nom_enfant" id="nom_enfant" placeholder="Nom de l'enfant à faire excuser..." required/>
      <input type="text" name="nom_institutrice" id="nom_institutrice" placeholder="Nom du prof à berner..." required/>
      <p>
       <label for="excuse"> Quelle est votre excuse à la noix ?</label> </br>

       <input type="radio" name="excuse" value="maladie" id="maladie" required/> <label for="maladie"> maladie imaginaire</label> </br>
       <input type="radio" name="excuse" value="deces_animal" id="deces_animal" required/> <label for="deces_animal"> le coup du décès de votre labrador</label> </br>
       <input type="radio" name="excuse" value="voyage" id="voyage" required/> <label for="voyage">envie de partir plus tôt en vacances</label> </br>
       <input type="radio" name="excuse" value="aid" id="aid" required/> <label for="aid"> fêter l'aid en famille </label> </br>
     </p>
      <button type="submit" value="submit"> ENVOYER </button>

<?php
// ini_set('display_errors', 1);
// error_reporting(E_ALL);
#print_r($_GET);

$today = date('\l\e l j F Y');

$excuse = $_GET['excuse'];
$nom_enfant = $_GET['nom_enfant'];
$nom_institutrice = $_GET['nom_institutrice'];



if ($excuse == "maladie") {
   $justificatif = "a de l'herpes.";
}
elseif ($excuse == "deces_animal") {
  $justificatif = "il vit mal le deuil de Poppy, notre animal de compagnie.";
}
elseif ($excuse == "voyage") {
   $justificatif = "fait le pont.";
}
elseif ($excuse == "aid") {
  $justificatif = "fête l'aid en famille.";
}

if ( strlen($excuse) == 0 OR strlen($nom_enfant) == 0 OR strlen($nom_institutrice) == 0) {
  echo "Vous avez oublié de renseigner un champ.";
}
else {
echo "A l'attention de" . " " . $nom_institutrice . "," . " " . "mon enfant" . " " . $nom_enfant . " " . "s'absentera à l'école" . " " . $today . " " . "car" . " " . $justificatif . " " . "Merci de votre compréhension.";
}


?>

    </form>
  </body>

</html>
