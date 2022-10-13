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
<?php require('./fram/header.php') ?>
<div class="contenaire-box-center">
</br>
<!--message personnaliser-->
            </br> 
            <p>Bienvenue sur RetroGame</p>
            <?php 
            if(isset($_SESSION['username'])) { 
             ?> <p>
            <?php echo $data['username'];}
            ?> </p>
<!-- restant du html-->                
        </br><p>Le site pour trouver vos jeux retro préféré !</p>
            <p></br>Vous retrouverais un catalogue de jeux bien fournie !</p>
            <p>Si vous désirer vendre vos jeux sur se site, vous le pouvez ! </br>
            Il vous suffis simplement de nous contacter via le formulaire de contacte </br>
            afin de vous rajouter dans le programme vendeur !</p>
            <p></br>n'hésiter pas à jeter un coup d'oeil ! </br>
            La pièce manquante de votre collection se cache sans doute parmis notre séléction. </p>

            <img class="logo"src="./image/logoretro.png"> 
<?php require("./fram/footer.php")
?> 