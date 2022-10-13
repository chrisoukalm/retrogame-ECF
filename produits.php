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
<?php 
    require('./fram/header.php');
    require('./config/commandes.php') 
?>
<div class="articles">
    <div class="card-object">
        <p>nom</p>
        <img src=""></img>
        <p>desciption</p>
        <p>prix</p>

    </div>
</div>
<?php 
    require('./fram/footer.php')
?>