
<?php session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../css/ficheSante.css">
    <title>Ma fiche santé</title>
</head>
<body>
    <?php
    include '../general/header.php';
    ?>
    <div class="section">
        <div class="container">
            <div class="title">Fiche Santé</div>
            <form action="#">
                <div class="user-details">
                    <!-- <div class="input-box">
                        <span class="details">Nom</span>
                        <input type="text" placeholder="Entrez votre nom" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Prénom</span>
                        <input type="text" placeholder="Entrez votre prénom" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Date de naissance</span>
                        <input type="date" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Adresse email</span>
                        <input type="text" placeholder="Entrez votre adresse email" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Mot de passe</span>
                        <input type="text" placeholder="Mot de passe" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Confirmation mot de passe</span>
                        <input type="text" placeholder="Confirmez votre mdp" required>
                    </div> -->
                </div>
                <div class="titre-puce">Avez vous des maladies ?</div>
                <div class="puce-details">
                    <input type="radio" name="diabete" id="dot-1">
                    <input type="radio" name="diabete" id="dot-2">
                    <span class="puce-title">Diabète</span>
                    <div class="category">
                        <label for="dot-1">
                            <span class="dot one"></span>
                            <span class="diabete">Oui</span>
                        </label>
                        <label for="dot-2" class="cont">
                            <span class="dot two"></span>
                            <div class="diabete">Non</div>
                        </label>
                    </div>
                </div>
                <div class="puce-details">
                    <input type="radio" name="Cholésterol" id="dot-3">
                    <input type="radio" name="Cholésterol" id="dot-4">
                    <span class="puce-title">Cholésterol</span>
                    <div class="category">
                        <label for="dot-3">
                            <span class="dot one"></span>
                            <span class="diabete">Oui</span>
                        </label>
                        <label for="dot-4" class="cont">
                            <span class="dot two"></span>
                            <span class="diabete">Non</span>
                        </label>
                    </div>
                </div>
                <div class="puce-details">
                    <input type="radio" name="Thyroide" id="dot-5">
                    <input type="radio" name="Thyroide" id="dot-6">
                    <span class="puce-title">Thyroïde</span>
                    <div class="category">
                        <label for="dot-5">
                            <span class="dot one"></span>
                            <span class="diabete">Oui</span>
                        </label>
                        <label for="dot-6" class="cont">
                            <span class="dot two"></span>
                            <span class="diabete">Non</span>
                        </label>
                    </div>
                </div>
                <div class="puce-details">
                    <input type="radio" name="cancer" id="dot-7">
                    <input type="radio" name="cancer" id="dot-8">
                    <span class="puce-title">Cancer</span>
                    <div class="category">
                        <label for="dot-7">
                            <span class="dot one"></span>
                            <span class="diabete">Oui</span>
                        </label>
                        <label for="dot-8" class="cont">
                            <span class="dot two"></span>
                            <span class="diabete">Non</span>
                        </label>
                    </div>
                </div>
                <div class="puce-details">
                    <input type="radio" name="TroublesDigestifs" id="dot-9">
                    <input type="radio" name="TroublesDigestifs" id="dot-10">
                    <span class="puce-title">Troubles digestifs</span>
                    <div class="category">
                        <label for="dot-9">
                            <span class="dot one"></span>
                            <span class="diabete">Oui</span>
                        </label>
                        <label for="dot-10" class="cont">
                            <span class="dot two"></span>
                            <span class="diabete">Non</span>
                        </label>
                    </div>
                </div>
                <div class="puce-details">
                    <input type="radio" name="maladieCardique" id="dot-11">
                    <input type="radio" name="maladieCardique" id="dot-12">
                    <span class="puce-title">Maladies cardiaques</span>
                    <div class="category">
                        <label for="dot-11">
                            <span class="dot one"></span>
                            <span class="diabete">Oui</span>
                        </label>
                        <label for="dot-12" class="cont">
                            <span class="dot two"></span>
                            <span class="diabete">Non</span>
                        </label>
                    </div>
                </div>
                <div class="puce-details">
                    <input type="radio" name="Hypertension" id="dot-13">
                    <input type="radio" name="Hypertension" id="dot-14">
                    <span class="puce-title">Hypertension</span>
                    <div class="category">
                        <label for="dot-13">
                            <span class="dot one"></span>
                            <span class="diabete">Oui</span>
                        </label>
                        <label for="dot-14" class="cont">
                            <span class="dot two"></span>
                            <span class="diabete">Non</span>
                        </label>
                    </div>
                </div>
                <div class="titre-puce2">Consommation personnelle</div>
                <div class="puce2-details">
                    <input type="radio" name="ConsoPerso" id="dot-15">
                    <input type="radio" name="ConsoPerso" id="dot-16">
                    <input type="radio" name="ConsoPerso" id="dot-17">
                    <span class="puce2-title">Tabac</span>
                    <div class="category">
                        <label for="dot-15">
                            <span class="dot one"></span>
                            <span class="diabete">Jamais</span>
                        </label>
                        <label for="dot-16" class="cont2">
                            <span class="dot two"></span>
                            <span class="diabete">Occasionnelement</span>
                        </label>
                        <label for="dot-17" class="cont2">
                            <span class="dot three"></span>
                            <span class="diabete">Régulièrement</span>
                        </label>
                    </div>
                </div>
                <div class="puce2-details">
                    <input type="radio" name="alcool" id="dot-18">
                    <input type="radio" name="alcool" id="dot-19">
                    <input type="radio" name="alcool" id="dot-20">
                    <span class="puce2-title">Alcool</span>
                    <div class="category">
                        <label for="dot-18">
                            <span class="dot one"></span>
                            <span class="diabete">Jamais</span>
                        </label>
                        <label for="dot-19" class="cont2">
                            <span class="dot two"></span>
                            <span class="diabete">Occasionnelement</span>
                        </label>
                        <label for="dot-20" class="cont2">
                            <span class="dot three"></span>
                            <span class="diabete">Régulièrement</span>
                        </label>
                    </div>
                </div>
                <div class="puce2-details">
                    <input type="radio" name="drogue" id="dot-21">
                    <input type="radio" name="drogue" id="dot-22">
                    <input type="radio" name="drogue" id="dot-23">
                    <span class="puce2-title">Drogue</span>
                    <div class="category">
                        <label for="dot-21">
                            <span class="dot one"></span>
                            <span class="diabete">Jamais</span>
                        </label>
                        <label for="dot-22" class="cont2">
                            <span class="dot two"></span>
                            <span class="diabete">Occasionnelement</span>
                        </label>
                        <label for="dot-23" class="cont2">
                            <span class="dot three"></span>
                            <span class="diabete">Régulièrement</span>
                        </label>
                    </div>
                </div>


                <div class="button">
                    <input type="submit" value="Envoyer">
                </div>
            </form>
        </div>
    </div>
    
    <?php
    include '../general/footer.php';
    ?>

</body>
</html>