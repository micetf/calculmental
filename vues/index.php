<?php
if ($vue['nom'] != 'imprimer.php') {
    ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
        <meta name="description" content="Outil permettant à des enfants de l'école primaire s'entrainer au calcul mental soit en ligne soit sur une fiche imprimée (PDF)" />
        <meta name="keywords" content="numeration, calcul mental, operation, addition, soustraction, multiplication" />
        <title>CALCUL MENTAL</title>
        <link rel="stylesheet" href="public/vendor/css/bootstrap.css">
        <link rel="stylesheet" href="./css/style.css">
        <link rel="icon" type="image/png" href="../img-micetf/logo.png">
    </head>
    <body>
        <div class="navbar navbar-default navbar-inverse"  role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <p class="navbar-text navbar-titre">
                        Calcul Mental
                    </p>
                </div>
                <div class="collapse navbar-collapse pull-right">
                    <label class="label label-default">
                        <?php echo date("d/m/Y"); ?>
                    </label>
                    &nbsp;
                    <a class="btn btn-default navbar-btn"
                        id="accueil"
                        type="button"
                        title="Retour à l'accueil du site"
                        href=".." >
                        MiCetF
                        <span class="glyphicon glyphicon-home"></span>
                    </a>
                    <a class="btn btn-default navbar-btn"
                        id="contact"
                        type="button"
                        title="Pour contacter le webmaster..."
                        href="#">
                        Contact
                        <span class="glyphicon glyphicon-envelope"></span>
                    </a>
                </div>
            </div>
        </div>
        <script src="public/vendor/js/jquery.js"></script>
        <script src="public/vendor/js/bootstrap.js"></script>
        <script src="public/vendor/js/jquery-smoothscroll.js"></script>
        <?php
        include $vue['nom'];
    ?>
        <script src="assets/js/contact.js"></script>
        <script src="assets/js/bof.js"></script>
    </body>
</html>
<?php
}
