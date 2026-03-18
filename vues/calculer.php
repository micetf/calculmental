<div class="container">
    <div class="panel panel-default">
        <div class="panel-heading text-center">
            <div class="row">
                <div class="col-md-3">
                    <p><img src="css/glyphicons_074_cup.png" alt="Record" title="Record."/></p>
                    <span class="badge"><?php echo $vue['record']; ?></span>
                </div>
                <div class="col-md-6">
                    <h3><?php echo $vue['objectif']; ?></h3>
                </div>
                <div class="col-md-3">
                    <p><img src="css/glyphicons_055_stopwatch.png" alt="Chrono" title="Battre le record."/></p>
                    <span class="stopwatch badge">0 s.</span>
                </div>
            </div>
        </div>
        <div class="panel-body">
            <div class="container">
                <form role="form"
                    action="?#<?php echo $vue['niveau']; ?>"
                    method="post">

                    <?php
                    $l = 0;
                    foreach ($vue['donnees_affichage'] as $ligne) :
                        $c = 0;
                        ?>
                    <div class="row form-group">
                        <?php foreach ($ligne as $cellule) : ?>
                        <?php
                            $saisie = '<input type="text"'
                                . ' name="reponses[' . $l . '][' . $c . ']"'
                                . ' value=""'
                                . ' size="' . $vue['size'] . '"'
                                . ' autocomplete="off" />';

                            if (preg_match('/###/', $cellule['q'])) {
                                $questionAffichee = preg_replace('/###/', $saisie, $cellule['q']);
                            } else {
                                $questionAffichee = $cellule['q'] . $saisie;
                            }
                            ?>
                        <div class="col-md-6 text-center">
                            <?php echo $questionAffichee; ?>
                        </div>
                        <?php $c++; ?>
                        <?php endforeach; ?>
                    </div>
                    <?php $l++; ?>
                    <?php endforeach; ?>

                    <hr>
                    <div class="row text-center">
                        <input type="hidden" name="niveau"
                            value="<?php echo $vue['niveau']; ?>"/>
                        <input type="hidden" name="numero"
                            value="<?php echo $vue['numero']; ?>"/>
                        <input type="hidden" name="objectif"
                            value="<?php echo $vue['objectif']; ?>"/>
                        <input type="hidden" name="tempsDebut"
                            value="<?php echo time(); ?>"/>
                        <button type="submit" class="btn btn-success"
                            name="corriger" value="CORRIGER">CORRIGER</button>
                        <button type="submit" class="btn btn-warning"
                            name="accueillir" value="ABANDONNER">ABANDONNER</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
$(document).ready(function () {
    var t = 1,
        compteur = function() {
            $('.stopwatch.badge').text(t++ + ' s.');
            setTimeout(compteur, 1000);
        };
    setTimeout(compteur, 1000);
    $('input[type=text]:first').focus();
});
</script>