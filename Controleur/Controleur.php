<?php

require 'Modele/Modele.php';

//tous les billets
function accueil() {
	$billets = getBillets();
	require 'Vue/vueAccueil.php';
}

//page billets
function billet($idBillet) {
	$billet = getBillet($idBillet);
    $commentaires = getCommentaires($idBillet);
    require 'Vue/vueBillet.php';
}

//page erreur
function erreur($msgErreur) {
	require 'Vue/vueErreur.php';
}