/* BOUTTON A PROPOS */

var bouttonAPropos = document.getElementById("boutton-a-propos");
var section = document.getElementById('fenetre-a-propos');
var div = document.getElementById('div-a-propos');
var body = document.querySelector('body');
var fermerAPropos = document.getElementById("fermer-a-propos");

function fermerFenetreAPropos() {
    // actif = 0;
    body.style.overflow = '';
    div.classList.add('hidden');
    section.classList.add('hidden');
    div.classList.remove('div-a-propos');
    section.classList.remove('fenetre-a-propos');
}


bouttonAPropos.addEventListener('click', event => {
    // actif = 1;
    body.style.overflow = 'hidden';  // on bloque le scroll de la page
    div.classList.remove('hidden');
    section.classList.remove('hidden');
    div.classList.add('div-a-propos');
    section.classList.add('fenetre-a-propos');
    section.style.top = window.pageYOffset + "px";
});


fermerAPropos.addEventListener('click', event => fermerFenetreAPropos());

section.addEventListener('click', event => fermerFenetreAPropos());

// BOUTTON CONTACTEZ NOUS

var bouttonContactezNous = document.getElementById("boutton-contactez-nous");
var sectionContact = document.getElementById('fenetre-contactez-nous');
var divContact = document.getElementById('div-contactez-nous');
var fermerContactezNous = document.getElementById('fermer-contactez-nous');

function fermerFenetreContactezNous() {
    // actif = 0;
    body.style.overflow = '';
    divContact.classList.add('hidden');
    sectionContact.classList.add('hidden');
    divContact.classList.remove('div-contactez-nous');
    sectionContact.classList.remove('fenetre-contactez-nous');
}


bouttonContactezNous.addEventListener('click', event => {
    // actif = 1;
    body.style.overflow = 'hidden';  // on bloque le scroll de la page
    divContact.classList.remove('hidden');
    sectionContact.classList.remove('hidden');
    divContact.classList.add('div-contactez-nous');
    sectionContact.classList.add('fenetre-contactez-nous');
    sectionContact.style.top = window.pageYOffset + "px";
});


fermerContactezNous.addEventListener('click', event => fermerFenetreContactezNous());