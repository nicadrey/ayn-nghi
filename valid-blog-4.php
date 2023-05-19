<?php

 //Affichage des eventuelles erreurs php
 error_reporting(E_ALL);
 ini_set('display_errors',1);

 //connexion a la Base de donnée
 //include("code-connexion.php");

 //Récupération des entrés du formulaire
 $name = $_POST['name'];
 $phone = $_POST['phone'];
 $email = $_POST['email'];
 $typedon = $_POST['typedon'];
 $message = $_POST['message'];

  //Requette d incertion des entrés dans la table approprié
 if(isset($_POST['valider'])){
    //$req = $con ->prepare ("INSERT INTO don(name , phone , email , typedon , message) VALUES(:name , :phone , :email , :typedon , :message);");
    // $req -> execute(array( "name" => $name,"phone" => $phone,"email" => $email,"typedon" => $typedon,"message" => $message ));

    //Envoi du mail
    $to = "sogniaw@gmail.com";
    $subject = "Nouveau message soumis par ".$name;
    $Message = "Nom: $name \n Email: $email \n Telephone: $phone \n  Type de don : $typedon Raison du don : $message";
    $headers = "From: gunterscars16@gmail.com"; //@ a partir de la quelle l'e-mail sera envoyé
    mail($to , $subject , $Message , $headers);
   
    //Ici Le message $Message est récupérer par $headers( gunters... ) et envoyé a $to ( sogniaw...  )
   //Redirection vers la page index.php
   header("location:index.html");
}

?>
