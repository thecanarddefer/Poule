
<html>
<head>
<title>Jolies Poules</title>
<meta charset="UTF-8"/>
<meta http-equiv="content-type" content="text/html;" />
<link rel="stylesheet" type="text/css" href="../view/design/style.css"
</head>

<body>
<header>
  <table>
    <tr>
      <td> <a href="?"> <img src="../view/image/logo.png"/> </a> </td>
      <td> <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p> </td>
      <td> <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p> </td>
      <td> <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p> </td>
      <td> <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p> </td>
      <td> <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p> </td>
      <td> <a href="../view/Panier.view.php"> <img src="../view/image/panier.jpg" height = 100 width = 100/> </a> </td>
      <td> <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p> </td>
      <td> <a href="?"> <img src="" alt="Nos catégories"/> </a> </td>
    </tr>
  </table>
</header>

    <nav>

    </nav>
    <?php foreach ($articles as $key => $value) {?>
      <article >
        <h2><?=$value->nom?></h2>
        <h3>race : <?php require_once("../model/DAO.class.php"); print($dao->getCat($value->race)->nom)?></h3>
        <a href="../controler/Profil.crtl.php?ref=<?=$value->ref?>">
        <img src="../view/image/<?=$value->image?>" alt="" height=50px width=50px>
      </a>
        <p><?=$value->prix?> €</p>
      </article>

    <?php } ?>

    <table cellpadding = 10 >
      <tr>
        <td> <a  href="?ref=<?=$prev[0]->ref?>"> <img src="../view/image/fleche_gauche.png"> </a> </td>
        <td> <a href="?ref=<?=$next->ref?>"> <img src="../view/image/fleche_droite.png"> </a> </td>
      </tr>
    </table>

<footer>
</p>Site fictif, issu de données réelles du Web</p>
</footer>
</body>
</html>
