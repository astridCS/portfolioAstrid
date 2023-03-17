window.onscroll = function() {scrollFunction()};
function scrollFunction() {
  if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) 
  {
    document.getElementById("haut").style.display = "block";
  } 
  else 
  {
    document.getElementById("haut").style.display = "none";
  }
}

function retourHaut() {
document.body.scrollTop = 0;
document.documentElement.scrollTop = 0;
} 

/*function myFunction(id) {
  var x = document.getElementById(id);
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
} 
*/

function toggleText() {
  var points = document.getElementById("points");
  
  var showMoreText = document.getElementById("moreText");
  
  var buttonText = document.getElementById("textButton");
  
            //Si la propriété d'affichage des points
              // à afficher est déjà défini sur
              // 'none' (c'est caché) alors ceci
              // section des déclencheurs de code
    if (points.style.display === "none") {
  
                // Masquer le texte entre les
                // éléments du span
      showMoreText.style.display = "none";
  
                // Afficher les points après le texte
      points.style.display = "inline";
                // Changer le texte du boutton 
                // en 'Voir plus'
                buttonText.innerHTML = "Voir plus";
    }
  
            // Si la partie cachée est révélée,
            // nous le remettrons en place pour qu'il soit masqué
    else{
  
                // montrer le texte entre les elements du 
                // span 
          showMoreText.style.display = "inline";
  
                // Masquer les points après le texte
          points.style.display = "none";
  
                // Changer le texte du boutton 
                // en 'Voir moins'
          buttonText.innerHTML = "Voir moins";
        }
  }  



