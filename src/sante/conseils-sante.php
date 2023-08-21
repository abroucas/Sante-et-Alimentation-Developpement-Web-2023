<?php session_start();

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conseils Santé</title>
    <link rel="stylesheet" href="../css/conseils.css">
</head>
<body>
<?php
    include '../general/header.php';
    ?>
    <div class="titrePage"> Conseils alimentaires adaptés aux différentes pathologies </div>

    <div class="image">
        <img src="../../img/conseilSante.jpg" alt="Santé et Alimentation">
    </div>


    <div class="contenu">


        <ul>
            <li>
                <div class="titre"> Le diabète </div>
                <div class="texte">
                    Une alimentation équilibrée fait partie intégrante du <b> traitement</b> du diabète.  Elle doit couvrir les besoins et être adaptée en fonction de l’activité physique pratiquée. Elle doit apporter des aliments variés sans qu’aucun aliment ne soit interdit. <br/><br/>
                    <div class="image">
                        <img src="../../img/diabete.jpg" alt="diabète">
                    </div>
                    <b>Les principales recommandations : </b><br/>
                    <ul>
                        <li> <b>5 fruits et légumes par jour : </b> avec un maximum de 3 fruits </li>
                        <li> <b>3 produits laitiers par jour </b> </li>
                        <li> <b>Manger de la viande, du poisson  ou des œufs 1 à 2 fois par jour </b></li>
                        <li> <b>Limiter les quantités de matières grasses </b></li>
                        <li> <b>Consommer suffisamment de glucides </b> mais en les choisissant bien </li>
                        <li> <b>Limiter les quantités d’alcool, de produits sucrés, salés et gras </b></li>
                        
                    </ul>
                </div>

            </li>
            <li> 
                <div class="titre"> L'hypercholestérolémie ou hypertriglycéridémie </div>
                <div class="texte"> 
                    En cas d’hypercholestérolémie ou hypertriglycéridémie, le régime alimentaire à suivre recommandera de réduire les apports en matières grasses et en sucres en particulier l’alcool afin de limiter l’apport en graisses saturées et en cholestérol. <br/><br/>
                    <div class="image">
                        <img src="../../img/cholesterol.jpg" alt="hypercholestérolémie">
                    </div>
                    <b>Les graisses saturées se trouvent dans : </b><br/>
                    <ul>
                        <li> <b>Le beurre : </b> Juste  une noix pour les tartines du matin </li>
                        <li> <b>La charcuterie grasse : </b>rillettes, saucissons, saucisses et lardons</li>
                        <li> <b>Le fromage : </b> à tous les repas</li>
                        <li> <b>Les viandes grasses :</b> Privilégiez les viandes maigres de poulet, dinde, steak de bœuf ou lapin, ainsi que le poisson, même gras</li>
                        <li> <b>Le lait et les produits laitiers :</b> Préférez les écrémés ou demi-écrémés</li>
                        <li> <b>Les produits à base de noix de coco</b></li>
                        <li> <b>Les produits contenant des graisses hydrogénées et de l’huile de palme ou  de coprah</b></li>
                        <li> <b>Les oeufs : </b> oeuf par jour maximum</li>
                    </ul><br/>
                    Il faut privilégier les graisses insaturées qui font baisser le taux de cholestérol. <br/><br/>
                    <b>Les graisses insaturées se trouvent dans :</b><br/>
                    <ul>
                        <li> <b>Les poissons gras : </b>saumon, sardine, maquereau, hareng sont à consommer 1 à 2 fois par semaine </li>
                        <li> <b>Les huiles végétales :</b> d'olive, de tournesol, de maïs, de colza, de noix, de pépins de raisin</li>
                        <li> <b>Les acides gras oméga-6 : </b> huiles de maïs et de tournesol</li>
                        <li> <b>Les oméga-3 :</b> poissons gras et les huiles de colza ou de noix</li>
                    </ul><br/>
                    Il est nécessaire de diminuer la consommation d'alcool.<br/>
                    En effet, les boissons alcoolisées augmentent le taux de triglycérides et le risque de complications cardiovasculaires ou pancréatiques.<br/><br/>
                    <b> Pour votre santé, l'alcool c'est maximum 2 verres par jour, et pas tous les jours. </b>
                    
                </div>
            </li>
            <li>
                <div class="titre"> Les maladies cardio vasculaires </div>
                <div class="texte">
                    Le régime le plus protecteur contre la maladie cardio vasculaire est le régime méditerranéen. 
                    Ce régime à base de végétaux qui permet de réduire la pression artérielle, d’améliorer le taux de cholestérol et de réduire le risque de diabète de type 2, tout en favorisant un poids correct.
                    Il réduit ainsi le risque de maladies du cardiaques et d’AVC.
                    C’est un régime assez facile à suivre sur le long terme car il autorise toutes les catégories d’aliments. <br/>
                    <div class="image">
                        <img src="../../img/mediterraneen.jpg" alt="Régime méditerranéen">
                    </div>
                    <b>A privilégier : </b><br/>
                    <ul>
                        <li><b>Les graisses :</b> Préférez les huiles végétales (olive, colza, noix, pépins de raisin, tournesol, arachide…) aux graisses animales (beurre, crème fraîche…). Eviter absolument l’huile de palme et l’huile de coco</li>
                        <li><b>Les viandes et poissons : </b> Tous les poissons gras sont à recommander (saumon, maquereau, hareng, sardine ou thon). Les crustacés et des fruits de mer peuvent également être consommés. Côté viande, préférer les viandes blanches, volailles, jambon maigre plutôt que les viandes rouges, abats ou charcuterie. Pour les  œufs, pas plus de six par semaine </li>
                        <li><b>Les fruits et légumes : </b> Les fruits et les légumes sont à consommer sans modération ainsi que certaines salades comme la mâche et les épinards.  Les légumes secs et les céréales (surtout les céréales complètes, le pain et les farines complètes, ainsi que tous les aliments pauvres en glucides) sont également à privilégier. Vous pouvez aussi vous régaler de fruits secs natures : noix, noisettes, amandes… notamment les graines de lin crues, aux vertus inégalables</li>
                        <li><b> Les laitages : </b> Les fromages blancs frais, de chèvre ou de brebis ainsi que les yaourts sont à préférer aux fromages gras</li>
                        <li><b>Les boissons : </b> L’eau est la boisson idéale (1 à 1,5 litres par jour), contrairement à l’alcool ou les boissons stimulantes comme le café qu’il convient de réduire le plus possible</li>
                        <li><b>Les épices : </b> Limiter la consommation de sel mais utiliser épices et herbes aromatiques pour agrémenter les plats</li>
                        <li><b> Côté cuisson : </b> Privilégier la cuisson à l'eau ou à la vapeur et éviter les fritures et les panures</li>

                    </ul>
                    
                </div>
            </li>
            <li>
                <div class="titre"> L'hypertension artérielle (HTA)</div>
                <div class="texte"> 
                    Dans le cadre de la lutte contre l'hypertension artérielle, le régime DASH (Dietary Approach to Stopping Hypertension) est recommandé. 
                    Il associe des aliments sains, une réduction de la consommation de sel et une augmentation de l'activité physique.
                    <div class="image">
                        <img src="../../img/dash.jpg" alt="Régime DASH">
                    </div>
                    <b>Les principes de base du régime DASH : </b><br/>
                    <ul>
                        <li> <b>Consommer plus de fruits et de légumes : </b> riches en vitamines, en minéraux et en fibres</li>
                        <li> <b>Consommer plus largement des aliments riches en fibres : </b> les fruits, les légumes, les graines entières et les légumineuses</li>
                        <li> <b>Privilégier le bon gras : </b> préférer les gras insaturés (poissons, noix et huiles végétales), qui diminuent
                            le taux de cholestérol, au gras saturés qui eux tendent à faire augmenter le taux de cholestérol
                        </li>
                        <li> <b>Réduire le sucre ajouté : </b> majoritairement présent dans les produits transformés </li>
                        <li> <b>Eviter le sel</b></li>
                    </ul>
                   
                </div>
            </li>
            <li>
                <div class="titre"> L'hypothyroïdie </div>
                <div class="texte">
                    Le régime alimentaire recommandé en cas d’hypothyroïdie a pour but d'éviter la prise de poids et d'apporter les nutriments nécessaires au bon fonctionnement de la glande thyroïde, elle-même impliquée dans le bon fonctionnement de l'organisme.<br/><br/>
                    <div class="image">
                        <img src="../../img/hypothyroidie.jpg" alt="hypothyroïdie">
                    </div>
                    <b> A privilégier : </b><br/>
                    <ul>
                        <li> <b> Une alimentation riche en iode : </b> fruits de mer, algues, poissons (morue et aiglefin surtout), lait, produits laitiers et sel de table enrichie en iode</li>
                        <li><b>Les nutriments nécessaires au bon fonctionnement de la thyroïde : </b>
                            <ul>
                                <li><b>Sélénium : </b> noix de Brésil, poissons gras, fruits de mer, viandes, volailles, champignons Shiitaké, oeufs, céréales complètes</li>
                                <li><b>Vitamine D : </b> lait, boissons de soja enrichies, poissons gras, margarine, jaune d'oeuf, champignon Shiitaké</li>
                            </ul>
                        </li>
                        <li><b>Les aliments pauvres en graisse : </b> viandes maigres (rôti, filet, escalope, longe, épaule), poissons, volailles sans la peau, produits laitiers pauvres en matière grasse, lait écrémé</li>
                        <li><b>Une bonne hydratation</b></li>
                    </ul><br/>
                    <b> A éviter : </b>
                    <ul>
                        <li><b>Eviter les aliments goitrogènes : </b>chou de Bruxelles, chou, chou-fleur, chou frisée, brocoli, cresson, navet, patates douces, fèves de soja (Edamame), arachides<br/><br/>
                        <b>  La cuisson inactive les effets goitrogènes de ces aliments et du soja !</b><br/><br/>
                        </li>
                        <li> <b>Eviter les aliments interférant avec le traitement Levothyrox : </b> fer, calcium ou fibres</li>
                        <li><b>Diminuer la consommation d'alcool et de café</b></li>
                    </ul>
                </div>
                     
            </li>
            <li>
                <div class="titre"> Le cancer </div>
                <div class="texte">
                    Le régime à favoriser pour la prévention des cancers est le régime méditerranéen. Il réduit le risque de cancer, de maladies du cœur, de maladies de Parkinson et d’Alzheimer.<br/><br/>
                    <div class="image">
                        <img src="../../img/cancer.jpg" alt="Alimentation cancer">
                    </div>
                    <b>A privilégier : </b>
                    <ul>
                        <li><b>Les légumes et fruits : </b>5 par jour</li>
                        <li><b>Les poissons plutôt gras et maigres en alternance : </b>2 fois par semaine dont 1 poisson gras (riche en oméga-3 : sardine, maquereau, hareng, saumon)</li>
                        <li><b>Le pain complet, les pâtes et le riz complet : </b> au moins 1 fois par jour car ils sont naturellement riches en fibres</li>
                        <li><b>Les céréales entières : </b> (lentilles, haricots, pois chiches...), 2 fois par semaine, riches en fibres et en protéines</li>
                        <li><b>Les produits laitiers : </b> (yaourt, lait, fromage...), 2 fois par jour</li>
                        <li><b>L'huile d'olive : </b> pour remplacer le beurre et les autres gras</li>
                        <li><b>Plus de fines herbes  </b> et moins de sel</li>
                        <li><b>Peu de viande rouge</b></li>
                        <li><b>Un verre de vin rouge de temps à autre </b> mais non indispensable</li>
                        <li><b>Les produits locaux</b> de saison et si possible bio</li>
                    </ul>
                    
                
                </div>
            </li>
            <li>
                <div class="titre"> La maladie coeliaque </div>
                <div class="texte">
                    Le régime sans gluten est le meilleur traitement de la maladie coeliaque, ou d'allergie au gluten (blé).<br/><br/>
                
                    <b>Consommer des aliments naturellement sans gluten : </b>
                    riz, maïs, pomme de terre, tapioca, soja, pois chiches, quinoa, sarrasin, millet, sorgho.<br/>
                    <div class="image">
                        <img src="../../img/coeliaque.jpg" alt="maladie coeliaque">
                    </div>
                    <b>Eviter les aliments contenant : </b>
                    <b>S</b>eigle, <b>A</b>voine,<b>B</b>lé,<b>O</b>rge,<b>T</b>riticale. <br/>
                    <b>Moyen mnémotechnique : SABOT !</b>
                
                </div>
            </li>
            <li>
                <div class="titre"> Le reflux gastro oesophagien (RGO) </div>
                <div class="texte">
                    Le régime recommandé pour les personnes atteintes de Reflux Gastro Œsophagien est un régime évitant au maximum les produits acides.<br/><br/>
                    <div class="image">
                        <img src="../../img/reflux.jpg" alt="RGO">
                    </div>
                    <b>A éviter : </b>
                    <ul>
                        <li><b>Citron et aliments acides : </b>agrumes, tomates</li>
                        <li><b>Alcool, sodas et boissons gazeuses</b></li>
                        <li><b>Thé, café</b></li>
                        <li><b>Repas riches en graisses</b></li>
                    </ul>
                   
                </div>
            </li>
            <li>
                <div class="titre"> La maladie d’Alzheimer et le déclin cognitif </div>
                <div class="texte">
                   Pour limiter le déclin cognitif, le régime MIND (Mediterranean-Dash Intervention for Neurodegenerative Delay) qui est recommandé, une fusion des régimes méditerranéen et DASH. Ainsi, il serait possible de réduire l'inflammation et de protéger la substance blanche du cerveau. <br/><br/>
                   <div class="image">
                        <img src="../../img/mind.png" alt="Régime MIND">
                   </div>
                   <b>A privilégier : </b>
                   <ul>
                        <li> <b>Les légumes verts à feuilles</b></li>
                        <li><b>Les petits fruits</b></li>
                        <li><b>Les noix</b></li>
                   </ul>
                   <br/>
                   <b>A réduire : </b>
                   <ul>
                        <li><b>Les viandes rouges</b></li>
                        <li><b>Les fromages</b></li>
                        <li><b>Les sucreries</b></li>
                        <br/><br/>
                   </ul>
                </div>
            </li>

        </ul>
    </div>


    <?php
    include '../general/footer.php';
    ?>
</body>
</html>