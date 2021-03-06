<?php
                    /* Définition des routes*/
$app->match('/', "ConnexionControleur::accueil"); 

$app->match('/verifierUser', "ConnexionControleur::verifierUser");
$app->match('/deconnecter', "ConnexionControleur::deconnecter");

$app->match('/selectionnerMois', "EtatFraisControleur::selectionnerMois");
$app->match('/voirFrais', "EtatFraisControleur::voirFrais");

$app->match('/saisirFrais', "GestionFicheFraisControleur::saisirFrais");
$app->match('/validerFrais', "GestionFicheFraisControleur::validerFrais");

$app->match('/selectionnerFiche', "ValiderFicheFraisControleur::selectionnerFiche");
$app->match('/voirFiche', "ValiderFicheFraisControleur::voirFiche");
$app->match('/validerFiche', "ValiderFicheFraisControleur::validerFiche");

$app->match('/genererEtat', "GenererEtatQuotidientControleur::genererEtat");

?>
