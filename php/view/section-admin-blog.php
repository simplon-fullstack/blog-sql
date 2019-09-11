

        <section>
            <h3>BACK OFFICE DU BLOG</h3>
            <form action="api-json.php" method="POST">
                <!--PARTIE PUBLIQUE -->
                <label>
                    <span>titre</span>
                    <input type="text" name="titre" required placeholder="entrez votre titre">
                </label>
                <label>
                    <span>contenu</span>
                    <textarea name="contenu" cols="80" rows="10" required placeholder="entrez votre contenu"></textarea>
                </label>
                <label>
                    <span>titre</span>
                    <select name="photo">
                        <option value="assets/images/photo1.jpg">photo1</option>
                        <option value="assets/images/photo2.jpg">photo2</option>
                        <option value="assets/images/photo3.jpg">photo3</option>
                        <option value="assets/images/photo4.jpg">photo4</option>
                        <option value="assets/images/photo5.jpg">photo5</option>
                    </select>
                </label>
                <button type="submit">PUBLIER VOTRE ARTICLE</button>
                <!--PARTIE TECHNIQUE -->
                <div class="confirmation">
                    <!-- ICI ON AFFICHERA LE MESSAGE DE CONFIRMATION -->
                </div>
                <input type="hidden" name="idFormulaire" value="blog">
            </form>
        </section>
