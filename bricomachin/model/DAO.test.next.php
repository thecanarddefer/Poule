<?php
// Test de la classe DAO
require_once('DAO.class.php');

// Recupère toutes les catégories
$art = $dao->getN(60040351, 1);
$cat = $dao->next($art[0]);

// Affiche 2 catégories pour le test : affiche le pere d'une catégorie
var_dump($cat);
print("La référence qui suit 60040351 est ".$cat->ref."\n");

 ?>
