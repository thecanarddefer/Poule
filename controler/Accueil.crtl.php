<?php
    // Partie principale
    // Inclusion du modèle
    include_once("../model/DAO.class.php");
    include_once("../model/Panier.class.php");
    if(!isset($_SESSION)){
      session_start();
      creationPanier();
    }
    if((isset($_GET['cat']) && isset($_GET['ref'])) || (isset($_GET['pon']) && isset($_GET['ref']))){
      $ref=$_GET['ref'];
      try {
        if (isset($_GET['cat']) && !isset($_GET['pon'])) {
          $articles=$dao->getElem($_GET['cat'],0);
        } else if (isset($_GET['pon']) && !isset($_GET['cat'])) {
          $articles=$dao->getElem(0,$_GET['pon']);
        } else {
          $articles=$dao->getElem($_GET['cat'],$_GET['pon']);
        }
        $prev = $dao->prevN($articles[0]->ref,12);
        $next = $dao->next(end($articles));
      } catch (\Exception $e) {
        if ($e->getMessage()=='pas dans la liste') {
          $articles=NULL;
        }
      }
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
