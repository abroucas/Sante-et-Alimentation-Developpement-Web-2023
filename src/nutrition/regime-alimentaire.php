<?php session_start();

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Régimes alimentaires </title>
    <link rel="stylesheet" href="../css/conseils.css">
</head>
<body>
<?php
    include '../general/header.php';
    ?>

    <div class="titrePage"> Les différents régimes alimentaires</div>
    <div class="image">
        <img src="../../img/regime.jpg" alt="Alimentation">
    </div>
    <div class="contenu">
        <ul>
            <li>
                <div class="titre">Le régime végétarien </div>
                <div class="texte">
                    <div class="image">
                        <img src="../../img/vegetarien.jpg" alt="Régime végétarien">
                    </div>
                    Le régime végétarien, aussi appelé végétarisme, est une pratique alimentaire qui exclut la consommation de viande, de poisson et de fruits de mer. Selon les pratiques il peut inclure ou non les œufs.
                </div>
            </li>
            <li>
                <div class="titre"> Le régime végétalien </div>
                <div class="texte">
                    <div class="image">
                        <img src="../../img/vegetalien.jpg" alt="Régime végétalien">
                    </div>
                    Le régime végétalien, aussi appelé végétalisme, est une pratique alimentaire qui exclut la consommation de tous produits d'origine animale. Ce régime écarte ainsi la consommation de chair animale (viande, poisson, fruits de mer) comme le régime végétarien, mais aussi les œufs, les produits laitiers et le miel.
                </div>
            </li> 
            <li>
                <div class="titre">Le régime flexitarien </div>
                <div class="texte">
                    <div class="image">
                        <img src="../../img/flexitarien.jpg" alt="Régime flexitarien">
                    </div>
                    Le régime flexitarien n’impose pas d’exclusion alimentaire. Il prône une « alimentation plus durable » c’est-à-dire une alimentation respectueuse de l’environnement, accessible économiquement et socialement, équitable, en quantité suffisante mais sans excès. <br/>
                    Il recommande d’augmenter les sources de protéines végétales dans les menus et en diminuant certaines sources de protéines animales comme la viande, la charcuterie et le poisson. Il est également recommandé d’augmenter sa consommation de légumes secs et de féculents complets.
                </div>
            </li>
            <li>
                <div class="titre"> Le régime méditerranéen ou crétois</div>
                <div class="texte">
                    <div class="image">
                        <img src="../../img/cretois.jpg" alt="Régime crétois">
                    </div>
                    Le régime méditerranéen, aussi appelé régime crétois, est reconnu comme le meilleur régime pour la santé car il favorise l’équilibre alimentaire sur la semaine.<br/><br/>
                    Il est recommandé de consommé plus de : <br/>
                    <ul>
                        <li>Fruits et légumes de saison</li>
                        <li>Pâtes complètes, riz complet, pain complet, légumes secs (lentilles, pois chiches, haricots…)</li>
                        <li>Poisson, notamment les poissons gras (sardines, maquereau, hareng, saumon…)</li>
                        <li>Matières grasses essentiellement apportées par des huiles végétales dont l’huile d’olive, et les fruits secs (noix, noisettes, amandes, pistache…)</li>
                    </ul><br/>
                    En revanche il est conseillé de limiter sa consommation de : <br/>
                    <ul>
                        <li>Viande rouge</li>
                        <li>Produits laitiers (fromage, beurre, crème)</li>
                        <li>Produits raffinés et transformés (céréales pour le petit-déjeuner, pain de mie industriel, plats préparés…)</li>
                    </ul><br/>
                </div>
            </li>
            <li>
                <div class="titre">Le régime OKINAWA </div>
                <div class="texte">
                    <div class="image">
                        <img src="../../img/okinawa.jpeg" alt="Régime Okinawa">
                    </div>
                    Le régime Okinawa est plus un principe de vie qu’un vrai régime. On pourrait le décrire comme un régime semi-végétarien riche en micronutriments et en Oméga -3. 
                    La spécificité de ce régime est d’induire une restriction calorique (en arrêtant de manger avant d’atteindre la satiété) sans devoir compter les calories pour autant, afin d’atteindre un poids de santé et favoriser la longévité.<br/>
                    Il est recommandé de consommé plus de légumes, de fruits et de poissons gras, tout en limitant sa consommation de matière grasse végétale. D’autre part, les viandes grasses, les produits laitiers, les produits industriels et les matières grasses animales sont à proscrire.<br/>       
                </div>
            </li>
            <li>
                <div class="titre">Le régime IG </div>
                <div class="texte">
                    <div class="image">
                        <img src="../../img/ig.jpg" alt="Régime IG">
                    </div>
                    Le régime IG est basé sur le grand principe de l’index glycémique (IG) des aliments.
                    Il est surtout pratiqué pour favoriser la perte de poids, diminuer le risque de diabète, d’infarctus, de cancer et ainsi augmenter la longévité.<br/>
                    Le principe de ce régime est de privilégier les aliments qui ne provoquent pas d’élévation brutale du taux de sucre (glycémie) dans le sang car les pics de glycémiques favoriseraient le stockage des graisses. Ces aliments à IG hauts stimuleraient l’appétit et inciteraient à manger de grandes quantités d’aliments favorisant ainsi le surpoids. <br/><br/>
                    Il est donc recommandé de consommer plus d’aliments à Index Glycémique bas tels que : <br/>
                    <ul>
                        <li>Les avocats</li>
                        <li>Les amandes</li>
                        <li>Les courgettes</li>
                        <li>Le tofu</li>
                        <li>Le brocoli</li>
                        <li>Les carottes crues</li>
                        <li>Les cerises</li>
                        <li>Les aubergines</li>
                        <li>Les flageolets</li>
                        <li>Le chocolat noir 70%</li>
                        <li>Les tomates</li>
                        <li>Les lentilles corail</li>
                        <li>Le fromage blanc nature</li>
                        <li>Les pommes</li>
                        <li>Les abricots</li>
                        <li>Le quinoa</li>
                        <li>Les haricots rouges</li>
                        <li>Les pâtes complètes al dente</li>
                        <li>Le riz basmati complet ...</li>
                    </ul><br/>
                    En revanche, il est recommandé de limiter sa consommation d'aliments à Index Glycémique élevé : <br/>
                    <ul>
                        <li>Le pain blanc</li>
                        <li>Les pommes de terre</li>
                        <li>Les frites</li>
                        <li>Les corn flakes</li>
                        <li>Les carottes cuites</li>
                        <li>Le navet cuit</li>
                    </ul><br/>
                </div>
            </li>
            <li>
                <div class="titre">Le régime sans gluten </div>
                <div class="texte">
                    <div class="image">
                        <img src="../../img/sansGluten.jpeg" alt="Régime sans gluten">
                    </div>
                    Ce régime repose sur l’adoption d’une alimentation totalement dépourvue de gluten (seigle, avoine, blé, orge) pourtant présent dans de nombreux aliments.
                    C’est le seul traitement efficace de la maladie cœliaque, il ne présente pas d’effets secondaires et empêche l’apparition de complications. Ce régime doit être poursuivi à vie.<br/>
                    Depuis quelques années, il est devenu très populaire car il permettrait d’obtenir une meilleure digestion (réduction des ballonnements et douleurs abdominales) avec un bénéfice sur le système immunitaire. Il favoriserait également un meilleur sommeil et réduirait la fatigue.<br/>
                    
                </div>
            </li>
            <li>
                <div class="titre"> Le régime paléo</div>
                <div class="texte">
                    <div class="image">
                        <img src="../../img/paleo.jpeg" alt="Régime paléo">
                    </div>
                    Le régime paléolithique vise à revenir à l'alimentation de nos ancêtres et permettrait d'améliorer ses capacités physiques et intellectuelles au quotidien.
                    Il permettrait également une perte de poids et une amélioration de l’état de santé en général. On lui attribuerait un effet supposé dans la prévention de plusieurs maladies : maladies cardiovasculaires, ostéoporose, syndrome métabolique (diabète de type 2, hypertension, hypertriglycéridémie, obésité), et un soulagement possible de certaines maladies auto-immunes. <br/>
                    Il est recommandé de consommer plus de protéines, de végétaux et d'oléagineux et d'éliminer les produits laitiers et les céréales de ses repas.<br/>
                </div>
            </li>
            <li>
                <div class="titre">Le régime cétogène ou kéto </div>
                <div class="texte">
                    <div class="image">
                        <img src="../../img/cetogene.jpg" alt="Régime kéto">
                    </div>
                    Le régime cétogène est un régime qui vise à réduire considérablement la consommation de glucides au profit des lipides, tout en conservant l’apport protéiné, pour provoquer un état de cétose.  
                    Ses effets sont principalement attendus sur la perte de poids.<br/>
                </div>
            </li>
            <li>
                <div class="titre">Le régime hypocalorique </div>
                <div class="texte">
                    <div class="image">
                        <img src="../../img/hypocalorique.jpg" alt="Régime hypocalorique">
                    </div>
                    Les régimes hypocaloriques regroupent l'ensemble des régimes alimentaires visant à faire perdre du poids. 
                    Toutefois, pour maigrir sainement et durablement, la restriction calorique ne suffit pas il est indispensable d’y associer une dépense énergétique adaptée.
                    Un régime hypocalorique doit aussi apporter tous les nutriments essentiels à l'organisme. <br/>
                </div>
            </li>
            <li>
                <div class="titre"> Le régime chrononutrition</div>
                <div class="texte">
                    <div class="image">
                        <img src="../../img/chrnonutrition.jpg" alt="Régime chrononutrition">
                    </div>
                    Ce régime se base sur les sécrétions hormonales et enzymatiques du corps, qui sont variables selon l'heure de la journée : <br/><br/>
                    <ul>
                        <li><b><u>Le matin :</u></b> un repas riche en protéines et en gras</li>
                        <li><b><u>Le midi :</u></b> un repas riche en protéines et glucides lents</li>
                        <li><b><u>L'après-midi :</u></b> un fruit ou des produits sucrés</li>
                        <li><b><u>Le soir :</u></b> un repas riche en légumes et protéines maigres</li>
                    </ul><br/>
                    Toutes ces allégations n'ont pas été démontrées scientifiquement à ce jour.
                </div>
            </li>
            <li>
                <div class="titre"> Le régime Dukan</div>
                <div class="texte">
                    <div class="image">
                        <img src="../../img/dukan.jpg" alt="Régime Dukan">
                    </div>
                    Le régime Dukan est surement le régime hyperprotéiné le plus connu mais aussi le plus controversé, voire dangereux sur le long terme.
                    Il est uniquement destiné à la perte de poids.<br/>
                    Il se déroule en 3 phases principales et permet une perte de poids spectaculaire dès les premiers jours de régime. Ce régime recommande une consommation à volonté de protéines et une diminution drastique de la consommation de fibres et de nutriments.<br/>
                </div>
            </li> 
        </ul>
    </div>

    
    <?php
    include '../general/footer.php';
    ?>
</body>
</html>