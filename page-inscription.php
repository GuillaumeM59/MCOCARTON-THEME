<?php get_header(); ?>

<section id="main">
        <h3>INSCRIPTION AUX ATELIERS CARTONNAGE.</h3>

        <section class="flex_inscription">


            <!--//////// buttons links to socials medias ///////-->



            <!--   REGISTRE FORM-->
            <form class="formulaire_inscription_container" action="inscription.html" method="post">
                <h4>
                  <i class="fa fa-share fa-1x" aria-hidden="true"></i>Je m'inscris en ligne:
                </h4>
                    <fieldset class="formulaire_inscription">
                        <h5> Nombre de personnes par groupe limitées!</h5>
                        <p>(*)renseignements obligatoires.</p>
                            <label for="name">Nom:</label>(*)
                            <input type="text" id="name" name="Nom du client">
                            <label for="last_name">Prénom:</label>(*)
                            <input type="text" id="last_name" name="Prénom du client">
                            <label for="adress">Adresse:</label>(*)
                            <input type="text" id="adress" name="adresse du client">
                            <label for="adress">Code postal:</label>
                            <input type="text" id="adress" name="code postale">
                            <label for="adress">Ville:</label>
                            <input type="text" id="adress" name="ville du client">
                            <label for="tel">Téléphone:</label>(*)
                            <input type="text" id="tel" name="Numero_de_telephne_du_client">
                            <label for="mail">Email:</label>(*)
                            <input type="email" id="mail" name="email du client">
                    </fieldset>
                    <fieldset class="checkboxes">
                            <h5> LES ATELIERS </h5>
                            <input type="radio" id="tourcoing" value="tourcoing" name="ville du client">
                            <label for="tourcoing">Lundi</label>
                            <input type="radio" id="roubaix" value="roubaix" name="ville du client">
                            <label for="roubaix">Mardi</label>
                            <input type="radio" id="wattrelos" value="wattrelos" name="ville du client">
                            <label for="wattrelos">Mercredi</label>
                            <input type="radio" id="croix" value="croix" name="ville du client">
                            <label for="croix">Jeudi</label>
                            <input type="radio" id="wasquehal" value="wasquehal" name="ville du client">
                            <label for="wasquehal">Vendredi</label>
                    </fieldset>
                    <br>
                    <button type="submit" class="button-inscrit">Je m'inscris</button>
            </form>


            <article class="description_inscription">
                <h4>Les Ateliers de loisirs créatifs.</h4>
                <br>
                <p> Les ateliers ont lieu tous les matins DU LUNDI AU VENDREDI de 9h00 à 12h00 dans les locaux de l'ADEP de ROUBAIX.
                    Pour participer à ses matinées créatives, il vous suffit de vous <span>inscrire en ligne </span>.
                    Le matériel est fourni ainsi que la bonne humeur!
                    <br>
                    Michel Castelain vous accompagne et vous conseille tout au long de votre projet de cartonnage.
                    L'initiation au façonnage du carton s'effectue en trois étapes:le découpage, l'assemblage et la conception finale.
                    Bien évidemment, vous pouvez venir visiter les ateliers!
                </p>
            </article>


            <article class="atelier_inscription">
                <h4>  Le carton,ça cartonne!!!</h4>
                <p>Plus qu’une tendance, l’écologie est un mode de vie qui vise à préserver et à protéger notre environnement. Ce courant de pensée est aujourd’hui une réelle façon de se démarquer de la concurrence, en affichant des valeurs « eco-friendly ».
                   Actuellement, les produits "fashions et écolos" sont les objets de décorations et le mobilier en carton.</p>
            </article>

    </section>
        <!-- END REGISTRE FORM  -->
        <!--////////    end description for inscrition on ligne  ///////-->

</section>


<?php get_footer(); ?>
