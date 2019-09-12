<?php

// CHARGER MES FONCTIONS POUR POUVOIR LES UTILISER
require "php/mes-fonctions.php";

// CE FICHIER VA CENTRALISER TOUS LES FORMULAIRES DU FRONT

$idFormulaire = $_REQUEST["idFormulaire"] ?? "";

// SI IL Y UNE VALEUR DANS $idFormulaire
// ALORS IL Y A UN FORMULAIRE A TRAITER
if ($idFormulaire != "")
{
    // IL FAUT DISTINGUER LE FORMULAIRE A TRAITER
    if ($idFormulaire == "contact")
    {
        require "php/controller/traitement-contact.php";
    }

    if ($idFormulaire == "blog")
    {
        require "php/controller/traitement-blog.php";
    }

}

// JE VAIS AJOUTER DU CODE PHP POUR PRODUIRE DU TEXTE JSON
// https://www.php.net/manual/fr/function.json-encode.php
// DANS PHP SI ON A UN TABLEAU ASSOCIATIF
// LA FONCTION json_encode PRODUIT UN TEXTE AU FORMAT JSON 
// A PARTIR DE CE TABLEAU ASSOCIATIF

$tabAssoJson = [
    "cle1"          => "valeur1",
    "cle2"          => "valeur12",
    "confirmation"  => $confirmation ?? "",
    "tabArticle"    => $tabLigne ?? [],
];

$texteJson = json_encode($tabAssoJson, JSON_PRETTY_PRINT);

// afficher le texte json
echo $texteJson;
