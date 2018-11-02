<?php
include_once("../model/poule.class.php");
  include_once("../model/DAO.class.php");
  include_once("../model/Panier.class.php");
  $poules = array();
  $total=0;
  if (creationPanier())
  {
    if(isset($_GET['ref'])){
    $reference = $_GET['ref'];
    $poule = $dao->getN($reference,1);
    ajouterArticle($poule);
    }
		$nbArticles=count($_SESSION['panier']['poule']);
    for ($i=0 ;$i < $nbArticles ; $i++)
		{
    $poules[]=$_SESSION['panier']['poule'][$i];
    
    $total=$total+$poules[$i][0]->prix;
    }
  }
  include("../view/Panier.view.php");
 ?>
