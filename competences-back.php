<!DOCTYPE html>
<html lang="fr">

<head>
    <title>CV SITE page Mes compétences</title>
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
                    <a class="nav-item nav-link"><span class="contenu-menu mots-cles-nav">+ d'infos sur
                            :</span></a>
                    <a class="nav-item nav-link" href="productions-projets-perso.php"><span
                            class="contenu-menu mes-prod">Mes
                            productions</span></a>
                    <a class="nav-item nav-link"><span class="contenu-menu mots-cles-nav">Mes compétences</span></a>
                    <a class="nav-item nav-link" href="experience.php"><span class="contenu-menu">Mon
                            expérience</span></a>
                    <a class="nav-item nav-link" href="formation.php"><span class="contenu-menu">Ma formation</span></a>
                    <a class="nav-item nav-link" href="moi.php"><span class="contenu-menu moi">Mon profil</span></a>
                </div>
            </div>
        </div>
    </nav>

    <!-- ============================== 2. COMPETENCES WEB ============================== -->

    <header>
        <div class="row">
            <div class="col-md-12 zone">
                <div class="row">
                    <div class="col-md-4">
                        <h3><a href="competences-front.php">Compétences Front ici</a></h3>
                    </div>

                    <div class="col-md-4">
                        <h3>Compétences <span class="mots-cles-competences">Back</span> en détail</h3>
                    </div>

                    <div class="col-md-4">
                        <h3><a href="competences-autres.php">Autres compétences ici</a></h3>
                    </div>
                </div>
            </div>

            <div class="col-md-12 zone">
                <h4>Utiliser le langage <span class="mots-cles-competences">SQL</span> en réalisant des requêtes pour
                    manipuler ou
                    intervenir sur les données</h4>
                <div class="row bloc-competences">
                    <div class="col-md-6">
                        <ul>
                            <li>Modéliser et concevoir une base de données relationnelle</li>
                            <li>Structurer et mettre en place les composants aussi bien en ligne de commande
                                qu’avec une interface</li>
                            <li>Administrer une base de données et l’optimiser</li>
                            <li>Gérer les contraintes d’intégrité avec la liaison des données</li>
                            <li>Manipuler des données avec les requêtes de sélections et savoir imposer des
                                conditions avec les différents opérateurs existants</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <ul>
                            <li>Intervenir sur les données via l’écriture de requête (ajout, modification,
                                suppression)</li>
                            <li>Trouver l’information via des relations en associant un sous-ensemble de
                                plusieurs tables afin de mener au résultat</li>
                            <li>Effectuer des opérations d'importation et d'exportation de données</li>
                            <li>Planifier des actions et des traitements</li>
                            <li>Veiller à automatiser certaines tâches</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-md-12 zone">
                <h4>Mettre en ligne un site dynamique "2 en 1" avec une partie Front et une interface de gestion Back
                </h4>
                <div class="row bloc-competences">
                    <div class="col-md-6">
                        <ul>
                            <li>Intégrer du PHP dans une page web en association avec les autres langages,
                                savoir effectuer les inclusions et les bonnes séparations</li>
                            <li>Echanger des informations avec un internaute, analyse des valeurs de retour et
                                tests de cohérence</li>
                            <li>Gérer différents affichages en fonction des interactions et des choix de
                                l’internaute</li>
                            <li>Rendre possible la conservation des informations sur un internaute, à court ou à long
                                terme, avec et
                                sans base de données</li>
                            <li>Sauvegarder, insérer, modifier, supprimer des informations en utilisant
                                pleinement une base de données</li>
                            <li>Exploiter et traiter les résultats afin de les afficher dans une page web suite
                                à l’exécution de requêtes SQL faisant communiquer les technologies PHP/SQL</li>
                            <li>Véhiculer des informations d’une page à une autre</li>
                            <li>Utiliser des sessions pour les authentifications</li>
                            <li>Etre vigilant quant aux failles de sécurité : détection, risques, moyens de contre,
                                etc</li>
                            <li>Veiller à une approche de la sécurité : protection de dossiers, cryptage de mot de
                                passe</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <ul>
                            <li>Comprendre la documentation, utiliser des éléments du langage ainsi que les
                                fonctions prédéfinies. Créer ses propres fonctions au besoin pour
                                l’automatisation des traitements</li>
                            <li>Créer un site e-commerce comprenant les fonctionnalités suivantes :
                                <ul>
                                    <li>un espace membre (inscription-connexion-profil)</li>
                                    <li>une partie d’administration « Back Office » avec notamment la gestion des
                                        produits, la gestion des membres et aussi la gestion des commandes</li>
                                    <li>création de la boutique côté « Front Office » pour les prospects avec
                                        affichage et fiche détaillée de chaque produit
                                    </li>
                                    <li>formulaire de recherche, formulaire de contact avec envoi d’email</li>
                                    <li>création d’un panier et simulation de l’étape de paiement avec
                                        attribution d’un numéro de suivi</li>
                                </ul>
                            </li>
                            <li>Créer/générer un document XML et le parcourir avec PHP</li>
                            <li>Récupérer et afficher des informations provenant d’un document XML</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-md-12 zone">
                <h4>Concevoir une application web évolutive dans le temps, permettant un
                    travail collaboratif, et réutilisable par autrui</h4>
                <div class="row bloc-competences">
                    <div class="col-md-6">
                        <ul>
                            <li>Présenter une conceptualisation objet dans un contexte Web : UML (Unified Modeling
                                Language)</li>
                            <li>Améliorer la productivité, le gain de temps par la modularisation,
                                l’encapsulation, l’organisation et la clarification du code</li>
                            <li>Réaliser des instanciations : Classe / Objet</li>
                        </ul>
                    </div>

                    <div class="col-md-6">
                        <ul>
                            <li>Utiliser les éléments du langage : Getter / Setters / Constructeur / This / Constante /
                                Static / Self
                            </li>
                            <li>Exploiter l'extension PDO : Php Data Object</li>
                            <li>Développer un projet orienté objet</li>
                            <li>Ecrire un code factorisé, optimisé, performant et générique</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-md-12 zone">
                <h4>Mise en œuvre d’une architecture logicielle de type <span class="mots-cles-competences">MVC</span>
                    en <span class="mots-cles-competences">PHP procédural</span> puis en <span
                        class="mots-cles-competences">PHP Orienté Objet</span></h4>
                <div class="row bloc-competences">
                    <div class="col-md-6">
                        <ul>
                            <li>Distinguer dans un programme PHP les composants liés à la logique de
                                présentation, métier et de données</li>
                            <li>Créer :
                                <ul>
                                    <li>des modèles à partir des composants liés à la logique de
                                        données</li>
                                    <li>des contrôleurs à partir des composants liés à la logique
                                        métier</li>
                                    <li>des vues à partir des composants liés à la logique de
                                        présentation</li>
                                    <li>un « routeur » PHP pour faire
                                        fonctionner une architecture MVC</li>
                                </ul>
                            </li>
                        </ul>
                    </div>

                    <div class="col-md-6">
                        <ul>
                            <li>Mettre en œuvre un ensemble de bonnes pratiques pour optimiser une architecture MVC
                                procédurale</li>
                            <li>Transformer une architecture MVC procédurale en architecture MVC
                                Orienté Objet</li>
                            <li>Mettre en œuvre un ensemble de bonnes pratiques pour optimiser une
                                architecture MVC Orienté Objet</li>
                            <li>Identifier dans n’importe quel « framework » PHP MVC les éléments de
                                base de l’architecture MVC et les moyens mis à disposition des développeurs
                                pour leur implémentation</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-md-12 zone">
                <h4>Fondamentaux du framework <span class="mots-cles-competences">PHP Symfony</span></h4>
                <div class="row bloc-competences">
                    <div class="col-md-6">
                        <ul>
                            <li>Créer un nouveau projet avec Symfony</li>
                            <li>Méthode MVC avec Symfony => Utiliser :
                                <ul>
                                    <li>le métalangage YAML pour les configurations et le routage</li>
                                    <li>le métalangage TWIG pour la construction des affichages </li>
                                    <li>la librairie Doctrine2 et son ORM pour l’accès aux données</li>
                                </ul>
                            </li>
                        </ul>
                    </div>

                    <div class="col-md-6">
                        <ul>
                            <li>Utiliser la console de Symfony
                            </li>
                            <li>Créer et personnaliser un formulaire avec Symfony</li>
                            <li>Exploiter les classes utilitaires fournies par Symfony</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-md-12 zone">
                <h4>Sources</h4>
                <div class="row bloc-competences">
                    <div class="col-md-6">
                        <ul>
                        <li>Documentation web (liste non-exaustive) :
                                <ul>
                                    <li>https://developer.mozilla.org/fr/</li>
                                    <li>https://www.w3schools.com/</li>
                                    <li>https://stackoverflow.com/</li>
                                    <li>https://sql.sh/</li>
                                </ul>
                            </li>
                        </ul>
                    </div>

                    <div class="col-md-6">
                        <ul>
                            <li>"PHP et MYSQL", Mathieu Nebra, éditions Eyrolles, février 2019 </li>
                            <li>"En route pour Symfony5", Fabien Potencier, éditions Sensiolabs, février 2020
                            </li>
                            <li>Tutoriels en ligne (Grafikart, Open Classrooms, Pierre Giraud...)</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- ============================== x. FOOTER ============================== -->

    <?php
        require "footer.php";
        ?>

</body>

</html>