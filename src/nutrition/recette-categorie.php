
<?php session_start();
try{
    $db = new PDO('mysql:host=localhost;dbname=nutritionEtSante;charset=utf8','root','$tareliKer9#');
}
catch (Exception $e){
    die('Erreur : ' . $e->getMessage());
}

/* Recuperation des recettes qui correspondent a la categorie demandee*/
if(!isset($_GET['cat']) || strcmp($_GET['cat'],"")==0){
    $categorie = $db->prepare('SELECT id,nom,tpsPrepa,tpsCuisson,lienImage FROM Recette;');
}
else{
    $categorie = $db->prepare('SELECT id,nom,tpsPrepa,tpsCuisson,lienImage FROM Recette WHERE categorie="' . $_GET["cat"] .'";');
}

$categorie->execute();
$recettes = $categorie->fetchAll();

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recettes/Catégories</title>

    <link rel="stylesheet" href="../css/recette-categorie.css">

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
        <div class="recette-categorie-titre">
            <h1>
                <?php 
                if(count($recettes)>0){
                //Affichage du titre en fonction de la selection faites (methode GET) 
                if(strcmp($_GET['cat'], 'entree') == 0){
                    $cat = "Nos Entrées";
                }
                elseif(strcmp($_GET['cat'], 'plat') == 0){
                    $cat = "Nos Plats";
                }
                elseif(strcmp($_GET['cat'], 'dessert') == 0){
                    $cat = "Nos Desserts";
                }
                elseif(strcmp($_GET['cat'], 'boisson') == 0){
                    $cat = "Nos Boissons";
                }
                elseif(strcmp($_GET['cat'], 'aperitif') == 0){
                    $cat = "Nos Apéritifs";
                }
                else{
                    $cat = "Toutes nos recettes";
                }}
                echo($cat);
                ?>
            </h1>
        </div>
        <?php
        if(count($recettes)>0){
        ?>
        <div class="container">
            <div class="recettes-liste">

            <?php
                foreach($recettes as $recette){?>
                    <div class="recettes-element">
                        <a href="recette.php?id=<?php echo $recette['id']; ?>" class="recettes-element-link">
                            <!--<img class="recettes-element-img" src="../../img/<?php //echo $recette['lienImage'];?>" alt="image-element-categories">-->
                            <div class="recettes-element-img" style="background-image:url(../../img/<?php echo $recette['lienImage'];?>"></div>
                            <div class="recettes-element-filtre">
                            <h2>
                                <?php
                                    echo $recette['nom'];
                                ?>
                            </h2>
                            <div class="recette-element-details">
                                <span class="element-details-plus">
                                    <ion-icon class="element-details-logo" name="timer-outline"></ion-icon>
                                    <p>préparation 
                                        <?php
                                            echo $recette['tpsPrepa'];
                                        ?>
                                        min
                                    </p>
                                </span>
                                <span class="element-details-barre"></span>
                                <span class="element-details-plus">
                                    <ion-icon class="element-details-logo" name="flame-outline"></ion-icon>
                                    <p>cuisson 
                                        <?php
                                            echo $recette['tpsCuisson'];
                                        ?>
                                        min
                                    </p>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>

                <?php
                }}
                else{?>
                    <div class="recette-categorie-titre">Nous sommes désolés, nous n'avons pas pu récupérer les recettes demandées <br><br>
                    <a href="../general/accueil.php">Retourner à l'accueil</a></div>
                <?php
                }
                ?>
                <!--<div class="recettes-element">
                    <a href="../nutrition/recette.php" class="recettes-element-link">
                        <img class="recettes-element-img" src="../../img/fondant-chocolat.jpg"
                            alt="image-element-categories">
                        <div class="recettes-element-filtre">
                            <h2>Fondant au chocolat</h2>
                            <div class="recette-element-details">
                                <span class="element-details-plus">
                                    <ion-icon class="element-details-logo" name="timer-outline"></ion-icon>
                                    <p>préparation 45min</p>
                                </span>
                                <span class="element-details-barre"></span>
                                <span class="element-details-plus">
                                    <ion-icon class="element-details-logo" name="flame-outline"></ion-icon>
                                    <p>cuisson 30min</p>
                                </span>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="recettes-element">
                    <a href="../nutrition/recette.php" class="recettes-element-link">
                        <img class="recettes-element-img" src="../../img/fondant-chocolat.jpg"
                            alt="image-element-categories">
                        <div class="recettes-element-filtre">
                            <h2>Fondant au chocolat</h2>
                            <div class="recette-element-details">
                                <span class="element-details-plus">
                                    <ion-icon class="element-details-logo" name="timer-outline"></ion-icon>
                                    <p>préparation 45min</p>
                                </span>
                                <span class="element-details-barre"></span>
                                <span class="element-details-plus">
                                    <ion-icon class="element-details-logo" name="flame-outline"></ion-icon>
                                    <p>cuisson 30min</p>
                                </span>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="recettes-element">
                    <a href="../nutrition/recette.php" class="recettes-element-link">
                        <img class="recettes-element-img" src="../../img/fondant-chocolat.jpg"
                            alt="image-element-categories">
                        <div class="recettes-element-filtre">
                            <h2>Fondant au chocolat</h2>
                            <div class="recette-element-details">
                                <span class="element-details-plus">
                                    <ion-icon class="element-details-logo" name="timer-outline"></ion-icon>
                                    <p>préparation 45min</p>
                                </span>
                                <span class="element-details-barre"></span>
                                <span class="element-details-plus">
                                    <ion-icon class="element-details-logo" name="flame-outline"></ion-icon>
                                    <p>cuisson 30min</p>
                                </span>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="recettes-element">
                    <a href="../nutrition/recette.php" class="recettes-element-link">
                        <img class="recettes-element-img" src="../../img/fondant-chocolat.jpg"
                            alt="image-element-categories">
                        <div class="recettes-element-filtre">
                            <h2>Fondant au chocolat</h2>
                            <div class="recette-element-details">
                                <span class="element-details-plus">
                                    <ion-icon class="element-details-logo" name="timer-outline"></ion-icon>
                                    <p>préparation 45min</p>
                                </span>
                                <span class="element-details-barre"></span>
                                <span class="element-details-plus">
                                    <ion-icon class="element-details-logo" name="flame-outline"></ion-icon>
                                    <p>cuisson 30min</p>
                                </span>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="recettes-element">
                    <a href="../nutrition/recette.php" class="recettes-element-link">
                        <img class="recettes-element-img" src="../../img/fondant-chocolat.jpg"
                            alt="image-element-categories">
                        <div class="recettes-element-filtre">
                            <h2>Fondant au chocolat</h2>
                            <div class="recette-element-details">
                                <span class="element-details-plus">
                                    <ion-icon class="element-details-logo" name="timer-outline"></ion-icon>
                                    <p>préparation 45min</p>
                                </span>
                                <span class="element-details-barre"></span>
                                <span class="element-details-plus">
                                    <ion-icon class="element-details-logo" name="flame-outline"></ion-icon>
                                    <p>cuisson 30min</p>
                                </span>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="recettes-element">
                    <a href="../nutrition/recette.php" class="recettes-element-link">
                        <img class="recettes-element-img" src="../../img/fondant-chocolat.jpg"
                            alt="image-element-categories">
                        <div class="recettes-element-filtre">
                            <h2>Fondant au chocolat</h2>
                            <div class="recette-element-details">
                                <span class="element-details-plus">
                                    <ion-icon class="element-details-logo" name="timer-outline"></ion-icon>
                                    <p>préparation 45min</p>
                                </span>
                                <span class="element-details-barre"></span>
                                <span class="element-details-plus">
                                    <ion-icon class="element-details-logo" name="flame-outline"></ion-icon>
                                    <p>cuisson 30min</p>
                                </span>
                            </div>
                        </div>
                    </a>
                </div>-->
            </div>
        </div>
    </main>

    <?php
    include '../general/footer.php';
    ?>

    <!-- utilisation d'icones -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>