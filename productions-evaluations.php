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
                    <a class="nav-item nav-link" href="productions-projets-perso.php"><span class="contenu-menu">Mes
                            travaux personnels</span></a>
                    <a class="nav-item nav-link"><span class="contenu-menu mots-cles-nav">Evaluations</span></a>
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
                <h3>Travail d'évaluation n°2</h3>
                <h4>15 juin 2020</h4>
                <p>Objectif & consignes :</p>
                <ul>
                    <li>Le site comporte au moins une page produits et une page administration</li>
                    <li>La page administration permet d’ajouter de nouveaux produits</li>
                    <li>La page produits affiche tous les produits créés</li>
                    <li>Le css est généré en SASS</li>
                    <li>Le site est codé en PHP</li>
                    <li>Une base de données est créé et l’objet PDO est utilisé pour la gérer et l'afficher
                    </li>
                    <li>Utilisation d’un framework (Bootstrap)
                    </li>
                    <li>Le site est responsive</li>
                    <li>L’affichage des produits comprend un prix, une photo et une description</li>
                    <li>Utilisation de script en javascript ou jquery</li>
                    <li>Ajout d'un système d’identification permettant d'accéder à la page administration
                    </li>
                    <li>Ajout d'un système de modification et suppression des produits
                    </li>
                </ul>
                <p>login : vngn / password : azerty</p>
            </div>

            <div class="col-md-9 bloc-production">
                <iframe style="width:100%;" height="600" src="https://developpeur-de-site-web.fr/TP07-mini-boutique/index.php"
                    class="site-iframe"></iframe>
                <a href="https://developpeur-de-site-web.fr/TP07-mini-boutique/index.php"
                    target="_blank">Cliquez ici pour accéder à la page du site</a>
            </div>
        </div>
    </section>

    <section>
        <div class="row">
            <div class="col-md-3 bloc-production">
                <h3>Travail d'évaluation n°1</h3>
                <h4>18 mai 2020</h4>
                <p>Objectif & consignes :</p>
                <ul>
                    <li>Reproduction de la structure de l'image ci-dessous</li>
                    <li>Site responsive</li>
                    <li>Choix du thème libre</li>
                    <li>Liens menu et "contact us" inactifs</li>
                    <li>Validation W3C</li>
                </ul>
                <p>Cliquez sur l'image pour l'agrandir</p>
                <div>
                    <a href="ressources/img/tp-diablo4.jpg">
                        <img src="ressources/img/tp-diablo4.jpg" class="image-base-de-travail" alt="image du sujet à reproduire" />
                    </a>
                </div>

            </div>

            <div class="col-md-9 bloc-production">
                <iframe style="width:100%;" height="600" src="https://developpeur-de-site-web.fr/TP06-sass-Diablo4/index.html"
                    class="site-iframe"></iframe>
                <a href="https://developpeur-de-site-web.fr/TP06-sass-Diablo4/index.html"
                    target="_blank">Cliquez
                    ici pour accéder à la page du site</a>
            </div>
        </div>
    </section>

    <!-- ============================== x. FOOTER ============================== -->

    <?php
    require "footer.php";
    ?>

</body>

</html>