<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/header.css">
    <title>Document</title>
</head>
<body>
    <header>

        <div class="container-logo" onclick="window.location.href = '../general/accueil.php'">
            <img src="../../img/logo.png" alt="Logo de l'entreprise" class="logo">
        </div>

        <input type="checkbox" id="menu-bar">
        <label for="menu-bar">Menu</label>

        <nav class="navbar">
            <ul>
                <li><a href="../actualites/actualite.php">Actualités</a></li>
                <li><a href="#" onclick="return false;">Nutrition</a>
                    <ul>
                        <li><a href="../nutrition/conseils-nutritionnels.php">Conseils nutritionnels</a></li>
                        <li><a href="../nutrition/accueil-recettes.php">Recettes</a>
                            <ul>
                                <li><a href="../nutrition/recette-categorie.php?cat=entree">Entrées</a></li>
                                <li><a href="../nutrition/recette-categorie.php?cat=plat">Plats</a></li>
                                <li><a href="../nutrition/recette-categorie.php?cat=dessert">Desserts</a></li>
                                <li><a href="../nutrition/recette-categorie.php?cat=aperitif">Appéritifs</a></li>
                                <li><a href="../nutrition/recette-categorie.php?cat=boisson">Boissons</a></li>
                                <li><a href="../nutrition/recette-categorie.php">Surprenez-moi !</a></li>
                            </ul>
                        </li>
                        <li><a href="../nutrition/regime-alimentaire.php">Régimes alimentaires</a></li>
                        <?php
                        if(isset($_SESSION["connected"]) && $_SESSION["connected"]==true){?>
                        <li><a href="../nutrition/journal-alimentaire.php">Journal alimentaire</a></li>
                        <?php } ?>
                    </ul>
                </li>
                <li><a href="#" onclick="return false;">Santé</a> 
                    <ul>
                        <li><a href="../sante/conseils-sante.php">Conseils santé</a></li>
                        <li><a href="../sante/sport-forme.php">Sport & Forme</a></li>
                        <?php
                        if(isset($_SESSION["connected"]) && $_SESSION["connected"]==true){?>
                        <li><a href="../sante/ficheSante.php">Ma fiche santé</a></li>
                        <li><a href="../sante/imc.php">Mon IMC</a></li>
                        <li><a href="../sante/calcul-pas.php">Je calcule mes pas</a></li>
                        <?php } ?>
                    </ul>
                </li>
            </ul>
        </nav>

        <ul class="connexion">
        <?php
            if(!isset($_SESSION["connected"]) || !($_SESSION["connected"]==true)){?>
                <button class="header-button">M'identifier</button>
                <div class="container-li">
                    <li><a href="../profil/connexion.php">Connexion</a></li>
                    <li><a href="../profil/inscription.php">Inscription</a></li>
                </div>
            <?php }
            else{ ?>
                 <button class="header-button">Mon compte</button>
                <div class="container-li">
                    <li> <a href="../sante/ficheSante.php">Ma fiche santé </a> </li>
                    <li> <a href="../sante/imc.php">Mon IMC </a> </li>
                    <li> <a href="../sante/calcul-pas.php">Mes pas quotidiens</a> </li>
                    <li> <a href="../nutrition/journal-alimentaire.php"> Mon journal alimentaire</a> </li>
                    <li><a href="../profil/deconnexion.php">Déconnexion</a></li>
                </div>
            <?php } ?>
        </ul>
    </header>
</body>
</html>