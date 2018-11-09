<?php
  include_once("../model/DAO.class.php");
  include_once("../model/Panier.class.php");
  if(!isset($_SESSION)){
    session_start();
    creationPanier();
  }

  $reference = $_GET['ref'];
  $poule = $dao->getN($reference,1);

  include("../view/Profil.view.php");
 ?>
