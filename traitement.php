<?php
ini_set('display_errors', 1);

error_reporting(E_ALL);




$sanitized_name = filter_var( $_POST["nom"], FILTER_SANITIZE_STRING);
$sanitized_firstname = filter_var( $_POST["prenom"], FILTER_SANITIZE_STRING);


$sanitized_email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
if (filter_var($sanitized_email, FILTER_VALIDATE_EMAIL)) {
    echo "formulaire envoyé !";
} else {
    echo "Votre adresse email est INVALIDE.";
}


print_r($sanitized_email);
print_r($sanitized_name);
print_r($sanitized_firstname);

?>
