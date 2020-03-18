<?php $titre = 'erreur :-('; ?>

<?php ob_start(); ?>
<p> Une Erreur est arrivée avec le message : <?= $msgErreur ?></p>
<?php $contenu = ob_get_clean(); ?>

<?php require 'gabarit.php'; ?>

