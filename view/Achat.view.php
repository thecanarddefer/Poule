<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>Jolies Poules - Achat</title>
    <meta charset="utf-8">
    <meta http-equiv="content-type" content="text/html;" />
    <link rel="stylesheet" type="text/css" href="../view/design/styleProfil.css">
  </head>
  <body>
    <header>
      <a href="Accueil.crtl.php"><img src="../view/image/logo.png"/></a>
      <a href="../controler/Panier.crtl.php"><img src="../view/image/panier.jpg" alt="" id="panier"></a>
    </header>
    <h1>Vous avez acheté : </h1>
    <table style="width: 400px">
      <tr>
  		    <td colspan="3"></td>
  	  </tr>
  	  <tr>
  		  <td>Nom</td>
        <td>Race</td>
  		  <td>Prix </td>
  	  </tr>
      <?php for($i=0 ;$i < $nbArticles ; $i++){?>
      <tr>
        <td><?=$poules[$i][0]->nom?></td>
        <td><?php require_once("../model/DAO.class.php"); print($dao->getCat($poules[$i][0]->race)->nom)?></td>
        <td><?=$poules[$i][0]->prix?>€</td>
      </tr>
        <?php } ?>
        <h2>pour la modique somme de <?=$total?> €</h2>
  </body>
</html>
