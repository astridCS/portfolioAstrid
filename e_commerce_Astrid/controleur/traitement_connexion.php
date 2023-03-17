 <?php
   require "../modele/connexionBdd.php";
   require "../modele/fonctions.php";
       

$email = $_POST['email'];
$mdp = $_POST['mdp'];

if(verifConnexion($email, $mdp, $bdd)){
	header('location: ../vues/catalogue.php');
}else{
	header('location:../vues/connexion.php?erreur=identifiants');
}