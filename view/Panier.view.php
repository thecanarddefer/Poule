<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Panier</title>
  </head>
  <body>
  <header>
    <a href="Accueil.crtl.php"><p><img src="../view/image/logo.png"/></p></a>
      <h1>Panier</h1>
      <img src="../view/image/panier.jpg" alt="">
  </header>
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
      <td><a href=\"".htmlspecialchars("panier.php?action=suppression&l=".rawurlencode($_SESSION['panier']['libelleProduit'][$i]))."\">Supprimer</a></td>
    </tr>

  <?php } ?>
  <tr>
    <td>Total</td>
    <td></td>
    <td><?=$total?>€</td>
    <td><a href="">acheter</a></td>
  </tr>
</table>


  </body>
</html>
