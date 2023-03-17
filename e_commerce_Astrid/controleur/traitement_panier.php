<?php

   require "../modele/connexionBdd.php";
   require "../modele/fonctions.php";
       
if (isset($_POST['id_produit'])) {
    $id_produit = $_POST['id_produit'];
}elseif (isset($_GET['id_produit'])) {
    $id_produit = $_GET['id_produit'];
}


$nameBtnSubmitAjoutProd = 'btnSubmitAjoutProduit'.$id_produit;

if (isset($_POST[$nameBtnSubmitAjoutProd])) {


    $qte_com = (int)$_POST['qte_com'];

    if (verifstock($id_produit, $qte_com ,$bdd)) {

        $prix_unit = (float)$_POST['prix_unit'];
            
        // calculer le montant du produit qu'on est en train d'ajouter $montant
        $montant = $qte_com * $prix_unit ;
        $date_com = new DateTime();
        $date_com = $date_com->format('Y-m-d H:i:s');


        if(isset($_SESSION['idPanier'])){
          
            if(produitExist($id_produit, $_SESSION['idPanier'], $bdd)){
            
                mise_a_jour_qte($id_produit,$_SESSION['idPanier'],$qte_com,$bdd);  

             }else{
                
                insertproduit_lignecom($id_produit, $_SESSION['idPanier'],$qte_com,$bdd);

             }
             mise_a_jour_montant($_SESSION['idPanier'],$montant,$bdd);

        }else{
            if(isset($_SESSION['idUser'])){
                insert_panier_user($montant,$date_com,$_SESSION['idUser'],$bdd);
             }else{
                insert_panier_no_user($montant,$date_com,$bdd);
             }


             if(isset($_SESSION['idUser'])){
                execute_insert_panier_user($montant,$date_com,$_SESSION['idUser'],$bdd);
             }else{
                execute_insert_panier_no_user($montant,$date_com,$bdd);
             }    
            $id_panier = $bdd->lastInsertId();
            $_SESSION['idPanier']= $id_panier;

            insertproduit_lignecom($id_produit,$id_panier,$qte_com,$bdd);

       }
       header('location:../vues/panier.php');
    
    }else{
      
        header('Location: ../vues/catalogue.php?erreur=rupture_stock');
   

    /*if(del_produit($id_produit,$id_panier,$qte_com,$bdd)){
       header('location:../vues/panier.php?Action=supprimer');
    }*/
    
    }

} 




$nameBtnSubmitAjoutProdIndex = 'btnSubmitAjoutProduitIndex'.$id_produit;


if (isset($_POST[$nameBtnSubmitAjoutProdIndex])) {


    $qte_com = (int)$_POST['qte_com'];

    if (verifstock($id_produit, $qte_com ,$bdd)) {

        $prix_unit = (float)$_POST['prix_unit'];
            
        // calculer le montant du produit qu'on est en train d'ajouter $montant
        $montant = $qte_com * $prix_unit ;
        $date_com = new DateTime();
        $date_com = $date_com->format('Y-m-d H:i:s');


        if(isset($_SESSION['idPanier'])){
          
            if(produitExist($id_produit, $_SESSION['idPanier'], $bdd)){
            
                mise_a_jour_qte($id_produit,$_SESSION['idPanier'],$qte_com,$bdd);  

             }else{
                
                insertproduit_lignecom($id_produit, $_SESSION['idPanier'],$qte_com,$bdd);

             }
             mise_a_jour_montant($_SESSION['idPanier'],$montant,$bdd);

        }else{
            if(isset($_SESSION['idUser'])){
                insert_panier_user($montant,$date_com,$_SESSION['idUser'],$bdd);
             }else{
                insert_panier_no_user($montant,$date_com,$bdd);
             }


             if(isset($_SESSION['idUser'])){
                execute_insert_panier_user($montant,$date_com,$_SESSION['idUser'],$bdd);
             }else{
                 execute_insert_panier_no_user($montant,$date_com,$bdd);
             }    
            $id_panier = $bdd->lastInsertId();
            $_SESSION['idPanier']= $id_panier;
            insertproduit_lignecom($id_produit,$id_panier,$qte_com,$bdd);

       }
       header('location:../vues/panier.php');
    
    }else{
      
        header('Location: ../public/index.php?erreur=rupture_stock');
    
    }

} 


if(isset($_GET['source'])){ // Si la variable GET nommée source existe 
    if ($_GET['source'] =='modifQteProduitDansPanier'){ // si sa valeur est modifQteProduitDansPanier => on modifie la quantité

        $nouvelleQte = $_GET['nouvelleQte']; 
        $ancienneQte = $_GET['ancienneQte']; 
        $prixUnit = $_GET['prix_unit']; 
        $id_Produit = $_GET['id_produit']; 
        
        mise_a_jour_modifQuantite($nouvelleQte,$id_Produit,$_SESSION['idPanier'],$bdd);
        mise_a_jour_modifMontant($nouvelleQte,$ancienneQte,$_SESSION['idPanier'], $prixUnit, $bdd);  
    }

    if($_GET['source'] == "suppressionProduitDansPanier"){ // si sa valeur est suppressionProduitDansPanier => on supprime le produit du panier

        $qteCom = $_GET['qte_com']; 
        $prixUnit = $_GET['prix_unit']; 
        $montant = $prixUnit*$qteCom;
        $id_Produit = $_GET['id_produit']; 

        del_produit_panier($id_produit, $_SESSION['idPanier'],$montant, $bdd);
    }
        // update la quantité du produit dans ligne_com 
        // update le montant du panier dans la table panier
    
    header('location:../vues/panier.php');
    
}

 





/*
function supprim_panier($id_panier,$bdd){
  if (del_produit($id_produit,$id_panier,$bdd)){
    unset($_SESSION['id_panier']);
  }
}

*/