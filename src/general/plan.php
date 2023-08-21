<?php session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../css/plan.css">
    <title>Plan du site</title>
</head>
<body>
    
<?php
    include '../general/header.php';
    ?>

    <section class="plan">
        
        <div class="titre-principal">Plan du site</div>
        <div class="texte">Vous trouverez ici l'ensemble des pages de notre site ! Vous pouvez par exemple vous dirigez vers notre menu en cliquant <a href="../general/accueil.php" class="ici">ici</a> !</div>

        <div class="category"><a href="../actualites/actualite.php">Actualités</a></div>
        <div class="category"><a href="#" onclick="return false;">Nutrition ></a></div>

        <div class="category2">
            <a href="../nutrition/conseils-nutritionnels.php">Conseils nutritionnels</a>
            <a href="../nutrition/regime-alimentaire.php">Régimes alimentaires</a>
            <a href="../nutrition/accueil-recettes.php">Recettes ></a>
        </div>

        <div class="category3">
            <a href="../nutrition/recette-categorie.php?cat=entree">Entrées</a>
            <a href="../nutrition/recette-categorie.php?cat=plat">Plats</a>
            <a href="../nutrition/recette-categorie.php?cat=dessert">Desserts</a>
            <a href="../nutrition/recette-categorie.php?cat=boisson">Boissons</a>
            <a href="../nutrition/recette-categorie.php?cat=aperitif">Apéritifs</a>
            <a href="../nutrition/recette-categorie.php">Surprenez-moi !</a>
        </div>

        <div class="category2">
            <a href="../nutrition/journal-alimentaire.php" class="last">Journal alimentaire</a>
        </div>

        <div class="category">Santé ></div>

        <div class="category2">
            <a href="../sante/conseils-sante.php">Conseils santé</a>
            <a href="../sante/sport-forme.php">Sport & Forme</a>
            <a href="../sante/ficheSante.php">Ma fiche santé</a>
            <a href="../sante/imc.php">Calculer mon IMC</a>
            <a href="../sante/calcul-pas.php">Calculer mes pas</a>
        </div>
        

    </section>

    <?php
    include '../general/footer.php';
    ?>
</body>
</html>