<!DOCTYPE html>
<html lang="fr">

<head>
    <title>CV SITE page Ma formation</title>
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
                    <a class="nav-item nav-link"><span class="contenu-menu mots-cles-nav">Ma formation</span></a>
                    <a class="nav-item nav-link" href="moi.php"><span class="contenu-menu moi">Mon profil</span></a>
                </div>
            </div>
        </div>
    </nav>

    <!-- ============================== 2. FORMATION ARINFO ============================== -->

    <header>
        <div class="row">
            <div class="col-md-12 zone">
                <h2>formation ARINFO (2020)</h2>
            </div>
        </div>
        <div class="row bloc12-formation">
            <div class="col-md-4 bloc4-formation">
                <h2>Arinfo.fr</h2>
                <iframe width="100%" height="600" src="https://www.arinfo.fr/"></iframe>
            </div>
            <div class="col-md-4 bloc4-formation">
                <h2>la formation</h2>
                <iframe width="100%" height="600"
                    src="https://www.arinfo.fr/formations/metiers-du-web/formation-developpeur-web"
                    ></iframe>
            </div>
            <div class="col-md-4 bloc4-formation">
                <h2>le programme</h2>
                <iframe width="100%" height="600"
                    src="https://www.arinfo.fr/static/uploads/plaquette-dwwm-developpeur-web-mobile.pdf"
                    ></iframe>
            </div>
        </div>
    </header>
    
    <br />
    <br />

    <!-- ============================== 3. FORMATION IFOCOP ============================== -->

    <section>
        <div class="row">
            <div class="col-md-12 zone">
                <h2>formation IFOCOP (2007)</h2>
            </div>
        </div>
        <div class="row bloc12-formation">
            <div class="col-md-4 bloc4-formation">
                <h2>Ifocop.fr</h2>
                <iframe width="100%" height="600" src="https://www.ifocop.fr/"></iframe>
            </div>
            <div class="col-md-4 bloc4-formation">
                <h2>la formation</h2>
                <iframe width="100%" height="600"
                    src="https://www.ifocop.fr/formations-metiers/comptabilite-gestion/formation-assistante-de-gestion/"
                    ></iframe>
            </div>
            <div class="col-md-4 bloc4-formation">
                <h2>le programme</h2>
                <iframe width="100%" height="600"
                    src="https://www.ifocop.fr/formations-metiers/comptabilite-gestion/formation-assistante-de-gestion/pdf/"
                    ></iframe>
            </div>
        </div>

    </section>
    
    <br />
    <br />

    <!-- ============================== 4. FORMATION CANON ============================== -->

    <section>
        <div class="row">
            <div class="col-md-12 zone">
                <h3>formation CANON (1998)</h3>
                <ul>
                    <li>1ère session de l'école de vente CANON</li>
                    <li>Formation en alternance de niveau VI, d'une durée de 10 mois</li>
                    <li>Alternance effectuée au siège de CANON France</li>
                    <li>Secteur de la reprographie, vente de matériels bureautiques professionnels auprès des
                        entreprises</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- ============================== 4. FORMATION SCOLAIRE ============================== -->

    <section>
        <div class="row">
            <div class="col-md-12 zone">
                <h3>formation scolaire en mécanique générale (1987-1990)</h3>
                <ul>
                    <li>BAC Productique Mécanique (niveau fin de 1ère année)</li>
                    <li>BEP Opérateur Régleur sur Système d’Usinage</li>
                    <li>CAP Fraiseur</li>
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