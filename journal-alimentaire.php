<?php session_start();

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Journal Alimentaire</title>
    <link rel="stylesheet" href="../css/journal-alimentaire.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">


</head>
<body>
<?php
    include '../general/header.php';
    ?>
    <div class="titrePage"> Mon Journal Alimentaire </div>
    <div class="contenu">


        <div class="journal">

            <div class="explication">
                Pour chacun de vos repas, entrez le nom des aliments consommés dans le champ de recherche adapté.<br/>
                Puis, rentrez la quantité consommée pour chaque aliment en grammes ou en millilitres.<br/>
                Cliquez sur le bouton "Enregistrer" pour sauvegarder les aliments de votre repas.<br/>
                <br/>

                <b>Comment puis-je renseigner les aliments consommés la veille ou un autre jour qu'aujourd'hui ? </b>
                <br/><br/>
                Le calendrier situé en haut à gauche de l'écran sur ordinateur permet de sélectionner un jour au choix.<br/>
                En cliquant sur le jour choisi, votre journal alimentaire en ligne affiche les aliments consommés pour ce jour et non plus pour aujourd'hui. <br/>
                Afin d'enregistrer les données saisies, il est nécessaire de créer un compte gratuit.<br/>
            </div>

            <div class="input-box">
                        <span class="details">Date du jour : <br/><br/><br/> </span>
                        <input type="date" name="date" id="date" required>
                    </div>
            <div class="button">
                        <input type="submit" value="Enregistrer">
            </div>

            <div class="entree_repas">
                <div class="libelle">
                    <div class="image">
                        <img src="../../img/petitDej.jpg" alt="petit-déjeuner">
                    </div>
                    <div class="titre"> Petit-déjeuner</div>
                </div>
                <form action="#">
                    <div class="repas">
                        <div class="champ">
                            <span class="aliment"> Ajouter un aliment consommé : </span>
                            <input type="text" placeholder="ex : céréales">
                        </div>
                        <div class="champ">
                            <span class="aliment"> Ajouter la quantité consommée : </span>
                            <input type="number" placeholder="ex : 100">
                        </div>
                     
                    </div>
                    <div class="fil-actualite-voir-plus-container">
                        <button class="fil-actualite-voir-plus">+</button>
                    </div>
                    <div class="button">
                        <input type="submit" value="Enregistrer">
                    </div>
                </form>



            </div>

            <div class="entree_repas">
                <div class="libelle">
                    <div class="image">
                        <img src="../../img/dej.jpg" alt="déjeuner">
                    </div>
                    <div class="titre"> Déjeuner</div>
                </div>
                <form action="#">
                    <div class="repas">
                        <div class="champ">
                            <span class="aliment"> Ajouter un aliment consommé : </span>
                            <input type="text" placeholder="ex : poulet">
                        </div>
                        <div class="champ">
                            <span class="aliment"> Ajouter la quantité consommée : </span>
                            <input type="number" placeholder="ex : 100">
                        </div>
                     
                    </div>
                     <div class="fil-actualite-voir-plus-container">
                        <button class="fil-actualite-voir-plus">+</button>
                    </div>
                    <div class="button">
                        <input type="submit" value="Enregistrer">
                    </div>
                </form>



            </div>


            

            <div class="entree_repas">
                <div class="libelle">
                    <div class="image">
                        <img src="../../img/diner.jpg" alt="dîner">
                    </div>
                    <div class="titre"> Dîner</div>
                </div>
                <form action="#">
                    <div class="repas">
                        <div class="champ">
                            <span class="aliment"> Ajouter un aliment consommé : </span>
                            <input type="text" placeholder="ex : riz">
                        </div>
                        <div class="champ">
                            <span class="aliment"> Ajouter la quantité consommée : </span>
                            <input type="number" placeholder="ex : 100">
                        </div>
                 
                    </div>
                     <div class="fil-actualite-voir-plus-container">
                        <button class="fil-actualite-voir-plus">+</button>
                    </div>
                    <div class="button">
                        <input type="submit" value="Enregistrer">
                    </div>
                </form>



            </div>

            
        </div>

     
    </div>

    <?php
    include '../general/footer.php';
    ?>
  
</body>
</html>