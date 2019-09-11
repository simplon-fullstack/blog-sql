<?php


// RECUPERE LES INFOS DU FORMULAIRE
// titre, contenu, photo
$titre = $_REQUEST["titre"] ?? "";
$contenu = $_REQUEST["contenu"] ?? "";
$photo = $_REQUEST["photo"] ?? "";

// INSERER DANS LA TABLE blog
insererLigneTable("blog", [
    "titre"     => $titre,
    "contenu"   => $contenu,
    "photo"     => $photo,
]);

/*
insererLigneBlog([
    "titre"     => $titre,
    "contenu"   => $contenu,
    "photo"     => $photo,
]);
*/


