<?php

include_once("../model/poule.class.php");
  include_once("../model/DAO.class.php");
  include_once("../model/Panier.class.php");

  if(!isset($_SESSION)){
    session_start();
    creationPanier();
  }
  $poules = array();
  $total=0;
  if (creationPanier())
  {
    if(isset($_GET['ref'])){
      $reference = $_GET['ref'];
      $poule = $dao->getN($reference,1);
      ajouterArticle($poule);
    }
    if(isset($_GET['supp'])){
      $reference = $_GET['supp'];
      $poule = $dao->getN($reference,1);
      supprimerArticle($reference);
    }
		$nbArticles=count($_SESSION['panier']['poule']);
    for ($i=0 ;$i < $nbArticles ; $i++)
		{
    $poules[$i]=$_SESSION['panier']['poule'][$i];

    $total=$total+$poules[$i][0]->prix;
    }
  }
  include("../view/Panier.view.php");
 ?>
