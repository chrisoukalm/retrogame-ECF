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
if(isset($_POST['envoyer'])) {

    if(isset($_POST['auteur'], $_POST['objet'], $_POST['message'])){
        echo "information manquante !";
    }else{

        if(!preg_match("#[\W]+",$_POST['auteur'])){
            echo "Seul les lettres sont accepter !";
        }else{
            $auteur = htmlspecialchars($_REQUEST['auteur']);
                // récupérer l'email et supprimer les antislashes ajoutés par le formulaire
            $objet = htmlspecialchars($_REQUEST['objet']);
                // récupérer le mot de passe et supprimer les antislashes ajoutés par le formulaire        $password = htmlspecialchars($_REQUEST['password']);
            $message = htmlspecialchars($_REQUEST['message']);

            if ($row == 0){
                if(strlen($auteur) < 16){
                    $insert = $access->prepare('INSERT INTO commentaire(auteur, objet, message) VALUES(:auteur, :objet, :message)');
                $insert->execute(array(
                'auteur' => $auteur,
                'objet' => $objet,
                'message' => $message));
                }
        }
        };
    };

?>
<?php require('./fram/header.php'); ?>
    <div class="contenaire-formulaire-contact">
        <form class="formulaire-contact" method="post">
            Nom: <input type="text" name="auteur" value=" 
            <?php 
                if(isset($_SESSION['username'])){echo $data['username'];}else{} 
            ?>">
            <br /> <br />
            Sujet: <input type="text" name="objet" value="" />
            <br /> <br />
            Message: <textarea name="message" cols="40" rows="20"></textarea>
            <br /> <br />
            <input type="submit" name="envoyer" value="Envoyer" class="box-button" />
        </form>
    </div>
</body>
</html>