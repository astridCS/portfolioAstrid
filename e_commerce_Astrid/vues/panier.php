<!DOCTYPE html>    
<html>
<head>
  <title>venttel.com</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 
  <?php include 'links1.php'; ?>
</head>
<body id="pagepanier">

    <header>
      <?php
      
      require "../modele/connexionBdd.php";
      require "../modele/fonctions.php";

      include ('header.php');

      ?>
     
    </header>
    <section class="bg-light container-fluide">
    
     
          
          <!-- <div class="col-md-12"> -->
          
          <?php
           
        if(isset($_SESSION['idPanier'])){
        
          $produitsPanier = recup_produits_panier($_SESSION['idPanier'],$bdd);
         
         
          
          ?> 
           <table class="table">
              
          <thead class="thead-light text-uppercase font-weight-bold tableHead">
            <div class="col-md-12 col-sm-12">
              <tr class="text-left">
                <th scope="col">Produit</th>
                <th scope="col">Prix-unit</th>
                <th scope="col">Quantité</th>
                <th scope="col">Prix TTC</th>
                <th scope="col">Action</th>
              </tr>
            </div>
          </thead>
          
          <tbody>
             <div class="col-md-12"> 
            <?php
            foreach($produitsPanier as $produit){
            $photo ='../public/assets/images/'.$produit['nom_photo'];
           

            ?>
              <tr class="text-left">
                <td scope="col"><img src="<?php echo $photo; ?>" class="d-inline  imgProduit" alt="...">
                  <h6 class="card-title d-inline"><?php echo $produit["nom_produit"]; ?></h6>
                </td>
                <td scope="col">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <p class="text-danger d-inline mt-5 ml-3 font-weight-bold" id="prix_unit"><?php echo number_format($produit["prix_unit"],2,',',''). '€'; ?></p>
                    </div>
                  </div>
                </td> 
                <td scope="col">
                  <form class="mt-5">
                    <select class=" ml-3 border border-danger selection" name="qte_com" id="qte_com" onchange="modifQuantite(this.value, <?php echo $produit["qte_com"]; ?>, <?php echo $produit["id_produit"]; ?>, <?php echo $produit["prix_unit"]; ?>);">

                      <?php
                          for ($i=1; $i < $produit['qte_stock']; $i++) { 
                       
                      ?>
                      <option value="<?php echo $i; ?>"  <?php if ($produit['qte_com'] == $i){ ?>selected<?php } ?>><?php echo $i; ?></option>
                    

                      <?php
                    }

                      ?>
                    </select>
                    
                  </form>
                  
                </td>
                <td scope="col">
                  <div class="d-inline">
                    <p class="text-danger mt-5 ml-2 font-weight-bold" id="prixttc"><?php echo number_format($produit["prix_unit"]*$produit["qte_com"]*1.196,2,',',''). '€'; ?></p>
                  </div>
                </td>
                
                <td scope="col">

                  <?php

                  $hrefSuppression = '../controleur/traitement_panier.php?source=suppressionProduitDansPanier&id_produit='.$produit["id_produit"].'&prix_unit='.$produit["prix_unit"].'&qte_com='.$produit["qte_com"];
                  ?>

                 <div class="d-inline font-weight-bold"><a href="<?php echo $hrefSuppression; ?>"><i class="mt-5 ml-2 btn btn-outline-danger far fa-trash-alt"></i></a></div>

                  
                </td>

              </tr>
               <?php
                 } 
                ?>
            </div>
          </tbody>
          
        </table>
      </div>

        
        <div>
          <p class="text-danger text-center border border-danger bg-white font-weight-bold mb-3 total" id="montant"><span class="text-dark ml-3 p-4">Total TTC:</span><?php echo number_format($produit["montant"]*1.196,2,',',''). '€'; ?></p>
           <?php 
            if (!isset($_SESSION['idUser'])){ ?>
          <a class="text-uppercase btn btn-danger mt-4 p-1 valider" href="connexion.php">Valider mon panier</a>
            <?php }else{ ?> 
          <a class="text-uppercase btn btn-danger mt-4  p-1 valider" href="paiement.php">Valider mon panier</a>
          <?php } ?>
        </div>  
        <?php

        }else{
          echo '<div col-md-12" align="center"><p class="pt-4 mt-5 alert alert-danger" id="alertVide">Votre panier est vide</p></div>';
          } 
       ?> 
        <div class="btn-continuer mx-auto">
          <a class="text-uppercase mt-2 btn btn-info p-1" href="catalogue.php">Continuer mes achats</a>
        </div>
         
    </section>
   
    <section class="container mx_auto section-bas">
      <div class="pt-3 text-uppercase text-dark text-center">
        <img class="d-inline"src="../public/assets/images/cadenas.png" alt="...">
        <h3 class="d-inline">Paiement sécurisé</h3>
      </div>
      <div class="mt-5 text-center">
        <img src="../public/assets/images/paiement.png" class="img-thumbnail"> 
        <img src="../public/assets/images/paiement2.png" class="img-thumbnail">
      </div>
    </section>
    <footer class="pt-3">
    <?php
      include('footer.php');
    ?>
    </footer>
  <script type="text/javascript" src="../public/assets/js/app.js?var=274"></script>
  
</body>
</html>
