// JavaScript source code
function verifier(){
           
            var nom = document.getElementById('nom').value;
            var prenom = document.getElementById('prenom').value;
            var dateNaissance = document.getElementById('date').value;
            var email = document.getElementById('email').value;
            var mdp = document.getElementById('mdp').value;
            var mdpBis = document.getElementById('mdpBis').value;
            if (nom.length==0) {
                alert(" Veuillez saisir votre nom ");
            }
            else if (nom.length<=2){
                    alert("Nom trop court !");
                }
            else if(nom.length>15){
                        alert("Nom trop long !");
                 }
             else if (nom != nom.toUpperCase()) {
                            alert("Le nom doit être en majuscule !");
                        }
            else if((/0-9/).test(nom)){
                alert("Nom invalide ! ")
            }

            else if (prenom.lenght==0) {
                alert("Le prénom est obligatoire !");
                
            }
            else if (prenom != prenom.toUpperCase()) {
                            alert("Le prénom doit être en majuscule !");
                        }
           
            if (dateNaissance.lenght==0) {
                alert("Date obligatoire");
            }
            var format = /^(\d{1,2}\/){2}\d{4}$/;
            if (!format.test(dateNaissance)) {
                alert("Date invalide !");
            }
            if (mdp != mdpBis){
                alert("Les deux mots de passe sont différents !")
            }
            if (mdp.lenght==0){
                alert("Le mot de passe est obligatoire !")
            }
            if (mdpBis.lenght==0){
                alert("Veuillez confirmer votre mot de passe !")
            }
            var mail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
            if(!mail.test(email)){
                alert("Adresse email non valide !")
            }
        }
    