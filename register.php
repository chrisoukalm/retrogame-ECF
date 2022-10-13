<?php require('./config/session.php');
require('./fram/header.php') ?>
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
require('./config/connexion.php');

//if(!$_SESSION['username']){
  //header('Location : index.php');
//}


if (isset($_POST['username'], $_POST['email'], $_POST['password'])){
  // récupérer le nom d'utilisateur et supprimer les antislashes ajoutés par le formulaire
  $username = htmlspecialchars($_REQUEST['username']);
  // récupérer l'email et supprimer les antislashes ajoutés par le formulaire
  $email = htmlspecialchars($_REQUEST['email']);
  // récupérer le mot de passe et supprimer les antislashes ajoutés par le formulaire
  $password = htmlspecialchars($_REQUEST['password']);
  $email = strtolower($email);

  //recup info dans la bdd
  $check = $access->prepare('SELECT * FROM client WHERE email = ?');
  $check->execute(array($email));
  $data = $check->fetch();
  $row = $check->rowCount();

  // SI row > 0 alors l'user existe en bdd
  if ($row == 0){
    if(strlen($username) < 16){
      if(filter_var($email, FILTER_VALIDATE_EMAIL)){
        $cost = ['cost' => 12];
        $password = password_hash($password, PASSWORD_BCRYPT, $cost);
        
        $insert = $access->prepare('INSERT INTO client(email, password, username,  grade, token) VALUES(:email, :password, :username, :grade, :token)');
        $insert->execute(array(
            'email' => $email,
            'password' => $password,
            'username' => $username,
            'grade' => 'CUSTOMER',
            'token' => bin2hex(openssl_random_pseudo_bytes(64))));
          
        
        
      header('index.php');

        //$query = "INSERT into `client` (username, email, password)
          //    VALUES ('$username', '$email', '".hash('sha256', $password)."')";
      }
    }
  }
  
  
}
?>
<form class="box-login-regist" action="" method="post">
  <h1 class="box-logo box-title"><a href="index.php">RetroGame</a></h1>
    <h1 class="box-title">S'inscrire</h1>
  <input type="text" class="box-input" name="username" placeholder="Nom d'utilisateur" required />
    <input type="text" class="box-input" name="email" placeholder="Email" required />
    <input type="password" class="box-input" name="password" placeholder="Mot de passe" required />
    <input type="submit" name="submit" value="S'inscrire" class="box-button" />
    <p class="box-register">Déjà inscrit? <a href="login.php">Connectez-vous ici</a></p>
</form>
<?php require('./fram/footer.php')?>