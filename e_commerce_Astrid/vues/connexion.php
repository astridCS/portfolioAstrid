<!DOCTYPE html>
<html>
<head>
  <title>venttel.com</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <?php include 'links1.php'; ?>
</head>
<body id="connexion">
    <header>
        <?php

        require "../modele/connexionBdd.php";
        /*require "vues/e_commerce_Astrid/modele/fonctions.php"; */
            
            include ('header.php');
        ?>
        <?php 
       
        if (isset($_SESSION['idUser'])){
        header('Location:../vues/catalogue.php');
        }
        ?>
    </header>
    <?php 
        
        if(isset($_GET['erreur'])){
            if($_GET['erreur'] == 'email'){
                echo "<p>Erreur de connexion: veuillez vérifier votre adresse email</p>";
            }
            if($_GET['erreur'] == 'mdp'){
                echo "<p>Erreur de connexion: veuillez vérifier votre mot de passe</p>";
            }
            if($_GET['erreur'] == 'identifiants'){
                echo "<p>Erreur de connexion, veuillez vérifier vos identifiants de connexion</ p>";
            }
         
            if(isset($_GET['confirmInscription'])){
                if($_GET['confirmInscription'] == 'ok'){
                echo "<p>Votre compte Venttel a été crée avec succès</p>";
                }
            }
        }
        if(isset($_GET['autorisation'])){
            if($_GET['autorisation'] == 'ok'){
                echo "<p>veuillez-vous reconnecter avec vos nouveaux identifiants</p>";
            }
        }
            
        
    ?>
    <section class="py-5 bg-light secform">
        <div id="form0">
            <form method="POST" action="../controleur/traitement_connexion.php" class="bg-white py-4 form">
                <div class="pt-3 pb-2 my-4 bg-light text-center"> Vous accédez à un espace sécurisé</div>
                <div class="pt-1 mb-3 font-weight-bold text-center h4">Déjà client?</div>
                
                <div class="form-group">
                    <label for="email">Identifiant</label>
                    <input type="email" class="form-control border-primary bg-light" name="email" id="email" aria-describedby="emailHelp">
                    <small id="emailHelp" class="form-text text-muted ">L'identifiant est un email ou un numéro de téléphone.</small>
                </div>
                <div class="form-group">
                   <label for="mdp">Mot de passe</label>
                   <input type="password" class="form-control border-primary bg-light" name="mdp" id="mdp">
                   <label for="mdp"><a href="#" id="mdpoublie" onclick="reinitial();">Mot de passe oublié ?</a></label>   
                </div>
                <div class="form-group form-check">
                   <input type="checkbox" class="form-check-input" id="exampleCheck1">
                   <label class="form-check-label" for="exampleCheck1">Rester connecté</label>
                </div>
                <button type="submit" class="btn btn-primary d-block mb-3 border-dark">Connexion</button>
                <div class="pt-3 mb-4 font-weight-bold text-center h4">Nouveau client?</div>
                <button type="submit" class="btn btn-primary d-block mb-3 border-dark"><a href="#" class="text-white">Création de profil Venttel </a></button>
            </form>
        </div>
        <div class="row form1" id="form1" style="display:none;">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <form method="POST" action="../controleur/traitement_connexion.php" class="mt-3 mb-5">
                    <div class="form-group">
                        <label for="email" class="h3">Email:</label>
                        <input type="email" class="form-control border-primary bg-light" name="email" id="email1" aria-describedby="emailHelp">
                    </div>
                    <button type="submit" class="btn btn-primary d-block mb-3 border-dark mt-3">Réinitialiser</button>
                </form>
            </div>
        
            <hr class="col-lg-12 col-md-12 col-sm-12 bg-primary">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="mt-3 font-weight-bold text-left h4">Déjà client?</div>
                <label for="mdp" class="font-weight-bold"><a href="#" id="reconnexion" onclick="connect();">Connexion</a></label>
                <div class="font-weight-bold text-left mt-1 h4">Nouveau client?</div>  
                <button type="submit" class="btn btn-primary d-block mb-3 border-dark mt-2"><a href="#" class="text-white">
                    Création de profil Venttel </a></button>
            </div>    
        </div>
    </section>

    <section class="container mx-auto mb-2 section-bas">
        <div class="pt-3 text-uppercase text-dark text-center">
            <img class="d-inline"src="../public/assets/images/cadenas.png" alt="...">
            <h3 class="d-inline">Paiement sécurisé</h3>
        </div>
        <div class="mt-5 text-center">
            <img src="../public/assets/images/paiement.png" class="img-thumbnail"> 
            <img src="../public/assets/images/paiement2.png" class="img-thumbnail">
        </div>
    </section>
    <footer class="text-white">   
        <?php
            include('footer.php');
        ?>
    </footer>
    <script type="text/javascript" src="../public/assets/js/app.js?var=752"></script>
   
</body>
</html>