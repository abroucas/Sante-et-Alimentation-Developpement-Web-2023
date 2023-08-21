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

        <div class="container">
            <div class="calendar">
                <div class="month">
                    <i class="fas fa-angle-left prev"></i>
                    <div class="date">
                        <h1> Mars </h1>
                        <p> Samedi 26 Mars 2023 </p>
                    </div>
                    <i class="fas fa-angle-right next"></i>
                </div>
                <div class="weekdays">
                    <div> Lu</div>
                    <div> Ma</div>
                    <div> Me</div>
                    <div> Je</div>
                    <div> Ve</div>
                    <div> Sa</div>
                    <div> Di</div>
                </div>
                <div class="days">
                    <div class="prev-date">26</div>
                    <div class="prev-date">27</div>
                    <div class="prev-date">28</div>
                    <div class="prev-date">29</div>
                    <div class="prev-date">30</div>
                    <div>1</div>
                    <div>2</div>
                    <div>3</div>
                    <div>4</div>
                    <div>5</div>
                    <div>6</div>
                    <div>7</div>
                    <div>8</div>
                    <div>9</div>
                    <div>10</div>
                    <div>11</div>
                    <div>12</div>
                    <div>13</div>
                    <div>14</div>
                    <div>15</div>
                    <div>16</div>
                    <div>17</div>
                    <div>18</div>
                    <div>19</div>
                    <div>20</div>
                    <div>21</div>
                    <div>22</div>
                    <div>23</div>
                    <div>24</div>
                    <div>25</div>
                    <div class="today">26</div>
                    <div>27</div>
                    <div>28</div>
                    <div>29</div>
                    <div>30</div>
                    <div>31</div>
                
                    <div class="next-date">1</div>
                    <div class="next-date">2</div>
                    <div class="next-date">3</div>
                    <div class="next-date">4</div>
                    <div class="next-date">5</div>
                    <div class="next-date">6</div>

                </div>
            </div>
        </div>

        <div class="journal">

            <div class="explication">
                Pour chacun de vos repas, entrez le nom des aliments consommés dans le champ de recherche adapté.<br/>
                Puis, rentrez la quantité consommée pour chaque aliment.<br/>
                Cliquez sur le bouton "Enregistrer" pour sauvegarder les aliments de votre repas.<br/>
                Faites de même avec les liquides consommés dans les champs de recherche adaptés.<br/><br/>

                <b>Comment puis-je renseigner les aliments consommés la veille ou un autre jour qu'aujourd'hui ? </b>
                <br/><br/>
                Le calendrier situé en haut à gauche de l'écran sur ordinateur permet de sélectionner un jour au choix.<br/>
                En cliquant sur le jour choisi, votre journal alimentaire en ligne affiche les aliments consommés pour ce jour et non plus pour aujourd'hui. <br/>
                Afin d'enregistrer les données saisies, il est nécessaire de créer un compte gratuit.<br/>
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
                            <span class="aliment"> Ajouter la quantité consommée en grammes: </span>
                            <input type="number" placeholder="ex : 100">
                        </div>
                        <div class="champ">
                            <span class="aliment"> Ajouter une boisson consommée : </span>
                            <input type="text" placeholder="ex : lait au chocolat">
                        </div>
                        <div class="champ">
                            <span class="aliment"> Ajouter une quantité consommée en mL : </span>
                            <input type="number" placeholder="ex : 200">
                        </div>
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
                            <span class="aliment"> Ajouter la quantité consommée en grammes: </span>
                            <input type="number" placeholder="ex : 100">
                        </div>
                        <div class="champ">
                            <span class="aliment"> Ajouter une boisson consommée : </span>
                            <input type="text" placeholder="ex : café">
                        </div>
                        <div class="champ">
                            <span class="aliment"> Ajouter une quantité consommée en mL : </span>
                            <input type="number" placeholder="ex : 100">
                        </div>
                    </div>
                    <div class="button">
                        <input type="submit" value="Enregistrer">
                    </div>
                </form>



            </div>

            <div class="entree_repas">
                <div class="libelle">
                    <div class="image">
                        <img src="../../img/pomme.jpg" alt="goûter">
                    </div>
                    <div class="titre"> Goûter</div>
                </div>
                <form action="#">
                    <div class="repas">
                        <div class="champ">
                            <span class="aliment"> Ajouter un aliment consommé : </span>
                            <input type="text" placeholder="ex : pomme">
                        </div>
                        <div class="champ">
                            <span class="aliment"> Ajouter la quantité consommée en grammes: </span>
                            <input type="number" placeholder="ex : 150">
                        </div>
                        <div class="champ">
                            <span class="aliment"> Ajouter une boisson consommée : </span>
                            <input type="text" placeholder="ex : thé">
                        </div>
                        <div class="champ">
                            <span class="aliment"> Ajouter une quantité consommée en mL : </span>
                            <input type="number" placeholder="ex : 250">
                        </div>
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
                    <div class="titre"> Déjeuner</div>
                </div>
                <form action="#">
                    <div class="repas">
                        <div class="champ">
                            <span class="aliment"> Ajouter un aliment consommé : </span>
                            <input type="text" placeholder="ex : riz">
                        </div>
                        <div class="champ">
                            <span class="aliment"> Ajouter la quantité consommée en grammes: </span>
                            <input type="number" placeholder="ex : 100">
                        </div>
                        <div class="champ">
                            <span class="aliment"> Ajouter une boisson consommée : </span>
                            <input type="text" placeholder="ex : soupe">
                        </div>
                        <div class="champ">
                            <span class="aliment"> Ajouter une quantité consommée en mL : </span>
                            <input type="number" placeholder="ex : 250">
                        </div>
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