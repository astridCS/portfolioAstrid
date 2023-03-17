<!DOCTYPE html>
<html>
<head>
	<title>astriddev.com</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<link rel="stylesheet" href="public/assets/css/style.css?var=452">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

	
    
</head>
<body id="myID">
	<div>

        <div id="mySidenav" class="sidenav">
			<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
			<a href="index.php#accueil">Accueil</a>
			<a href="index.php#apropos">A propos</a>
			<a href="index.php#cv">CV upload</a>
			<a href="index.php#competence">compétences</a>
	        <a href="index.php#projet">projets</a>
	        <a href="index.php#contact">Contact</a>
        </div>
       
        <div class="sticky-top d-flex justify-content-around rounded larger shadow lanav">
            <h3 class="px-1 text-warning border border-warning rounded-circle navbar_logo navbar_logotitre lien"><a href="/index.php#contact" class="h4 text-center text-decoration-none">AS</a></h3>   
            <h2 class="mt-1"><a href="index.php" class="nomSite">astriddev.com</a></h2>
            <span  class="mt-1 open" onclick="openNav()">&#9776;</span>
            <i class="fas fa-adjust text-white my-auto lampe" onClick="Mycolor(this)"></i> 
        </div>
        
    </div>
	<div>
        <button onclick="retourHaut()"  id="haut" title="Retour haut de page"><i class="fas fa-chevron-up"></i></button>
    </div>
	<section class="container-fuide" id="accueil">
		<div class="card">
			<img src="public/assets/images/imgentete.jpg" alt="image d'ordinateur" class="w-100 h-25 card-img">
			<div class="card-img-overlay">
				<h1 class="card-title text-center text-white entete"></h1>

			</div>
		</div>	 	 	
	</section>
	<section class="container" id="apropos">
  	    <div>
  		    <div class="mx-auto">
  		    	<h2 class="text-center mt-5 mb-3 font-weight-bold titrequi titrePrincipal">A propos de moi </h2>
  		    	<!--<h2 class="text-center mt-5 mb-3 font-weight-bold  appear titrequi" data-delai="0">A propos de moi </h2>-->
  		    </div>
  		    <div class="row">
  			    <div class="col-md-8 col-sm-12 card border border-white mx-auto photoPropos">
  				    <img src="public/assets/images/ecran2.jpg" class="w-100 img-fluide mt-5"alt="image ordinateur">
  				    <div class="card-img-overlay">
  				        <img src="public/assets/images/matof.jpg" class="visage" alt="mon portrait">
  				    </div>
  			    </div>

  			    <div class="col-md-12 col-sm-12 textPropos">

  			    	<p class="mx-2 font-italic mt-5 text-justify align-self-center textCompetence">
                        Je m'appelle Astrid c. Sarrazin. J'ai eu un parcours scolaire axé sur les sciences Fondamentales et  appliquées cependant j'ai toujours été impressionnée  par la construction des sites internets et le monde du web, jusqu'à ce que je découvre véritablement l'univers du développement web. C'est donc avec plaisir et évidence que j'ai décidé de me reconcertir en developpeuse web. <br>J'ai obtenu après une année de formation à la CCI de Moselle <span class="font-weight-bold"> le titre professionnelle de developpeur Web et Web Mobile</span>.<span id="points">...</span>
                        <br> 
                        <span id="moreText"> 
                        	Courageuse, je suis également motivée tout en ayant le goût de l'initiative, je peux travailler seule ou en groupe étant  tout à fait capable de m’adapter à un environnement que je ne connais pas. Je sais faire preuve de force de proposition lorsque l’on m’en donne la liberté, cherchant toujours à améliorer et optimiser les projets au maximum pour satisfaire au mieux la demande du client.<br>
                            <span class="font-weight-bold">je suis actuellement à la recherche d'une entreprise pour une alternance ou un stage </span> <span class="font-weight-bold"> </span> pour une formation de responsable de projets informatiques  de niveau Bac+3 avec option développement, qui s'effectue de septembre 2022 à juillet 2023. Elle  s'effectuera au rythme d'un jour en formation, au campus Mewo et quatre jours en entreprise.
                        <span>
  				    </p>

  				    <button onclick="toggleText()" class="mx-2" id="textButton">Voir plus</button>
  			
  			    </div>       
	  	    </div>
  	    </div>
  	    
    </section>

    <section class="container" id="cv">
    	<div class="mx-auto">
  		    <h2 class="text-center my-5 font-weight-bold titrequi titrePrincipal">Curriculum Vitae</h2>
  		</div>
    	<div class="col photoPropos">
  			<img src="public/assets/images/CvRpi.png" class="d-block mx-auto photocv">
  			<!--<button class="d-block btn btn-info mt-3 mb-3 py-3 mx-auto mt-3 font-weight-bold boutonTelecharge"><a href="public/assets/pdf/cvAstrid_devFullStack.pdf" target="_blank" class="text-white text-decoration-none">Télécharger mon CV</a></button>-->
            <button class="d-block btn btn-info mt-3 mb-3 py-3 mx-auto mt-3 font-weight-bold boutonTelecharge"><a href="public/assets/pdf/AstridSarrazin-CV.pdf" target="_blank" class="text-white text-decoration-none">Télécharger mon CV alternance</a></button>
  	    </div> 
    </section>

    <section class="container" id="competence">
    	<div class="mx-auto">
    		<h2 class="text-center font-weight-bold my-5 titrequi titrePrincipal">Compétences</h2>
  		</div>
        <p class="text-center text-justify align-self-center mb-5 textCompetence">
        	Mes expérences professionnelles en générale, ma formation de Développeur web m'ont permis d'acquérir des compétences dont voici un aperçu.
        </p>
        <div class="mt-5 mb-0 card text-center shadow border-bottom-0 slantedDivA">
        	<div class="card-body divComp1">
	        	<div class="row row-cols-4 mb-2">
	        		<div class="col">
	        			<img src="public/assets/images/html5.png" class="w-50 imgComp" alt="image html5">
	        		</div>
	        		<div class="col">
	        			<img src="public/assets/images/CSS3.png" class="w-50 imgComp"  alt="image css3">
	        		</div>
	        		<div class="col">
	        		    <img src="public/assets/images/javascript.png" class="w-50 imgComp" alt="image javascript">
	        		</div>
	        		<div class="col">
	        			<img src="public/assets/images/AJAX0.png" class="w-50 imgComp" alt="image Ajax">
	        		</div>
	        	</div>

	        	<div class="row row-cols-4 mb-2">
	        		<div class="col">
	                    <img src="public/assets/images/jquery.png" class="w-50 imgComp" alt="image jquery">
	                </div>
	        		<div class="col">
	        			<img src="public/assets/images/BOOTSTRAP0.jpg" class="w-50 imgComp" alt="image bootstrap">
	        		</div>
	        		<div class="col">
	        			<img src="public/assets/images/php0.jpg" class="w-50 imgComp"  alt="image php">
	        		</div>
	        		<div class="col">
	        		    <img src="public/assets/images/mysql.jpg"  class="w-50 imgComp" alt="image mysql">
	        		</div>
	        	</div>

	        	<div class="row row-cols-4 mb-2">

	        		<div class="col">
	        			<img src="public/assets/images/mvc.png" class="w-50 imgComp" alt="image architecture MVC">
	        		</div>
	        		<div class="col">
	        		    <img src="public/assets/images/ADOBEXD0.png" class="w-50 imgComp" alt="image Adobexd">
	        		</div>
	        	</div>
	        </div>
        	
        </div>
    	
		<div class="card text-center mb-3 text-secondary bg-light textCompetence border-top-0 shadow slantedDivB">
			<div class="card-body divComp2">
				<div><i class="mr-2 fas fa-pencil-ruler d-inline"></i><h4 class="card-title text-center font-weight-bold d-inline">ET AUSSI</h4></div>
                    <p class="card-text">Veille technologique </p>
				    <p class="card-text">Relation clients </p>
				    <div><i class="mr-2 fas fa-user d-inline"></i><h4 class="card-subtitle mb-2 text-center font-weight-bold d-inline">Savoir être</h4></div>
				    <p class="card-text">Capacité d'adapation </p>
				    <p class="card-text">organisée</p> 
				    <p class="card-text">Travailleuse, minutieuse, Curieuse</p>     
				</div>
            </div>
        </div>
	
    </section>
    	
    <section class="container" id="projet">
    	<div class="mx-auto">
    		<h2 class="text-center font-weight-bold  my-5 titrequi titrePrincipal">Mes projets</h2>
    	</div>

    	<div class="row row-cols-1 row-cols-md-4">
		    <div class="mx-auto col mb-3">
			    <div class="card bg-light text-secondary h-100 imgsite projetSite">
			    	
                    <figure class="animProjet"> 
			            <img src="public/assets/images/sitesushi3.png" alt="photo site good sushi" class="mx-auto card-img-top">
			            <figcaption>
						    
						    <div>
						        <h3>vente de sushi</h3>
						        <div class="icons"><a href="projet_sushi_Astrid_Sarrazin/public/index.php" target="_blank"><i class="fas fa-eye"></i></a><a><i class="ml-1 fab fa-readme" data-toggle="modal" data-target="#exampleModal0"></i></a></div>
						       <div class="icons"data-toggle="modal" data-target="#staticBackdropU"><a href="projet_sushi_Astrid_Sarrazin/public/index.php" target="_blank"><i class="fas fa-eye"></i></a><a><i class="ml-1 fab fa-readme"></i></a></div>
						        <div class="modal fade" id="staticBackdropU" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel1" aria-hidden="true">
	            
	                                <div class="modal-dialog modal-dialog-scrollable">
	                                    <div class="modal-content">
		                                    <div class="modal-header">
		                                        <h5 class="modal-title font-weight-bold text-uppercase text-dark"  id="staticBackdropLabel1"> Site de vente de sushi</h5>
		                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		                                            <span aria-hidden="true">&times;</span>
		                                        </button>
		                                    </div>
	                                        <div class="modal-body text-dark">
	                                        	<P>
		                                        	<span class="font-weight-bold">GOOD SUSHI</span> est un site représentatif d'un restaurant de vente de sushi; Je l'ai développé pendant ma formation de DWWM. Ce site comporte quatre onglets principaux:<br>
		                                        	- <span class="font-weight-bold">l'accueil</span> qui conduit à une page résumant la carte du restaurant, les ménus principaux et les nouveautés de celui-ci.<br>
		                                        	- <span class="font-weight-bold">La carte</span> qui mène vers la page<span class="font-weight-bold"> carte </span>présente la composition detaillée de la carte du restaurant : entrées, plats, desserts et boissons. cet onglet mène aussi à la page<span class="font-weight-bold"> menu </span>qui  décrit les menus principaux du restaurant et quelques nouveaux plats.<br>
		                                        	- <span class="font-weight-bold">l'avis client</span>, menant vers une page qui affiche quelques avis de clients.<br>
		                                        	- <span class="font-weight-bold">Contact </span>, redirige vers une page afin de permettre aux utilisateurs d'entrer en contact avec léquipe du restaurant.<br>
		                                        	<hr>
		                                        	<span>Pour la conception de ce site, jai utilisé du HTML5, CSS3, du Bootstrap 4.6, du Javascript le modèle architectural MVC et du PHP. Pour le maquettage j'ai utilisé le logiciel Adobe XD.</span>
                                                </P>
	                                        </div>
	                                        <div class="modal-footer">
				                                <button type="button" class="btn btn-secondary" data-dismiss="modal">fermer</button>
	                                        </div>
	                                    </div>
                                    </div>
                                </div>
						    </div>
						</figcaption>
						 
			        </figure>
                    <div class="card-body">
			            <h5 class="card-title font-weight-bold textCompetence">Site de vente de Sushi</h5><br>     
			        </div>
			    </div>
			</div>
			<div class="col mb-3">
			    <div class="card bg-light text-secondary h-100 imgsite projetSite">
			    	<figure class="animProjet">
			           <img src="public/assets/images/ventvoiture2.png"class="card-img-top" alt="photo site ventvoiture.com">
                       <figcaption>
						    
						    <div>
						        <h3 class="font-weight-bold">ventVoiture.com</h3>
						        <div class="icons" data-toggle="modal" data-target="#staticBackdropX"> <a href="projet_ventvoitureAstrid/public/index.php" target="_blank"><i class="fas fa-eye"></i></a><a><i class="ml-1 fab fa-readme"></i></a></div>
						        <div class="modal fade" id="staticBackdropX" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel2" aria-hidden="true">
	                                <div class="modal-dialog  modal-dialog-scrollable">
	                                    <div class="modal-content">
		                                    <div class="modal-header">
		                                        <h5 class="modal-title font-weight-bold text-uppercase text-dark"  id="staticBackdropLabel2"> Site de vente de voiture</h5>
		                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		                                            <span aria-hidden="true">&times;</span>
		                                        </button>
		                                    </div>
	                                        <div class="modal-body text-dark">
	                                        	<P>
		                                            <span class="font-weight-bold">VENTVOITURE.COM</span> est un site vitrine dedié à la  vente de voiture développé lors de ma formation. <br> L'onglet <span class="font-weight-bold">Concept</span> explique les caractéristiques fonctionnelles du site.<br> L'onglet <span class="font-weight-bold">Produits</span>, présente les différentes catégories de véhicules et les nouveautés.
		                                            <br><span class="font-weight-bold">Nos clients</span>,lié àl'onglet <span class="font-weight-bold">Nos clients</span>,résume quelques avis de clients et enfin L'onglet <span class="font-weight-bold">Contact</span> conduit à une page afin de contacter l'équipe Ventvoiture.com
		                                      
	                                            <hr>
	                                            <span>Pour la construction de ce site, jai utilisé du HTML5, CSS3, du Bootstrap 4.6, du Javascript le modèle architectural MVC et du PHP.</span></P>
	                                        </div>
	                                        
	                                        <div class="modal-footer">
				                                <button type="button" class="btn btn-secondary" data-dismiss="modal">fermer</button>
	                                        </div>
	                                    </div>
                                    </div>
                                </div>
						    </div>
						</figcaption>
					</figure>
			        <div class="card-body">
			            <h5 class="card-title font-weight-bold textCompetence">Site de vente de voiture</h5>
			        </div>
			    </div>
			</div>
			<div class="col mb-3">
			    <div class="card bg-light text-secondary h-100 imgsite projetSite">
                    
                    <figure class="animProjet">
			            <img src="public/assets/images/ventel2.png" class="card-img-top" alt="photo site venttel.com">
                        <figcaption>
						    <div>
						        <h3 class="font-weight-bold">venttel.com</h3>
						        <div class="icons" data-toggle="modal" data-target="#staticBackdropY"> <a href="e_commerce_Astrid/public/index.php" target="_blank"><i class="fas fa-eye"></i></a><a><i class="ml-1 fab fa-readme"></i></a></div>
						        <div class="modal fade" id="staticBackdropY" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel3" aria-hidden="true">
	                                <div class="modal-dialog modal-dialog-scrollable">
	                                    <div class="modal-content">
		                                    <div class="modal-header">
		                                        <h5 class="modal-title font-weight-bold text-uppercase text-dark"  id="staticBackdropLabel3"> Site de vente de téléphone</h5>
		                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		                                            <span aria-hidden="true">&times;</span>
		                                        </button>
		                                    </div>
	                                        <div class="modal-body text-dark">
	                                        	<p>
		                                            <span class="font-weight-bold">VENTTEL.COM</span> est un e-commerce de vente de téléphone avec une gestion de panier, une gestion de contenu, un espace personnel, et une conception de base de données. 
		                                            J'ai réalisé ce site dans le cadre de ma formation.<br> L'onglet <span class="font-weight-bold">Produits</span> mène vers une page présentant tous les produits du site (téléphone,accessoires,protections).<br>
		                                            L'onglet <span class="font-weight-bold">Catégories</span> lui, il sert à classifier tous les produits.<br>
		                                            la page <span class="font-weight-bold">Connexion</span> est liée à l'onglet <span class="font-weight-bold">Connexion</span> permettant aux utilisateurs qui aurait déja un compte sur le site de s'y connecter sinon d'en en créer un sur la page <span class="font-weight-bold">Inscription</span> qui est liée à l'onglet <span class="font-weight-bold">Inscription.</span><br>
		                                            L'onglet <span class="font-weight-bold">Panier</span> conduit à la page <span class="font-weight-bold">Panier</span> susceptible de comporter des produits si ceux-ci sont selectionnés. les onglets<span class="font-weight-bold"> Déconnexion</span> et <span class="font-weight-bold">Mon profil</span> n'apparaissent que lorsqu'un utilisateur est connecté; et l'onglet <span class="font-weight-bold">Admin</span> quand l'administrateur se connecte. Sur la page <span class="font-weight-bold">mon profil</span> l'utilisateur à la possibilité de modifier ses informations personnelles y compris son mot de passe.
		                                            <hr>
		                                            <span>pour concevoir ce site j'ai eu recours au HTML5, CSS3, du Bootstrap 4.6, du Javascript, de l'Ajax, le language SQL, le PhpMyAdmin, le modèle architectural MVC et du PHP.</span>
                                                </p>
	                                        </div>
	                                        <div class="modal-footer">
				                                <button type="button" class="btn btn-secondary" data-dismiss="modal">fermer</button>
	                                        </div>
	                                    </div>
                                    </div>
                                </div>
						    </div>
						</figcaption>
					</figure>
			        <div class="card-body">
			            <h5 class="card-title font-weight-bold textCompetence">Site de vente de téléphone</h5>
			        </div>	    
			    </div>

			</div> 
			<div class="col mb-3">
			    <div class="card bg-light text-secondary h-100 imgsite projetSite">

			    	<figure class="animProjet">    
			        <img src="public/assets/images/siteeducsex0.png" class="card-img-top" alt="photo site educsex.fr">
                        <figcaption>
						    <div>
						        <h3 class="font-weight-bold">educsex.fr</h3>
						        <div class="icons" data-toggle="modal" data-target="#staticBackdropZ"> <a href="educsex/public/index.php" target="_blank"><i class="fas fa-eye"></i></a><a><i class="ml-1 fab fa-readme"></i></a></div>
						        <div class="modal fade" id="staticBackdropZ" data-backdrop="static" data-keyboard="false"  tabindex="-1" aria-labelledby="staticBackdropLabel4" aria-hidden="true">
	                               <div class="modal-dialog  modal-dialog-scrollable">
	                                    <div class="modal-content">
		                                    <div class="modal-header">
		                                        <h5 class="modal-title font-weight-bold text-uppercase text-dark"  id="staticBackdropLabel4">Site d'éducation sexuelle des enfants (en construction)</h5>
		                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		                                            <span aria-hidden="true">&times;</span>
		                                        </button>
		                                    </div>
	                                        <div class="modal-body text-dark">
	                                        	<P>
		                                            <span class="font-weight-bold">EDUCSEX.FR</span> est un site d'éducation sexuelle des jeunes enfants abordées par les parents et le corps enseignant. J'ai développé ce site lors de mon stage dans la cadre de ma formation, il est toujours en cours de construction (certains contenus...).<br>Il comporte les onglets <span class="font-weight-bold">Accueil</span>, <span class="font-weight-bold">A propos</span>, <span class="font-weight-bold">Enseignants</span>, <span class="font-weight-bold">Parents</span>, <span class="font-weight-bold">Contact</span>.<br>
		                                            Les onglets <span class="font-weight-bold">Enseignants</span> et <span class="font-weight-bold">Parents</span> redirigent vers les pages <span class="font-weight-bold">Enseignants</span> et <span class="font-weight-bold">Parents</span> qui donnent accès à des pages définis selon les tranches d'âge (0-3 ans, 3-6 ans, 6-9 ans, 9-12 ans) et les différentes classes (Maternelle, CP, CE ,CM ,Collège). Ces pages comportent des modules ,activités et pdfs visant à faciliter l'éducation sexuelle.<br>Les onglets<span class="font-weight-bold"> Déconnexion</span> et <span class="font-weight-bold">Mon compte</span> n'apparaissent que lorsqu'un utilisateur se connecte. Il existe une newsletter,un espace personnel donnant droit à certains privilèges, une gestion de contenu qui est associé au site, une conception de base de données, une page <span class="font-weight-bold">Témoignage</span>.
		                                            <hr>
		                                            <span>pour la création de ce site j'ai utilisé du HTML5, CSS3, du Bootstrap 4.6, du Javascript, de l'Ajax, le language SQL, MySql Workbench, le PhpMyAdmin, la méthode merise, le modèle architectural MVC et du PHP. concernant le maquettage de ce site j'ai utilisé le logiciel Adobe XD </span>.
		                                        </P>
	                                        </div>
	                                        <div class="modal-footer">
				                                <button type="button" class="btn btn-secondary" data-dismiss="modal">fermer</button>
	                                        </div>
	                                    </div>
                                    </div>
                                </div>
						    </div>
						</figcaption>
					</figure>
                    <div class="card-body contenant pb-5">
			            <h5 class="card-title font-weight-bold textCompetence">Site d'éducation sexuelle des enfants</h5>
			        </div>
			    </div>
			</div>
		</div>
    </section>
   
    <section class="container mt-5 secForm" id="contact">
    	<div class="mx-auto">
			<h2 class="mb-5 card-title text-center font-weight-bold titrequi titrePrincipal">Contactez-moi</h2>
	    </div>
	     
	    <?php
        
            if(isset($_GET['envoieContact'])){
                if($_GET['envoieContact'] == 'ok'){
                   echo "<div class='h3 mb-2 font-weight-bold alert alert-success text-center'><i class='fas fa-check-circle'></i> Envoie réussi. Merci de m'avoir contacté !</div>";
                }
            }
       ?>
       <div class="text-dark text-center p-3 bg-light container mb-2">
		    <a href="#"><i class="fab fa-facebook-f px-3 reso iconReso"></i></a>
		    <a href="https://linkedin.com/in/astrid-sarrazin16" class="px-3"><i class="ml-3 fab fa-linkedin reso iconReso"></i></a>
		    <a href="tel:+33620392877" onclick="gtag('event', 'Click', { 'event_category': 'footer', 'event_label':'phone' });" class="px-3"><i class="ml-3 fas fa-mobile-alt reso iconReso"></i></a>
		    <a href="mailto:ceastrid09@gmail.com"onclick="gtag('event', 'Click', { 'event_category': 'footer', 'event_label':'email' });"  class="px-3"><i class="ml-3 fas fa-envelope-square reso iconReso"></i></a>
	    </div>
        <div class="card mb-3 bg-transparent border border-white">
		    <div class="row no-gutters">
			    <div class="col-md-4 col-sm-12 my-auto imgCarte">
			    	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d41579.865768947406!2d6.164918951461717!3d49.35703894078128!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x479524b3d652c58b%3A0x40a5fb99a3a8cd0!2s57970%20Yutz!5e0!3m2!1sen!2sfr!4v1648154702649!5m2!1sen!2sfr" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			    </div>
			    <div class="col-md-8 col-sm-12">
			        <div class="card-body">
	                  
			            <form  method="POST"  action="controleur/traitementContact.php">
	                        
	                        <div class="form-group h4">
	                            <label for="nom">Nom:</label>
	                            <input type="text" class="form-control bg-light"  placeholder="Nom"  name="nom" id="nom" value="<?php if(isset($_GET['nom'])) { echo $_GET['nom']; } ?>" required>
	                        </div>
	                        
	                        <div class="form-group h4">
	                            <label for="exampleFormControlInput1">Email:</label>
	                            <input type="email" class="form-control bg-light" id="email" name="email" placeholder="email" value="<?php if(isset($_POST['email'])) { echo $_POST['email']; }?>" required>
	                        </div>
	                        <div class="form-group h4">
	                            <label for="exampleFormControlInput2">Sujet:</label>
	                            <input type="text" class="form-control bg-light" id="sujet" name="sujet" placeholder="sujet" value="<?php if(isset($_POST['sujet'])) { echo $_POST['sujet']; }?>" required>
	                        </div>
	                        
	                        <div class="form-group h4">
	                            <label for="exampleFormControlTextarea1">Message</label>
	                            <textarea class="form-control bg-light" id="message" name="message" required> <?php if(isset($_POST['message'])) { echo $_POST['message']; }?>  </textarea>
	                        </div>
							<input type="hidden" id="recaptchaResponse" name="recaptcha-response" class=" recaptcha">
	                        <button type="submit" class="btn btn-info my-3 font-weight-bold" name="submit"> Envoyer </button>

	                    </form>
			        </div>
			    </div>
		    </div>
        </div>
    </section>
  
	<footer class="container-fuide">

		<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#002233" id="chemin" fill-opacity="1" d="M0,192L48,170.7C96,149,192,107,288,90.7C384,75,480,85,576,101.3C672,117,768,139,864,154.7C960,171,1056,181,1152,176C1248,171,1344,149,1392,138.7L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path><text font-size="14px">  
            <textPath  href="#chemin" startOffset="600" fill="yellow" stroke="darkblue" >astriddev.com </textPath></text>
            <text x="40%" y="80%" fill="white" font-size="14px">&copy 2022 Astrid c. Sarrazin | Tous droits réservés</text><path id="vague" fill="none" stroke="transparent"  d="M.36,90.6c44.09-46,109.57-98.57,182-88.81C257.49,11.92,271,78.85,348.25,90.6c95.57,14.54,119-81.74,230.15-85.82C683.51.93,697.28,86.67,808.54,87.61c109.2.92,119.91-81.46,229.25-86.82,134.34-6.58,155.42,100.19,279.57,89,114.46-10.31,163.52-104.74,260.11-77,37.71,10.82,87.6,58.49,102.89,77" />
		</svg>
	</footer>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
<script src="https://unpkg.com/typewriter-effect@latest/dist/core.js"></script>
<script src="https://www.google.com/recaptcha/api.js?render=6LfXJHEeAAAAAKL7FulApFPPdoPmt6zTuoth3q02"></script>
<script src="https://kit.fontawesome.com/a4c6b4d0f9.js" crossorigin="anonymous"></script>
<script src="https://unpkg.com/scrollreveal"></script>
<script type="text/javascript" src="public/assets/js/appmenu.js?var=850"></script>
<script type="text/javascript" src="public/assets/js/app.js?var=560"></script>



</body> 

</html>