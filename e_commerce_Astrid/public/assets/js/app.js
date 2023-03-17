/*js panier.php*/

function modifQuantite(nouvelleQte,ancienneQte,idProduit,prixUnit){

  window.location ='../controleur/traitement_panier.php?id_produit='+idProduit+'&source=modifQteProduitDansPanier&prix_unit='+prixUnit+'&nouvelleQte='+nouvelleQte+'&ancienneQte='+ancienneQte;
 
 }    


/*js connexion.php*/
   
 
 
function reinitial()
{
form1 = document.getElementById('form1');
form0 = document.getElementById('form0');

 
if (form1.style.display == 'none')
form1.style.display = 'block';
form0.style.display = 'none';
 
}
function connect(){
  form0 = document.getElementById('form0');
  form1 = document.getElementById('form1');
  if (form0.style.display == 'none')
    form0.style.display = 'block';
    form1.style.display = 'none';
}

