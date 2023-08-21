<?php session_start();
/*$urlSante = "https://newsapi.org/v2/top-headlines?country=fr&category=health&apiKey=f95b7b6b438542ee83a5811e391e5442";
$urlSport = "https://newsapi.org/v2/top-headlines?country=fr&category=sports&apiKey=f95b7b6b438542ee83a5811e391e5442";
$articlesSante = file_get_contents($urlSante);
$articlesSport = file_get_contents($urlSport);
if($articlesSante != false){
    $articlesSante = json_decode($articlesSante);
    $sante = true;
}
else{
    $sante = false;
}
if($articlesSport != false){
    $articlesSport = json_decode($articlesSport);
    $sport = true;
}
else{
    $sport=false;
}*/
//En javascript, memoriser le nombre d'articles sport et sante pour l'envoyer dans la requete AJAX pour ne pas avoir d'articles qui se repetent
//Il faut ouvrir manuellement les liens sinon les requetes ne marchent pas
//Dans les requetes, il n'y a pas d'image
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualités</title>
    <link rel="stylesheet" href="../css/actualite.css">
</head>
<body>
<?php
    include '../general/header.php';
    ?>
    <main>
        <div class="fil-actualite">
            <div class="fil-actualite-articles">
                
            <!--
            <?php/*
            if($sante){
                for($i=0;$i<2;$i++){
                echo('<div class="article"><a class="article-lien" href="' . $articlesSante->articles[$i]->url . '" target=blank>');
                echo('<h2 class="article-nom">' .  $articlesSante->articles[$i]->source->name . ' :</h2>');
                echo('<div class="article-img" style="background-image: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2)),url(../../img/lait-infantile.jpg);"></div>');
                echo('<h2 class="article-titre">' .  $articlesSante->articles[$i]->author . '</h2>');
                echo(' <div class="article-extrait-container"> <p class="article-extrait">' .  $articlesSante->articles[$i]->title . '[...]</p></div></a></div>');
                }
            }
            if($sport){
                echo('<div class="article"><a class="article-lien" href="' . $articlesSport->articles[$i]->url . '" target=blank>');
                echo('<h2 class="article-nom">' .  $articlesSport->articles[$i]->source->name . ' :</h2>');
                echo('<div class="article-img" style="background-image: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2)),url(../../img/lait-infantile.jpg);"></div>');
                echo('<h2 class="article-titre">' .  $articlesSport->articles[$i]->author . '</h2>');
                echo(' <div class="article-extrait-container"> <p class="article-extrait">' .  $articlesSport->articles[$i]->title . '[...]</p></div></a></div>');
            }*/
            ?>
            
        -->
            
            
            
            <!--
            
                <div class="article">
                    <a class="article-lien" href="https://www.lanutrition.fr/laits-infantiles-comment-lindustrie-detourne-les-parents-de-lallaitement">
                        <h2 class="article-nom">Laits infantiles :</h2>
                        <div class="article-img" style="background-image: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2)),url(../../img/lait-infantile.jpg);"></div>
                        <h2 class="article-titre">Comment l'industrie détourne les parents de l'allaitement</h2>
                        <div class="article-extrait-container">
                            <p class="article-extrait">L’allaitement offre d’importants avantages aux bébés et aux jeunes enfants, car il réduit les risques d’infection, ainsi que les taux d’obésité et de maladies chroniques plus tard dans la vie. Pourtant, d’après l’OMS, moins de la moitié des nourrissons de moins de 6 mois dans le monde sont exclusivement allaités.[...]</p>
                        </div>
                        </a>
                </div>
                <div class="article">
                    <a class="article-lien" href="https://www.futura-sciences.com/sante/actualites/depression-sport-solution-soigner-depression-chez-ados-104130/">
                        <h2 class="article-nom">Futura Science</h2>
                        <div class="article-img" style="background-image: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2)),url(../../img/actu-sport.jpg);"></div>
                        <h2 class="article-titre">Le sport, une solution pour soigner la dépression chez les ados ?</h2>
                        <div class="article-extrait-container">
                            <p class="article-extrait">Et si l’activité physique pouvait remédier aux symptômes dépressifs chez les adolescents, à la place ou en complément d’autres thérapies ? C’est ce qu’a essayé de démontrer une équipe de chercheurs en réalisant une méta-analyse de 21 études.[...]</p>
                        </div>
                        </a>
                </div>
                <div class="article">
                    <a class="article-lien" href="https://www.passeportsante.net/fr/Solutions/PlantesSupplements/Fiche.aspx?doc=creatine_ps">
                        <h2 class="article-nom">Passeport Santé</h2>
                        <div class="article-img" style="background-image: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2)),url(../../img/actu-creatine.jpg);"></div>
                        <h2 class="article-titre">Créatine : à quoi sert cette protéine pour le muscle ?</h2>
                        <div class="article-extrait-container">
                            <p class="article-extrait">La créatine est un acide aminé non essentiel de l'alimentation, que l’on trouve principalement dans la viande, la volaille et le poisson, à raison d'environ 5 g par kilo. L’organisme la produit en fonction de ses besoins (de 1 g à 2 g par jour, estime-t-on), à partir des aliments protéinés consommés. Elle se retrouve à 95 % dans les muscles squelettiques. Elle est synthétisée dans les reins, le foie et le pancréas.[...]</p>
                        </div>
                        </a>
                </div>-->
                
            </div>
            <div class="fil-actualite-voir-plus-container">
                    <!--<button class="fil-actualite-voir-plus">+</button>-->
                </div>
        </div>
    </main>
    <?php
    include '../general/footer.php';
    ?>
    <script src="../js/actualite.js"></script>
</body>
</html>