<?php 
    session_start();
  require_once('./config/connexion.php');
  if (isset($_POST['username'])&&isset($_POST['password'])){
    $username = htmlspecialchars($_REQUEST['username']);

    $password = htmlspecialchars($_REQUEST['password']);

    //recup info dans la bdd
    $check = $access->prepare('SELECT * FROM client WHERE username = ?');
    $check->execute(array($username));
    $data = $check->fetch();
    $row = $check->rowCount();

    // SI row > 0 alors l'user existe en bdd
    if ($row > 0){
      if(password_verify($password, $data['password']))
      {
        echo $_SESSION['username'];
      /*  $_SESSION['username'] = $data['token'];
        header('Location:./index.php');
        die;*/
      }else{ header('Location: login.php?login_err=password'); die(); }
    }else{ header('Location: login.php?login_err=username'); die(); }
  }else{ header('Location: login.php?login_err=noset'); die(); }
?>