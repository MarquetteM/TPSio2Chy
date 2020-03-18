<?php $titre = 'Mon Blog - '.$billet['titre']; ?>

<?php ob_start(); ?>
<article>
    <header>
        <h1 class="titreBillet"><?php echo $billet['titre'] ?></h1>
        <time><?php echo $billet['date'] ?></time>
    </header>
    <p><?php echo $billet['contenu'] ?></p>
</article>
<hr />
<header>
    <h1 id="titreReponses">Réponse à <?= $billet['titre'] ?></h1>
</header>
<?php foreach ($commentaires as $commentaire):?>
    <p>Le : <?=$commentaire['date'] ?> <?=$commentaire['auteur'] ?> à écrit:</p>
    <p><?= $commentaire['contenu'] ?></p>
<?php endforeach; ?>
<?php $contenu = ob_get_clean(); ?>

<?php require 'gabarit.php'; ?>

