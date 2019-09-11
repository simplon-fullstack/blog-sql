

        <section>
            <h3>Les Derniers Articles du Blog</h3>
            <div class="listeArticle">
<?php
// ON VEUT RECUPERER LA LISTE DES ARTICLE DE LA TABLE SQL blog
// ET ON LES AFFICHERA DANS DES BALISES HTML article
// (READ)

    require "php/mes-fonctions.php";
    
    // LA FONCTION QUE JE VEUX AVOIR
    $tabLigne = lireTableBlog();

    // JE PARCOURS TOUS LES ELEMENTS DU TABLEAU
    foreach($tabLigne as $ligneAsso)
    {
        $titre      = $ligneAsso["titre"];
        $contenu    = $ligneAsso["contenu"];
        $photo      = $ligneAsso["photo"];

        // JE PEUX CONSTRUIRE LE CODE HTML POUR L'ARTICLE
        echo
<<<CODEHTML
        <article>
            <h3>$titre</h3>
            <img src="$photo" alt="$photo">
            <p>$contenu</p>
        </article>

CODEHTML;

    }
    // DEBUG
    // print_r UN PEU COMME console.log
    // echo "<pre>";
    // print_r($tabLigne);
    // echo "</pre>";

?>
            </div>
        </section>
