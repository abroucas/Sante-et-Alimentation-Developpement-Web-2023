<?php session_start();

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sport et Forme</title>
    <link rel="stylesheet" href="../css/conseils.css">
</head>
<body>
<?php
    include '../general/header.php';
    ?>
    <div class="titrePage"> Conseils Sport & Forme </div>

    <div class="image">
        <img src="../../img/sport.jpg" alt="Sport et santé">
    </div>
    <div class="contenu">
        <ul>
            <li>
                <div class="titre"> La marche </div>
                <div class="texte">
                    <div class="image">
                        <img src="../../img/marche.jpeg" alt="marche">
                    </div>
                    Serait-ce le sport idéal ?<br/>
                    Ce sport présente fort peu de contre-indication car des adaptations sont toujours possibles.
                    Ce sport peut être pratiqué jusqu'à un âge avancé en minimisant les risques de se blesser.
                    La marche rapide  (7 km/heure pour les hommes et 5 km/heure pour les femmes) pratiquée à raison de 30 à 45 minutes par jour est l’activité idéale pour la santé.<br/><br/>
                    <b>Ses différents bienfaits :</b><br/>
                    <ul>
                        <li>Renforce la fonction cardiaque</li>
                        <li>Renforce les capacités respiratoires</li>
                        <li>Augmente la masse musculaire</li>
                        <li>Diminue la masse grasse</li>
                        <li>Renforce l'estime de soi</li>
                    </ul><br/>
                    Évitez toutefois ce sport si votre IMC dépasse 28 pour ne pas sensibiliser votre dos et vos articulations ou si vous présentez des pathologies articulaires des membres inférieurs (hanche, genoux, chevilles, pieds).<br/><br/>

                </div>
            </li>
            <li>
                <div class="titre"> Le vélo ou le cyclisme</div>
                <div class="texte">
                    <div class="image">
                        <img src="../../img/cyclisme.jpg" alt="cyclisme">
                    </div>
                    Ce sport peut aussi être pratiqué par le plus grand nombre jusqu’à un âge avancé sous  une multiplicité de forme : activité physique occasionnelle ou quotidienne, moyen de transport, sport d’endurance individuel ou en équipe, VTT… Il y en a pour tous les goûts.<br/>
                    C’est une activité d’endurance qui fait moins travailler les muscles et l’appareil locomoteur que la course mais qui de ce fait est particulièrement recommandé pour les séniors ou les personnes porteuses de pathologies articulaires.<br/>
                    Pour avoir des effets positifs, il faut le pratiquer au moins 30 minutes par jour ou 3 heures par semaine.<br/><br/>
                    <b>Ses différents bienfaits : </b> <br/>
                    <ul>
                        <li> Prévention des maladies cardiovasculaires</li>
                        <li>Amélioration de la capacité respiratoire</li>
                        <li>Prévention de l'hypertension artérielle</li>
                        <li>Meilleur contrôle des taux sanguins de cholestérol</li>
                        <li>Renforcement musculaire</li>
                        <li>Prévention du surpoids en augmentant la dépense énergétique</li>
                        <li>Lutte contre le stress</li>
                    </ul><br/>
                    Evitez toutefois ce sport si vous présentez une maladie cardiovasculaire non stabilisée, de l’arthrose du genou ou un IMC > 28.<br/><br/>
                    <b> <u>Attention :</u> Pratiqué sans protection, une chute à vélo peut avoir des conséquences dramatiques, voire entraîner la mort ! </b><br/><br/>
                </div>
            </li>
            <li>
                <div class="titre">La natation </div>
                <div class="texte">
                    <div class="image">
                        <img src="../../img/natation.jpg" alt="natation">
                    </div>
                    C’est le sport parfait recommandé en premier lieu par tout le corps médical.<br/>
                    La natation est un sport très complet qui fait travailler l'ensemble du corps : les bras, les jambes ou encore les abdominaux. 
                    Pratiqué en milieu aquatique, la gravité se trouve ainsi réduite, ce sport est donc peu traumatisant pour les articulations.<br/><br/>
                    <b> Ses différents bienfaits : </b><br/>
                    <ul>
                        <li>Renforcement cardio respiratoire</li>
                        <li>Renforcement musculaire en douceur</li>
                    </ul><br/>
                    Evitez ce sport  lors d’un épisode infectieux pulmonaire ou d’une pathologie dermatologique en cours.<br/>
                    Certaines pathologies présentant un risque de perte de connaissance nécessitent une autorisation médicale pour la pratique de la natation.<br/><br/>
                    
                </div>
            </li>
            <li>
                <div class="titre">Le yoga et le Pilate</div>
                <div class="texte">
                    <div class="image">
                        <img src="../../img/yoga.jpg" alt="yoga">
                    </div>
                    C’est un sport qui peut se pratiquer à tous âges.
                    Le yoga est une discipline intéressante pour développer l'équilibre et les muscles posturaux.
                    Ce n’est pas à proprement parler un sport de dépense énergétique mais il favorise l ’acquisition et le développement de la souplesse musculaire des membres inférieurs et supérieurs.<br/><br/>
                    <b> Ses différents bienfaits : </b><br/>
                    <ul>
                        <li>Renforcement des muscles haubans et mobilisateurs</li>
                        <li>Amélioration de la gestion de la fonction respiratoire</li>
                        <li>Effet bénéfique sur la gestion des émotions et le stress</li>
                    </ul><br/><br/>
                </div>
            </li>
        </ul>
    </div>
    
    <?php
    include '../general/footer.php';
    ?>
</body>
</html>