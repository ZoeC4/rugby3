<?php
    include("entete.php");
?>
<nav accesskey="n" class="fil_ariane" id="nav" aria-label="Menu principal">
            <p>
                <a href="#section" tabIndex="0"  title="Passer au contenu de la page">
                    <img src="img/section.svg" alt="dessin d'une bo&icirc;te ferm&eacute;e" class="iconesN" title="Passer au contenu de la page">
                    <span class="hidden">Passer au contenu de la page > </span></a>&nbsp;
                <a href="index.php" tabIndex="0">Index</a> > <a href="histoire.php" tabIndex="0">Histoire</a>
            </p>
            <!-- y mettre le fil d'ariane pour les autres pages-->
        </nav>
        <div class="flex_container1">
            <section id="section" accesskey="s" aria-label="Contenu principal de la page">
                <a href="#aside" tabIndex="0"  title="Passer au plan de la page">
                    <img src="img/aside.svg" alt="dessin d'un panneau indiquant la direction" class="iconesC" title="Passer au plan de la page">
                    <span class="hidden">Passer au plan de la page</span></a>
                <h2 tabIndex="0">Description et histoire du rugby fauteuil</h2>
                <h3 tabIndex="0" id="titre1">Description et histoire</h3>
                    <p tabIndex="0">
                        Ce sport a &eacute;t&eacute; invent&eacute; en 1976 par des athl&egrave;tes t&eacute;trapl&eacute;giques canadiens.
                        Il a &eacute;t&eacute; inspir&eacute; par le basket-ball en fauteuil roulant.<br>
                        Le changement est que le rugby fauteuil est r&eacute;serv&eacute;e aux joueurs avec une fonction r&eacute;duite des bras et des mains.
                        Le rugby fauteuil se pratique uniquement en fauteuil roulant. Ce sport est consid&eacute;r&eacute; comme un sport de contact.<br>
                        Il est surnomm&eacute; « murderball » &agrave; cause de son agressivit&eacute;.
                        Ducan Campbell a cr&eacute;&eacute; les r&egrave;gles de ce sport.
                    </p>
                <h3  tabIndex="0" id="titre2">Dates principales</h3>
                    <ul>
                        <li>1982 : Le premier tournoi international de rugby fauteuil a lieu.<br>
                            Il y avait 4 &eacute;quipes pr&eacute;sentes : les &eacute;quipes du Manitoba, de la Saskatchewan, du Dakota du Nord et du Minnesota.</li>
                        <li>1995 : Le premier championnat du monde a lieu en Suisse.</li>
                        <li>1996 : Le sport est pr&eacute;sent&eacute; comme sport de d&eacute;monstration aux Jeux Paralympiques d’Atlanta.</li>
                        <li>2000 : Le sport devient sport m&eacute;daill&eacute; &agrave; Sydney</li>
                    </ul>
                <h3 tabIndex="0" id="titre3">R&eacute;f&eacute;rences</h3>
                    <ul tabIndex="0">
                        <li><a href="https://paralympique.ca/nouvelles/duncan-campbell-voulait-simplement-un-jeu-amusant-pour-les-quadraplegiques"
                            class="custom-link" tabIndex="0" target="_blank">
                            site d’informations sur le rugby fauteuil, par paralympique.ca</a></li>
                        <li><a href="https://www.world.rugby/news/579811/facts-international-wheelchair-rugby" class="custom-link" tabIndex="0" target="_blank">
                            site d’informations sur le rugby fauteuil, par world rugby</a></li>
                        <li><a href="https://france-paralympique.fr/sport/rugby-fauteuil/" class="custom-link"
                            tabIndex="0" target="_blank"> site d’informations sur le rugby fauteuil, par france_paralympique</a></li>
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
                        L'histoire du rugby fauteuil
                        <ul>
                            <li><a href="#titre1" class="custom-link" tabIndex="0">Description et histoire</a></li>
                            <li><a href="#titre2" class="custom-link" tabIndex="0">Dates principales</a></li>
                            <li><a href="#titre3" class="custom-link" tabIndex="0">R&eacute;f&eacute;rences</a></li>
                        </ul>
                    </li>
                </ul>
            </aside>
        </div>
<?php
    include("pied_page.php");
?>