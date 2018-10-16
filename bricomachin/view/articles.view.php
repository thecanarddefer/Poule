<html>
<head>
<title>Bricomachin</title>
<meta charset="UTF-8"/>
<meta http-equiv="content-type" content="text/html;" />
<meta name="author" content="Jean-Pierre Chevallet" />
<link rel="stylesheet" type="text/css" href="../view/design/style.css"
</head>

<body>
<header>
<h1>Bricomachin, le bricolage malin </h1>
<p><img src="../view/design/pub.png"/></p>
</header>




    <nav>
    <a href="?"><img src="../view/design/home.png"/></a>

    <a href="?ref=<?=$prev[0]->ref?>&categorie=0">&lt; </a>
    <a href="?ref=<?=$next->ref?>&categorie=0">></a>
    </nav>
    <?php foreach ($articles as $key => $value) {?>
      <article >
        <h2><?=$value->libelle?></h2>
        <img src="http://www-info.iut2.upmf-grenoble.fr/intranet/enseignements/ProgWeb/data/bricomachin/img/<?=$value->image?>" alt="">
        <p><?=$value->prix?> €</p>
      </article>

    <?php } ?>



<footer>
</p>Site fictif, issus de données réelles du Web</p>
</footer>
</body>
</html>
