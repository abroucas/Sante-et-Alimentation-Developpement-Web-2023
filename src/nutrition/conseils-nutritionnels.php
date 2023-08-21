<?php session_start();

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conseils nutritionnels</title>
    <link rel="stylesheet" href="../css/conseils.css">
</head>
<body>
<?php
    include '../general/header.php';
    ?>

    <div class="titrePage"> Conseils nutritionnels </div>

    <div class="image">
    <img src="../../img/pyramidefinale.png" alt="Pyramide alimentaire">
    </div>

    <div class="contenu">


        <ul>
            <li>
                <div class="intro">
                    La pyramide alimentaire, image bien connue, représente schématiquement le contenu idéal de nos assiettes de la journée, aussi bien sur un plan qualitatif que quantitatif. <br/>
                    Nous allons vous proposer une analyse de cette pyramide et en retirer les grands principes du bien manger pour une bonne santé.
                </div>

            </li>
            <li> 
                <div class="titre"> L'eau </div>
                <div class="texte"> 
                    <div class="image">
                        <img src="../../img/eau.jpg" alt="eau">
                    </div>
                    Notre organisme est composé de 60% d’eau environ à l’âge adulte. La consommation, d’eau est donc capitale sans attendre la perception de sensation de soif. Il conviendra de diversifier les origines de l’eau absorbée : eaux minérales pétillantes plus riches en sel, les eaux minérales (avec une composition spécifique à chacune) mais aussi les eaux de source (dont la composition est plus équilibrée).<br/>
                    La quantité d’eau à consommer est évaluée à 1.5L par jour régulièrement au fil de la journée. Il conviendra d’augmenter cette quantité d’eau en été lorsqu’il fait bien chaud, ou lorsqu’on transpire lors d’un exercice physique et boire de préférence en dehors des repas pour ne pas diluer le bol alimentaire. <br/>
                </div>
            </li>
            <li>
                <div class="titre"> Les fruits et les légumes </div>
                <div class="texte">
                    <div class="image">
                        <img src="../../img/fruitsLegumes.jpeg" alt="fruits et légumes">
                    </div>
                    Ils doivent représenter la plus grosse portion de nos assiettes :  environ 50%. 
                    Ils vont apporter une large part de nutriments, vitamines et oligoéléments selon les modes de préparation. Si la cuisson est nécessaire il conviendra de choisir la cuisson à température la  plus basse pour conserver au mieux les nutriments. <br/>
                    Il faut consommer au minimum 300g de légumes par jour, c’est-à-dire 2 portions par jour. 
                    Pour les fruits, il est recommandé d’en consommer 250g par jour, soit l’équivalent de deux fruits par jour. <br/>
                </div>
            </li>
            <li>
                <div class="titre"> Les féculents </div>
                <div class="texte"> 
                    <div class="image">
                        <img src="../../img/feculent.jpeg" alt="féculents">
                    </div>
                    Ils doivent représenter 25 % de notre assiette. Cette catégorie est composée des pomme de terre mais aussi des céréales plutôt complètes (de type riz brun, quinoa, épeautre…), des pâtes. <br/>
                    Attention : le pain est aussi classé comme féculent. <br/>
                    Il est recommandé de consommer 125g de féculents cuits par repas. <br/>
                </div>
            </li>
            <li>
                <div class="titre"> Les protéines </div>
                <div class="texte">
                    <div class="image">
                        <img src="../../img/proteines.jpg" alt="protéines">
                    </div>
                    Elles doivent représenter 20% de nos assiettes. Elles se répartissent en 3 catégories : la catégorie des viandes, de la volaille, des œufs et du poisson, celle des légumineuses et enfin celle des produits laitiers. <br/>
                    Les protéines issues de la viande, de la volaille, des œufs ou encore du poisson doivent être consommé 1 à 2 fois par jour en alternance. Il est recommandé de consommer poisson et fruits de mer 1 à 2 fois par semaine. De plus, la consommation de viandes maigres telles que le poulet est à privilégier. Concernant la viande rouge, il est recommandé de ne pas en consommer plus de 300g par semaine.<br/>
                    Les légumineuses représentent une alternative intéressantes aux protéines notamment pour les personnes végétariennes mais aussi pour diversifier les sources de protéines et ainsi limiter notre consommation de protéines animales, plus riches en acides gras saturés.
                    Elles sont à consommer au moins 1 fois par semaine. <br/>
                    Il est recommandé de consommer 250 à 500g  de produits laitiers ou de leurs alternatives végétales enrichies en calcium, par jour. Pour information, 250mL de lait correspondent à deux yaourts natures de 125g chacun, à 100g de fromage frais ou à 35g de fromages à pâte dure.<br/>
                </div>
            </li>
            <li>
                <div class="titre"> Les matières grasses ajoutées et les fruits à coque et graines </div>
                <div class="texte">
                    <div class="image">
                        <img src="../../img/matGrasses.jpg" alt="matières grasses">
                    </div>
                    Il est recommandé de consommer 15 à 25g de matières grasses ajoutées et de fruits à coques et graines, par jour. <br/>
                    Même si toutes deux sont riches en lipides, elles ne sont pas interchangeables pour ce qui concerne leurs effets sur la santé. 
                    Il conviendra de bien différencier les matières grasses animales riches en acides gras saturés tels que le beurre, la crème ou encore la charcuterie, et les matières grasses végétales riches en acides gras insaturés comme l’huile de palme par exemple. <br/>
                    Il conviendra également de privilégier les huiles végétales telles que l’huile d’olive vierge, mais là encore il est recommandé de diversifier les huiles selon l’usage (colza, noix, raisin, coco…). <br/>
                </div>
            </li>
            <li>
                <div class="titre"> Les aliments non indispensables </div>
                <div class="texte">
                    <div class="image">
                        <img src="../../img/nonIndispensable.jpg" alt="aliments non indispensables">
                    </div>
                    Ils sont représentés à la pointe de la pyramide et aucune quantité n’est recommandée puisqu’ils ne sont pas indispensables. <br/>
                    Ils sont représentés par les produits gras, salés, sucrés, transformés, boissons sucrées ou alcoolisées… <br/>
                    Ils ne sont pas à diaboliser non plus, car ce sont des produits festifs et des produits plaisirs  mais  nous recommanderons une consommation, très parcimonieuse, de ces aliments. <br/>
                </div>
            </li>
            <li>
                <div class="titre"> L'exercice physique </div>
                <div class="texte">
                    <div class="image">
                        <img src="../../img/exericePhysique.jpg" alt="exercice physique">
                    </div>
                    Il est nécessaire de pratiquer un exercice physique tous les jours, au minimum entre 45 minutes et 1 heure. <br/>
                    Nous recommanderons de choisir son activité en fonction de ses goûts, de ses contraintes physiques, de  son âge et de son état de santé. <br/>
                    Les activités à privilégiées sont la marche (accessible au plus grand nombre), le vélo (pratique lors des déplacements et moins sollicitant pour les articulations) ou encore mieux la natation. <br/>
                    
                </div>
            </li>
            <li>
                <div class="titre"> Le sommeil </div>
                <div class="texte">
                    <div class="image">
                        <img src="../../img/sommeil.jpg" alt="sommeil">
                    </div>
                    Depuis quelques années nos connaissances sur le sommeil s’améliorent et il est indispensable de savoir qu’il n’y a pas de bonne santé sans bon sommeil. <br/>
                    En moyenne, une nuit de sommeil doit durer entre 6 et 8 heures.
                </div>
            </li>

        </ul>
    </div>
    
    <?php
    include '../general/footer.php';
    ?>
</body>
</html>