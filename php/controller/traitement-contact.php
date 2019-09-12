<?php

        // IL FAUT TRAITER LE FORMULAIRE contact

        // RECUPERER LES INFOS
        $nom = $_REQUEST["nom"] ?? "";
        $email = $_REQUEST["email"] ?? "";
        $message = $_REQUEST["message"] ?? "";


        // UNE FOIS QU'ON A CETTE FONCTION A NOTRE DISPOSITION
        // POUR L'UTILISER, ON VA APPELER LA FONCTION
        insererLigneTable("contact", [
                "nom" => $nom, 
                "email" => $email, 
                "message" => $message 
                ]);
        /*
        insererLigneContact([
            "nom" => $nom, 
            "email" => $email, 
            "message" => $message 
            ]);
        */

        // ENVOYER UN MAIL
        // envoyer un email
        $ligne = 
<<<CODETEXT
-------------
Nom: $nom
Email: $email
Message:
$message

CODETEXT;
        @mail("webmaster@monsite.fr", "nouveau message contact", $ligne);
        
        // DONNER UN MESSAGE DE CONFIRMATION
        $confirmation = "Merci de votre message $nom ($email)";  

        // STOCKER LES INFOS 
        // => DANS LA TABLE SQL contact

        // JE VAIS CONSTRUIRE UNE FONCTION QUI VA ME SERVIR A INSERER UNE LIGNE DANS UNE TABLE
        // insererLigne("contact", [ "nom" => $nom, "email" => $email, "message" => $message ]);
        // insererLigneContact([ "nom" => $nom, "email" => $email, "message" => $message ]);

        // PROGRAMMATION
        // ON VEUT CREER UNE FONCTION insererLigneContact 
        // QUI VA INSERER UNE LIGNE DANS LA TABLE SQL contact
        // CETTE FONCTION PREND EN PARAMETRE $tabAssoTokenValeur UN TABLEAU ASSOCIATIF

