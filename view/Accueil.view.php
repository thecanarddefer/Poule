
<html>
<head>
<title>Jolies Poules</title>
<meta charset="UTF-8"/>
<meta http-equiv="content-type" content="text/html;" />
<link rel="stylesheet" type="text/css" href="../view/design/style.css"
</head>

<body>
<header>
<a href="?"><p><img src="../view/image/logo.png"/></p></a>
</header>




    <nav>


    <a href="?ref=<?=$prev[0]->ref?>">&lt; </a>
    <a href="?ref=<?=$next->ref?>">></a>
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



<footer>
</p>Site fictif, issus de données réelles du Web</p>
</footer>
</body>
</html>
