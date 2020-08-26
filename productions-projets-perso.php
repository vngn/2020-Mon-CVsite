<!DOCTYPE html>
<html lang="fr">

<head>
    <title>CV SITE page Mes productions</title>
    <?php
    require "head.php";
    ?>
</head>

<body class="bg00">

    <!-- ============================== 1. HEADER ============================== -->

    <nav class="navbar navbar-expand-md navbar-light fixed-top">
        <div class="container-fluid menu zone-nav">
            <span class="contenu-menu">
                <a href="mailto:vngn@laposte.net"><i
                        class="fas fa-envelope icone-envelope"></i>vngn@laposte.net<br /></a>
                <i class="fas fa-phone icone-phone"></i><span class="mots-cles-competences">06 11 43 14 86</span>
            </span>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu-hdp"
                aria-controls="menu-hdp" aria-label="Menu pour mobile">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="menu-hdp">
                <div class="navbar-nav ml-auto">
                    <a class="nav-item nav-link" href="index.php"><span class="contenu-menu">Accueil</span></a>
                    <a class="nav-item nav-link"><span class="contenu-menu mots-cles-nav">Mes travaux
                            personnels</span></a>
                    <a class="nav-item nav-link" href="productions-evaluations.php"><span
                            class="contenu-menu">Evaluations</span></a>
                    <a class="nav-item nav-link" href="productions-tp-projets.php"><span
                            class="contenu-menu">TP</span></a>
                    <a class="nav-item nav-link" href="productions-exo-php.php"><span
                            class="contenu-menu">PHP/SQL</span></a>
                    <a class="nav-item nav-link" href="productions-exo-symfony.php"><span
                            class="contenu-menu moi">SYMFONY</span></a>
                </div>
            </div>

        </div>
    </nav>

    <!-- ============================== 2. PRODUCTIONS ============================== -->

    <header>
        <div class="row">
        </div>

    </header>

    <section>
        <div class="row">
            <div class="col-md-3 bloc-production">
                <h3>Projet personnel</h3>
                <h4>juin 2020</h4>
                <p>Projet d'un site-jeu reprennant l'ensemble des techniques abordées dans le cadre de ma formation, à
                    savoir :</p>
                <ul>
                    <li>HTML5</li>
                    <li>CSS3</li>
                    <li>SASS</li>
                    <li>Bootstrap</li>
                    <li>JavaScript</li>
                    <li>JQuery</li>
                    <li>PHP</li>
                    <li>My SQL</li>
                    <li>PDO</li>
                    <li>POO</li>
                    <li>Symfony</li>
                </ul>
                <p></p>
            </div>

            <div class="col-md-9 bloc-production">
                <h2>W.I.P./ Mis en stand by</h2>
                <ul>
                    <li>base de données (5 tables)</li>
                    <li>Map dynamique (?)</li>
                    <li>Gestion de l'équipement, du niveau, des points de vie...</li>
                    <li>Gestion de multiples actions (se déplacer, fouiller, ouvrir une porte, attaquer...)</li>
                    <li>Affichage de l'historique des actions</li>
                    <li>Apparitions et effets en JavaScript</li>
                    <li>Une page boutique (paypal)</li>
                </ul>
                <div>
                    <a href="ressources/img/Capture1.jpg">
                        <img src="ressources/img/Capture1.jpg" class="wip1" alt="image du projet" />
                    </a>
                    <a href="ressources/img/Capture2.jpg">
                        <img src="ressources/img/Capture2.jpg" class="wip2" alt="image du projet" />
                    </a>
                </div>

            </div>
        </div>
    </section>

    <section>
        <div class="row">
            <div class="col-md-3 bloc-production">
                <h3>Projet personnel</h3>
                <h4>juin 2020</h4>
                <p>Site CV en cours de réalisation en parallèle de ma formation.<br />l'objectif de cet exercice
                    pratique est d'être exploité comme une vitrine de mes productions et de mon savoir faire, dans le
                    cadre (pour l'instant) de ma recheche d'entreprise</p>
                <ul>
                    <li>Site responsive</li>
                    <li>Utilisation de :
                        <ul>
                            <li>HTML5</li>
                            <li>CSS3</li>
                            <li>SASS</li>
                            <li>Bootstrap</li>
                            <li>JavaScript</li>
                            <li>PHP</li>
                        </ul>
                    </li>
                </ul>
                <p>A venir :</p>
                <ul>
                    <li>Oulah ! Plein de choses :)... Un lien <a href="maj.php">Ici</a> vers la page "Maj" pour
                        prendre connaisance du "reste à faire" !</li>
                </ul>
            </div>

            <div class="col-md-9 bloc-production">
                <iframe width="100%" height="600" src="https://developpeur-de-site-web.fr/CVSite-Vincent-NGUYEN/"
                    class="site-iframe"></iframe>
                <a href="https://developpeur-de-site-web.fr/CVSite-Vincent-NGUYEN/" target="_blank">Cliquez ici
                    pour accéder à la page du site</a>
            </div>
        </div>
    </section>

    <section>
        <div class="row">
            <div class="col-md-3 bloc-production">
                <h3>Projet personnel</h3>
                <h4>10 mai 2020</h4>
                <p>Site en cours de réalisation en parallèle de ma formation.<br />Exercice
                    pratique, notamment pour mieux appréhender Bootstrap. Mis de côté pour implémentation partie PHP et
                    transformation prochaine en site e-commerce </p>
                <ul>
                    <li>Site responsive</li>
                    <li>Utilisation de :
                        <ul>
                            <li>HTML5</li>
                            <li>CSS3</li>
                            <li>Bootstrap</li>
                            <li>JavaScript</li>
                            <li>Validation W3C</li>
                        </ul>
                    </li>
                </ul>
            </div>

            <div class="col-md-9 bloc-production">
                <iframe width="100%" height="600"
                    src="https://developpeur-de-site-web.fr/TP-projet01-Toutool-s-Life/index.html"
                    class="site-iframe"></iframe>
                <a href="https://developpeur-de-site-web.fr/TP-projet01-Toutool-s-Life/index.html"
                    target="_blank">Cliquez ici pour accéder à la page du site</a>
            </div>
        </div>
    </section>

    <section>
        <div class="row">
            <div class="col-md-3 bloc-production">
                <h3>Exercice personnel</h3>
                <h4>02 mai 2020</h4>
                <p>Contexte :</p>
                <p>Pour s'amuser un peu, reproduction d'un souvenir de petit programme datant de l'amiga me semble t-il
                    :)...</p>
            </div>

            <div class="col-md-9 bloc-production">
                <iframe width="100%" height="600" src="https://developpeur-de-site-web.fr/Test-de-clics/index.html"
                    class="site-iframe"></iframe>
                <a href="https://developpeur-de-site-web.fr/Test-de-clics/index.html" target="_blank">Cliquez ici pour
                    accéder à la page du site</a>
            </div>
        </div>
    </section>

    <section>
        <div class="row">
            <div class="col-md-3 bloc-production">
                <h3>Exercice personnel</h3>
                <h4>01 mai 2020</h4>
                <p>Contexte :</p>
                <p>Petit détournement de Bootstrap, qui m'a un peu fait penser à du pixel art, avec ses 12 colonnes :)
                    ...</p>
            </div>

            <div class="col-md-9 bloc-production">
                <iframe width="100%" height="600" src="https://developpeur-de-site-web.fr/Chat-Bootstrap/index.html"
                    class="site-iframe"></iframe>
                <a href="https://developpeur-de-site-web.fr/Chat-Bootstrap/index.html" target="_blank">Cliquez ici pour
                    accéder à la page du site</a>
            </div>
        </div>
    </section>

    <section>
        <div class="row">
            <div class="col-md-3 bloc-production">
                <h3>Exercice personnel</h3>
                <h4>27 avril 2020</h4>
                <p>Contexte :</p>
                <p>Adaptation d'un menu étudié en cours</p>
            </div>

            <div class="col-md-9 bloc-production">
                <iframe width="100%" height="600" src="https://developpeur-de-site-web.fr/Site-Formation/index.html"
                    class="site-iframe"></iframe>
                <a href="https://developpeur-de-site-web.fr/Site-Formation/index.html" target="_blank">Cliquez ici pour
                    accéder à la page du site</a>
            </div>
        </div>
    </section>

    <section>
        <div class="row">
            <div class="col-md-3 bloc-production">
                <h3>Exercice personnel<br />(pré-formation)</h3>
                <h4>08 avril 2020</h4>
                <p>Contexte :</p>
                <p>Projet d'un regroupement de toutes les productions de la famille :</p>
                <ul>
                    <li>Les superbes dessins de mon ainé de 9 ans (en 2020), au talent artistique certain</li>
                    <li>les œuvres de mes deux plus petits, 8 et 5 ans, qui se débrouillent bien aussi</li>
                    <li>La maman (Alixane Créations) qui confectionne des sacs, sacoches, masques, porte-monnaie, des
                        pochettes, des lingettes...</li>
                    <li>Le papa qui dessine, peint et crée des trucs sur son PC</li>
                </ul>
                <ul>
                    <li>HTML & CSS seulement</li>
                    <li>Responsive</li>
                    <li>Validation W3C</li>
                </ul>
                <p>Projet en stand-by pour le moment, le temps nécessaire pour regrouper et scanner toutes ces belles
                    productions est actuellement manquant :)...</p>
            </div>

            <div class="col-md-9 bloc-production">
                <iframe width="100%" height="600"
                    src="https://developpeur-de-site-web.fr/Projet08-Famille-d-artistes/index.html"
                    class="site-iframe"></iframe>
                <a href="https://developpeur-de-site-web.fr/Projet08-Famille-d-artistes/index.html"
                    target="_blank">Cliquez ici pour accéder à la page du site</a>
            </div>
        </div>
    </section>

    <section>
        <div class="row">
            <div class="col-md-3 bloc-production">
                <h3>Exercice personnel<br />(pré-formation)</h3>
                <h4>03 avril 2020</h4>
                <p>Contexte :</p>
                <p>Refonte d'un précédent travail pour le rendre "responsive", avec ajout de nouvelles connaissances</p>
                <ul>
                    <li>HTML & CSS seulement</li>
                    <li>Responsive</li>
                    <li>Liens menu inactifs</li>
                    <li>Validation W3C</li>
                </ul>

            </div>

            <div class="col-md-9 bloc-production">
                <iframe width="100%" height="600"
                    src="https://developpeur-de-site-web.fr/Projet07-Zombicide-RD/index.html"
                    class="site-iframe"></iframe>
                <a href="https://developpeur-de-site-web.fr/Projet07-Zombicide-RD/index.html" target="_blank">Cliquez
                    ici pour accéder à la page du site</a>
            </div>
        </div>
    </section>

    <section>
        <div class="row">
            <div class="col-md-3 bloc-production">
                <h3>Exercice personnel<br />(pré-formation)</h3>
                <h4>22 mars 2020</h4>
                <p>Contexte :</p>
                <p>Création d'un mini-site avec Flexbox</p>
                <ul>
                    <li>HTML & CSS seulement</li>
                    <li>Pas de responsive</li>
                    <li>Liens menu inactifs</li>
                    <li>Validation W3C</li>
                </ul>
            </div>

            <div class="col-md-9 bloc-production">
                <iframe width="100%" height="600" src="https://developpeur-de-site-web.fr/Projet04-Zombicide/index.html"
                    class="site-iframe"></iframe>
                <a href="https://developpeur-de-site-web.fr/Projet04-Zombicide/index.html" target="_blank">Cliquez ici
                    pour accéder à la page du site</a>
            </div>
        </div>
    </section>

    <section>
        <div class="row">
            <div class="col-md-3 bloc-production">
                <h3>Exercice personnel<br />(pré-formation)</h3>
                <h4>17 mars 2020</h4>
                    <p>Contexte :</p>
                    <p>Création d'un mini-site pour m'aider et pratiquer lors de mon apprentissage du CSS</p>
                    <ul>
                        <li>HTML & CSS seulement</li>
                        <li>Pas de responsive</li>
                        <li>Validation W3C</li>
                    </ul>
            </div>

            <div class="col-md-9 bloc-production">
                <iframe width="100%" height="600" src="https://developpeur-de-site-web.fr/Projet03-Mementos/index.html"
                    class="site-iframe"></iframe>
                <a href="https://developpeur-de-site-web.fr/Projet03-Mementos/index.html" target="_blank">Cliquez ici
                    pour accéder à la page du site</a>
            </div>
        </div>
    </section>

    <section>
        <div class="row">
            <div class="col-md-3 bloc-production">
                <h3>Exercice personnel<br />(pré-formation)</h3>
                <h4>20 novembre 2019</h4>
                <p>Contexte :</p>
                <p>Premières lignes d'HTML (et d'un brin de CSS), pour m'aider et pratiquer</p>
                <ul>
                    <li>HTML (& CSS) seulement</li>
                    <li>Pas de responsive</li>
                    <li>Un max de liens sur 4 pages !</li>
                    <li>Validation W3C</li>
                </ul>
            </div>

            <div class="col-md-9 bloc-production">
                <iframe width="100%" height="600"
                    src="https://developpeur-de-site-web.fr/Projet01-Site-cours-html-css/index.html"
                    class="site-iframe"></iframe>
                <a href="https://developpeur-de-site-web.fr/Projet01-Site-cours-html-css/index.html"
                    target="_blank">Cliquez ici pour accéder à la page du site</a>
            </div>
        </div>
    </section>

    <!-- ============================== x. FOOTER ============================== -->

    <?php
    require "footer.php";
    ?>

</body>

</html>