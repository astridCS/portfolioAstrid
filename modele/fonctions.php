<?php
session_start();

function inserttableContact($nom,$email,$sujet,$message,$bdd){
  $requete = $bdd->prepare('INSERT INTO contact(nom,email,sujet,message) VALUES(:Nom,:Email,:Sujet,:Message)'); 
  $requete->execute([':Nom'=>$nom, ':Email'=>$email, ':Sujet'=>$sujet, ':Message'=>$message]); 
 
}
?>