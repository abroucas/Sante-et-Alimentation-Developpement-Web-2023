<?php session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculer mes pas</title>

    <link rel="stylesheet" href="../css/calcul-pas.css">
</head>

<body>
<?php
    include '../general/header.php';
    ?>

    <main>
        <div class="calcul-pas-container">
            <div class="calcul-pas-titre-container">
                <h1 class="calcul-pas-titre">Mes pas quotidiens</h1>
                <span class="calcul-pas-titre-span"></span>
            </div>

            <div class="calcul-pas-box">
                <div class="calcul-pas">
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

                    <div class="calcul-pas-form-container">
                        <div class="calcul-pas-form">
                            <input type="number" placeholder=" Taille (en cm)" class="pas-input">
                            <input type="number" placeholder=" Km parcourus" class="pas-input">
                            <button id="pas-boutton">Calculer</button>
                        </div>
                        <div class="pas-texte">
                            <p class="pas-nb">Le 26 mars, vous avez effectué 10 236 pas!</p>
                            <p class="pas-commentaire">Vous vous trouvez dans la marge recommandée, continuez comme ça!
                            </p>
                            <p class="pas-ps">Calculez votre nombre de pas du jour grâce au formulaire ci-dessus</p>
                            <p class="pas-ps">Vous pouvez avoir accès au nombre de pas que vous avez effectué chaque
                                jour en cliquant sur le calendrier.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php
    include '../general/footer.php';
    ?>
</body>

</html>