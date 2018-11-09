<?php
require_once('poule.class.php');
function creationPanier(){
   if (!isset($_SESSION['panier'])){
      $_SESSION['panier']=array();
      $_SESSION['panier']['poule'] = array();
      $_SESSION['panier']['verrou'] = false;
   }
   return true;
}
function ajouterArticle($poule){
   //Si le panier existe
   if (creationPanier() && !isVerrouille())
   {
      //Si le produit existe déjà on ajoute seulement la quantité
      $positionProduit = array_search($poule,  $_SESSION['panier']['poule']);
      if ($positionProduit !== false)
      {
        echo "Cette poule est deja dans votre panier.";
      }
      else
      {
         //Sinon on ajoute le produit
         array_push( $_SESSION['panier']['poule'],$poule);
      }
   }
   else
   echo "Un problème est survenu veuillez contacter l'administrateur du site.";
}
function supprimerArticle($poule){
   //Si le panier existe
   if (creationPanier() && !isVerrouille())
   {
      //Nous allons passer par un panier temporaire
      $tmp=array();
      $tmp['poule'] = array();
      $tmp['verrou'] = $_SESSION['panier']['verrou'];
      for($i = 0; $i < count($_SESSION['panier']['poule']); $i++)
      {
         if ($_SESSION['panier']['poule'][$i][0]->ref !== $poule)
         {
            array_push( $tmp['poule'],$_SESSION['panier']['poule'][$i]);
         }
      }
      //On remplace le panier en session par notre panier temporaire à jour
      $_SESSION['panier'] =  $tmp;
      //On efface notre panier temporaire
      unset($tmp);
   }
   else
   echo "Un problème est survenu veuillez contacter l'administrateur du site.";
}
function supprimePanier(){
   unset($_SESSION['panier']);
}
function isVerrouille(){
   if (isset($_SESSION['panier']) && $_SESSION['panier']['verrou'])
   return true;
   else
   return false;
}
?>
