<style>
.panel-body p {
    font-size: 1.2em;
}
</style>
<div class="container">
    <div class="panel panel-default">
        <div class="panel-heading text-center">
            <h4>
                <?php echo stripslashes($vue['objectif']); ?>
            </h4>
            <h4>
                <small><?php echo $vue['message']; ?> ( Temps : <?php echo $vue['temps']; ?> secondes)</small>
            </h4>
        </div>
    </div>
    <div class="panel-body text-center">
        <?php
		foreach($_POST['fiche'] as $ligne) {
		?>
        <div class="row">
            <?php
				foreach ($ligne as $cellule) {
					$correction='success';
					$cellule['r'] = preg_replace('/,/','.',strtolower($cellule['r']));
					if ($cellule['s'] != $cellule['r']) $correction='warning';
			?>
            <div class="col-md-6 container">
                <p class="label-<?php echo $correction; ?>">
                    <?php
							$reponse = ($cellule['r']!=null) ? htmlspecialchars($cellule['r']): "X";
							if (preg_match("/###/",$cellule['q'])) {
								$cellule['q'] = preg_replace('/###/', '<span class="text-danger">'.$reponse.'</span>', $cellule['q']);
							} else {
								$cellule['q'] .= '<span class="text-danger">'.preg_replace('/\./', ',', $reponse).'</span>';
							};
							echo stripslashes($cellule['q']);
							if ($cellule['s'] != $cellule['r']) {
								echo ' --> ';
								echo preg_replace('/\./', ',', $cellule['s']);
							}
							?>
                </p>
            </div>
            <?php
			}
			?>
        </div>
        <?php
		}
		?>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-6 text-right">
            <form class="form-group"
                action="?action=calculer&niveau=<?php echo $_POST['niveau'];?>&numero=<?php echo $_POST['numero'];?>"
                method="post">
                <button type="submit" class="btn btn-primary" name="recommencer"
                    value="RECOMMENCER" />RECOMMENCER</button>
            </form>
        </div>
        <div class="col-md-6 text-left">
            <form class="form-group" action="?#<?php echo $_POST['niveau']; ?>" method="post">
                <button type="submit" class="btn btn-warning" name="accueillir" value="ABANDONNER" />ABANDONNER</button>
            </form>
        </div>
    </div>
    <div class="modal fade" id="bravo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content panel-success text-center">
                <div class="modal-header panel-heading">
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                        <span class="sr-only">Close</span>
                    </button>
                    <h3 id="myModalLabel" class="modal-title">Bravo !</h3>
                </div>
                <div class="modal-body">
                    <h4>Tu as battu le record de cet exercice.</h4>
                    <p><img src="css/glyphicons_074_cup.png" alt="CHRONO" title="Record." />
                    <p>
                    <h4 class="label-info">Nouveau record <?php echo $vue['temps']; ?> secondes</h4>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<?php
if (!empty($vue['recordbattu'])) {
?>
<script>
$(document).ready(function() {
    $('#bravo').modal('show');
});
</script>
<?php
}