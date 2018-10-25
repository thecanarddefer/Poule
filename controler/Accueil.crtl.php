<?php
    // Partie principale
    // Inclusion du modèle
    include_once("../model/DAO.class.php");
    if(isset($_GET['cat']) && isset($_GET['ref'])){
      $ref=$_GET['ref'];
      $articles=$dao->getElemRace($_GET['cat']);
      $prev = $dao->prevN($articles[0]->ref,12);
      $next = $dao->next(end($articles));
    }
    else if(isset($_GET['ref'])&& $_GET['ref']>11 && $_GET['ref']<28){
      $ref=$_GET['ref'];
      $articles=$dao->getN($ref,12);
      $prev = $dao->prevN($articles[0]->ref,12);
      $next = $dao->next(end($articles));
    }
    else if(isset($_GET['ref'])&&$_GET['ref']>28){
      $ref=28;
      $articles = $dao->getN($ref,12);
      $prev = $dao->prevN($articles[0]->ref,12);
      $next = $dao->next(end($articles));
    }
    else{
      $ref=1;
      $articles = $dao->getN($ref,12);
      $prev = $dao->getN($ref,12);
      $next = $dao->next(end($articles));
    }

    include("../view/Accueil.view.php");
?>
