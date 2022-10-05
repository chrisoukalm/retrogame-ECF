<?php 
  require_once('./fram/header.php');
  if(isset($_GET['login_err'])){
    $err = htmlspecialchars($_GET['login_err']);

    switch($err)
    {
      case 'username':
      ?>
          <div class="alert alert-danger">
              <strong>Erreur</strong> username incorrect
          </div>
      <?php
      break;

      case 'password':
      ?>
          <div class="alert alert-danger">
              <strong>Erreur</strong> mot de passe incorrect
          </div>
      <?php
      break;
      case 'noset':
        ?>
            <div class="alert alert-danger">
                <strong>Erreur</strong> username ou mots de passe incorrect
            </div>
        <?php
        break;
    }
  }
?>
<form class="box-login-regist" action="validation.php" method="post" name="login">
<h1 class="box-logo box-title"><a href="">retrogame</a></h1>
<h1 class="box-title">Connexion</h1>
<input type="text" class="box-input" name="username" placeholder="Nom d'utilisateur">
<input type="password" class="box-input" name="password" placeholder="Mot de passe">
<input type="submit" value="Connexion " name="submit" class="box-button">
<p class="box-register">Vous êtes nouveau ici? <a href="register.php">S'inscrire</a></p>
<?php 
require_once('./fram/footer.php'); 
?>