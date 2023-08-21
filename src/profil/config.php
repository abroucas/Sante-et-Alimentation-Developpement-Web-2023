<?php
    try{
        $db = new PDO('mysql:host=localhost;dbname=nutritionEtSante;charset=utf8','root','$tareliKer9#');
    }
    catch (Exception $e){
        die('Erreur : ' . $e->getMessage());
    }

    ?>