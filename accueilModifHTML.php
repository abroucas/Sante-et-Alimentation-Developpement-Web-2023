<?php session_start();

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <link rel="stylesheet" href="../css/accueil.css">
</head>
<body>
<?php
    include '../general/header.php';
    ?>
    <div class="hautDePage">
        <div class="titrePage">
            <div class="texte">

                Rejoignez l'aventure ! 
                
            </div>
            <div class="button">
                <input type="submit" value="Inscrivez-vous ! " onclick="window.location.href = '../profil/inscription.php'" >
            </div>
        </div>

        <div class="image">
            <img src="../../img/logoAccueilTexte.png" alt="logo">
        </div>
    </div>
    <div class="contenu">
        <div class="citation">
            <i>« L'alimentation saine est ce qui nous permet de vivre au maximum de notre potentiel. » </i> <br/>- Michelle Obama -
        </div>
        <div class="sante">
            <div class="titre">
                Découvrez comment mieux appréhender votre santé ! 
            </div>
            <div class="vignettes">
                <div class="ligne">

                
                    <div class="item">
                        <div class="petiteImage">
                            <a href="../nutrition/journal-alimentaire.php">
                                <img src="../../img/ficheSanteAccueil.png" alt="Ma fiche santé">
                            </a>
                        </div>
                        <div class="accroche">
                            <b>Commencez votre journal alimentaire</b><br/><br/>
                        </div>
                        

                    </div>
                    <div class="item">
                        <div class="petiteImage">
                            <a href="../sante/imc.php">
                                <img src="../../img/IMCAccueil.png" alt="Calcul de mon IMC">
                            </a>
                        </div>
                        <div class="accroche">
                            <b>Calculez votre IMC</b><br/><br/>
                        </div>
                       
                        
                    </div>
                    <div class="item">
                        <div class="petiteImage">
                            <a href="../sante/calcul-pas.php">
                                <img src="../../img/pasAccueil.png" alt="Calcul de mes pas">
                            </a>
                        </div>
                        <div class="accroche">
                            <b>Calculez votre nombre de pas </b><br/><br/>
                        </div>
                       
                        
                    </div>
                </div>
                <div class="ligne">
                    <div class="item">
                        <div class="petiteImage">
                            <a href="../sante/conseils-sante.php">
                                <img src="../../img/conseilsSanteAccueil.png" alt="Conseils santé">
                            </a>
                        </div>
                        <div class="accroche">
                            <b>Découvrez les conseils santé de nos experts</b><br/><br/>
                        </div>
                       
                        
                    </div>
                    <div class="item">
                        <div class="petiteImage">
                            <a href="../sante/sport-forme.php">
                                <img src="../../img/sportAccueil.png" alt="Sport et forme">
                            </a>
                        </div>
                        <div class="accroche">
                            <b>Trouvez le sport qui vous correspond</b><br/><br/>
                        </div>
                       
                        
                    </div>
                </div>
            </div>

        </div>

        <div class="nutrition">
            <div class="titre">
                Découvrez tout nos conseils en nutrition ! 
            </div>
            <div class="vignettes">
                

                <div class="ligne">
                    <div class="item">
                        <div class="petiteImage">
                            <a href="../nutrition/accueil-recettes.php">
                                <img src="../../img/recettesAccueil.png" alt="Recettes">
                            </a>
                        </div>
                        <div class="accroche">
                            <b>Découvrez de délicieuses recettes</b><br/><br/>
                        </div>
                      
                        
                    </div>

                    <div class="item">
                        <div class="petiteImage">
                            <a href="../nutrition/journal-alimentaire.php">
                                <img src="../../img/journalAccueil.png" alt="Journal alimentaire">
                            </a>
                        </div>
                        <div class="accroche">
                            <b>Débutez votre journal alimentaire</b><br/><br/>
                        </div>
                        
                        
                    </div>

                </div>

                <div class="ligne">
                    <div class="item">
                        <div class="petiteImage">
                            <a href="../nutrition/conseils-nutritionnels.php">
                                <img src="../../img/conseilsNutritionnelsAccueil.png" alt="Pyramide alimentaire">
                            </a>
                        </div>
                        <div class="accroche">
                            <b>Des conseils pour équilibrer vos repas</b><br/><br/>
                        </div>
                       
                        
                    </div>

                    <div class="item">
                        <div class="petiteImage">
                            <a href="../nutrition/regime-alimentaire.php">
                                <img src="../../img/regimeAccueil.png" alt="Régimes alimentaires">
                            </a>
                        </div>
                        <div class="accroche">
                            <b>Le régime alimentaire qui vous correspond</b><br/><br/>
                        </div>
                        
                        
                    </div>

                </div>


            </div>

        </div>

    </div>
    <?php
    include '../general/footer.php';
    ?>
</body>
</html>