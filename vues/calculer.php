<div class="container">
	<div class="panel panel-default">
		<div class="panel-heading text-center">
			<div class="row">
				<div class="col-md-3">
					<p><img src="css/glyphicons_074_cup.png" alt="CHRONO" title="Record."/><p>
					<span class="badge"><?php echo $vue['record']; ?></span>
				</div>
				<div class="col-md-6">
					<h3><?php echo $vue['objectif']; ?></h3>
				</div>
				<div class="col-md-3">
					<p><img src="css/glyphicons_055_stopwatch.png" alt="CHRONO" title="Battre le record."/></p>
					<span class="stopwatch badge">0 s.</span>
				</div>
			</div>
		</div>
		<div class="panel-body">
			<div class="container">
			<form role="form" action="?#<?php echo $vue['niveau']; ?>" method="post">
<?php
$l=0;
$c=0;
foreach($vue['donnees'] as $ligne) {
?>
				<div class="row form-group">
<?php
foreach ($ligne as $cellule) {
	$type = (is_numeric($cellule['s'])) ? "number" : "text";
	$step = (is_float($cellule['s'])) ? 'step="0.001"' : "";
	$saisie = '<input type="'. $type .'" name="fiche['.$l.']['.$c.'][r]" value="" size="'.$vue['size'].'" '.$step.' autocomplete="off" />'.
		'<input type="hidden" name="fiche['.$l.']['.$c.'][q]" value="'.$cellule['q'].'"/>'.
		'<input type="hidden" name="fiche['.$l.']['.$c.'][s]" value="'.$cellule['s'].'"/>';
	if (preg_match("/###/",$cellule['q'])) {
		$cellule['q'] = preg_replace('/###/', $saisie, $cellule['q']);
	} else {
		$cellule['q'] .= $saisie;
	};
?>
					<div class="col-md-6 text-center">
						<?php echo $cellule['q']; ?>
					</div>
<?php
	$c++;
}
$l++;
?>
				</div>
<?php
} // $lignes
?>
				<hr>
				<div class="row text-center">
					<input type="hidden" name="niveau" value="<?php echo $vue['niveau'];?>"/>
					<input type="hidden" name="numero" value="<?php echo $vue['numero'];?>"/>
					<input type="hidden" name="objectif" value="<?php echo $vue['objectif'];?>"/>
					<input type="hidden" name="tempsDebut" value="<?php echo time(); ?>"/>
					<button type="submit" class="btn btn-success" name="corriger" value="CORRIGER">CORRIGER</button>
					<button type="submit" class="btn btn-warning" name="accueillir" value="ABANDONNER">ABANDONNER</button>
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
