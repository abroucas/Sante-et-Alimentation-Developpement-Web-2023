<?php 
session_start();
    require_once 'config.php'; // On inclut la connexion à la bdd
    // Si les variables existent et qu'elles ne sont pas vides
    if (!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['password_retype']) && !empty($_POST['sexe']) && !empty($_POST['date'])) {
        $nom = htmlspecialchars($_POST['nom']);
        $prenom = htmlspecialchars($_POST['prenom']);
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);
        $password_retype = htmlspecialchars($_POST['password_retype']);
        $sexe = htmlspecialchars($_POST['sexe']);
        $date = htmlspecialchars($_POST['date']);

        // On vérifie si l'utilisateur existe
        //$check = $db->prepare('SELECT id FROM Utilisateur WHERE email=' . $email . ';');
        $check = $db->prepare('SELECT id FROM Utilisateur WHERE email=?;');
        if($check){
            //$check->execute();
            $check->execute(array($email));
            $data = $check->fetchAll();
            $row = count($data);
        }      

        //$email = strtolower($email); // on transforme toute les lettres majuscule en minuscule 
        
        // Si la requete renvoie un 0 alors l'utilisateur n'existe pas 
        if($row == 0){ 
            if((strlen($nom) && strlen($prenom)) <= 100){ // On verifie que la longueur du nom et prenom <= 100
                if(strlen($email) <= 100){ // On verifie que la longueur du mail <= 100
                    if(filter_var($email, FILTER_VALIDATE_EMAIL)){ // Si l'email est de la bonne forme
                        if($password === $password_retype){ // si les deux mdp saisis sont bons

                            // On hashe le mot de passe avec Bcrypt, via un coût de 12
                            $cost = ['cost' => 12];
                            $password = password_hash($password, PASSWORD_BCRYPT, $cost);
                            
                            // On insère dans la base de données
                            $insert = $db->prepare('INSERT INTO Utilisateur(id, nom, prenom, email, motDePasse, sexe, dateNaissance/*, token*/) VALUES(:id ,:nom, :prenom, :email, :motDePasse, :sexe, :dateNaissance/*, :token*/)');
                            $insert->execute(array(
                                'id' => 0,
                                'nom' => $nom,
                                'prenom' => $prenom,
                                'email' => $email,
                                'motDePasse' => $password,
                                'sexe' => $sexe,
                                'dateNaissance'=> $date
                                //'token' => bin2hex(openssl_random_pseudo_bytes(64))
                            ));
                            //on recupere l'id du compte
                            $recupId = $db->prepare('SELECT id FROM Utilisateur WHERE email = ?;');
                            $recupId->execute(array($email));
                            $recupIdReponse = $recupId->fetchAll();
                            $id = $recupIdReponse[0]['id'];
                            //on met à jour les variables de session
                            include 'landing.php';

                            die();
                        }else{ header('Location: inscription.php?reg_err=password'); die();}
                    }else{ header('Location: inscription.php?reg_err=email'); die();}
                }else{ header('Location: inscription.php?reg_err=email_length'); die();}
            }else{ header('Location: inscription.php?reg_err=nom_length'); die();}
        }else{ header('Location: inscription.php?reg_err=already'); die();}
    }
    else{
        header('Location: inscription.php?reg_err=void'); die();
    }