document.getElementById("imc-boutton").addEventListener("click", (event) =>{
    var taille = document.getElementById("imc-taille").value/100;
    var poids = document.getElementById("imc-poids").value;
    if(taille != 0){
        imc = poids/(taille*taille)*10;
        imc = Math.round(imc)/10;
        document.querySelector(".imc-resultat").innerHTML = "Vous avez un IMC de " + imc;
    }
});
