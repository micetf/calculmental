
    <div class="container">
        <div class="jumbotron">
            <h2 class="text-center">Bienvenue !</h2>
            <hr>
            <div class="row">
                <div class="col-md-8">
<?php
$modeleLien = '<a href="#{niveau}" class="btn btn-primary btn-lg" title="Aller au niveau {niveau}">{niveau}</a>';
$boutons = array();
foreach ($niveaux as $niveau) {
    $boutons[] = preg_replace("/{niveau}/", $niveau, $modeleLien);
}
$liensPage = join(" ", $boutons);
?>
                    <ul>
                        <li><p>Choisis ton niveau : <?php echo $liensPage; ?></p></li>
                        <li><p>Choisis ton objectif (ex : Dénombrer jusqu'à 5.)</p></li>
                        <li><p>Entraîne-toi en ligne :</p>
                            <ul>
                            <li><p>Démarre l'entraînement <img src="css/glyphicons_055_stopwatch.png" alt="CHRONO" title="Battre le record."/></p></li>
                            <li><p>Peut-être battras-tu le record <img src="css/glyphicons_074_cup.png" alt="RECORD" title="Record."/></p></li>
                            </ul>
                        </li>
                        <li><p>Fabrique une fiche <img src="css/pdf.gif" alt="PDF" title="Creer une fiche au format PDF."/> que tu pourras imprimer</p></li>
                    </ul>
                </div>
                <div class="col-md-4 text-center">
                    <div class="panel panel-danger">
                        <div class="panel-heading">
                            <strong>
                                Si vous pensez que cet outil le mérite...
                            </strong>
                        </div>
                        <div class="panel-body">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                            <input type="hidden" name="cmd" value="_s-xclick">
                            <input type="hidden" name="hosted_button_id" value="ZXVEXH5392YTY">
                            <input type="image" src="https://www.paypalobjects.com/fr_FR/FR/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - la solution de paiement en ligne la plus simple et la plus sécurisée !">
                            <img alt="" border="0" src="https://www.paypalobjects.com/fr_FR/i/scr/pixel.gif" width="1" height="1">
                            </form>
                        </div>
                        <div class="panel-footer">
                            <small>
                                Merci !
                            </small>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <h3 class="text-center">Bon courage !</h3>
        </div>
    </div>
    <div class="container">

<?php
foreach ($niveaux as $niveau) {
    $niveauMajuscule = strtoupper($niveau);
    ?>
    <div class="panel panel-default" id="<?php echo $niveau; ?>">
        <div class="panel-heading text-center">
            <h3>
<?php
    echo preg_replace("/" . $niveau . "\" class=\"/", $niveau . "\" class=\"active ", $liensPage);
    ?>
            </h3>
        </div>
        <div class="panel-body">
            <table class="accueil table table-striped">
                <tbody>
<?php
foreach ($classeur[$niveau] as $fiche) {
    $numero = $fiche['numero'];
    $objectif = $fiche['objectif'];
    $reussite = new Reussite($niveau, $numero);
    $record = $reussite->getRecord();
    $moyenne = $reussite->getMoyenne();
    ?>
                    <tr>
                        <td><?php echo $objectif; ?></td>
                        <td>
                            <a href="<?php echo "?action=calculer&amp;niveau=$niveau&amp;numero=$numero"; ?>" >
                            <img src="css/glyphicons_055_stopwatch.png" alt="CHRONO" title="Battre le record."/>
                            </a>
                        </td>
                        <td>
                            <a href="<?php echo "?action=imprimer&amp;niveau=$niveau&amp;numero=$numero"; ?>" >
                            <img src="css/pdf.gif" alt="PDF" title="Creer une fiche au format PDF."/>
                            </a>
                        </td>
                        <td>
                            <img src="css/glyphicons_074_cup.png" alt="Record :" title="Record.">
                        </td>
                        <td>
<?php
if ($record == '') {
    ?>
                            <span class="label label-default">???</span>
<?php
} else {
    ?>
                            <span class="label label-danger"><?php echo $record; ?> s.</span>
                            <span class="label label-success">(temps moyen : <?php echo round($moyenne); ?> s.)</span>
<?php
}
    ?>
                        </td>
                    </tr>
<?php
}
    ?>
                </tbody>
            </table>
        </div>
    </div>
<?php
}   // panel niveau
?>
</div>
                            </div>
<div id="top">
    <a class="btn btn-primary btn-lg"
        href="#"
        title="Retourner au début">
        <span class="glyphicon glyphicon glyphicon-arrow-up"></span>
    </a>
</div>
<script>
$(document).ready(function () {
    $('a[href*=#]').click(function() {
        const hash = $(this).attr('href');
        $.smoothScroll({
            scrollElement: null,
            scrollTarget: hash,
            afterScroll: _ => document.location.hash = hash
        });
        return false;
    });
});
</script>
