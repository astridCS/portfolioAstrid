<!DOCTYPE html>
<html>
<head>
  <title>venttel.com</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <?php include 'links_c.php'; ?>
</head>
<body id="catalog" class="mx-auto">
    <header>
      <?php

      require "../modele/connexionBdd.php";
      require "../modele/fonctions.php";
       
      include ('header.php');
      ?> 
    </header>
    <!--<div>
        <button onclick="retourHaut()" id="haut" title="Retour haut de page"><i class="fas fa-chevron-up"></i></button>
    </div>-->

    <section class="bg-light mx-auto section1">
       
       <div><h1 class="pt-3 text-center font-weight-bold text-uppercase"> Nos Téléphones</h1></div>
    
      
      <div class="container mt-4 mx-auto">
        <div class="row mx-auto">
         
                <!-- 1. Récupérer les produits dans usne variable $produits
                 2. Parcourir le tableau $produits avec une boucle foreach-->

          <?php 

          if (isset($_GET['erreur'])){
            if($_GET['erreur'] == 'rupture_stock'){
              echo '<script>alert("La quantité que vous avez selectionné est indisponible en stock. Veuillez nous en excuser.")</script>';
            }
          }

          $idCateg = '';
          if (isset($_GET['idCateg'])) {
            $idCateg = $_GET['idCateg'];
          }

          $produits = recup_produits($idCateg, $bdd); 
 
    
          foreach ($produits as $produit){
            $photo =' ../public/assets/images/'.$produit['nom_photo']; 
          
          ?>
          
        
          <div class="col-md-4 col-sm-12 mx-auto mb-1">
            <div class="card mt-3">
              <img src="<?php echo $photo; ?>" class="card-img-top mx-auto mt-4 imgProduit"  alt="...">
              <div class="card-body">
                <h4 class="card-title text-center"><?php echo $produit["nom_produit"]; ?></h4>
                <h6 class="text-center"><?php echo $produit["description"]; ?></h6>
                <div class="input-group ">
                  <div class="input-group-prepend mx-auto d-block">
                    <p class="card-text text-danger ml-5 pl-4 d-block mx-auto  font-weight-bold"><?php echo number_format($produit["prix_unit"],2,',',''). '€'; ?></p>
                  </div>
                </div>
                <?php if ($produit["qte_stock"] != 0){ ?>
                  <form method="POST" action="../controleur/traitement_panier.php">
                    <input type="number" class="custom-input border-danger rounded-lg mt-2  mx-auto mb-3 d-block w-100 text-dark" name="qte_com" id="inputGroupSelect01" max="<?php echo $produit["qte_stock"]; ?>" value="1"/>
                    <input type="hidden" name="id_produit" value="<?php echo $produit["id_produit"]; ?>"/>
                    <input type="hidden" name="prix_unit" value="<?php echo $produit["prix_unit"]; ?>" />

                   <!-- ajouter input type hidden value = id_produit name=id_produit --> 
                   <!-- ajouter input type hidden value = prix_unit --> 
                 
                   <!-- transformer le lien a en bouton submit -->
                    <button type= "submit" name="<?php echo 'btnSubmitAjoutProduit'.$produit["id_produit"]; ?>" class="btn btn-danger mx-auto w-100 text-white d-block rounded-lg "><i class="fas fa-shopping-basket"></i>
                    </button>
                  </form>
                  <?php }else{
                    echo '<p class="alert alert-danger">Rupture de stock</p>';
                  } ?>
              </div>
            </div>
          </div>
          <?php
        
          }


          ?>
        </div>
      </div>               
    </section>

    <section class="pt-3 mx-auto bg-light">
      <?php 
       if($produits = recup_access_protec($idCateg, $bdd)){; ?>
       <div><h1 class="text-center text-dark  text-uppercase font-weight-bold p-4 container" >Nos protections & Accessoires</h1></div>
        <?php }
        ?> 
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        
        <div class="carousel-inner">
       <div class=" mx-auto container">
        <?php
            $idCateg = '';
            if (isset($_GET['idCateg'])) {
            $idCateg = $_GET['idCateg'];
            }

            $produits = recup_access_protec($idCateg, $bdd); 
          
  
          foreach ($produits as $key=>$produit){
           $photo ='../public/assets/images/'.$produit['nom_photo']; 
           
            ?>

          <div class="carousel-item <?php  if ($key == 0) { ?>active<?php } ?>">
            <div class="row mx-auto">  
          
              <div class="col-md-12 col-sm-12">
                <div class="card shadow bg-white pt-3 mt-3 mb-3">
                  <img src="<?php echo $photo; ?>"class="mx-auto w-50 imgProduit" alt="...">
                  <div class="shadow bg-light card-body">
                    <h4 class="text-dark text-center font-weight-bold mb-2"><?php echo $produit["nom_produit"]; ?></h4>
                    <h6 class="text-dark text-center mb-2"><?php echo $produit["description"]; ?></h6>
                    <div class="input-group">
                      <div class="mx-auto h4 input-group-prepend">
                        <p class="card-text text-danger mx-auto font-weight-bold"><?php echo number_format($produit["prix_unit"] ,2,',',''). '€'; ?></p>
                      </div>
                    </div> 
                       <?php if ($produit["qte_stock"] != 0){ ?>
                      <form method="POST" action="../controleur/traitement_panier.php" class="mx-auto">
                        <input type="number"  placeholder="1" class="custom-input border-danger rounded-lg mt-2 mx-auto mb-3 d-block  w-50 text-dark" name="qte_com" id="inputGroupSelect01" max="<?php echo $produit["qte_stock"]; ?>"/>
                        <input type="hidden" name="id_produit" value="<?php echo $produit["id_produit"]; ?>">
                        <input type="hidden" name="prix_unit" value="<?php echo $produit["prix_unit"]; ?>" />
                       <button type= "submit" name="<?php echo 'btnSubmitAjoutProduit'.$produit["id_produit"]; ?>"  class="btn btn-danger text-white mx-auto rounded-lg d-block w-50"><i class="fas fa-shopping-basket"></i>
                       </button>
                      </form>
                      <?php }else{
                        echo '<p class="alert alert-danger">Rupture de stock</p>';
                      } ?>   
                  </div>
                </div>
              </div>
        
            </div>
          </div>
        
      <?php  
      }

      ?>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon bg-danger" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon bg-danger" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
     </div>                
    </section>
    </section>
    <section class="bg-white container mb-5 section-bas">
      <div class="pt-3 text-uppercase text-dark text-center">
        <img class="d-inline"src="../public/assets/images/cadenas.png" alt="...">
        <h3 class="d-inline">Paiement sécurisé</h3>
      </div>
      <div class="mt-5 text-center">
        <img src="../public/assets/images/paiement.png" class="img-thumbnail"> 
        <img src="../public/assets/images/paiement2.png" class="img-thumbnail">
      </div>
    </section>
    </section>
    <footer>
    <?php
      include('footer.php');
    ?>
    </footer>
    <script type="text/javascript" src=".../public/assets/js/app_indexTel.js?var=730"></script>
</body>
</html>