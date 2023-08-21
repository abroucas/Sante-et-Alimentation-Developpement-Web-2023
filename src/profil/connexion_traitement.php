<?php 
    session_start(); // systeme de connexion => session (demarrage de la session)
    require_once 'config.php'; // utilisée pour ajouter un fichier contenant des fonctions (ici config.php). Elle assure que si le fichier a déjà été ajouté, il ne sera pas ajouté une deuxième fois.

    if(!empty($_POST['email']) && !empty($_POST['password'])) // Si les champs : email et password existent et qu'ils ne sont pas vident 
    {
        // Patch XSS
        $email = htmlspecialchars($_POST['email']); 
        $password = htmlspecialchars($_POST['password']);

        $email = strtolower($email); // email transformé en minuscule

        // On regarde si l'utilisateur est inscrit dans la table 'Utilisateur'
        $check = $db->prepare('SELECT * FROM Utilisateur WHERE email = ?');
        $check->execute(array($email));
        $data = $check->fetchAll();
        $row = count($data);

        if($row > 0)
        {
            // Si le mail est bien formaté
            if(filter_var($email, FILTER_VALIDATE_EMAIL))
            {
                // Si le mot de passe est le bon (par rapport à celui hashé lors de l'inscription)
                if(password_verify($password, $data[0]['motDePasse']))
                {
                    // On crée la session et on redirige sur landing.php
                    /*$_SESSION['user'] = $data['token'];
                    header('Location: landing.php');
                    die();*/
                    $id = $data[0]['id'];
                    $nom = $data[0]['nom'];
                    $prenom = $data[0]['prenom'];
                    $sexe = $data[0]['sexe'];
                    $date = $data[0]['dateNaissance'];
                    //on met à jour les variables de session
                    include 'landing.php';

                }else{ header('Location: connexion.php?login_err=password'); die(); }
            }else{ header('Location: connexion.php?login_err=email'); die(); }
        }else{ header('Location: connexion.php?login_err=notfound'); die(); }
    }else{ header('Location: connexion.php?login_err=nothing'); die();} // si le formulaire est envoyé sans aucune données, redirection sur la page de connexion

    // Patch XSS : éviter l'injection d'un script arbitraire dans une page pour provoquer une action bien définie (action malveillante)