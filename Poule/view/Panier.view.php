<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <title>Jolies Poules - Panier</title>
    <meta charset="utf-8">
    <meta http-equiv="content-type" content="text/html;" />
    <link rel="stylesheet" type="text/css" href="../view/design/stylePanier.css">
  </head>
  <body>
  <header>
    <a href="Accueil.crtl.php"><img src="../view/image/logo.png"/></a>
    <img src="../view/image/panier.jpg" alt="" id="panier">
  </header>
  <h1>Panier</h1>
  <table style="width: 400px">
    <tr>
		    <td colspan="4">Votre panier</td>
	  </tr>
	  <tr>
		  <td>Nom</td>
      <td>Race</td>
		  <td>Prix </td>
		  <td>Action</td>
	  </tr>
    <?php for($i=0 ;$i < $nbArticles ; $i++){?>
    <tr>
      <td><?=$poules[$i][0]->nom?></td>
      <td><?php require_once("../model/DAO.class.php"); print($dao->getCat($poules[$i][0]->race)->nom)?></td>
      <td><?=$poules[$i][0]->prix?>€</td>
      <td><a href="Panier.crtl.php?supp=<?=$poules[$i][0]->ref?>">Supprimer</a></td>
    </tr>

  <?php } ?>
  <tr>
    <td>Total</td>
    <td></td>
    <td><?=$total?>€</td>
    <td><a href="Achat.crtl.php">acheter</a></td>
  </tr>
</table>


  </body>
</html>
