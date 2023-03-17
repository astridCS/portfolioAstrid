<?php
require "../modele/connexionBdd.php";
require "../modele/fonctions.php";

// On vérifie que la méthode POST est utilisée

if($_SERVER['REQUEST_METHOD'] == 'POST'){
	 
    // On vérifie si le champ "recaptcha-response" contient une valeur
  if(empty($_POST['recaptcha-response'])){
    header('Location:../index.php');
  }else{
        // On prépare l'URL
    $url = "https://www.google.com/recaptcha/api/siteverify?secret=6LfXJHEeAAAAAKksRwvwX6EOnMlwHuKawJZrzMOt&response={$_POST['recaptcha-response']}";

        // je vérifie si curl est installé
      if(function_exists('curl_version')){
        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_HEADER, false);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_TIMEOUT, 1);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        $response = curl_exec($curl);
      }else{
            //j' utilisera file_get_contents
        $response = file_get_contents($url);
       }

        // je vérifie que j'ai une réponse
      if(empty($response) || is_null($response)){
            header('Location:../index.php');
        }else{
            $data = json_decode($response);
            if($data->success){
              if(
                isset($_POST['nom']) && !empty($_POST['nom']) &&
                isset($_POST['email']) && !empty($_POST['email']) &&
                isset($_POST['sujet']) && !empty($_POST['sujet']) &&
                isset($_POST['message']) && !empty($_POST['message'])
              ){
                    // je nettoie le contenu
                $nom = htmlspecialchars($_POST['nom']);
                   // $sujet = strip_tags($_POST['sujet']);
                $email = htmlspecialchars($_POST['email']);
                $sujet= htmlspecialchars($_POST['sujet']);
                $message =  nl2br(htmlspecialchars($_POST['message']));
                  
                inserttableContact($nom,$email,$sujet,$message,$bdd);
	                $header="MIME-Version: 1.0\r\n";
		              $header.='From:"astriddev.com"'."\n";
		              $header.='Content-Type:text/html; charset="uft-8"'."\n";
		              $header.='Content-Transfer-Encoding: 8bit';

		              $message='
										<html>
											<body>
												<div align="center">
												    <h1<astriddev.com</h1><br /><br />
													<u>Nom de l\'expéditeur : </u>'.$_POST['nom'].'<br />
													<u>Mail de l\'expéditeur : </u>'.$_POST['email'].'<br />
													<br />
													'.nl2br($_POST['message']).'
												</div>
											</body>
										</html>
		                ';

		            mail("ceastrid09@gmail.com", $sujet, $message, $header);
		            header('location:../index.php?envoieContact=ok&#contact');
                    /*echo "Message de {$nom} envoyé";*/
                }
            }else{
              header('Location:../index.php');
            }
        }
  }
}else{
    http_response_code(405);
    echo 'Méthode non autorisée';
}

?>