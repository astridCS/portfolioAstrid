<?php
session_start();

function verifConnexion($email, $mdp, $bdd){
	$requete=$bdd->prepare('SELECT * FROM user WHERE email_user = :email AND mdp_user = :mdp');
	$requete->execute([':email'=>$email, ':mdp'=>$mdp]);
	$userExist =$requete->fetch();//fetch quand on veut récupérer une seule ligne. fetchall quand on veut récupérer plusieurs lignes

	if($userExist){
		$_SESSION['idUser'] = $userExist['id_user'];
		return TRUE;
	}else{
		return FALSE;
	}
}

function verifEmailExiste($email, $bdd){
	$requete=$bdd->prepare('SELECT * FROM user WHERE email_user = :email');
	$requete->execute([':email'=>$email]);
	$userExist =$requete->fetch();//fetch quand on veut récupérer une seule ligne. fetchall quand on veut récupérer plusieurs lignes

	if($userExist){
		return TRUE;
	}else{
		return FALSE;
	}
}

function inserttable_user($nom,$prenom,$email,$mdp,$date_n,$tel,$adresse, $id_ville, $bdd){

$requete=$bdd->prepare('INSERT INTO user(nom_user, prenom_user,email_user, mdp_user, date_naissance, tel, role) VALUES(:nom,:prenom,:email, :mdp, :date_n, :tel, :role)');
	   
$requete->execute(['nom'=>$nom, ':prenom'=>$prenom ,'email'=>$email, ':mdp'=>$mdp, 'date_n'=>$date_n, ':tel'=>$tel, ':role'=>'client']);

$id_user = $bdd->lastInsertId();

$requete = $bdd->prepare('INSERT INTO adresse(id_user, id_ville, adresse) VALUES(:id_user, :id_ville, :adresse)');
$requete->execute([':id_user'=>$id_user, ':id_ville'=>$id_ville, ':adresse'=>$adresse]);

}
 



// FONCTIONS PANIER.PHP

function produitExist($idProduit, $id_panier, $bdd){
  $requete = $bdd->prepare('SELECT * FROM ligne_com WHERE id_produit = :idProduit AND id_panier = :idPanier');
  $requete->execute([':idProduit'=>$idProduit, ':idPanier'=>$id_panier]);
  $produitExistDansPanier = $requete->fetch();

  if ($produitExistDansPanier) {
    return TRUE;
  }else{
    return FALSE;
  }
}

function insert_panier_user($montant,$date_com,$idUser,$bdd){
  $requete= 'INSERT INTO panier(montant,date_com,id_user) VALUES (:montant,:date_com,:id_user)';
  $tableauValues =  [':montant'=>$montant,':date_com'=>$date_com,':id_user'=>$idUser];
 
}

function insert_panier_no_user($montant,$date_com,$bdd){
  $requete= 'INSERT INTO panier(montant,date_com) VALUES (:montant,:date_com)';
  $tableauValues = [':montant'=>$montant,':date_com'=>$date_com]; 
}

function execute_insert_panier_user($montant,$date_com,$id_user,$bdd){
  $requete = $bdd->prepare('INSERT INTO panier(montant,date_com,id_user) VALUES (:montant,:date_com,:id_user)');
  $tableauValues = [':montant'=>$montant,':date_com'=>$date_com,':id_user'=>$id_user];
  $requete->execute($tableauValues);
  $userExist =$requete->fetch();
   if($userExist){
    return TRUE;
  }else{
    return FALSE;
  }
} 

function execute_insert_panier_no_user($montant,$date_com,$bdd){
  $requete = $bdd->prepare('INSERT INTO panier(montant,date_com) VALUES (:montant,:date_com)');
  $tableauValues = [':montant'=>$montant,':date_com'=>$date_com];
  $requete->execute($tableauValues);

}

function insertproduit_lignecom($id_produit,$id_panier,$qte_com,$bdd){
  $requete = $bdd->prepare('INSERT INTO ligne_com(id_produit,id_panier,qte_com) VALUES(:id_produit,:id_panier,:qte_com)');
  $requete->execute([':id_produit'=>$id_produit, ':id_panier'=>$id_panier, ':qte_com'=>$qte_com]);
}

