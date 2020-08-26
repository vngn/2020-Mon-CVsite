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
                    <a class="nav-item nav-link"><span class="contenu-menu mots-cles-nav">PHP/SQL</span></a>
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
                <h3>TP PDO n°2</h3>
                <h4>01 juillet 2020</h4>
                <p>Objectif :</p>
                <ul>
                    <li>Création d'un petit logiciel en ligne permettant d’afficher et de gérer rapidement les
                        différentes classes d'une école comprenant :
                        <ul>
                            <li>un système de connexion sécurisé</li>
                            <li>une vue avec toutes les classes</li>
                            <li>Une vue avec une seule classe</li>
                            <li>Des formulaire permettant d’ajouter, modifier ou supprimer :
                                <ul>
                                    <li>des élèves</li>
                                    <li>des classes</li>
                                    <li>des professeurs</li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>login : dark / password : vador</li>
                </ul>
            </div>

            <div class="col-md-9 bloc-production">
                <iframe style="width:100%;" height="600" src="https://developpeur-de-site-web.fr/PDO-TP2/index.php"
                    class="site-iframe"></iframe>
                <a href="https://developpeur-de-site-web.fr/PDO-TP2/index.php" target="_blank">Cliquez ici pour accéder
                    à la page du site</a>
            </div>
        </div>
    </section>

    <section>
        <div class="row">
            <div class="col-md-3 bloc-production">
                <h3>TP PDO n°1</h3>
                <h4>29 juin 2020</h4>
                <p>Objectif :</p>
                <ul>
                    <li>Création d'une base de données via PDO</li>
                    <li>Création d'un formulaire (en PHP) pour ajouter de nouveaux jeux vidéos</li>
                    <li>Traîtement des informations venant du formulaire afin de pouvoir ajouter un nouvel item dans la
                        base de données (requête PDO & sécurisation des données)</li>
                    <li>Création d'un tableau permettant d’afficher tous les jeux videos ainsi que leurs
                        caractéristiques</li>
                    <li>Ajout de colonnes permettant de supprimer un jeu vidéo et de modifier les informations d'un jeu
                        vidéo</li>
                    <li>Création d'un formulaire permettant de modifier les informations d'un jeu vidéo</li>
                    <li>Création d’un module de connexion sécurisé</li>
                    <li>Création d'un formulaire permettant de créer des utilisateurs et afficher la liste de tous les
                        utilisateurs dans un tableau</li>
                    <li>Ajout d'un formulaire de connexion avec login et mot de passe</li>
                    <li>login : vngn / password : azerty</li>
                </ul>
            </div>

            <div class="col-md-9 bloc-production">
                <iframe style="width:100%;" height="600" src="https://developpeur-de-site-web.fr/PDO-TP1/index.php"
                    class="site-iframe"></iframe>
                <a href="https://developpeur-de-site-web.fr/PDO-TP1/index.php" target="_blank">Cliquez ici pour accéder
                    à la page du site</a>
            </div>
        </div>
    </section>

    <section>
        <div class="row">
            <div class="col-md-3 bloc-production">
                <h3>Exercice PHP n°3</h3>
                <h4>17 juin 2020</h4>
                <p>Objectif :</p>
                <ul>
                    <li>Création d'une base de données avec 2 tables :
                        <ul>
                            <li>Une table "voitures"</li>
                            <li>Une table "users"</li>
                        </ul>
                    </li>
                    <li>Création d'un formulaire permettant d'ajouter une flotte de 10 véhicules à la base de données
                    </li>
                    <li>Création d'un fichier client</li>
                    <li>Création d'un formulaire permettant d'entrer les nouveaux clients dans la base de données</li>
                    <li>Réalisation d'un template afin d'afficher tous les clients et le véhicule qu'ils ont loué</li>
                </ul>
            </div>

            <div class="col-md-9 bloc-production">
                <iframe style="width:100%;" height="600"
                    src="https://developpeur-de-site-web.fr/projetLoueurDeVoiture/index.php"
                    class="site-iframe"></iframe>
                <a href="https://developpeur-de-site-web.fr/projetLoueurDeVoiture/index.php" target="_blank">Cliquez ici
                    pour accéder à la page du site</a>
            </div>
        </div>
    </section>

    <section>
        <div class="row">
            <div class="col-md-3 bloc-production">
                <h3>Exercice PHP n°2</h3>
                <h4>15 juin 2020</h4>
                <p>Objectif :</p>
                <p>Création d'un blog</p>
                <ul>
                    <li>Création une base de données grâce à l'objet PDO</li>
                    <li>Création de 2 tables :
                        <ul>
                            <li>Une table "posts"</li>
                            <li>Une table "commentaires"</li>
                        </ul>
                    </li>
                    <li>Création d'un formulaire permettant de créer un post</li>
                    <li>Affichage des posts</li>
                    <li>intégration au visuel des posts d'un formulaire permettant de créer des commentaires sur le post
                        auquel il est rattaché</li>
                    <li>Affichage des commentaires</li>
                </ul>
            </div>

            <div class="col-md-9 bloc-production">
                <iframe style="width:100%;" height="600" src="https://developpeur-de-site-web.fr/projetBlog/index.php"
                    class="site-iframe"></iframe>
                <a href="https://developpeur-de-site-web.fr/projetBlog/index.php" target="_blank">Cliquez ici pour
                    accéder à la page du site</a>
            </div>
        </div>
    </section>

    <section>
        <div class="row">
            <div class="col-md-3 bloc-production">
                <h3>Exercice PHP n°1</h3>
                <h4>12 juin 2020</h4>
                <p>Objectif :</p>
                <p>Création d'un blog</p>
                <ul>
                    <li>Création d'une base de données minichat avec une table "users"</li>
                    <li>Conception d'un formulaire</li>
                </ul>
            </div>

            <div class="col-md-9 bloc-production">
                <iframe style="width:100%;" height="600" src="https://developpeur-de-site-web.fr/projetMinichat/index.php"
                    class="site-iframe"></iframe>
                <a href="https://developpeur-de-site-web.fr/projetMinichat/index.php" target="_blank">Cliquez
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