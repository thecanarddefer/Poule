<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <p>Nom : <?= $poule[0]->nom ?></p>
    <p>Race : <?= $poule[0]->race ?></p>
    <p>Prix : <?= $poule[0]->prix ?></p>
    <img src="../view/image/<?=$poule[0]->image?>" alt="" height=150px width=150px>
    <p>Ponte : <?= $poule[0]->ponte ?></p>
    <p>Naissance : <?= $poule[0]->naissance ?></p>
    <a href="../controler/Panier.crtl.php">
    <img src="../view/image/panier.jpg" alt="">
    </a>
    <a href="../controler/Panier.crtl.php?ref=<?= $poule[0]->ref ?>">
    <img src="../view/image/plus.png" alt="" height=150px width=150px>
    </a>
  </body>
</html>
