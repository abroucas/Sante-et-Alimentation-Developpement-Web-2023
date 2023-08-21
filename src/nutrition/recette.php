<?php session_start();
require_once '../profil/config.php';

/* Recuperation de la recette passee en GET*/
if(!isset($_GET['id'])){
    $count=0;
}
else{
    $prepaRecette = $db->prepare('SELECT * FROM Recette WHERE id="' . $_GET["id"] .'";');
    $count=1;
}

//On verifie que la requette n'est pas vide
if($count){
    $prepaAliments = $db->prepare('SELECT a.nom, q.nbKg FROM Aliment a,QuantiteAliment q WHERE q.idAliment=a.id AND q.idRecette=' . $_GET["id"] . ';');
}

if(isset($prepaAliments) && isset($prepaRecette)){
    $prepaAliments->execute();
    $aliments = $prepaAliments->fetchAll();
    $prepaRecette->execute();
    $recette = $prepaRecette->fetchAll();
}
else{
    $count=0;
}

if(count($aliments) <= 0 || count($recette) <= 0){
    $count = 0;
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="../css/recettes.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>Recettes</title>
</head>
<body>

<?php
    include '../general/header.php';
    ?>
    <div class="recette-titre"><?php echo $recette[0]["nom"] ?></div>

    <section class="recettes">

        <div class="container1">

            <div class="container7">
                <div class="preparation-titre">Préparation</div>
                <i class="fa-solid fa-clock fa-lg" style="color : #df9a38"></i>
            </div>
           
            <div class="container3">
                <div class="container4">
                    <div class="temps">temps de préparation :</div>
                    <div class="temps">temps de cuisson :</div>
                </div>
                <div class="container5">
                    <div class="temps"><?php echo $recette[0]["tpsPrepa"] ?> min</div>
                    <div class="temps"><?php echo $recette[0]["tpsCuisson"] ?> min</div>
                </div>
            </div>    
            
            <div class="container7">
                <div class="ingredient-titre">Ingrédients</div>
                <i class="fa-solid fa-utensils fa-lg" style="color : #df9a38"></i>
            </div>
            <div class="container8">
                <div class="">Nombre de personnes :</div>
                <div class="nbPersonne"><?php echo $recette[0]["nbPersonne"] ?></div>
            </div>
            <?php
                foreach($aliments as $aliment){
                    /*$prepaQuantite = $db->prepare('SELECT nbKg FROM QuantiteAliment WHERE idAliment=' . $aliment["id"] . ';');
                    $prepaQuantite->execute();
                    $quantite = $prepaQuantite->fetchAll();*/
            ?>
                 <div><?php echo $aliment["nom"] . " : " . $aliment["nbKg"] . $aliment["type"] . "</div>";
                        }
                        
            ?>

        </div>

        <div class="container2">
            <img src="../../img/crepes.jpg" alt="">

            <?php 
                        echo $recette[0]["etape"];
                    ?>
        </div>

    </section>
    <?php
    include '../general/footer.php';
    ?>
</body>
</html>