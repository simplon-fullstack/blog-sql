console.log("JS chargé");


// ICI ON VA AJOUTER DU CODE JS
// ENVOYER LE FORMULAIRE EN AJAX
// => AVANTAGE: 
// ON NE CHANGE PAS DE PAGE QUAND ON ENVOIE LES INFOS DU FORMULAIRE
// COOL POUR LE VISITEUR CAR PAS DE "FLASH" AVEC LA PAGE QUI SE RECHARGE
// COOL POUR LE DEV: PLUS EFFICACE CAR ON NE DETRUIT PAS LA PAGE

// ENSUITE:
// QUAND ON VA RECEVOIR LE TEXTE JSON DU SERVEUR
// => ON VA POUVOIR LE TRANSFORMER EN OBJET JS
// => COOL PARCE QUE PHP ET JS PEUVENT COMMUNIQUER AVEC UNE API

// ETAPE1: AJOUTER UNE CLASSE ajax SUR LES BALISES form QU'ON VEUT TRANSFORMER
// ETAPE2: JE DOIS AJOUTER UN EVENT LISTENER 
// SUR LES EVENEMENTS submit DE CES FORMULAIRES

// je sélectionne les balises form qui ont la classe ajax
var listeFormAjax = document.querySelectorAll("form.ajax");
// parcourir chaque balise pour ajouter un event listener
listeFormAjax.forEach(function(balise){
    // debug
    console.log(balise);
    // pour chaque balise, je rajoute un event listener 
    // sur l'évenement submit
    balise.addEventListener('submit', function (event){
        // bloquer le formulaire classique
        // avantage: on ne change plus de page
        event.preventDefault();
        console.log("formulaire bloqué");
        console.log(this);  // this contient la balise form activée
        // perdu: on n'envoie plus le formulaire
        // solution: ajouter ajax pour envoyer le formulaire
        // récupérer les infos du formulaire
        // et ensuite, je vais les envoyer avec fetch
        // https://developer.mozilla.org/fr/docs/Web/API/Fetch_API/Using_Fetch
        var formData = new FormData(this);

        fetch("api-json.php", {
            method: "POST",
            body: formData
        })
        .then(function(reponseServeur){
            // JE VEUX CONVERTIR LE TEXTE JSON EN OBJET JS
            return reponseServeur.json();
        })
        .then(function(objetJS){
            // debug
            console.log(objetJS);

            if (objetJS.confirmation)
            {
                // je vais changer le texte de la balise div.confirmation
                // avec le texte envoyé par le serveur
                console.log(balise);
                // de balise, je vais chercher la le html div.confirmation
                var baliseConfirmation = balise.querySelector(".confirmation");
                baliseConfirmation.innerHTML = objetJS.confirmation;
            }

            if (objetJS.tabArticle)
            {
                // on va utiliser ce tableau pour construire du HTML
                construireHtmlArticle(objetJS.tabArticle);
            }
        })
        ;
        // COOL, JE RESTE SUR LA MEME PAGE
        // ET J'ENVOIE LES INFOS A api-json.php
        // ET LE TRAITEMENT EST BIEN EFFECTUE

    });
})


function construireHtmlArticle (tabArticle)
{
    // on va utiliser la balise div.listeBlog
    // et on va remplir cette balise avec des articles à partir du tableau
    var baliseListeBlog = document.querySelector('.listeBlog');

    // protection dans le cas 
    // où la page ne contient pas de balise div.listeBlog
    if (baliseListeBlog == null)
        return;     // ON S'ARRETE ICI ET ON NE FAIT LE RESTE DU CODE

    // effacer la liste d'avant
    baliseListeBlog.innerHTML = '';

    // parcourir les éléments du tableau
    tabArticle.forEach(function(article){
        // pour chaque article, je vais créer du HTML
        // et l'insérer dans la balise div.listeBlog
        var codeHTML = `
            <article>
                <h3>${article.titre}</h3>
                <img src="${article.photo}" alt="${article.photo}">
                <p>${article.contenu}</p>
            </article>
        `;

        baliseListeBlog.insertAdjacentHTML('beforeEnd', codeHTML);
    })



}







