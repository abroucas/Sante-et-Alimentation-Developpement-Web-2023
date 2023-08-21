<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../css/inscription.css">
    <title>Inscription</title>
</head>
<body>
    <div class="section">
        <div class="container">
            <div class="title">Inscription</div>
            <?php 
                if(isset($_GET['reg_err']))
                {
                    $err = htmlspecialchars($_GET['reg_err']);

                    switch($err)
                    {
                        /*case 'success':
                        ?>
                            <div class="alert alert-success">
                                <strong>Succès</strong> inscription réussie !
                            </div>
                        <?php
                        break;*/

                        case 'password':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> Les mots de passe sont différents
                            </div>
                        <?php
                        break;

                        case 'email':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> e-mail non valide
                            </div>
                        <?php
                        break;

                        case 'email_length':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> e-mail trop long
                            </div>
                        <?php 
                        break;

                        case 'pseudo_length':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> pseudo trop long
                            </div>
                        <?php 
                        case 'already':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> compte deja existant
                            </div>
                        <?php
                        case 'void':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> Veuillez remplir tous les champs
                            </div>
                        <?php
                    }
                }
            ?>
            <form action="inscription_traitement.php" method="post">
                <div class="user-details">
                    <div class="input-box">
                        <span class="details">Nom</span>
                        <input type="text" name="nom" id="nom" placeholder="Entrez votre nom" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Prénom</span>
                        <input type="text" name="prenom" id="prenom" placeholder="Entrez votre prénom" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Date de naissance</span>
                        <input type="date" name="date" id="date" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Adresse email</span>
                        <input type="text" name="email" id="email" placeholder="Entrez votre adresse email" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Mot de passe</span>
                        <input type="password" name="password" id="mdp" placeholder="Mot de passe" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Confirmation mot de passe</span>
                        <input type="password" name="password_retype" id="mdpBis" placeholder="Confirmez votre mdp" required>
                    </div>
                </div>
                <div class="gender-details">
                    <input type="radio" name="sexe" value="homme" id="dot-1">
                    <input type="radio" name="sexe" value="femme" id="dot-2">
                    <span class="gender-title">Genre</span>
                    <div class="category">
                        <label for="dot-1">
                            <span class="dot one"></span>
                            <span class="gender">Homme</span>
                        </label>
                        <label for="dot-2">
                            <span class="dot two"></span>
                            <span class="gender">Femme</span>
                        </label>
                    </div>
                </div>
                <div class="button">
                    <input type="submit" value="Envoyer">
                </div>
            </form>
        </div>
    </div>
</body>
</html>