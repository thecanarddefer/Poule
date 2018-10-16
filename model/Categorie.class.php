<?php
require_once("../model/DAO.class.php");

    class Categorie {
        public $id;   // Identifiant
        public $nom;  // nom de la catégorie
        public $pere; // catégorie parente

        function getPath() {
            $path = array();
            $path[]=$this->nom;
            $cat=$dao.getCat($this->pere);

            while($path[0]!='Produits'){
            array_unshift($path,$cat->nom);
            $cat=$dao.getCat($cat->pere);
            }
        }
      function __construct()
      {
        // code...
      }
    }


?>
