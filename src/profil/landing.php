<?php


//session_start();

$_SESSION["connected"] = true;
$_SESSION["id"] = $id;
$_SESSION["nom"] = $nom;
$_SESSION["prenom"] = $prenom;
$_SESSION["email"] = $email;
//$_SESSION["motDePasse"] = $password;
$_SESSION["sexe"] = $sexe;
$_SESSION["dateNaissance"] = $date;

header('Location: ../../index.php');