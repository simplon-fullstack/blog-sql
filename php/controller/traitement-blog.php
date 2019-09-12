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


// DONNER LE MESSAGE DE CONFIRMATION
$confirmation = "article publié ($titre)";

// JE PEUX DONNER LA LISTE DES ARTICLES DU BLOG
$tabLigne = lireTableBlog();


/*
insererLigneBlog([
    "titre"     => $titre,
    "contenu"   => $contenu,
    "photo"     => $photo,
]);
*/


