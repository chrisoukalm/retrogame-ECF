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
            <il class="nav-item"><a href="#">Article</a></il>
            <il class="log-reg-item"><a href="register.php">Register</a></il>
            <il class="log-reg-item"><a href="login.php">login</a></il>
            <il class="nav-item"><a href="#">Nous Contacter</a></il>
            <il class="nav-item"> <a href="#">info sur :<?php echo $data['username'];?></a></il>
            <?php if(sess){ ?>
            <il class="nav-item"> <a href="#">info sur :<?php echo $data['username'];?></a></il>    
           <?php }?>
        </ul>
        </nav>
