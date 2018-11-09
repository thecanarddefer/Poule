
<html>
  <head>
    <title>Jolies Poules - Accueil</title>
    <meta charset="UTF-8"/>
    <meta http-equiv="content-type" content="text/html;" />
    <link rel="stylesheet" type="text/css" href="../view/design/styleAccueil.css">
  </head>
<body>
  <header>
    <a href="?"><img src="../view/image/logo.png"/></a>
    <a href="../controler/Panier.crtl.php"><img src="../view/image/panier.jpg" alt="" id="panier"></a>
  </header>
    <?php if($articles!=NULL){
    foreach ($articles as $key => $value) {?>
      <article >
        <h2><?=$value->nom?></h2>
        <h3>race : <?php require_once("../model/DAO.class.php"); print($dao->getCat($value->race)->nom)?></h3>
        <a href="../controler/Profil.crtl.php?ref=<?=$value->ref?>">
        <img src="../view/image/<?=$value->image?>" alt="" height=50px width=50px>
      </a>
        <p><?=$value->prix?> €</p>
      </article>

    <?php } } else {?>
      <p>Ce type de poule n'existe pas :(</p>
    <?php } ?>
    <nav>
      <?php if(!isset($_GET['cat']) && !isset($_GET['pon'])){ ?>
        <p>
          <a href="?ref=<?=$prev[0]->ref?>">&lt; </a>
          <a href="?ref=<?=$next->ref?>">></a>
        </p>
      <?php } ?>
    </nav>
  <div class="catégories">
    <h3>Recherche : </h3><p>(validez, puis recherchez)</p>
    <form class="" action="" method="post">
      <select name="racepoule" id="racepoule">
        <option value="0" selected>-Choisir la race-</option>
        <?php
        $tab = array_map('trim', file('../data/race.txt'));
        foreach($tab as $ligne){
          $lignee = substr($ligne, strpos($ligne, '|')+1);
          if($_POST["racepoule"]==$lignee){
            $val = substr($ligne,0,2);
            if(substr($val,1)=='|'){
              $val = substr($ligne,0,1);
            }
          }
          echo '<option value="'.$lignee.'">'.$lignee.'</option>';
        }
        ?>
      </select>
      <select name="pontepoule" id="pontepoule">
        <option value="0" selected>-Choisir la ponte-</option>
        <option value="1" >1</option>
        <option value="2" >2</option>
        <option value="3" >3</option>
        <option value="4" >4</option>
      </select>
        <?php
        if(isset($_POST["racepoule"])){
          $tab = array_map('trim', file('../data/race.txt'));
          if(isset($val)){
            foreach($tab as $ligne){
              $lignee = substr($ligne, strpos($ligne, '|')+1);
              if($_POST["racepoule"]==$lignee){
                $nom = substr($ligne,3,strlen($ligne));
                $val = substr($ligne,0,2);
                if(substr($val,1)=='|'){
                  $nom = substr($ligne,2,strlen($ligne));
                  $val = substr($ligne,0,1);
                }
              }
            }
            print('<p>Race : '.$nom.'</p>');
          }
        }
        if(isset($_POST["pontepoule"]) && $_POST["pontepoule"] != 0){
          print('<p>Ponte : '.$_POST["pontepoule"].'</p>');
        }
        ?>
        <input type="submit" name="Valider" value="Valider">
        <a href="?ref=1<?php if(isset($val)){echo '&cat='.$val;} ?><?php if((isset($_POST["pontepoule"])&&$_POST["pontepoule"]!=0)){echo '&pon='.$_POST["pontepoule"];} ?>">
          <?php if(isset($_POST["racepoule"])){
            print('<input type="button" name="Rechercher" value="Recherche">');
          } ?>
        </a>
    </form>
  </div>


<footer>
</p>Site fictif, issus de données réelles du Web</p>
</footer>
</body>
</html>
