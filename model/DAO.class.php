

<?php

    require_once("../model/Categorie.class.php");
    require_once("../model/Article.class.php");

    // Definition de l'unique objet de DAO
    $dao = new DAO();

    // Le Data Access Object
    // Il représente la base de donnée
    class DAO {
        // L'objet local PDO de la base de donnée
        private $db;
        // Le type, le chemin et le nom de la base de donnée
        private $database = 'sqlite:../data/db/bricomachin.db';

        // Constructeur chargé d'ouvrir la BD
        function __construct() {
          $database = 'sqlite:../data/db/bricomachin.db';
          try {
              $this->db = new PDO($database);
            }
            catch (Exception $e) {
              echo "pas reussi a ouvrir la bd";
            }

        }


        // Accès à toutes les catégories
        // Retourne une table d'objets de type Categorie
        function getAllCat() {
          $req="SELECT * FROM categorie";
          $sth = $this->db->query($req);
          $res=$sth->fetchAll(PDO::FETCH_CLASS,'Categorie', array('id','nom','pere'));
          if ($res[0]->id==NULL){
            throw new \Exception("pas dans la liste", 1);

          }
          else{
            return $res;
          }
          }




        // Accès aux n premiers articles
        // Cette méthode retourne un tableau contenant les n permier articles de
        // la base sous la forme d'objets de la classe Article.
        function firstN($n) {
          $req="SELECT * FROM article ORDER BY ref ASC LIMIT $n";
          $sth = $this->db->query($req);
          $res=$sth->fetchAll(PDO::FETCH_CLASS,'Article', array('ref','libelle','categorie','prix','image'));
          if ($res[0]->ref==NULL){
            throw new \Exception("pas dans la liste", 1);

          }
          else{
            return $res;}
          }





        // Acces au n articles à partir de la reférence $ref
        // Cette méthode retourne un tableau contenant n  articles de
        // la base sous la forme d'objets de la classe Article.
        function getN($ref,$n) {
          $req="SELECT * FROM article where ref>=$ref ORDER BY ref ASC LIMIT $n";
          $sth = $this->db->query($req);
          $res=$sth->fetchAll(PDO::FETCH_CLASS,'Article', array('ref','libelle','categorie','prix','image'));
          if ($res[0]->ref==NULL){
            throw new \Exception("pas dans la liste", 1);

          }
          else{
            return $res;}
          }




        // Acces à l'article suivant l'article dans l'ordre des références
        // Cette méthode ne rend qu'un objet de la classe Article
        function next(Article $a) {
          $req="SELECT * FROM article where ref > $a->ref ORDER BY ref ASC LIMIT 1";
          $sth = $this->db->query($req);
          $res=$sth->fetchAll(PDO::FETCH_CLASS,'Article', array('ref','libelle','categorie','prix','image'));
          if ($res[0]->ref==NULL){
            throw new \Exception("pas dans la liste", 1);

          }
          else{
            return $res[0];}

        }

        // Acces aux n articles qui précèdent de $size l'article $a dans l'ordre des références
        function prevN(int $ref,$n) {
          $req="SELECT * FROM article where ref < $ref ORDER BY  ref DESC LIMIT $n";
          $sth = $this->db->query($req);
          $res=$sth->fetchAll(PDO::FETCH_CLASS,'Article', array('ref','libelle','categorie','prix','image'));
          if ($res[0]->ref==NULL){
            throw new \Exception("pas dans la liste", 1);
          }
          else{
            $j=0;
            for($i=sizeof($res)-1;$i>=0;$i--){

                $trie[$j]=$res[$i];
              $j=$j+1;
            }
            return $trie;}

        }



        // Acces à une catégorie
        // Retourne un objet de la classe Categorie connaissant son identifiant
        function getCat($id) {
          $req="SELECT * FROM categorie WHERE id=$id ";
          $sth = $this->db->query($req);
          $res=$sth->fetchAll(PDO::FETCH_CLASS,'Categorie', array('id','nom','pere'));
          if ($res[0]->id==NULL){
            throw new \Exception("pas dans la liste", 1);

          }
          else{
            return $res[0];
          }

        }




        // Acces au n articles à partir de la reférence $ref de la catégorie indiquée
        // Retourne une table d'objets de la classe Article
        function getNCateg($ref,$n,$categorie) {
          $req="SELECT * FROM article where ref>=$ref AND $categorie categorie=  ORDER BY ref ASC LIMIT $n";
          $sth = $this->db->query($req);
          $res=$sth->fetchAll(PDO::FETCH_CLASS,'Article', array('ref','libelle','categorie','prix','image'));
          if ($res[0]->ref==NULL){
            throw new \Exception("pas dans la liste", 1);

          }
          else{
            return $res;}

        }

    }

    ?>
