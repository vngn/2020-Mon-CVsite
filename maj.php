<!DOCTYPE html>
<html lang="fr">

<head>
    <title>CV SITE page Maj</title>
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
                    <a class="nav-item nav-link" href="competences-back.php"><span class="contenu-menu">Mes
                            compétences</span></a>
                    <a class="nav-item nav-link" href="experience.php"><span class="contenu-menu">Mon
                            expérience</span></a>
                    <a class="nav-item nav-link" href="formation.php"><span class="contenu-menu">Ma
                            formation</span></a>
                    <a class="nav-item nav-link" href="moi.php"><span class="contenu-menu moi">Mon profil</span></a>
                </div>
            </div>
        </div>
    </nav>

    <!-- ============================== 2. MAJ ============================== -->

    <header>
        <div class="row">
            <div class="col-md-12 zone">
                <h3>Reste à faire</h3>
                <ul>
                    <li>Refonte du site en Symfony</li>
                    <li>Sécuriser les informations utilisateurs</li>
                    <li>Partager la version WIP à mon réseau</li>
                    <li>Optimiser la partie PHP</li>
                    <li>Optimiser la partie SASS</li>
                    <li>Ajouter des effets</li>
                    <li>Créer un effet d'apparition rapide lors d'un accès page</li>
                    <li>Optimiser le responsive (penser à corriger pb image "contact" du site Toutool's & de padding de
                        manière générale)</li>
                    <li>Régler les irrégularités de positionnement des liens "Cliquez ici pour + d'infos"</li>
                    <li>Finir les validations W3C de certains travaux</li>
                </ul>
            </div>
        </div>
    </header>

    <section>
        <div class="row bloc12-maj">
            <div class="col-md-4 zone bloc4-maj">
                <h3>Mise à jour du 23 juillet 2020</h3>
                <ul>
                    <li>Travail sur la mise en ligne des productions Symfony : mise en ligne réussie :) (merci Nicolas !)</li>
                    <li>Tests de navigation sur productions Symfony</li>
                </ul>
            </div>
            <div class="col-md-4 zone bloc4-maj">
                <h3>Mise à jour du 20 juillet 2020</h3>
                <ul>
                    <li>Corrections diverses</li>
                    <li>Travail sur la mise en ligne des productions Symfony...</li>
                    <li>Mise en place d'affichage de panneaux de contenu pliables (accordion) via JS : rendu non satisafaisant et supression</li>
                </ul>
            </div>
            <div class="col-md-4 zone bloc4-maj">
                <h3>Mise à jour du 19 juillet 2020</h3>
                <ul>
                    <li>Corrections diverses</li>
                    <li>Travail sur la mise en ligne des productions Symfony...</li>
                </ul>
            </div>
            <div class="col-md-4 zone bloc4-maj">
                <h3>Mise à jour du 18 juillet 2020</h3>
                <ul>
                    <li>Travail sur la mise en ligne des productions Symfony : soucis avec navigation en cours de
                        résolution</li>
                    <li>Corrections de fautes suite retour réseau : merci (encore) Christophe !</li>
                </ul>
            </div>

            <div class="col-md-4 zone bloc4-maj">
                <h3>Mise à jour du 14 juillet 2020</h3>
                <ul>
                    <li>Travail sur la disposition des blocs de la page "Maj"</li>
                    <li>Correction d'un soucis htpps</li>
                    <li>Travail sur la validation W3C du site principal</li>
                    <li>Travail de relecture & de vérification de la navigation entre les pages du site, les liens...
                    </li>
                    <li>Corrections de fautes suite retour réseau : merci Christophe !</li>
                </ul>
            </div>

            <div class="col-md-4 zone bloc4-maj">
                <h3>Mise à jour du 13 juillet 2020</h3>
                <ul>
                    <li>Ajout d'une liste URL dans "sources/documentation web" et d'une ligne "tutoriels en ligne"</li>
                    <li>Aération par séparation des blocs des pages "Accueil", "Ma formation" et "Mon profil</li>
                    <li>Passage du blanc au gris clair pour les compétences autres que web, dans la page "Autres
                        compétences en détail"</li>
                    <li>Changement de l'URL du site, de https://developpeur-de-site-web.fr/TP-projet02-CVsite/ à
                        https://developpeur-de-site-web.fr/CVSite-Vincent-NGUYEN/</li>
                    <li>Mise en "off" des liens Symfony qu ne fonctionnent pas encore, dans la page "Symfony"</li>
                    <li>Reformulation de quelques lignes, dans "Mon profil"</li>
                </ul>
            </div>
        </div>
    </section>

    <section>
        <div class="row bloc12-maj">
            <div class="col-md-4 zone bloc4-maj">
                <h3>Mise à jour du 12 juillet 2020</h3>
                <ul>
                    <li>Travail sur le responsive</li>
                    <li>Reformulation de phrases dans la page "Moi"</li>
                    <li>Corrections de fautes suite retour réseau : merci Christophe !</li>
                    <li>Création du cv.pdf</li>
                    <li>Modification du "Moi" par "Mon profil", dans cv & navbar</li>
                </ul>
            </div>

            <div class="col-md-4 zone bloc4-maj">
                <h3>Mise à jour du 11 juillet 2020</h3>
                <ul>
                    <li>Création d'un lien au niveau de l'adresse mail de la navbar</li>
                    <li>Insertion du contenu de la page "Mes productions/SYMFONY"</li>
                    <li>Récupération et adaptation des BDD SQL des travaux "SYMFONY", de WAMP
                        vers hébergeur</li>
                    <li>Ajout du logo "SQL" manquant au CV</li>
                    <li>Envoi URL à réseau pour relecture extérieure, en vue de correction du contenu écrit, du visuel
                        général et de l'ergonomie</li>
                    <li>Refonte du sous-menu "Mes compétences"</li>
                    <li>Vérification de l'indentation et corrections</li>
                    <li>Correction d'un souci avec la navbar (balise non fermée)</li>
                </ul>
            </div>

            <div class="col-md-4 zone bloc4-maj">
                <h3>Mise à jour du 10 juillet 2020</h3>
                <ul>
                    <li>Passage des sites en HTTPS (ça marche ! :)...presque pour tous :(...)</li>
                    <li>Récupération et adaptation des BDD SQL des travaux "PDO" dans "PHP/SQL", de WAMP vers hébergeur
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <section>
        <div class="row bloc12-maj">
            <div class="col-md-4 zone bloc4-maj">
                <h3>Mise à jour du 09 juillet 2020</h3>
                <ul>
                    <li>Vérification et correction pour validation W3C</li>
                    <li>Ajout de "Validation W3C" aux blocs de "Mes productions"</li>
                    <li>Insertion du contenu de la page "Mes productions/PHPSQL" (PDO)</li>
                </ul>
            </div>

            <div class="col-md-4 zone bloc4-maj">
                <h3>Mise à jour du 08 juillet 2020</h3>
                <ul>
                    <li>Travail sur l'amélioration du contenu des différentes parties de la page "Mes compétences"</li>
                    <li>Travail sur le padding du menu burger</li>
                    <li>Mise en avant de "Mes productions" sur la navbar & autres mots-clés</li>
                    <li>Récupération et adaptation des BDD SQL des travaux "PHP/SQL" et de l'évaluation n°2, de WAMP
                        vers hébergeur</li>
                </ul>
            </div>

            <div class="col-md-4 zone bloc4-maj">
                <h3>Mise à jour du 06 juillet 2020</h3>
                <ul>
                    <li>Reformulation de la section "contexte" de la page "Moi"</li>
                    <li>Travail sur l'amélioration du contenu des différentes parties de la page "Mes compétences"</li>
                    <li>Harmonisation des marges</li>
                </ul>
            </div>
        </div>
    </section>

    <section>
        <div class="row bloc12-maj">
            <div class="col-md-4 zone bloc4-maj">
                <h3>Mise à jour du 05 juillet 2020</h3>
                <ul>
                    <li>Correction de coquilles de mise en forme dans l'index</li>
                    <li>Résolution de problèmes de liens, passage des urls locales vers des urls en ligne</li>
                    <li>Passage des sites en HTTPS (ne marche pas :(...)</li>
                    <li>Remise en forme de la partie gauche des projets de la page "Mes productions"</li>
                </ul>
            </div>

            <div class="col-md-4 zone bloc4-maj">
                <h3>Mise à jour du 04 juillet 2020</h3>
                <ul>
                    <li>Réécriture complète des compétences web (non satisfaisantes) et travail sur la mise en forme
                    </li>
                    <li>Changement de l'image de fond suite avis extérieurs. uniformisation : toutes les pages ont la
                        même image de fond.</li>
                    <li>Mise en ligne du site sur hébergeur et lien diffusé sur liste d'amis Facebook</li>
                    <li>Création d'un système de séparation des compétences Front, back et autres avec liens dans la
                        page ainsi que sur la page d'accueil</li>
                </ul>
            </div>

            <div class="col-md-4 zone bloc4-maj">
                <h3>Mise à jour du 03 juillet 2020</h3>
                <ul>
                    <li>Ajout de liens sur CV vers les autres pages pour + d'infos</li>
                    <li>Reformulation des compétences web et travail sur la mise en forme</li>
                    <li>Correction de problèmes de marges</li>
                </ul>
            </div>
        </div>
    </section>

    <section>
        <div class="row bloc12-maj">
            <div class="col-md-4 zone bloc4-maj">
                <h3>Mise à jour du 02 juillet 2020</h3>
                <ul>
                    <li>Travail sur le menu "Mes productions" (dont ajout choix "SYMFONY")</li>
                    <li>Réecriture des compétences de la page "Mes compétences"</li>
                </ul>
            </div>

            <div class="col-md-4 zone bloc4-maj">
                <h3>Mise à jour du 01 juillet 2020</h3>
                <ul>
                    <li>Eclatement de la page "Mes productions" en 5 pages thématiques</li>
                    <li>Annotation des liens non-actifs dans "Mes productions"</li>
                    <li>Effet de modification de l'opacité au survol puis non-survol des blocs</li>
                </ul>
            </div>

            <div class="col-md-4 zone bloc4-maj">
                <h3>Mise à jour du 30 juin 2020</h3>
                <ul>
                    <li>Actualisation de la page Maj</li>
                    <li>Optimisation du SASS
                        <ul>
                            <li>Travail sur le fond</li>
                            <li>Travail sur la forme</li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <section>
        <div class="row bloc12-maj">
            <div class="col-md-4 zone bloc4-maj">
                <h3>Mise à jour du 29 juin 2020</h3>
                <ul>
                    <li>Création de la page "Maj" intégrée au footer</li>
                    <li>Travail sur la disposition des "row" des différentes pages
                        <ul>
                            <li>12, 6/6, 5/7</li>
                            <li>Imbrication de "row"" dans des "row" (12 & 12 dans une 6, 5 & 7 dans une 12...)</li>
                            <li>Repositionnement des contenus</li>
                        </ul>
                    </li>
                    <li>Début d'utilisation de PHP - à finir
                        <ul>
                            <li>Passage des fichiers HTML en PHP</li>
                        </ul>
                    <li>Création de "head.php" & "footer.php" pour allégement des fichiers</li>
                </ul>
            </div>

            <div class="col-md-4 zone bloc4-maj">
                <h3>Mise à jour du 28 juin 2020</h3>
                <ul>
                    <li>Mise en place du contenu de la page "Mes productions"
                        <ul>
                            <li>Rédaction des parties explicatives</li>
                            <li>Mise en place des iframes et des liens</li>
                        </ul>
                    </li>
                    <li>Reprise et optimisation du CSS avec SASS - à finir</li>
                </ul>
            </div>

            <div class="col-md-4 zone bloc4-maj">
                <h3>Mise à jour du 27 juin 2020</h3>
                <ul>
                    <li>Ajout de "+d'infos sur:" dans la navbar</li>
                    <li>Développement du projet : ajout de plusieurs pages </li>
                    <li>Rédaction des pages " Mes compétences", "Mon expérience", "Ma formation" & "Moi" d'après 3
                        anciennes versions de CV - à optimiser</li>
                </ul>
            </div>
        </div>
    </section>

    <section>
        <div class="row bloc12-maj">
            <div class="col-md-4 zone bloc4-maj">
                <h3>Mise à jour du 14 juin 2020</h3>
                <ul>
                    <li>Rédaction de la page "Accueil" reprenant mon CV _ HTML et CSS</li>
                    <li>Utilisation de Bootstrap</li>
                    <li>Réflexion sur la composition graphique</li>
                    <li>Travail sur le responsive</li>
                </ul>
            </div>

            <div class="col-md-4 zone bloc4-maj">
                <h3>Mise à jour du 13 juin 2020</h3>
                <ul>
                    <li>Définition des compétences liées au métier</li>
                    <li>Réflexion sur la composition graphique</li>
                    <li>Réflexion sur le nombre de pages composant le CV-Site</li>
                    <li>Recherche du background : une feuille d'arbre, avec un réseau de connexions, semblable à l'image
                        que j'ai d'un site web, de ses multiples langages et outils interconnectés</li>
                </ul>
            </div>

            <div class="col-md-4 zone bloc4-maj">
                <h3>Mise à jour du 06 juin 2020</h3>
                <ul>
                    <li>Lancement du projet CV-Site</li>
                    <li>Réflexion sur la forme du cv</li>
                    <li>Création des fichiers index.html & style.scss</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- ============================== x. FOOTER ============================== -->

    <?php
    require "footer.php";
    ?>

</body>

</html>