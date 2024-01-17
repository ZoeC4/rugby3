<?php
    include("entete.php");
?>
<nav accesskey="n" class="fil_ariane" id="nav" aria-label="Menu principal">
            <p>
                <a href="#section" tabIndex="0"  title="Passer au contenu de la page">
                    <img src="img/section.svg" alt="dessin d'une bo&icirc;te ferm&eacute;e" class="iconesN" title="Passer au contenu de la page">
                    <span class="hidden">Passer au contenu de la page > </span></a>&nbsp;
                <a href="index.php" tabIndex="0">Index</a> > <a href="informations.php" tabIndex="0">A propos</a> > <a href="reference.php" tabIndex="0">Ensemble de r&eacute;f&eacute;rences</a>
            </p>
            <!-- y mettre le fil d'ariane pour les autres pages-->
        </nav>
        <div class="flex_container1">
            <section id="section" accesskey="s" aria-label="Contenu principal de la page">
                <a href="#aside" tabIndex="0"  title="Passer au plan de la page">
                    <img src="img/aside.svg" alt="dessin d'un panneau indiquant la direction" class="iconesC" title="Passer au plan de la page">
                    <span class="hidden">Passer au plan de la page</span></a>
                <h2 tabIndex="0">Ensemble de r&eacute;f&eacute;rences</h2>
                <h3 tabIndex="0" id="titre1">Les Jeux Paralympiques 2024</h3>
                    <ul>
                        <li><a href="https://www.paris2024.org/fr/sports-paralympiques/" class="custom-link" tabIndex="0" target="_blank">
                            Informations sur les Jeux Paralympiques de Paris 2024, par france_paralympique</a></li>
                        <li><a href="https://olympics.com/fr/sports/paralympic/" class="custom-link" tabIndex="0" target="_blank">
                            Site d’informations sur les Jeux Paralympiques de Paris 2024, par olympics</a></li>
                    </ul>
                <h3 tabIndex="0" id="titre2">Le rugby fauteuil aux Jeux Paralympiques 2024</h3>
                    <ul>
                        <li><a href="https://www.paris2024.org/fr/sport/basket-fauteuil/" class="custom-link" tabIndex="0" target="_blank">
                            Informations sur le rugby fauteuil pour les JP de Paris 2024, par Paris 2024</a></li>
                    </ul>
                <h3 tabIndex="0" id="titre3">Informations g&eacute;n&eacute;rales sur le rugby-fauteuil</h3>
                    <ul>
                        <li><a href="https://paralympique.ca/nouvelles/duncan-campbell-voulait-simplement-un-jeu-amusant-pour-les-quadraplegiques"
                            class="custom-link" tabIndex="0" target="_blank">
                            site d’informations sur le rugby fauteuil, par paralympique.ca</a></li>
                        <li><a href="https://www.world.rugby/news/579811/facts-international-wheelchair-rugby" class="custom-link" tabIndex="0" target="_blank">
                            site d’informations sur le rugby fauteuil, par world rugby</a></li>
                        <li><a href="https://france-paralympique.fr/sport/rugby-fauteuil/" class="custom-link" tabIndex="0" target="_blank">
                            site d’informations sur le rugby fauteuil, par france_paralympique</a></li>
                        </ul>
                <h3 tabIndex="0" id="titre4">Liens pour plus d’informations sur le mat&eacute;riel</h3>
                    <ul>
                        <li><a href="https://worldwheelchair.rugby/wp-content/uploads/2023/12/20231208-Wheelchair-Rugby-International-Rules-WWR-FINAL.pdf"
                            class="custom-link" tabIndex="0" target="_blank">
                            les r&egrave;gles internationales du rugby fauteuil, ce lien vous emmène vers un fichier PDF</a></li>
                        <li><a href="https://extranet.handisport.org/documents/viewDocument/2957" class="custom-link" tabIndex="0" target="_blank">
                            Guide de fournisseurs sp&eacute;cialis&eacute;s dans le mat&eacute;riel handisport</a></li>
                        <li><a href="https://www.handisport.org/materiel/" class="custom-link" tabIndex="0" target="_blank">
                            comment bien choisir son mat&eacute;riel, par la f&eacute;d&eacute;ration française handisport</a></li>
                    </ul>
                <a href="#titre" tabIndex="0"  title="Passer &agrave; l'ent&ecirc;te">
                    <img src="img/header.svg" alt="dessin d'une maison" class="iconesC" title="Passer &agrave; l'ent&ecirc;te">
                    <span class="hidden">Retour en haut de la page</span></a>
            </section>
            <hr class="spacer">
            <aside id="aside" aria-label="Informations complémentaires">
                <a href="#footer" tabIndex="0"  title="Passer au pied de page">
                    <img src="img/footer.svg" alt="dessin d'un marque-page" class="iconesC" title="Passer au pied de page">
                    <span class="hidden">Passer au pied de page</span></a>
                <ul id="liste_page">
                    <li tabIndex="0">
                        Ensemble de r&eacute;f&eacute;rences
                        <ul>
                            <li><a href="#titre1" class="custom-link" tabIndex="0">Les Jeux Paralympiques 2024</a></li>
                            <li><a href="#titre2" class="custom-link" tabIndex="0">Le rugby fauteuil aux Jeux Paralympiques 2024</a></li>
                            <li><a href="#titre3" class="custom-link" tabIndex="0">Informations g&eacute;n&eacute;rales sur le rugby-fauteuil</a></li>
                            <li><a href="#titre4" class="custom-link" tabIndex="0">Liens pour plus d’informations sur le mat&eacute;riel</a></li>
                        </ul>
                    </li>
                </ul>
            </aside>
        </div>
<?php
    include("pied_page.php");
?>