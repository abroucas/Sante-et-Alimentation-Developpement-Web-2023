
<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/connexion.css">

    <title>Connexion</title>
</head>
<body>
    <div class="section">
        <div class="container">
            <div class="title">Connexion</div>
            <?php 
                if(isset($_GET['login_err']))
                {
                    $err = htmlspecialchars($_GET['login_err']);

                    switch($err)
                    {
                        case 'password':
                            ?>
                                <div class="alert alert-danger">
                                    <strong>Erreur</strong> mot de passe incorrect
                                </div>
                            <?php 
                            break;
                        case 'email':
                            ?>
                                <div class="alert alert-danger">
                                    <strong>Erreur</strong> email incorrect
                                </div>
                            <?php 
                            break;
                        case 'notfound':
                            ?>
                                <div class="alert alert-danger">
                                    <strong>Erreur</strong> vous n'êtes pas inscrit avec cet email
                                </div>
                            <?php 
                            break;
                        case 'nothing':
                            ?>
                                <div class="alert alert-danger">
                                    <strong>Erreur</strong> veuillez remplir tous les champs
                                </div>
                            <?php 
                    }
                }
            ?>
            <form action="connexion_traitement.php" method="post">
                <div class="user-details">
                    <div class="input-box">
                        <span class="details">Adresse email</span>
                        <input type="text" name="email" placeholder="Entrez votre adresse email" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Mot de passe</span>
                        <input type="password" name="password" placeholder="Entrez votre mot de passe" required>
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