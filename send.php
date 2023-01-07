<?php
session_start();

$errors = [];
// VERIFICATIONS ET DEFINITIONS DES MESSAGES D'ERREURS
if (!isset($_POST['name']) || $_POST['name'] == '') {
	$errors['name'] = "Vous n'avez pas précisé votre nom";
}
if (!isset($_POST['email']) || $_POST['email'] == '' || (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))) {
	$errors['email'] = "Vous n'avez pas précisé votre email ou alors celui-ci n'est pas valide";
}
if (!isset($_POST['object']) || $_POST['object'] == '') {
	$errors['object'] = "Vous n'avez pas précisé votre objet";
}
if (!isset($_POST['message']) || $_POST['message'] == '') {
	$errors['message'] = "Vous n'avez pas précisé votre message";
}

// SI IL Y A DES ERREURS ON LES STOCKE POUR POUVOIR LES RECUPERER POUR LES AFFICHER ET ON STOCKE LES DONNEES QUE L'UTILISATEUR AVAIT SAISIES POUR LUI REAFFICHER POUR QU'IL PUISSE LES CORRIGER
if (!empty($errors)) {
  	$_SESSION['monapp']['errors'] = $errors;
  	$_SESSION['monapp']['data_memory'] = $_POST;
}
// SI PAS D'ERREURS ON ENVOIE LES INFORMATION PAR MAIL A L'ADRESSE CHOISIE
else{
	$entete = 'MIME-VERSION:1.0' . "\r\n";
	$email_destinataire = "contact@aurelierejasse.fr"; // A CHANGER PAR VOTRE EMAIL
	$email = $_POST['email'];
	$object = $_POST['object'];
	$message = $_POST['name'];
	$message .= $_POST['message'];
	$headers = 'FROM :'. $email;


if ( mail($email_destinataire, $object, $message, $headers) ){
		$_SESSION['monapp']['success'] = "1";

	} else{
		$errors ['errors'] = "L'envoi a échoué ";
	}
}
// SI IL Y A DES ERREURS OU NON ON REDIRIGE VERS CETTE PAGE
header('Location: index.php#contact');
exit();