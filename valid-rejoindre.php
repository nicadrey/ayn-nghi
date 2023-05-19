<?php

error_reporting(E_ALL);
ini_set('display_errors',1);

//include("code-connexion.php");

$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$ville = $_POST['ville'];
$pays = $_POST['pays'];
$message = $_POST['message'];

//echo "Nom: $name <br/>  Email: $email <br/> Telephone: $phone <br/>  Ville : $ville <br/> Pays: $pays <br/> Message : $message";
if(isset($_POST['valider'])){
//  $req = $con -> prepare ("INSERT INTO rejoindre(name , phone , email , ville , pays , message) VALUES(:name , :phone , :email , :ville , :pays , :message);");
//  $req -> execute(array( "name" => $name , "phone" => $phone , "email" => $email , "ville" => $ville , "pays" => $pays , "message" => $message ));

  $to = "sogniaw@gmail.com";
  $subject = "Nouveau message soumis par ".$name;
  $Message = " Nom: $name \n Email: $email \n Telephone: $phone \n  Ville : $ville \n Pays: $pays \n Message : $message";
  $headers = "From: gunterscars16@gmail.com"; //@ a partir de la quelle l'e-mail sera envoyé
  mail($to , $subject , $Message , $headers);

  //header("location:index.html");
}

?>
