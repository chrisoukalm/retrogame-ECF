<?php

function ajouter($nom,$image,$prix,$description)
{
    if(require("connexion.php"))
    {
        $req = $access->prepare("INSERT INTO produits (image, nom, prix, description) VALUES($image,$nom,$prix,$description)");

        $req->execute(array($nom,$image,$prix,$description));

        req->closeCursor();

    }
}

function afficher()
{
    if(require("connexion.php"))
    {
        $req= $access->prepare("SELECT * FROM produits ORDER BY id DESC");

        $req->execute();

        $data = $req->fetchALL(PDO::FETCH_OBJ);

        return $data;

        req->closeCursor();

    }
}

function supprimer($id)
{
    if(require("connexion.php"))
    {
        $req=$access->prepare("DELETE * FROM produits WHERE id=?");
        
        $req->execute(array($id));
    }
}
?>
