<?php
    include("entete.php");
?>
<nav accesskey="n" class="fil_ariane" id="nav" aria-label="Menu principal">
            <p>
                <a href="#section" tabIndex="0"  title="Passer au contenu de la page">
                    <img src="img/section.svg" alt="dessin d'une bo&icirc;te ferm&eacute;e" class="iconesN" title="Passer au contenu de la page">
                    <span class="hidden">Passer au contenu de la page > </span></a>&nbsp;
                <a href="index.php" tabIndex="0">Index</a> > <a href="informations.php" tabIndex="0">A propos</a>
            </p>
            <!-- y mettre le fil d'ariane pour les autres pages-->
        </nav>
        <div class="flex_container1">
            <section id="section" accesskey="s" aria-label="Contenu principal de la page">
                <a href="#aside" tabIndex="0"  title="Passer au plan de la page">
                    <img src="img/aside.svg" alt="dessin d'un panneau indiquant la direction" class="iconesC" title="Passer au plan de la page">
                    <span class="hidden">Passer au plan de la page</span></a>
                <h2 tabIndex="0">Pour plus d'informations</h2>
                <h3 tabIndex="0" id="titre1">Pr&eacute;sentation de la page</h3>
                    <p tabIndex="0">
                        Bienvenue sur le site « Le rugby fauteuil et ses aides techniques » ! <br>
                        Sur ce site, vous allez d&eacute;couvrir ou red&eacute;couvrir le rugby fauteuil.<br>
                        Vous pourrez trouver des informations diverses sur ce sport :
                        l’histoire du sport, les r&egrave;gles du jeu, les sp&eacute;cificit&eacute;s des joueurs, ainsi que des informations sur les aides techniques utilis&eacute;es…<br>
                        Vous trouverez &eacute;galement les principaux liens vers les sites officiels, les &eacute;v&eacute;nements et les f&eacute;d&eacute;rations de ce sport.

                    </p>
                <h3 tabIndex="0" id="titre2">Qui suis-je ?</h3>
                    <p tabIndex="0">Je m’appelle Zo&eacute; Charvy, je suis en Master 1 Miashs parcours « handicap et technologies ».<br>
                        En r&eacute;sum&eacute;, j’&eacute;tudie l’informatique pour l’accessibilit&eacute;.<br>
                        Ce site est cr&eacute;&eacute; dans le cadre d’un projet p&eacute;dagogique.
                    </p>
                <h3 tabIndex="0" id="titre3">Accessibilit&eacute;</h3>
                    <p>
                        Le contenu de chaque page est disponible en format '.odt' et '.epub' dans la partie "footer" de cette page.
                    </p>
                    <p>
                        La police Luciole est une police plus lisible pour les personnes malvoyantes.
                        La police OpenDyslexie est une police plus lisible pour les personnes dyslexiques.
                    </p>
                    <p>
                        Les raccourcis claviers "Ctrl + Alt + 'o'" et "Ctrl + Alt + 'O'" permettent d'ouvrir les liens cliquables.
                    </p>
                    <p>
                        Voici les accesskey pour les diff&eacute;rentes parties de la Page :
                    </p>
                    <ul>
                        <li>La partie header : 'h'</li>
                        <li>La partie navigation : 'n'</li>
                        <li>La partie section : 's'</li>
                        <li>La premi&egrave;re partie de type article : 'i'</li>
                        <li>La deuxi&egrave;me partie de type article : 'r'</li>
                        <li>La troisi&egrave;me partie de type article : 't'</li>
                        <li>La partie footer : 'f'</li>
                    </ul>
                <h3 tabIndex="0" id="titre4" tabIndex="0">R&eacute;f&eacute;rences</h3>
                    <p tabIndex="0">Voici un lien menant à une page qui regroupe toutes les r&eacute;f&eacute;rences utilis&eacute;es sur ce site.</p>
                    <a href="reference.php" tabIndex="0">Liste de r&eacute;f&eacute;rence</a>
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
                        A propos
                        <ul>
                            <li><a href="#titre1" class="custom-link" tabIndex="0">Pr&eacute;sentation de la page</a></li>
                            <li><a href="#titre2" class="custom-link" tabIndex="0">Qui suis-je </a></li>
                            <li><a href="#titre3" class="custom-link" tabIndex="0">Accessibilit&eacute;</a></li>
                            <li><a href="#titre4" class="custom-link" tabIndex="0">R&eacute;f&eacute;rences</a></li>
                        </ul>
                    </li>
                </ul>
            </aside>
        </div>
<?php
    include("pied_page.php");
?>