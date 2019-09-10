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

    https://sql.sh/cours/insert-into

    CODE SQL POUR INSERER UNE NOUVELLE LIGNE DANS LA TABLE blog
    => ATTENTION AUX BACKTICK ET AUX QUOTES

```sql

    INSERT INTO `blog` 
    (`id`, `titre`, `contenu`, `photo`) 
    VALUES 
    (NULL, 'titre1013', 'contenu1013', 'assets/images/photo1.jpg');

```
    => ON POURRA UTILISER UNE VERSION SIMPLIFIEE
    => IL FAUT CREER DES NOMS DE TABLES ET DE COLONNES SIMPLES
    => (PAS DE CARACTERE BIZARRE NI D'ESPACE)

```sql

    INSERT INTO blog 
    (id, titre, contenu, photo) 
    VALUES 
    (NULL, 'titre1014', 'contenu1014', 'assets/images/photo2.jpg');

```


    => VERSION ENCORE PLUS SIMPLIFIEE
    => C'EST MySQL QUI GERE LA COLONNE id
    => JE N'AI PAS BESOIN DE M'EN OCCUPER ;-p

```sql

    INSERT INTO blog 
    (titre, contenu, photo) 
    VALUES 
    ('titre1015', 'contenu1015', 'assets/images/photo3.jpg');

```


    EXERCICE: SI JE VEUX INSERER DANS LA TABLE newsletter
    UNE NOUVELLE LIGNE
    nom     rihanna
    email   rihanna@gmail.com

    EN SQL:

```sql

    INSERT INTO newsletter
    (nom, email)
    VALUES
    ('rihanna', 'rihanna@gmail.com')

```


    => IL FAUT QUE NOTRE CODE PHP CREE CE CODE SQL


    EXERCICE2: SI JE VEUX INSERER UNE LIGNE DANS LA TABLE contact

    nom         fatoumata
    email       fatoumata@gmail.com
    message     coucou c'est moi
    (=> ATTENTION AUX QUOTES '')

    EN SQL

```sql

    INSERT INTO contact
    (nom, email, message)
    VALUES
    ('fatoumata', 'fatoumata@gmail.com', 'coucou c\'est moi');

```

## DELETE: SUPPRIMER UNE LIGNE

    https://sql.sh/cours/delete

    POUR SUPPRIMER UNE LIGNE

```sql

    DELETE FROM `contact` 
    WHERE 
    `contact`.`id` = 3

```


    ATTENTION: NE PAS OUBLIER LE SELECTEUR
    => CLAUSE WHERE

```sql

    DELETE FROM contact

```


    => SI JE NE METS PAS DE SELECTEUR
    => JE SUPPRIME TOUTES LES LIGNES !!!
    => (ET ON N'A PAS DE CORBEILLE POUR SE RATTRAPER...)

```sql

    DELETE FROM contact
    WHERE id = 4

```


    SUPER IMPORTANT DE BIEN CHOISIR SON SELECTEUR AVEC LA CLAUSE WHERE

    NOTE: ON POURRAIT ECRIRE DES SELECTEURS PLUS COMPLEXES
    (SUR D'AUTRES COLONNES QUE id)

```sql

    DELETE FROM contact
    WHERE nom = 'spammeur'

```


    => ON VERRA PLUS TARD TOUTES LES POSSIBILITES 
        DE SELECTEUR AVEC LA CLAUSE WHERE

## READ: RETROUVER UN ENSEMBLE D'INFORMATIONS DEPUIS UNE TABLE

    https://sql.sh/cours/select

    REQUETE LA PLUS SIMPLE POUR LIRE TOUTES LES INFORMATIONS D'UNE TABLE
    (TOUTES LES LIGNES ET TOUTES LES COLONNES)

```sql

    SELECT * FROM `blog`

```

    PLUS SIMPLIFIEE

```sql

    SELECT * FROM blog

```


    => * TOUTES LES COLONNES
    => ON POURRAIT PRECISER LES COLONNES QUI NOUS INTERESSENT

```sql

    SELECT titre FROM blog

```

    => SI JE VEUX SEULEMENT LA COLONNE titre


```sql

    SELECT titre FROM blog
    WHERE id = 3

```

    => SI JE VEUX SEULEMENT LA COLONNE titre DE LA LIGNE id = 3

    ON PEUT AUSSI TRIER SUIVANT UNE OU PLUSIEURS COLONNES
    EN AJOUTANT ORDER BY

    DESC    => TRI DECROISSANT
    ASC     => TRI CROISSANT


```sql

    SELECT * FROM blog
    ORDER BY id DESC

```

```sql

    SELECT * FROM blog
    ORDER BY titre ASC, id DESC

```

    => IL Y A ENORMEMENT DE POSSIBILITES POUR LE SELECT AVEC LES FILTRES QU'ON PEUT RAJOUTER
    => C'EST VOTRE BOULOT DE DEVELOPPEUR WEB


## UPDATE

    https://sql.sh/cours/update


```sql

    UPDATE `blog` 
    SET 
    `titre` = 'titre1120' 
    WHERE 
    `blog`.`id` = 4;

```


    VERSION SIMPLIFIEE

```sql

    UPDATE blog 
    SET 
    titre = 'titre1120' 
    WHERE 
    id = 4;

```

    => TRES IMPORTANT: NE PAS OUBLIER LE SELECTEUR AVEC LA CLAUSE WHERE


```sql

    UPDATE blog 
    SET 
    titre = 'titre1120' 

```


    => ATTENTION SI ON NE MET PAS DE SELECTEUR AVEC UNE CLAUSE WHERE
    => TOUTES LES LIGNES SONT MODIFIEES

```sql

    UPDATE blog 
    SET 
    titre = 'titre1120',
    contenu = 'nouveau contenu',
    photo = 'assets/images/photo4.jpg' 
    WHERE 
    id = 4;

```

    POUR MODIFIER PLUSIEURS COLONNES, 
    ON SEPARE CHAQUE COLONNE AVEC UNE VIRGULE
    ATTENTION: PAS DE VIRGULE APRES LA DERNIERE COLONNE

### EXERCICES

    INSERER UNE NOUVELLE LIGNES DANS LA TABLE SQL contact

```sql

    INSERT INTO contact
    (nom, email, message)
    VALUES
    ('albert', 'albert@nomail.me', 'salut bébert')

```

    SI JE VEUX CHANGER LE MAIL ET LE MESSAGE

```sql

    UPDATE contact
    SET
    email = 'albert13@nomail.me',
    message = 'adieu bébert'
    WHERE
    id = 5

```
    SI ON VEUT EFFACER LA LIGNE

```sql

    DELETE FROM contact
    WHERE id = 5

```


## PROJET SITE BLOG AVEC SQL

    ON DIT QU'UN CLIENT VEUT UN BLOG
    (Persona => PROFILS VIRTUELS D'UTILISATEUR OU DE CLIENTS...)

    CREER UNE FICHE POUR DECRIRE UNE VRAIE PERSONNE

    Nom: Florence
    Age: 22 ans
    Adresse: Marseille

    Pourquoi elle veut un blog ?
    Elle veut gagner de l'argent
    Publicité avec Google 
    => on gagne de l'argent quand un visiteur clique sur une bannière

    Partenariat avec des marques
    => rédiger des articles sponsorisés

    etc...

    sur quel sujet ?
    Les potins/rumeurs/scandales sur les stars autour de Marseille
    (OM, plus belle la vie, etc...)

    * PARTIE PUBLIQUE (FRONT OFFICE)

    Accueil/Blog        index.php
    Contact             contact.php
    Crédits             credits.php
    Mentions Légales    mentions-legales.php

    * PARTIE ADMIN (BACK-OFFICE)

    Admin Blog          admin-blog.php

    ETAPE SUIVANTE: CREER LES MAQUETTES HTML, CSS

    ENSUITE, ON PEUT CODER SA PAGE index.php


## EXERCICE SQL


    ALLER SUR PHPMYADMIN

    http://localhost/phpmyadmin/

    (L'URL PEUT VARIER SUIVANT VOS SERVEURS WEB...)

    CREER UNE DATABASE blog-sql
    AVEC LE CHARSET utf8mb4_general_ci

    DANS LA DATABASE blog-sql, CREER 3 TABLES

    * TABLE SQL newsletter
        AVEC COMME COLONNES
        id      INT             INDEX=PRIMARY   AUTO_INCREMENT (A_I)
        nom     VARCHAR (160)
        email   VARCHAR (160)

    * TABLE SQL contact
        AVEC COMME COLONNES
        id          INT             INDEX=PRIMARY   AUTO_INCREMENT (A_I)
        nom         VARCHAR (160)
        email       VARCHAR (160)
        message     TEXT

    * TABLE SQL blog
        AVEC COMME COLONNES
        id          INT             INDEX=PRIMARY   AUTO_INCREMENT (A_I)
        titre       VARCHAR (160)
        contenu     TEXT
        photo       VARCHAR (160)


    * VERIFIER QUE CHAQUE TABLE ET CHAQUE COLONNE EST BIEN CREEE
    * INSERER QUELQUES LIGNES AVEC PHPMYADMIN (POUR TESTER)

    * EXERCICES CRUD

    * CREATE
    * CREER DES REQUETES SQL POUR INSERER DES LIGNES DANS CHAQUE TABLE

    * READ
    * CREER DES REQUETES SQL POUR LIRE DES LIGNES DANS CHAQUE TABLE


## COURS MARDI SQL

    DEMARRER SON SERVEUR WEB (XAMPP)
    VERIFIER QUE LE SERVEUR MySQL EST BIEN DEMARRE (2E LIGNE EN VERT)

    DANS LE NAVIGATEUR, ALLER SUR L'URL

    http://localhost/phpmyadmin/

    SI IL Y A BESOIN DE S'IDENTIFIER POUR SE CONNECTER
    login: root
    mot de passe:
    (laisser vide)

    ATTENTION: SUIVANT LES SERVEUS WEB, LE MOT DE PASSE PEUT ETRE DIFFERENT
    (EXEMPLE:   SUR MAMP C'EST  LOGIN: root ET MOT DE PASSE: root)


    CREER LA DATABASE blog-mysql AVEC LE CHARSET utf8mb4_general_ci

    ENSUITE SE PLACER DANS LA DATABASE blog-mysql

    ET CREER LES TABLES
        newsletter
        contact
        blog

    SI ON COMMENCE PAR LA TABLE blog

    PAR CONVENTION: ON METTRA TOUJOURS EN PREMIERE COLONNE

                nom colonne     TYPE    Taille/Valeur   INDEX       A_I
    LA COLONNE  id              INT                     PRIMARY     AUTO_INCREMENT
                titre           VARCHAR (160)
                contenu         TEXT
                photo           VARCHAR (160)

### INSERT POUR AJOUTER UNE LIGNE

    INSERT INTO `blog` 
    (`id`, `titre`, `contenu`, `photo`) 
    VALUES 
    (NULL, 'il pleut ce mardi', 'c\'est la catastrophe à Marseille, il y a 2cm de pluie', 'assets/images/photo1.jpg');


    * VERSION SIMPLIFIEE DE LA REQUETE SQL INSERT INTO

    INSERT INTO blog 
    (titre, contenu, photo) 
    VALUES 
    ('il pleut ce mardi', 'c\'est la catastrophe à Marseille, il y a 2cm de pluie', 'assets/images/photo1.jpg');

    * EXERCICE: CREER LE CODE SQL POUR INSERER UNE DEUXIEME LIGNE

    INSERT INTO blog
    (titre, contenu, photo)
    VALUES
    ('mardi again', 'il pleut toujours', 'assets/images/photo2.jpg')

    * UNE FOIS LA REQUETE SQL ECRITE, COPIER DANS L'ONGLET SQL DE PHPMYADMIN ET EXECUTER POUR VERIFIER QUE LA REQUETE SQL FONCTIONNE CORRECTEMENT





























