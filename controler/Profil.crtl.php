<?php
  include_once("../model/DAO.class.php");

  $reference = $_GET['ref'];
  $poule = $dao->getN($reference,1);

  include("../view/Profil.view.php");
 ?>
