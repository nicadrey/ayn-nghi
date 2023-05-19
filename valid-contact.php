<?php

  error_reporting(E_ALL);
  ini_set('display_errors',1);

  //include("code-connexion.php");

  $name = $_POST['name'];
  $email = $_POST['email'];
  $objet = $_POST['objet'];
  $message = $_POST['message'];
  if(isset($_POST['valider'])){
    //  $req -> $con = prepare ("INSERT INTO contact(name , email , objet , message) VALUES(:name , :email , :objet , :message);");
    //  $req -> execute(array( "name" => $name , "email" => $email , "objet" => $objet , "message" => $message ));

    $to = "sogniaw@gmail.com";
    $subject = "Nouveau message soumis par $name";
    $Message = " Nom: $name \n Email: $email \n  Objet : $objet \n Message: $message";
    $headers = "From: gunterscars16@gmail.com"; //@ a partir de la quelle l'e-mail sera envoyé
    mail($to , $subject , $Message , $headers);

    header("location:index.html");
}
?>
