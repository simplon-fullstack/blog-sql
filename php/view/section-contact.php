

        <section>
            <h3>Formulaire de contact</h3>
            <form class="ajax" method="POST" action="api-json.php">
                <label>
                    <span>nom</span>
                    <!-- CONSEIL: DONNER EN name LE NOM DE LA COLONNE SQL -->
                    <input type="text" name="nom" required placeholder="entrez votre nom">
                </label>
                <label>
                    <span>email</span>
                    <!-- CONSEIL: DONNER EN name LE NOM DE LA COLONNE SQL -->
                    <input type="email" name="email" required placeholder="entrez votre email">
                </label>
                <label>
                    <span>message</span>
                    <!-- CONSEIL: DONNER EN name LE NOM DE LA COLONNE SQL -->
                    <textarea name="message" cols="80" rows="5" required placeholder="entrez votre message"></textarea>
                </label>
                <button type="submit">ENVOYER VOTRE MESSAGE</button>
                <div class="confirmation">
                    <!-- ICI AVEC AJAX, ON AFFICHERA LE MESSAGE DE CONFIRMATION -->
                </div>
                <!-- INFO TECHNIQUE POUR DIFFERENCIER LES FORMULAIRES -->
                <input type="hidden" name="idFormulaire" value="contact">
            </form>
        </section>
