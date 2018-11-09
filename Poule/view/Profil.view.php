<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>Jolies Poules - Profil - <?= $poule[0]->nom ?></title>
    <meta charset="utf-8">
    <meta http-equiv="content-type" content="text/html;" />
    <link rel="stylesheet" type="text/css" href="../view/design/stylePanier.css">
  </head>
  <body>
    <header>
      <a href="Accueil.crtl.php"><img src="../view/image/logo.png"/></a>
      <a href="../controler/Panier.crtl.php"><img src="../view/image/panier.jpg" alt="" id="panier"></a>
    </header>
    <p>Nom : <?= $poule[0]->nom ?></p>
    <p>Race : <?php require_once("../model/DAO.class.php"); print($dao->getCat($poule[0]->race)->nom) ?></p>
    <p>Prix : <?= $poule[0]->prix ?></p>
    <img src="../view/image/<?=$poule[0]->image?>" alt="" height=150px width=150px>
    <p>Ponte : <?= $poule[0]->ponte ?></p>
    <p>Naissance : <?= $poule[0]->naissance ?></p>
    <a href="../controler/Panier.crtl.php?ref=<?= $poule[0]->ref ?>">
    <img src="../view/image/plus.png" alt="" height=100px width=100px id="plus">
    </a>
  </body>
</html>
