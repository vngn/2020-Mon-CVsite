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
                    <a class="nav-item nav-link" href="productions-evaluations.php"><span
                            class="contenu-menu">Evaluations</span></a>
                    <a class="nav-item nav-link" href="productions-tp-projets.php"><span
                            class="contenu-menu">TP</span></a>
                    <a class="nav-item nav-link" href="productions-exo-php.php"><span
                            class="contenu-menu">PHP/SQL</span></a>
                    <a class="nav-item nav-link"><span class="contenu-menu mots-cles-nav moi">SYMFONY</span></a>
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
                <h3>TP SYMFONY n°3</h3>
                <h4>09 juillet 2020</h4>
                <p>Objectif & consignes :</p>
                <ul>
                    <li>Création d'un site de vente de produits : "Le p'tit coin"</li>
                    <li>Présence des propriétés : "nom", "produit", "photo" & "prix"</li>
                    <li>Ajout de la propriété "catégorie"</li>
                    <li>Mise en forme (minimaliste) avec Bootstrap</li>
                    <li>Autres consignes, identiques au TP SYMFONY n°2</li>
                    <li>login : vngn@laposte.net / password : azerty</li>
                </ul>
            </div>

            <div class="col-md-9 bloc-production">
                <iframe style="width:100%;" height="600"
                    src="https://symfony-store.developpeur-de-site-web.fr/"
                    class="site-iframe"></iframe>
                <a href="https://symfony-store.developpeur-de-site-web.fr/"
                    target="_blank">Cliquez ici pour accéder à la page du site</a>
            </div>
        </div>
    </section>

    <section>
        <div class="row">
            <div class="col-md-3 bloc-production">
                <h3>TP SYMFONY n°2</h3>
                <h4>07 juillet 2020</h4>
                <p>Objectif & consignes :</p>
                <ul>
                    <li>Création (via SYMFONY, cette fois-ci) du petit logiciel en ligne permettant d’afficher et de
                        gérer rapidement les
                        différentes classes d'une école (*voir TP PHP/SQL du 01 juillet 2020)
                        <ul>
                            <li>Création du squelette, avec Composer</li>
                            <li>Modification du fichier .env pour connecter la base de données</li>
                            <li>Création de la base de données avec doctrine</li>
                            <li>Création d’une page d’accueil</li>
                            <li>Construction du module de sécurité</li>
                            <li>Construction des entity</li>
                            <li>Réalisation des autres objectifs*</li>
                        </ul>
                    </li>
                    <li>login : vngn@laposte.net / password : azerty</li>
                </ul>
            </div>

            <div class="col-md-9 bloc-production">
                <iframe style="width:100%;" height="600"
                    src="https://symfony-school.developpeur-de-site-web.fr/"
                    class="site-iframe"></iframe>
                <a href="https://symfony-school.developpeur-de-site-web.fr/"
                    target="_blank">Cliquez
                    ici pour accéder à la page du site</a>
            </div>
        </div>
    </section>

    <section>
        <div class="row">
            <div class="col-md-3 bloc-production">
                <h3>TP SYMFONY n°1</h3>
                <h4>06 juillet 2020</h4>
                <p>Objectif & consignes :</p>
                <ul>
                    <li>Création d'un blog simple
                        <ul>
                            <li>Création du squelette, avec composer</li>
                            <li>Modification du fichier .env pour connecter la base de données</li>
                            <li>Création de la base de données avec doctrine</li>
                            <li>Création d’une page d’accueil</li>
                            <li>Construction du module de sécurité</li>
                            <li>Construction des entity</li>
                        </ul>
                    </li>
                    <li>login : vngn@symfony.fr / password : azerty</li>
                </ul>
            </div>

            <div class="col-md-9 bloc-production">
                <iframe style="width:100%;" height="600"
                    src="https://symfony-blog.developpeur-de-site-web.fr/"
                    class="site-iframe"></iframe>
                <a href="https://symfony-blog.developpeur-de-site-web.fr/"
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