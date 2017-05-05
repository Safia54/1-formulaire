<?php
$temperature=2;
if ($temperature >= 15 ) {
  // code à exécuter si la condition est TRUE
  $vetement_du_jour = "T-shirt";

 }elseif ( $temperature > 10 ){
  $vetement_du_jour = "Pull-over";

 } else {
   // code à exécuter si la condition est FALSE
   $vetement_du_jour = "Pull-over, écharpe et bonnet";
 }
 echo $vetement_du_jour;
?>
