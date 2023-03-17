
/* js retour en haut de page*/

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


/*js section1*/
const titrAnim =  document.querySelector('h1');
new Typewriter(titrAnim,{
  loop: true,
  deleteSpeed : 40
  
})
.changeDelay(40)
.typeString('Moi c\'est,<br>')
.pauseFor(300)
.typeString('<strong><span style="color:#ffa600;">A</span></strong>strid <strong><span style="color:#ffa600;">S</span></strong>arrazin,<br>')
.pauseFor(300)
.typeString('<strong>Developpeuse <br>')
.pauseFor(300)
.typeString('<strong>Web <br>')
.pauseFor(300)
/*.typeString('<span style="color:#ffa600;">Junior !</span></strong>')*/
.deleteChars(55)
.start()






 ScrollReveal({
  reset: true,
  distance: '60px',
  duration: 2500,
  delay: 200
    });
    ScrollReveal().reveal('.titrePrincipal', { delay: 100, origin: 'top'});
    ScrollReveal().reveal('.textPropos', { delay: 300, origin: 'right'});
    ScrollReveal().reveal('.photoPropos', { delay: 300, origin: 'left'});
    ScrollReveal().reveal('.divComp1', { delay: 400, origin: 'top'});
    ScrollReveal().reveal('.divComp2', { delay: 400, origin: 'bottom'});
    /*ScrollReveal().reveal('.projetSite', { delay: 500, origin: 'bottom'});*/
    ScrollReveal().reveal('.secForm, imgCarte', { delay: 500, origin: 'bottom'});
    ScrollReveal().reveal('.iconReso', { delay: 550, origin: 'top',interval: 200});



/* js A PROPOS*/

/*const slidingApropos = document.querySelector('.slide-in');

window.addEventListener('scroll', () => {

    const {scrollTop, clientHeight} = document.documentElement;

    // console.log(scrollTop, clientHeight);

    const topElementToTopViewport =slidingApropos.getBoundingClientRect().top;

    console.log(topElementToTopViewport);

    if(scrollTop > (scrollTop + topElementToTopViewport).toFixed() - clientHeight * 0.4){
      slidingApropos.classList.add('active')
    }
})
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



/* js projet*/


$('#myModal').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
})

$('#myModal1').on('shown.bs.modal', function () {
  $('#myInput1').trigger('focus')
})


/*$(window).scroll(function(){
  var scrolledFromTop = $(window).scrollTop() + $(window).height();
  $(".appear").each(function(){
    var distanceFromTop = $(this).offset().top;
    if(scrolledFromTop >= distanceFromTop+100){
      console.log("hello");
      var delaiAnim = $(this).data("delai");
      $(this).delay(delaiAnim).animate({
        top:0,
        opacity:1
      });
    }
  });

  

  $(".hover").mouseleave(
  function() {
    $(this).removeClass("hover");
  }
);
});*/

 /*recaptcha*/
 
 
grecaptcha.ready(function() {
    grecaptcha.execute('6LfXJHEeAAAAAKL7FulApFPPdoPmt6zTuoth3q02', {action: 'homepage'}).then(function(token) {
      document.getElementById('recaptchaResponse').value = token
    });
});



/*
$('#myCarousel').carousel({
  interval: 3000
})

$('.carousel .carousel-item').each(function(){
  var next = $(this).next();
  if (!next.length) {
    next = $(this).siblings(':first');
  }
  next.children(':first-child').clone().appendTo($(this));
  
  if (next.next().length>0) {
    next.next().children(':first-child').clone().appendTo($(this));
  }
  else {
    $(this).siblings(':first').children(':first-child').clone().appendTo($(this));
  }
});
*/