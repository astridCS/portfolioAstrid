
  <nav class="navbar navbar-expand-lg navbar-light bg-secondary">
    <a class="navbar-brand text-white v" href="#"><span class="v2">v</span>enttel.com</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link  text-white" href="../public/index.php"><i class="fas fa-home"></i> Accueil <span class="sr-only">(current)</span></a>
        </li>
         <li class="nav-item active">
          <a class="nav-link text-white" href="../vues/catalogue.php"><i class="fas fa-mobile-alt"></i> Produits <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-white" href="catalogue.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Catégorie
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="../vues/catalogue.php?idCateg=1">Iphone</a>
            <a class="dropdown-item" href="../vues/catalogue.php?idCateg=2">Samsung</a>
            <a class="dropdown-item" href="../vues/catalogue.php?idCateg=3">Oppo</a>
            <a class="dropdown-item" href="../vues/catalogue.php?idCateg=4">Xiaomi</a>
            <a class="dropdown-item" href="../vues/catalogue.php?idCateg=5">Huawei</a>
            <a class="dropdown-item" href="../vues/catalogue.php?idCateg=6">Protection</a>
            <a class="dropdown-item" href="../vues/catalogue.php?idCateg=7">Accessoire</a>
         </div>
        </li>
       <?php if(isset($_SESSION['idUser'])){ ?>
        <li class="nav-item" id="nav-item">
          <a class="nav-link text-white compte" href="../vues/monProfil.php"><i class="far fa-user"></i> Mon profil</a>
        </li>
        
      <?php } ?>


      <?php if(!isset($_SESSION['idUser'])){ ?>
        <li class="nav-item">
          <a class="nav-link text-white" id="seconnecter"  href="../vues/connexion.php"><i class=" pr-2 fas fa-user"></i>Connexion</i></a>
        </li>
        <!--<li class="nav-item">
          <a class="nav-link text-white" id="sinscrire" href="../vues/inscription.php"><i class=" pr-2 fas fa-user-plus"></i>Inscription</i></a>
        </li>-->
     <?php } ?>


     <?php if(isset($_SESSION['idUser'])){ ?>
        <li class="nav-item">
          <a class="nav-link text-white sedeconnecter" href="../controleur/traitement_deconnexion.php"><i class="fas fa-sign-out-alt"></i>Déconnexion</a>
        </li>
      <?php } ?>

      <!--<li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"><></i></a>
      </li>-->
      </ul>
    <!--<form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>-->
    </div>
  </nav>
  <div>
      <a class="nav-link text-white panier " href="../vues/panier.php"><i class="pr-2 fas fa-shopping-basket">
        <span class="num_panier">
          <?php 
            if (isset($_SESSION['idPanier'])) {
              echo recup_nbProdPanier($bdd); 
            }else{
              echo 0;
            }
         ?>
              
         </span>mon panier</i>
     </a>
    </div>
   