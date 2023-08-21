<?php


session_start();
$_SESSION["connected"] = false;

unset($_SESSION["id"]);
unset($_SESSION["nom"]);
unset($_SESSION["prenom"]);
unset($_SESSION["email"]);
unset($_SESSION["motDePasse"]);
unset($_SESSION["sexe"]);
unset($_SESSION["dateNaissance"]);

header('Location: ../../index.php');