<?php
    include("entete.php");
?>
<nav accesskey="n" class="fil_ariane" id="nav" aria-label="Menu principal">
            <p>
                <a href="#section" tabIndex="0"  title="Passer au contenu de la page">
                    <img src="img/section.svg" alt="dessin d'une bo&icirc;te ferm&eacute;e" class="iconesN" title="Passer au contenu de la page">
                    <span class="hidden">Passer au contenu de la page > </span></a>&nbsp;
                <a href="index.php" tabIndex="0">Index</a> > <a href="regles.php" tabIndex="0">R&egrave;gles</a>
            </p>
            <!-- y mettre le fil d'ariane pour les autres pages-->
        </nav>
        <div class="flex_container1">
            <section id="section" accesskey="s" aria-label="Contenu principal de la page">
                <a href="#aside" tabIndex="0"  title="Passer au plan de la page">
                    <img src="img/aside.svg" alt="dessin d'un panneau indiquant la direction" class="icones" title="Passer au plan de la page">
                    <span class="hidden">Passer au plan de la page</span></a>
                <h2 tabIndex="0">Les r&egrave;gles du rugby fauteuil</h2>
                <h3 tabIndex="0" id="titre1">R&egrave;gles</h3>
                    <p tabIndex="0">
                        Ce sport oppose deux &eacute;quipes. Chaque &eacute;quipe est compos&eacute;e de 4 joueurs.<br>
                        L’objectif de chaque &eacute;quipe est de porter un ballon dans la ligne de but de l’adversaire.
                        Une &eacute;quipe a 40 secondes, apr&egrave;s sa prise de possession du ballon, pour atteindre la ligne de but.<br>
                        Le match dure 4 quart-temps de 8 minutes chacun.
                        S’il y a une &eacute;galit&eacute;, des prolongations de 3 minutes sont jou&eacute;es. D&egrave;s qu’un point est marqu&eacute;, la partie s’arrête.<br>
                        Il y a certaines r&egrave;gles &agrave; respecter durant la possession du ballon, les voici:
                    </p>
                    <ul tabIndex="0">
                        <li>Les joueurs peuvent faire rouler ou passer le ballon, peu importe la direction.</li>
                        <li>Les joueurs doivent donner ou dribbler le ballon au minimum toutes les 10 secondes.</li>
                    </ul>
                <h3 tabIndex="0" id="titre2">Caract&eacute;ristiques du terrain et du ballon</h3>
                    <p tabIndex="0">
                        Le terrain mesure 28 m sur 15 m.
                        Il est d&eacute;limit&eacute; par des lignes de but aux extr&eacute;mit&eacute;s du terrain, ainsi qu’un rond central au milieu.
                        Cela repr&eacute;sente un terrain de basket-ball.<br>
                        Le ballon utilis&eacute; est un ballon de volley-ball am&eacute;lior&eacute; pour obtenir une meilleure adh&eacute;rence.
                    </p>
                <h3 tabIndex="0" id="titre3">Les joueurs</h3>
                    <p tabIndex="0">
                        Les &eacute;quipes sont mixtes.<br>
                        Les joueurs autoris&eacute;s sont les joueurs concern&eacute;s par ces cas :
                    </p>
                    <ul tabIndex="0">
                        <li>les t&eacute;trapl&eacute;gies et assimil&eacute;es</li>
                        <li>la dystrophie musculaire</li>
                        <li>les amputations</li>
                        <li>la polio</li>
                        <li>le handicap neurologique</li>
                        <li>la paralysie c&eacute;r&eacute;brale</li>
                    </ul>
                    <p tabIndex="0">
                        Les joueurs dont les handicaps concernent les 4 membres peuvent faire de la comp&eacute;tition.
                        Cependant, les joueurs dont les handicaps concernent les membres sup&eacute;rieurs ne sont admis que dans la pratique en loisir.<br>
                        Selon les mouvements possibles du joueur, le joueur va recevoir un nombre entre 0,5 et 3,5.
                        Plus les mouvements sont limit&eacute;s, plus le nombre est petit.<br>
                        Une &eacute;quipe est compos&eacute;e de 4 joueurs dont la somme totale des nombres des 4 joueurs est 8.
                    </p>
                <a href="#titre" tabIndex="0"  title="Passer &agrave; l'ent&ecirc;te">
                    <img src="img/header.svg" alt="dessin d'une maison" class="iconesC" title="Passer &agrave; l'ent&ecirc;te">
                    <span class="hidden">Retour en haut de la page</span></a>
            </section>
            <hr class="spacer">
            <aside id="aside" aria-label="Informations complémentaires">
                <a href="#footer" tabIndex="0"  title="Passer au pied de page">
                    <img src="img/footer.svg" alt="dessin d'un marque-page" class="icones" title="Passer au pied de page">
                    <span class="hidden">Passer au pied de page</span></a>
                <ul id="liste_page">
                    <li tabIndex="0">
                        Les r&egrave;gles du rugby fauteuil
                        <ul>
                            <li><a href="#titre1" class="custom-link" tabIndex="0">R&egrave;gles</a></li>
                            <li><a href="#titre2" class="custom-link" tabIndex="0">Caract&eacute;ristiques du terrain et du ballon</a></li>
                            <li><a href="#titre3" class="custom-link" tabIndex="0">Les joueurs</a></li>
                        </ul>
                    </li>
                </ul>
            </aside>
        </div>
<?php
    include("pied_page.php");
?>