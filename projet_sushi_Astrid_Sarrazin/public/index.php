<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Good sushi</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="../public/assets/css/style.css?var=230">
    <link rel='http://fonts.googleapis.com/css?family=Montserrat,BD cartoon Shout,Roboto' rel='stylesheet' type='text/css' >
    <script src="https://kit.fontawesome.com/a4c6b4d0f9.js" crossorigin="anonymous"></script>
</head>
<body id="index">
    <?php
      include('../vues/header.php');
      ?>
    <section class="section1_index">
    	<div class="container-fluide position-relative">
      <img src="assets/images/fondsushi1.jpg" class="w-100 d-inline img">
      <p class="text-white text-transform-uppercase d-inline py-3 texte1_accueil">Bienvenue a <br><img src="assets/images/Letter-G-PNG-Image.png" alt="image de la lettre G" class="img_logo_acc">ood sushi</p>
    </div>
    </section>

    <section class="my-5">

        <div class="row mx-auto">
            <div class="column">
                <img src="../public/assets/images/resto.jpg" style="width:100%" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img src="../public/assets/images/image_resto.jpg" style="width:100%" onclick="openModal();currentSlide(2)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img src="../public/assets/images/salleprivee.jpg" style="width:100%" onclick="openModal();currentSlide(3)" class="hover-shadow cursor">
            </div>
             <div class="column">
                <img src="../public/assets/images/equipe.jpg" style="width:100%" onclick="openModal();currentSlide(4)" class="hover-shadow cursor">
            </div>
        </div>
  
        <div id="myModal" class="modal">
            <span class="close cursor" onclick="closeModal()">&times;</span>

            <div class="modal-content">

                <div class="mySlides">
                    <div class="numbertext">1 / 4</div>
                        <img src="../public/assets/images/resto.jpg" style="width:100%">
                </div>

                <div class="mySlides">
                    <div class="numbertext">2 / 4</div>
                        <img src="../public/assets/images/image_resto.jpg" style="width:100%">
                </div>
                <div class="mySlides">
                    <div class="numbertext">3 / 4</div>
                        <img src="../public/assets/images/salleprivee.jpg" style="width:100%">
                </div>
                <div class="mySlides">
                    <div class="numbertext">4 / 4</div>
                        <img src="../public/assets/images/equipe.jpg" style="width:100%">
                </div>
   
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>

                <div class="caption-container">
                    <p id="caption"></p>
                </div>


                <div class="column">
                    <img class="demo cursor" src="assets/images/resto.jpg" style="width:100%" onclick="currentSlide(1)" alt="salle de retauration">
                </div>
                <div class="column">
                    <img class="demo cursor" src="assets/images/image_resto.jpg" style="width:100%" onclick="currentSlide(2)" alt="cuisine Good sushi">
                </div>
                <div class="column">
                    <img class="demo cursor" src="assets/images/salleprivee.jpg" style="width:100%" onclick="currentSlide(3)" alt="salle  privée">
                </div>
                <div class="column">
                    <img class="demo cursor" src="assets/images/equipe.jpg" style="width:100%" onclick="currentSlide(4)" alt="équipe principale">
                </div>
            </div>
        </div>

    </section>
        <footer><a href=""></a>
            <?php
                include ('../vues/footer.php');
            ?> 
        </footer> 

<script type="text/javascript" src="../public/js/app.js"></script>
</script>
</body>
</html>