<?php
session_start();
        require_once 'connexion.php'; // ajout connexion bdd 
       // si la session existe pas soit si l'on est pas connecté on     redirige
        if(isset($_SESSION['username'])){
            $req = $access->prepare('SELECT * FROM client WHERE  token    = ?');
            $req->execute(array($_SESSION['username']));
            $data = $req->fetch();
        }
        // On récupere les données de l'utilisateur
?>