function mise_a_jour_qte($id_produit,$id_panier,$qte_com,$bdd){
    
  $requete = $bdd->prepare('UPDATE ligne_com SET qte_com = qte_com + :qteCom WHERE id_produit = :id_produit AND id_panier = :idPanier'); 
  $requete->execute([':qteCom'=>$qte_com, ':id_produit'=>$id_produit, ':idPanier'=>$id_panier]);   
}

function mise_a_jour_montant($id_panier,$montant,$bdd){
  
  $requete = $bdd->prepare('UPDATE panier SET montant = montant + :Montant WHERE id_panier = :idPanier'); 
  $requete->execute([':Montant'=>$montant,':idPanier'=>$id_panier]);
}



function mise_a_jour_modifQuantite($nouvelleQte,$idProduit,$id_panier,$bdd){
  

  $requete = $bdd->prepare('UPDATE ligne_com SET qte_com = :nouvelleCom WHERE id_produit = :id_produit AND id_panier = :idPanier'); 
  $requete->execute([':nouvelleCom'=>$nouvelleQte, ':id_produit'=>$idProduit, ':idPanier'=>$id_panier]); 


  
}

function mise_a_jour_modifMontant($nouvelleQte, $ancienneQte, $id_panier, $prix_unit, $bdd){
  

  $montantMaj = $prix_unit*($nouvelleQte - $ancienneQte);
             

  $requete = $bdd->prepare('UPDATE panier SET montant = montant + :Montant WHERE id_panier = :idPanier'); 
  $requete->execute([':Montant'=>$montantMaj,':idPanier'=>$id_panier]);

}


function ajout_produit_panier($id_produit, $id_panier,$bdd){
 
  if(produitExist($id_produit, $id_panier,$bdd)){
    mise_a_jour_qte($id_produit,$id_panier,$bdd);
  }else{
    insertproduit_panier($id_produit,$id_panier,$qte_com,$bdd);
  }
    mise_a_jour_montant($id_panier,$montant,$bdd);
  

    if($userExist){
    $_SESSION['idUser'] = $userExist['id_user'];
    return TRUE;
      insert_panier_user($montant,$date_com,$_SESSION['idUser'],$bdd);
    }else{
    return FALSE;
      insert_panier_no_user($montant,$date_com,$bdd);
    }
  
  
    if($userExist){
    $_SESSION['idUser'] = $userExist['id_user'];
    return TRUE;
      execute_insert_panier_user($montant,$date_com,$_SESSION['idUser'],$bdd);
    }else{
    return FALSE;
      execute_insert_panier_no_user($montant,$date_com,$bdd);
    } 

  $id_panier = $bdd->lastInsertId();
  $_SESSION['idPanier']= $id_panier;

  insertproduit_lignecom($id_produit,$id_panier,$qte_com,$bdd);
}

function recup_produits_panier($id_panier,$bdd){
  $requete= $bdd->prepare('SELECT * FROM panier, ligne_com, produit, photos WHERE panier.id_panier = ligne_com.id_panier AND ligne_com.id_produit = produit.id_produit AND produit.id_produit = photos.id_produit  AND panier.id_panier = :idPanier');
  $requete->execute([':idPanier'=>$id_panier]);
  $produitsPanier = $requete->fetchAll();
  return $produitsPanier;
}

function recup_nbProdPanier($bdd){
  $requete = $bdd->prepare('SELECT SUM(qte_com) as nbArticles FROM ligne_com WHERE id_panier = :idPanier');
  $requete->execute([':idPanier'=>$_SESSION['idPanier']]);
  $nbProdPanier = $requete->fetch();

  if($nbProdPanier){
    return $nbProdPanier['nbArticles'];
  }else{
    return 0; 
  }
  
}


