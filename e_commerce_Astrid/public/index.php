<!DOCTYPE html>
<html>
<head>
  <title>venttel.com</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/css/style.css?var=162">
  

<body id="index">
  <header>
    <?php

      require "../modele/connexionBdd.php";
      require "../modele/fonctions.php";
       
      include ('../vues/header.php');
    ?>
  </header>

  <section class="mx-auto pt-5 container">
    <div id="carouselExampleControls" class="carousel slide container" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="assets/images/imageventtel1.jpg" class="d-inline w-100 h-100" alt="image de telephone">
          <!--<div class="p-2 font-weight-bold rounded-pill d-inline text-uppercase text-white text-index">venttel.com</div>-->
        </div>
        <div class="carousel-item">
          <div class="embed-responsive embed-responsive-16by9">
            <iframe width="500" height="664" src="https://www.youtube.com/embed/o-jGs4D-Orw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
        </div>
       
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
  </section>
 
  <section class="text-center bg-white mx-auto">
    <div class="mx-auto container">
      <div class="row mt-3 mx-auto">
        
          <?php 

          $idCateg = '';
          if (isset($_GET['idCateg'])) {
            $idCateg = $_GET['idCateg'];
          }

           $produits = recup_indexproduits($idCateg,$bdd); 
  
          foreach ($produits as $produit){
            $photo ='assets/images/'.$produit['nom_photo']; 
          ?>
          <div class="col-md-4 col-sm-12 mx-auto mb-2">
            <div class="card mb-2 shadow mx-auto h-100">
              <img src="<?php echo $photo; ?>" class="card-img-top mx-auto mt-2 w-50"  alt="image de telephone">
              <div class="card-body mx-auto">
                <h4 class="card-title text-center"><?php echo $produit["nom_produit"]; ?></h4>
                <h6><?php echo $produit["description"]; ?></h6>
                <div class="input-group">
                  <div class="input-group-prepend mx-auto d-block">
                    <p class="card-text text-danger d-block mx-auto font-weight-bold"><?php echo number_format($produit["prix_unit"] ,2,',',''). '€'; ?></p>
                  </div>
                </div>
                  <?php if ($produit["qte_stock"] != 0){ ?>
                  <form method="POST" action="../controleur/traitement_panier.php">
                    <input type="number"  placeholder="1" class="custom-input border-danger rounded-lg mt-2 mb-3 d-block text-dark w-100" name="qte_com" id="inputGroupSelect01" max="<?php echo $produit["qte_stock"]; ?>"/>
                    <input type="hidden" name="id_produit" value="<?php echo $produit["id_produit"]; ?>">
                    <input type="hidden" name="prix_unit" value="<?php echo $produit["prix_unit"]; ?>">
                    <button type= "submit" name="<?php echo 'btnSubmitAjoutProduitIndex'.$produit["id_produit"]; ?>" class="btn btn-danger text-white d-block rounded-lg w-100"><i class="fas fa-shopping-basket"></i>
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

  <section class="text-center mx-auto bg-light pb-5">
    <p class="text-center text-white text bg-secondary font-weight-bold p-4 mt-3 container" ><span class="decouvrir">Decouvrez aussi</span></p>
    <div class="mx-auto container">
      <div class="row mt-3">
        <?php
            $idCateg = '';
            if (isset($_GET['idCateg'])) {
            $idCateg = $_GET['idCateg'];
            }

            $produits = recup_indexacess_protect($idCateg, $bdd); 
  
            foreach ($produits as $produit){
            $photo ='assets/images/'.$produit['nom_photo']; 
        ?>
        <div class="col-md-6 col-sm-12 mx-auto mb-2">
          <div class="card shadow mt-3 mx-auto h-100">
              <img src="<?php echo $photo; ?>" class="card-img-top mx-auto pt-3 w-50" alt="...">
              <div class="card-body">
                <h4 class="card-title text-center"><?php echo $produit["nom_produit"]; ?></h4>
                <h6><?php echo $produit["description"]; ?></h6>
                <div class="input-group">
                  <div class="input-group-prepend mx-auto d-block">
                    <p class="card-text text-danger d-block mx-auto font-weight-bold"><?php echo number_format($produit["prix_unit"] ,2,',',''). '€'; ?></p>
                  </div>
                </div>
                  <?php if ($produit["qte_stock"] != 0){ ?>
                  <form method="POST" action="../controleur/traitement_panier.php">
                    <input type="number"  placeholder="1" class="custom-input border-danger rounded-lg mt-2 mx-auto mb-3 d-block text-dark w-50" name="qte_com" id="inputGroupSelect01" max="<?php echo $produit["qte_stock"] ;?>"/>
                    <input type="hidden" name="id_produit" value="<?php echo $produit["id_produit"]; ?>">
                    <input type="hidden" name="prx_unit" value="<?php echo $produit["prix_unit"]; ?>">
                    <button type= "submit" name="<?php echo 'btnSubmitAjoutProduitIndex'.$produit["id_produit"]; ?>" class="btn btn-danger mx-auto text-white d-block rounded-lg w-50"><i class="fas fa-shopping-basket"></i>
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
    </div>
  </section>
  <section class="container  mx-auto mb-3 section-bas">
    <div class="pt-3 text-uppercase text-dark text-center">
      <img class="d-inline"src="../public/assets/images/cadenas.png" alt="...">
      <h4 class="d-inline">Paiement sécurisé</h4>
    </div>
    <div class="my-3 text-center">
      <img src="../public/assets/images/paiement.png" class="img-thumbnail"> 
      <img src="../public/assets/images/paiement2.png" class="img-thumbnail">
    </div>
  </section>
  <!--<section class="bg-white fleche"><a href="#index" ><img src="../public/assets/images/fleche.png" class="fleche_retour" /></a>-->
  
  <footer>
  <?php
    include('../vues/footer.php');
  ?>
  </footer>
  <script src="https://kit.fontawesome.com/a4c6b4d0f9.js" crossorigin="anonymous"></script>
</body>
</html>