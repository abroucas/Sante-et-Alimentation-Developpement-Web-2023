
<?php session_start() ?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil/Recettes</title>
    <link rel="stylesheet" href="./../css/accueil-recettes.css">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Bree+Serif&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@700&display=swap');
    </style>
</head>

<body>
    <?php
    include '../general/header.php';
    ?>
    <main>

        <div class="accueil-recettes-titre">
            <h1>Nos Recettes bien-être</h1>
        </div>
        <div class="accueil-recettes-texte">
            <p>
                <span class="accueil-recettes-texte-tab"></span> Bienvenue sur la page de nos recettes bien-être! En parallèle d'une bonne alimentation, il est important de réussir à se faire plaisir pour garder le moral. C'est pourquoi nos recettes mélangent saveurs et santé, une pierre deux coups! 
            </p>
        </div>
        <div class="container">
            <div class="recettes-categories">
                <div class="recettes-categorie">
                    <a href="./recette-categorie.php?cat=entree" class="recettes-categorie-link">
                        <!--<img class="recettes-categories-img" src="../../data/images.jpeg" alt="image-recettes-categories">-->
                        <div class="recettes-categories-img img-entrees"></div>
                        <div class="recettes-categories-intitule">
                            <h2>Entrées</h2>
                        </div>
                    </a>
                </div>

                <div class="recettes-categorie">
                    <a href="./recette-categorie.php?cat=plat" class="recettes-categorie-link">
                        <!-- <img class="recettes-categories-img" src="" alt="image-recettes-categories"> -->
                        <div class="recettes-categories-img img-plats"></div>
                        <div class="recettes-categories-intitule">
                            <h2>Plats</h2>
                        </div>
                    </a>
                </div>

                <div class="recettes-categorie">
                    <a href="./recette-categorie.php?cat=dessert" class="recettes-categorie-link">
                        <!-- <img class="recettes-categories-img" src="" alt="image-recettes-categories"> -->
                        <div class="recettes-categories-img img-desserts"></div>
                        <div class="recettes-categories-intitule">
                            <h2>Desserts</h2>
                        </div>
                    </a>
                </div>

                <div class="recettes-categorie">
                    <a href="./recette-categorie.php?cat=boisson" class="recettes-categorie-link">
                        <!-- <img class="recettes-categories-img" src="" alt="image-recettes-categories"> -->
                        <div class="recettes-categories-img img-boissons"></div>
                        <div class="recettes-categories-intitule">
                            <h2>Boissons</h2>
                        </div>
                    </a>
                </div>

                <div class="recettes-categorie">
                    <a href="./recette-categorie.php?cat=aperitif" class="recettes-categorie-link">
                        <!-- <img class="recettes-categories-img" src="" alt="image-recettes-categories"> -->
                        <div class="recettes-categories-img img-aperitifs"></div>
                        <div class="recettes-categories-intitule">
                            <h2>Apéritifs</h2>
                        </div>
                    </a>
                </div>

                <div class="recettes-categorie">
                    <a href="./recette-categorie.php" class="recettes-categorie-link">
                        <!-- <img class="recettes-categories-img" src="" alt="image-recettes-categories"> -->
                        <div class="recettes-categories-img img-surprenez-moi"></div>
                        <div class="recettes-categories-intitule">
                            <h2>Surprenez-moi!</h2>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </main>
    <?php
    include '../general/footer.php';
    ?>
</body>

</html>