function del_produit_panier($id_produit,$id_panier,$montant,$bdd){
  $requete = $bdd->prepare('DELETE FROM ligne_com WHERE id_produit = :idProduit AND id_panier = :idPanier');
  $requete->execute([':idProduit'=>$id_produit,':idPanier'=>$id_panier]);
  
    
  $nbProdPanier = Recup_nbProdPanier($bdd); // remplacer count($id_panier) par une fonction qui récupère et retourne le nombre d'article dans le panier en cours
    
  if ($nbProdPanier == 0){

      // code...
      // requete préparée DELETE pour supprimer le panier en cours de la table panier

    $requete = $bdd->prepare('DELETE FROM panier WHERE id_panier = :idPanier');
    $requete->execute([':idPanier'=>$_SESSION['idPanier']]);
      unset($_SESSION['idPanier']);
  }else{
    // mettre à jour le montant du panier dans la table panier
  
    $requete = $bdd->prepare('UPDATE panier SET montant = montant - :Montant WHERE id_panier = :idPanier'); 
    $requete->execute([':Montant'=>$montant,':idPanier'=>$_SESSION['idPanier']]);
  }
 
}



 
 //FONCTION CATALOGUE.PHP

 function recup_produits($id_categ,$bdd){
 
    $requete = 'SELECT * FROM produit, photos WHERE produit.id_produit = photos.id_produit AND id_categ < :maxIdCateg';

    $tableauExecute = [':maxIdCateg'=>6];
  

   if ($id_categ != '') {
   	$requete .= ' AND id_categ = :id_categ ';
   	$tableauExecute[':id_categ'] = $id_categ;
   }


    $requeteProduits = $bdd->prepare($requete);

    $requeteProduits->execute($tableauExecute);

    $produits = $requeteProduits->fetchAll();

  return $produits;

}

  function recup_access_protec($id_categ,$bdd){

  // Ajouter une jointure avec la table photo 
  $requete = 'SELECT * FROM produit, photos WHERE produit.id_produit = photos.id_produit AND id_categ >= :minIdCateg';

  $tableauExecute = [':minIdCateg'=>6];

  if ($id_categ != '') { // Si on a cliqué sur une catégorie
    $requete .= ' AND id_categ = :id_categ ';
    $tableauExecute[':id_categ'] = $id_categ;
  }

  $requeteProduits = $bdd->prepare($requete);


  $requeteProduits->execute($tableauExecute);
  
   
  $produits = $requeteProduits->fetchAll();
   

  return $produits;
} 
 // FONCTIONS INDEX.PHP
  function recup_indexacess_protect($id_categ,$bdd){
 
  $requete = 'SELECT * FROM produit, photos WHERE produit.id_produit = photos.id_produit AND id_categ >= :minIdCateg AND nom_produit LIKE :nomProd';

  $tableauExecute =  [':minIdCateg'=>6, ':nomProd'=>"%s%"];

  if ($id_categ != '') { 
    $requete .= ' AND id_categ = :id_categ';
    $tableauExecute[':id_categ'] = $id_categ;
  }

  $requeteProduits = $bdd->prepare($requete);


  $requeteProduits->execute($tableauExecute);

   
  $produits = $requeteProduits->fetchall();

  return $produits;

}
function recup_indexproduits($id_categ,$bdd){
 
  $requete = 'SELECT * FROM produit, photos WHERE produit.id_produit = photos.id_produit AND id_categ < :maxIdCateg AND nom_produit LIKE :nomProd';

  $tableauExecute =  [':maxIdCateg'=>6, ':nomProd'=>"%pro%"];

   if ($id_categ != '') { // Si on a cliqué sur une catégorie
      $requete .= ' AND id_categ = :id_categ';
      $tableauExecute[':id_categ'] = $id_categ;
    }

   $requeteProduits = $bdd->prepare($requete);

   $requeteProduits->execute($tableauExecute);

   
   $produits = $requeteProduits->fetchall();

   return $produits;

}

function verifstock($id_produit, $qte_com ,$bdd){
  $requete=$bdd->prepare('SELECT qte_stock FROM produit WHERE id_produit = :id_produit');
  $requete->execute([':id_produit'=>$id_produit]);
  $qteStock =$requete->fetch();


  if($qteStock['qte_stock'] >= $qte_com){
    return TRUE;
  }else{
    return FALSE;
  }
} 
   	

//  FONCTION PAIEMENT.PHP
/*
function recup_infoCreateur($id_user,$bdd){

  $requete=$bdd->prepare('SELECT * FROM  user, adresse WHERE user.id_user = adresse.id_user AND id_user = :id_user AND role LIKE :Role');
  $requete->execute([':id_user'=>$id_user, ':Role'=>'%ad%']);
  $requeteInfoCreateur = $bdd->prepare($requete);
  $InfoCreateur = $requeteInfoCreateur->fetchAll();
  return $InfoCreateur; 
}
*/
function recup_infoUser($id_user,$bdd){
  $requete=$bdd->prepare('SELECT * FROM  user, adresse WHERE user.id_user = adresse.id_user AND user.id_user = :idUser AND type is NULL');
  $requete->execute([':idUser'=>$id_user]);
  $infoUser = $requete->fetch();


  return $infoUser;
}
 

