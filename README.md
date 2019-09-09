# blog-sql

Blog avec sql

## BASES DE SQL

    SQL VA GERER LE STOCKAGE DES INFORMATIONS POUR NOUS
    SQL VA GERER LES FICHIERS (ET NOUS ON VA UTILISER SQL...)

    Structure pour SQL

    DataBase => DB 
    (Base De Données => BDD)

    POUR CHAQUE PROJET, ON VA CREER UNE BASE DE DONNEES

    ET ENSUITE DANS LA BASE DE DONNEES, ON VA CREER DES TABLES

    PAR EXEMPLE:
        newsletter
        contact
        blog

    ET ENSUITE DANS CHAQUE TABLE, ON VA CREER DES COLONNES POUR DISTINGUER LES INFORMATIONS

    CHAQUE LIGNE D'UNE TABLE EST UN JEU DE DONNEES QUI FORME UN ENSEMBLE


    Database
        Table
            Colonne
                Ligne

## SITE COURS SQL EN FRANCAIS

    https://sql.sh/


    Structured
    Query
    Language

    => Langage de requêtes structurées

    PAR RAPPORT AUX AUTRES LANGAGES 
    (HTML, CSS, JS, PHP => ANNEES 95)
    SQL EST UN ANCIEN LANGAGE 
    => ANNEES 70-80
    => SI ON UTILISE TOUJOURS SQL, C'EST QUE CA MARCHE BIEN

    => Programme pour SQL
    MySQL       => RACHETE PAR Oracle IL Y A UNE DIZAINE D'ANNEES
    MariaDB

    SQL 
    => LANGAGE UTILISE PAR LES ADMINISTRATEURS DE BASE DE DONNEES
    => Oracle EST UNE DES PLUS GRANDES ENTREPRISES AU MONDE

    MySQL EST OPEN-SOURCE ET GRATUIT
    => COMMUNAUTE BENEVOLES AUTOUR DE CE PROGRAMME
    => UNE PARTIE DE LA COMMUNAUTE A DECIDE DE LANCER MariaDB 
        (Fork => Fourchette)
        POUR GARANTIR LA COTE OPEN-SOURCE ET GRATUIT

    POUR LE MOMENT, LES 2 OUTILS RESTENT COMPATIBLES
    => PAS DE DIFFERENCE POUR NOUS

    DANS LA CONCURRENCE, DEPUIS 5-10 ANS, ON ENTEND PARLER D'OUTILS NoSQL
    Not Only SQL
    => Cassandra, CouchDB, etc...
    => Attention: ces bases de données ne sont pas compatibles avec SQL
    => NodeJS


## FONCTIONNALITES POUR DEVELOPPEURS WEB

    CYCLE DE VIE DE L'INFORMATION

    Create      => INSERER UNE LIGNE DANS UNE TABLE SQL
    Read        => ACCEDER EN LECTURE A UNE INFORMATION STOCKEE DANS SQL
    Update      => METTRE A JOUR UNE INFORMATION
    Delete      => SUPPRIMER UNE INFORMATION


## CREATE AVEC SQL: INSERT INTO


    CODE SQL POUR INSERER UNE NOUVELLE LIGNE DANS LA TABLE blog
    => ATTENTION AUX BACKTICK ET AUX QUOTES

    INSERT INTO `blog` 
    (`id`, `titre`, `contenu`, `photo`) 
    VALUES 
    (NULL, 'titre1013', 'contenu1013', 'assets/images/photo1.jpg');

    => ON POURRA UTILISER UNE VERSION SIMPLIFIEE
    => IL FAUT CREER DES NOMS DE TABLES ET DE COLONNES SIMPLES
    => (PAS DE CARACTERE BIZARRE NI D'ESPACE)

    INSERT INTO blog 
    (id, titre, contenu, photo) 
    VALUES 
    (NULL, 'titre1014', 'contenu1014', 'assets/images/photo2.jpg');


    => VERSION ENCORE PLUS SIMPLIFIEE
    => C'EST MySQL QUI GERE LA COLONNE id
    => JE N'AI PAS BESOIN DE M'EN OCCUPER ;-p

    INSERT INTO blog 
    (titre, contenu, photo) 
    VALUES 
    ('titre1015', 'contenu1015', 'assets/images/photo3.jpg');


    EXERCICE: SI JE VEUX INSERER DANS LA TABLE newsletter
    UNE NOUVELLE LIGNE
    nom     rihanna
    email   rihanna@gmail.com

    EN SQL:

    INSERT INTO newsletter
    (nom, email)
    VALUES
    ('rihanna', 'rihanna@gmail.com')


    => IL FAUT QUE NOTRE CODE PHP CREE CE CODE SQL


    EXERCICE2: SI JE VEUX INSERER UNE LIGNE DANS LA TABLE contact

    nom         fatoumata
    email       fatoumata@gmail.com
    message     coucou c'est moi
    (=> ATTENTION AUX QUOTES '')

    EN SQL

    INSERT INTO contact
    (nom, email, message)
    VALUES
    ('fatoumata', 'fatoumata@gmail.com', 'coucou c\'est moi');











