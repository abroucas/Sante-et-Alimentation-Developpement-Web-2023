<?php session_start();

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcule ton IMC</title>

    <link rel="stylesheet" href="../css/imc.css">
</head>

<body>
   
<?php
    include '../general/header.php';
    ?>
    <main>
        <div class="imc-calcul-container">
            <div class="imc-calcul-titre-container">
                <h1 class="imc-calcul-titre">Calcul de l'Indice de Masse Corporelle</h1>
                <span class="imc-calcul-titre-span"></span>
            </div>
            <div class="imc-calcul-box">
                <div class="imc-calcul">
                    <div class="imc">
                        <div class="imc-input" id="input-sexe">
                            <label class="imc-input-label">
                                <input type="radio" value="H" name="sexe" class="imc-input-sexe">
                                <span class="imc-input-span">Homme</span>
                            </label>
                            <label class="imc-input-label">
                                <input type="radio" value="F" name="sexe" class="imc-input-sexe" checked>
                                <span class="imc-input-span"> Femme</span>
                            </label>
                        </div>
                        <input type="number" placeholder=" Taille (en cm)" class="imc-input">
                        <input type="number" placeholder=" Poids (en kg)" class="imc-input">
                        <input type="number" placeholder=" Age" class="imc-input">
                        <button id="imc-boutton">Calculer</button>
                    </div>

                    <div class="imc-interpretation">
                        <table class="tableau-border imc-tableau">
                            <thead>
                                <tr>
                                    <th class="tableau-border tableau-case tableau-head">IMC (kg/m²)</th>
                                    <th class="tableau-border tableau-case tableau-head">Interprétation</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="tableau-border tableau-case">Moins de 16.5</td>
                                    <td class="tableau-border tableau-case">Anorexie ou dénutrition</td>
                                </tr>
                                <tr>
                                    <td class="tableau-border tableau-case">16.5 à 18.5</td>
                                    <td class="tableau-border tableau-case">Insuffisance pondérale (maigreur)</td>
                                </tr>
                                <tr>
                                    <td class="tableau-border tableau-case">18.5 à 25</td>
                                    <td class="tableau-border tableau-case">Corpulence normale</td>
                                </tr>
                                <tr>
                                    <td class="tableau-border tableau-case">25 à 30</td>
                                    <td class="tableau-border tableau-case">Surpoids</td>
                                </tr>
                                <tr>
                                    <td class="tableau-border tableau-case">30 à 35</td>
                                    <td class="tableau-border tableau-case">Obésité modérée</td>
                                </tr>
                                <tr>
                                    <td class="tableau-border tableau-case">35 à 40</td>
                                    <td class="tableau-border tableau-case">Obésité sévère</td>
                                </tr>
                                <tr>
                                    <td class="tableau-border tableau-case">Plus de 40</td>
                                    <td class="tableau-border tableau-case">Obésité morbide ou massive</td>
                                </tr>
                            </tbody>
                        </table>
                        <p class="imc-interpretation-texte">
                            L'IMC permet de déterminer de manière objective la corpulence d'une personne. Cet indicateur
                            ne
                            reflète pas avec exactitude votre santé physique. Il ne doit en aucun cas être vecteur de
                            mal-être social ou de toute autre angoisse due à une quelconque pression sociétal. Plus
                            d'informations sur l'IMC en dessous.
                        </p>
                    </div>
                </div>
            </div>
            <div class="imc-divers">
                <h1 class="imc-divers-titre">ORIGINES ET UTILITÉ DE L'IMC</h1>
                <div class="imc-divers-descriptif">
                    <p>
                        L'IMC permet de déterminer de manière objective la corpulence d'une personne.
                        <br><br>
                        C'est au mathématicien et statisticien Adolphe Quetelet (1796-1874) que l'on doit cet indice.
                        Toutefois, le terme « Indice de Masse Corporelle » n'apparaît qu'en 1972, soit bien après la
                        création de ce qui se dénommait à l'origine « Indice de Quetelet ».
                        <br><br>
                        Depuis 1997, l'OMS utilise cet indice afin d'établir une classification standard de référence en
                        matière de surcharge pondérale, qui puisse être utilisée de manière internationale.
                        <br><br>
                        Cette classification (voir tableau ci-dessus) a pour rôle d'évaluer les risques liés au
                        surpoids. Le fait de calculer de manière régulière son IMC présente donc un intérêt : repérer
                        ses propres évolutions de poids et les interpréter en accord avec les informations fournies par
                        l'OMS.
                    </p>
                </div>
                <h1 class="imc-divers-titre">IMC : DIFFÉRENCE HOMME/FEMME</h1>
                <div class="imc-divers-descriptif">
                    <p>
                        Le calcul de l'IMC repose sur seule formule, que l'on soit homme ou femme. Mais cette formule ne
                        prend en compte ni les différents morphotypes, ni le critère d'âge, comme précédemment dit.
                        Aussi l'IMC est un indice relativement fiable de l'état de santé, mais ne peut être considéré
                        comme une référence universelle.
                        <br><br>
                        Hommes et femmes sont inégaux face au poids. C'est ainsi : la masse grasse de la femme
                        représente en moyenne 25% de la masse corporelle totale, contre 10-15% pour l'homme. Le
                        métabolisme masculin, programmé pour être plus musclé, consomme naturellement plus d'énergie.
                        Les hommes grossissent donc moins que les femmes et perdent du poids plus rapidement et
                        facilement. Conséquence sur l'IMC : un même IMC chez une femme et un homme ne signifie pas que
                        les deux individus sont pourvus des mêmes caractéristiques physiques, ni d'un état de santé
                        similaire. Les seuils de l'IMC mériteraient donc d'être revus, selon qu'on est un homme ou une
                        femme, pour que l'indice gagne en pertinence. Par ailleurs il devrait toujours être complété
                        d'autres données (comme l'indice de masse grasse/d'adiposité ou le tour de taille) pour être
                        totalement pertinent.
                    </p>
                </div>
                <h1 class="imc-divers-titre">COMMENT SAVOIR SI JE SUIS EN SURPOIDS ?</h1>
                <div class="imc-divers-descriptif">
                    <p>
                        Il faut savoir que le calcul de l'indice de masse corporelle ne tient pas compte de la
                        répartition des liquides. Par exemple en cas de rétention d'eau (du liquide s'infiltre dans
                        les
                        tissus), il arrive que l'on constate une prise de poids rapide. Or, il ne s'agit pas de
                        kilos
                        liés à un excès alimentaire mais d'une variation transitoire du poids.
                        <br><br>
                        L'IMC ne tient pas compte non plus de la répartition des masses osseuses, musculaires et en
                        graisses dans le corps. C'est pourquoi deux personnes ayant le même IMC peuvent avoir des
                        corpulences complètement différentes.
                        <br><br>
                        L'IMC reste néanmoins un indicateur utile et recommandé par les spécialistes. Si votre IMC
                        vous
                        semble anormal et que vous vous demandez si vous êtes en surpoids, parlez-en avec votre
                        médecin.
                        Il pourra vous aider à interpréter votre IMC, vous prescrire si besoin des analyses
                        complémentaires (bilan des graisses et des sucres) et vous conseiller.
                    </p>
                </div>
                <h1 class="imc-divers-titre">QUELLE EST LA MASSE MUSCULAIRE IDEALE ?</h1>
                <div class="imc-divers-descriptif">
                    <p>
                        Chez une personne de corpulence normale, la masse musculaire représente 35 % du poids chez
                        l'homme, 28 % du poids chez la femme. Via notre activité physique quotidienne et même au
                        repos,
                        nous sollicitons nos muscles, ce qui engendre une dépense énergétique et nous fait perdre
                        des
                        calories. En cas de régime, l'apport alimentaire diminuant il faut s'assurer que la masse
                        musculaire reste stable. En effet, si les apports nutritionnels diminuent mais que la masse
                        musculaire diminue aussi, alors le métabolisme diminue, c'est-à-dire que l'on dépense moins
                        d'énergie au repos. Pour compenser, il faut donc faire davantage d'activité physique.
                    </p>
                </div>
                <h1 class="imc-divers-titre">L'IMC EN FRANCE</h1>
                <div class="imc-divers-descriptif">
                    <p>
                        En France, selon les dernières estimations de l'Inserm et de l'Assurance maladie (2016), la
                        prévalence du surpoids est de 41% chez les hommes et 25% chez les femmes. Quant à l'obésité,
                        définie par un IMC supérieur à 30 kg/m², elle avoisine les 16% chez les hommes, comme chez
                        les
                        femmes.
                        <br><br>
                        L'obésité est une pathologie chronique évolutive allant de l'obésité simple à l'obésité
                        sévère,
                        elle est un facteur de risque majeur des maladies cardio-vasculaires et du diabète de type
                        2.
                        Mais c'est surtout l'obésité abdominale, définie par un tour de taille ≥94 cm pour les
                        hommes et
                        ≥80 cm les femmes, qui est très fréquente : 42% chez les hommes, 48,5% chez les femmes.
                        <br><br>
                        Au global, surpoids et obésité confondus, cette même étude estime que l'excès de poids
                        concerne
                        près de la moitié de la population en France : 56,8 % d'hommes et 40,9 % de femmes sont en
                        surcharge pondérale.
                    </p>
                </div>
            </div>
        </div>
    </main>
    
    <?php
    include '../general/footer.php';
    ?>
</body>

</html>