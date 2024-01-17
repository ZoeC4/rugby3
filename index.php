<?php
    include("entete.php");
?>
<nav accesskey="n" id="nav" aria-label="Menu principal">
            <ul id="liste_index">
                <li>
                    <a href="#section" tabIndex="0"  title="Passer au contenu de la page">
                        <img src="img/section.svg" alt="dessin d'une bo&icirc;te ferm&eacute;e" class="iconesN" title="Passer au contenu de la page">
                        <span class="hidden">Passer au contenu de la page</span></a>
                </li>
                <li><a href="histoire.php" tabIndex="0">Histoire</a></li><hr>
                <li><a href="regles.php" tabIndex="0">R&egrave;gles</a></li><hr>
                <li><a href="aides_techniques.php" tabIndex="0">Aides techniques</a></li><hr>
                <li><a href="informations.php" tabIndex="0">A propos</a></li><hr>
                <li><a href="#footer" tabIndex="0">Accessibilité</a></li>
            </ul>
            <!-- y mettre le fil d'ariane pour les autres pages-->
        </nav>
        <div class="flex_container1">
            <section id="section" accesskey="s" aria-label="Contenu principal de la page">
                <a href="#aside" tabIndex="0" title="Passer au plan de la page">
                    <img src="img/aside.svg" alt="dessin d'un panneau indiquant la direction" class="iconesC" title="Passer au plan de la page">
                    <span class="hidden">Passer au plan de la page</span></a>
                <h2 tabIndex="0">Bienvenue sur cette page</h2>
                <h3 tabIndex="0" id="titre1">Pr&eacute;sentation de la page</h3>
                <p tabIndex="0">
                    Bienvenue sur le site « Le rugby fauteuil et ses aides techniques » ! <br>
                    Sur ce site, vous allez d&eacute;couvrir ou red&eacute;couvrir le rugby fauteuil.<br>
                    Vous pourrez trouver des informations diverses sur ce sport :
                    l’histoire du sport, les r&egrave;gles du jeu, les sp&eacute;cificit&eacute;s des joueurs, ainsi que des informations sur les aides techniques utilis&eacute;es…<br>
                    Vous trouverez &eacute;galement les principaux liens vers les sites officiels, les &eacute;v&eacute;nements et les f&eacute;d&eacute;rations de ce sport.

                </p>
                <h3 tabIndex="0" id="titre2">Qui suis-je ?</h3>
                <p tabIndex="0">Je m’appelle Zo&eacute; Charvy, je suis en Master 1 Miashs parcours « handicap et technologies ».<br>
                    En r&eacute;sum&eacute;, j’&eacute;tudie l’informatique pour l’accessibilit&eacute;.<br>
                    Ce site est cr&eacute;&eacute; dans le cadre d’un projet p&eacute;dagogique.</p>
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
                            Page d'index
                            <ul>
                                <li><a href="#titre1" class="custom-link" tabIndex="0">Pr&eacute;sentation de la page</a></li>
                                <li><a href="#titre2" class="custom-link" tabIndex="0">Qui suis-je ?</a></li>
                            </ul>
                        </li>
                    </ul>
            </aside>
        </div>
<?php
    include("pied_page.php");
?>