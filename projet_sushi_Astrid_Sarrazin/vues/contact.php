<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Good sushi</title>
	<?php include 'links.php';?>
</head>
<body id="contact" >
    <?php
        include('header.php')
    ?>
  <section class="section1">
    <div class="container-fluide position-relative">
      <img src="../public/assets/images/fondsushi1.jpg" class=" w-100 d-inline img">
      <p class="text-transform-uppercase d-inline py-3 texte2_accueil">Contact</p>
    </div>
  </section>
  <section class="section2">
    <div class="text-center py-3 p_text">contactez-nous!</div>
    <div class="mx-auto container">
      <div class="row">
        <div class="col-md-6">
          <div class="pl-5 d-inline gauche">
            <div class="py-3 mb-3 d-block mx-auto phone"><i class="mt-5 ml-4 fas fa-phone-volume"></i> Telephone: <br /><span class="mt-5 ml-4 text-dark texte">0620392877 </span></div>
            <div class="py-4 mb-3 mb-3 d-block mx-auto phone"><i class=" mt-5 ml-4 fas fa-envelope"></i> Email: <br /><span class="mt-5 ml-4 text-dark texte">ceastrid09@gmail.com </span></div>
            <div class="py-4 mb-3 mb-3 d-block mx-auto phone"><i class="mt-5 ml-4 fas fa-home"></i> Adresse:  <br /><span class="mt-5 ml-4 text-dark texte"> Rue de Thionville </span></div>
          </div>
        </div>
        <div class="col-md-6">   
          <form class="d-inline droite">
            <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputEmail4">Nom:</label>
                  <input type="email" class="form-control mx-auto" id="inputEmail4" placeholder="&#xf406">
                </div>
                <div class="form-group col-md-6">
                  <label for="inputEmail4">Prenom:</label>
                  <input type="email" class="form-control" id="inputEmail5" placeholder="&#xf406">
                </div>
            </div>
            <div class="form-group">
              <label for="inputAddress">Email:</label>
              <input type="text" class="form-control col-md-12" id="inputAddress" placeholder="&#xf0e0">
            </div>
            <div class="form-group">
              <label for="inputAddress2">Votre message:</label>
               <textarea class="text-center form-control " id="exampleFormControlTextarea1" ></textarea>
            </div>
            <div class="mx-auto mb-2"><button type="submit" class="btn rounded rounded-pill">Envoyer</button></div>
          </form>
        </div>
      </div>
  </section>
  <?php
        include ('footer.php');
    ?>
</body>
</html>