/*function insert_fact($pdf,$lien_pdf,$montant,$date_fact,$id_panier,$bdd){
  $requete = 'INSERT INTO facture(pdf,lien_pdf,montant,date_fact,id_panier) VALUES (:pdf,:lien_pdf,:montant,:date_fact,:id_panier)';
  $tableauValues = [':pdf'=>$pdf,':lien_pdf'=>$lien_pdf,':montant'=>$montant,':date_fact'=>$date_fact,':id_panier'=>$id_panier]; 
}
function supprim_sessionPanier($id_panier,$bdd){
  $requete = $bdd->prepare('DELETE FROM panier WHERE id_panier = :idPanier');
  $requete->execute([':idPanier'=>$_SESSION['idPanier']]);
    unset($_SESSION['idPanier']);
}*/


//  FONCTION MONPROFIL.PHP

function infopers($id_user,$bdd){
  $requete=$bdd->prepare('SELECT * FROM user,adresse,ville,departement WHERE user.id_user = adresse.id_user AND adresse.id_ville = ville.id_ville AND ville.id_dept = departement.id_dept AND  user.id_user = :idUser  AND type is NULL');
  $requete->execute([':idUser'=>$id_user]);
  $infopers = $requete->fetch();

  return $infopers;
}



function recupville($id_dept,$bdd){
  $requete = $bdd->prepare('SELECT * FROM ville WHERE id_dept = :idDept ORDER BY nom_ville');

  $requete->execute([':idDept'=>$id_dept]);
  $villesDept = $requete->fetchAll();

  return $villesDept;
}

function recupdept($bdd){

  $requete=$bdd->prepare('SELECT * FROM departement');
  $requete->execute();
  $departements= $requete->fetchAll();

  return $departements;
}



/*function insertodifInfopers($nom,$prenom,$email,$mdp,$date_n,$tel,$civilite,$adresse, $id_ville, $bdd){

$requete=$bdd->prepare('INSERT INTO user(nom_user, prenom_user,email_user,date_naissance,tel,role,civilite) VALUES(:nom,:prenom,:email, :date_n, :tel, :role, :civilite)');
     
$requete->execute(['nom'=>$nom, ':prenom'=>$prenom ,'email'=>$email,'date_n'=>$date_n, ':tel'=>$tel, ':role'=>'client', ':civilite'=>$civilite]);


$requete = $bdd->prepare('INSERT INTO adresse(adresse,id_ville) VALUES(:adresse, :id_ville)');
$requete->execute([':id_user'=>$id_user, ':id_ville'=>$id_ville, ':adresse'=>$adresse]);

}
*/

function mise_a_jour_infopers($nom,$prenom,$email,$date_n,$tel,$civilite,$adresse,$id_ville,$bdd){
    
  $requete = $bdd->prepare('UPDATE user SET nom_user= :nomUser, prenom_user= :prenomUser, email_user= :emailUser, date_naissance= :dateN, tel= :Tel, civilite= :Civilite WHERE id_user = :idUser'); 
  $requete->execute([':nomUser'=>$nom, ':prenomUser'=>$prenom, ':emailUser'=>$email,':dateN'=>$date_n,':Tel'=>$tel,':Civilite'=>$civilite, ':idUser'=>$_SESSION['idUser']]); 

  $requete = $bdd->prepare('UPDATE adresse SET adresse= :adresse, id_ville= :id_ville WHERE id_user = :idUser');
  $requete->execute([':adresse'=>$adresse, ':id_ville'=>$id_ville, ':idUser'=>$_SESSION['idUser']]);

  }



/*function verifMdp($mdp,$bdd){
  $requete = $bdd->prepare('SELECT* FROM user  WHERE mdp_user =:mdp AND id_user = :idUser');
 
  $requete->execute([':mdp'=>$mdp, ':idUser'=>$_SESSION['idUser']]);
  $verifMdp = $requete->fetch();

  return $verifMdp;
}*/



function mise_a_jour_mdp($mdp,$bdd){
  $requete = $bdd->prepare('UPDATE user SET mdp_user= :mdp WHERE id_user = :idUser');
  $requete->execute([':mdp'=>$mdp, ':idUser'=>$_SESSION['idUser']]);
}

?>


  

