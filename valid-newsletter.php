<?php

error_reporting(E_ALL);
ini_set("display_errors",1);

//include("code-connexion.php");
  $email = $_POST['email'];
  $a= $email;
  echo $a."mail555";

if(isset($_POST['valider'])){
//  $req = $con -> prepare("INSERT INTO newsletter(email) VALUE(:email)");
// 	 $req -> execute(array( "email" => $email));
  
  $to = "sogniaw@gmail.com";
  $subject = "Nouveau message soumis depuis la newletter";
  $Message = "Email: $a";
  $headers = "From: gunterscars16@gmail.com"; //@ a partir de la quelle l'e-mail sera envoyé
  if ( mail($to , $subject , $Message , $headers))
   {
	echo "Envoyer";
   }else{ echo "Pas envoyer : ";}
}
?>
