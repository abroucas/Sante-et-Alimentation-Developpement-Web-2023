var articles = document.querySelector('.fil-actualite-articles');
var bouton = '<button class="fil-actualite-voir-plus" onclick="ajouterArticles()"><span></span><span></span></button>'
var boutonContainer = document.querySelector('.fil-actualite-voir-plus-container');

articles.innerHTML = '<div class="loader"><span>{</span><span>}</span></div>';

var compteurSante = 0;  
var compteurSport = 0;

var urlSante = 'https://newsapi.org/v2/top-headlines?country=fr&category=health&apiKey=f95b7b6b438542ee83a5811e391e5442';
var urlSport = 'https://newsapi.org/v2/top-headlines?country=fr&category=sports&apiKey=f95b7b6b438542ee83a5811e391e5442';

var requestSante = new XMLHttpRequest();
var requestSport = new XMLHttpRequest();

try{
    requestSante.open('GET', urlSante);
    requestSante.responseType = 'json';
    requestSante.send();
}
catch(error){
    console.log(error);
}

try{
    requestSport.open('GET', urlSport);
    requestSport.responseType = 'json';
    requestSport.send();
}
catch(error){
    console.log(error);
}


requestSante.onerror = function(){
    articles.innerHTML = '<div class="actualite-erreur"><h2>Nous n\'arrivons pas à récupérer les articles. Veuillez nous en excuser.</h2><a href="../general/accueil.php">Retour à l\'accueil</a></div> ';
}


requestSante.onload = function() {
    if(requestSante.readyState==4 && requestSante.status == 200){
        articles.innerHTML = "";
        //varibale globale jsonSante
        jsonSante = requestSante.response;
        ajouterArticles();
    }
    else{
        //on met un message d'erreur
    }
}

requestSport.onload = function() {
    if(requestSport.readyState == 4 && requestSport.status == 200){
        //varibale globale jsonSport
        jsonSport = requestSport.response;
    }
}



function ajouterArticles(){
    ajouterArticle();
    ajouterArticle();
    ajouterArticle();
}


function ajouterArticle(){
    //la var more permet d'indiquer si on a utilise tous les articles de la requete
    var more = true;
    if(requestSante.readyState == 4 && requestSante.status == 200){
        if(requestSport.readyState == 4 && requestSport.status == 200){
            //Si les 2 requetes ont marches, on affiche parfois Sport et parfois Sante avec 2 fois plus d articles Sante
            if(compteurSante <= 2*compteurSport){
                if(jsonSante['totalResults'] == compteurSante + 1){
                    more = false;
                }
                if(compteurSante < jsonSante['totalResults']){
                    ajouterArticlesCat(jsonSante, compteurSante, more, 'Sante');
                }
                compteurSante++;
            }
            else{
                if(jsonSport['totalResults'] == compteurSport + 1){
                    more = false;
                }
                if(compteurSport < jsonSport['totalResults']){
                    ajouterArticlesCat(jsonSport, compteurSport, more, 'Sport');
                }
                compteurSport++;
            }
        }
        //Si la requete Sport n'a pas marche on affiche que la Sante
        else{
            if(jsonSante['totalResults'] == compteurSante + 1){
                more = false;
            }
            if(compteurSante < jsonSante['totalResults']){
                ajouterArticlesCat(jsonSante, compteurSante, more, 'Sante');
            }
            compteurSante++;
        }
    }
    //Si la requete Sante n'a pas marche on affiche que le Sport
    else if(requestSport.readyState == 4 && requestSport.status == 200){
        if(jsonSport['totalResults'] == compteurSport + 1){
            more = false;
        }
        if(compteurSport < jsonSport['totalResults']){
            ajouterArticlesCat(jsonSport, compteurSport, more, 'Sport');
        }
        compteurSport++;
    }
    //Si les 2 requetes sont nulles, on affiche un message d erreur
    else{
        //afficher message erreur
    }
    
}



function ajouterArticlesCat(objJson, compteur, more, cat){
    var numImg = compteur%4;
    var nomImg = 'actualite' + cat + numImg;
    articles.innerHTML = articles.innerHTML
                        + '<div class="article">'
                        + '<a class="article-lien" href="' + objJson['articles'][compteur]['url'] + '" target="blank">'
                        + '<h2 class="article-nom">' + objJson['articles'][compteur]['source']['name'] + '</h2>'
                        + '<div class="article-img" style="background-image: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2)),url(../../img/' + nomImg + '.jpg);"></div>'
                        + '<h2 class="article-titre">' + objJson['articles'][compteur]['author'] + '</h2>'
                        + '<div class="article-extrait-container">'
                        + '<p class="article-extrait">' + objJson['articles'][compteur]['title'] + '[...]</p>'
                        + '</div>'
                        + '</a>'
                        + '</div>';
    if(more){
        boutonContainer.innerHTML = bouton;
    }
}

        