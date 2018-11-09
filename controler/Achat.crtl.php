<?php
include_once("../model/Panier.class.php");
if(!isset($_SESSION)){
  session_start();
  creationPanier();
}
  $poules = array();
  $total=0;
  $nbArticles=count($_SESSION['panier']['poule']);
  for ($i=0 ;$i < $nbArticles ; $i++)
  {
  $poules[$i]=$_SESSION['panier']['poule'][$i];
  $total=$total+$poules[$i][0]->prix;
  }
  supprimePanier();
include("../view/Achat.view.php");
 ?>
