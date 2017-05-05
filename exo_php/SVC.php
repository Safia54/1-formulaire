<!DOCTYPE html>
<html>

  <head>
    <title> formulaire test en plus </title>
    <meta charset="utf-8">
  </head>

  <?php
  $sujet= $_GET['sujet'];
  $verbe = $_GET['verbe'];
  $complement = $_GET['complément'];
  ?>
  <?php echo $sujet." ".$verbe." ".$complement;
  //print_r($_GET)
  ?>

  <body>
    <form method="get" class="medium-11 columns large-centered">
      <input type="text" name="sujet" id="sujet" placeholder="TON sujet..."/>
      <input type="text" name="verbe" id="verbe" placeholder="TON verbe..."/>
      <input type="text" name="complément" id="complément" placeholder=" TON complément..."/>
      <button type="submit" value="submit"> ENVOYER </button>
    </form>



  </body>

</html>
