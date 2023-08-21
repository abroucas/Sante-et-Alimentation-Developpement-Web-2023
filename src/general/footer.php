<footer class="footer">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <div class="container-footer">
        <div class="row">
            <div class="footer-col">
                <h4>Santé & Alimentation</h4>
                <ul>
                    <li><a href="#" id="boutton-a-propos" onclick="return false;">À propos</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>Besoin d'aide ?</h4>
                <ul>
                    <li><a href="../general/plan.php">Plan du site</a></li>
                    <li><a href="#" id="boutton-contactez-nous" onclick="return false;">Contactez-nous</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>Suivez-nous</h4>
                <div class="social-links">
                    <a href="https://www.facebook.com/people/Sant%C3%A9-Alimentation/100090521452609/" target="_blank"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://twitter.com/SantAlimentatio" target="_blank"><i class="fab fa-twitter"></i></a>
                    <a href="https://www.instagram.com/sante_alimentation_2023/" target="_blank"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>



    <section class="hidden" id="fenetre-a-propos">
        <div class="hidden" id="div-a-propos">
            <button id="fermer-a-propos">
                <span></span>
                <span></span>
            </button>
            <div class="a-propos-container">
                <h1 class="a-propos-titre">À propos</h1>
                <p class="a-propos-texte">
                    Nous sommes trois étudiants en école d'ingénieur avec une passion pour le sport et la nutrition. Nous avons remarqué ces dernières années que la qualité de l'alimentation se dégradait, surtout chez le jeunes. Ainsi nous avons eu l'idée de développer ce site afin d'accompagner gratuitement les étudiants et ceux qui le souhaitent avec des conseils de santé et de nutrtion adaptés. Nous sommes heureux de vous présenter "Santé & Nutrition" qui a vocation à vous éclairer sur un mode de vie plus sain! Pour toute remarque vous pouvez nous contactez via la section 'Contactez-nous' présente en bas de chaque page.
                </p>
            </div>

        </div>

    </section>

    <section class="hidden" id="fenetre-contactez-nous">
        <div class="hidden" id="div-contactez-nous">
            <button id="fermer-contactez-nous">
                <span></span>
                <span></span>
            </button>
            <div class="contactez-nous-container">
                <h1 class="contactez-nous-titre">Contactez-nous</h1>
                <span class="contactez-nous-span"></span>
            </div>
            <form action="#" class="footer-form">
                <div class="form-details">
                    <div class="form-box">
                        <span class="form-label">Adresse e-mail :</span>
                        <input class="form-email" type="text" placeholder="Entrez votre adresse email" required>
                    </div>
                    <div class="form-box">
                        <span class="form-label">Votre message :</span>
                        <textarea class="form-textarea" name="textarea" rows="5" cols="30" minlength="10" required
                            placeholder="Vous pouvez écrire ici"></textarea>
                    </div>
                </div>
                <div class="form-button">
                    <input id="form-button-input" type="submit" value="Envoyer">
                </div>
            </form>
        </div>
    </section>
    <script src="../js/main.js"></script>
</footer>