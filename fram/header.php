<?php require('./config/session.php'); ?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>RetroGames</title>
        <link rel="stylesheet" type="text/css" href="./css/header.css">
        <meta charset="utf-8"> 
        <link rel="shortcut icon" href="./img/">
    </head>
    <body>
        <h1 class="Titre">RétroGame</h1>
        <ul class="nav-list">
            <il class="nav-item"><a href="index.php">Accueil</a></il>
            <il class="nav-item"><a href="produits.php">Article</a></il>
            
            <?php 
            if(isset($_SESSION['username'])) {}else{
            ?>
                <il class="log-reg-item"><a href="register.php">Register</a></il>
            <?php }; ?>
            
            <?php
            if(isset($_SESSION['username'])) {
                ?>
                <il class="nav-item"> <a href="infoClient.php">mes infos</a></il>
            <?php } ?>

            <?php
            if(isset($_SESSION['username'])) {
                ?>
                <il class="nav-item"> <a href="deconnexion.php">déconnexion</a></il>
            <?php }?>
            <?php
            if(isset($_SESSION['username'])) {}else{
            ?>
                <il class="log-reg-item"><a href="login.php">login</a></il>
            <?php } ?>
            <il class="nav-item"><a href="#">Nous Contacter</a></il>
          
        </ul>
        </nav>
