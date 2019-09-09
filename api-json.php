<?php

// CE FICHIER VA CENTRALISER TOUS LES FORMULAIRES DU FRONT

$idFormulaire = $_REQUEST["idFormulaire"] ?? "";

// SI IL Y UNE VALEUR DANS $idFormulaire
// ALORS IL Y A UN FORMULAIRE A TRAITER
if ($idFormulaire != "")
{
    // IL FAUT DISTINGUER LE FORMULAIRE A TRAITER
    if ($idFormulaire == "contact")
    {
        // IL FAUT TRAITER LE FORMULAIRE contact

        // RECUPERER LES INFOS

        $nom = $_REQUEST["nom"] ?? "";
        $email = $_REQUEST["email"] ?? "";
        $message = $_REQUEST["message"] ?? "";

        // STOCKER LES INFOS 
        // => DANS LA TABLE SQL contact
        $requeteSQL =
<<<CODESQL

INSERT INTO contact
(nom, email, message)
VALUES
( '$nom', '$email', '$message' )

CODESQL;

        // ENVOYER LA REQUETE SQL
        // UN PEU PENIBLE CAR PHP NE FOURNIT PAS LE CODE FACILE
        // ... ON VA LA CREER UNE FOIS ET L'UTILISER DANS DES FONCTIONS

        // ETAPE1: CONNECTER PHP AVEC MYSQL
        // https://www.php.net/manual/fr/pdo.construct.php

        // Data Source Name
        $dsn = 'mysql:dbname=blog-sql;host=localhost;charset=utf8mb4';
        $user = 'root';
        $password = '';
        // créer la connexion avec MySQL
        $dbh = new PDO($dsn, $user, $password);

        // MANIERE RAPIDE MAIS PAS SECURISEE CONTRE LES INJECTIONS SQL... 
        // https://www.php.net/manual/fr/pdo.exec.php
        // $dbh->exec($requeteSQL);

        // MANIERE PLUS SECURISEE
        // https://www.php.net/manual/fr/pdo.prepare.php
        // EN 2 ETAPES
        // ON NE CREE PAS LA REQUETE SQL AVEC LES VALEURS 
        // MAIS ON UTILISE DES TOKENS/JETONS (PLACEHOLDER)
        $requeteSQLPreparee =
<<<CODESQL

INSERT INTO contact
(nom, email, message)
VALUES
( :nom, :email, :message )

CODESQL;

        $tabAssoTokenValeur = [
            "nom"       => $nom,
            "email"     => $email,
            "message"   => $message,
        ];

        // LA REQUETE SE FAIT EN 2 TEMPS
        // ETAPE prepare
        $pdoStatement = $dbh->prepare($requeteSQLPreparee);
        // ETAPE execute
        $pdoStatement->execute($tabAssoTokenValeur);
    }
}