<?php
     $serveur = "localhost";
	 $dbname = "ayn-nghi";
	 $user = "root";
	 $pass = "";
  
   
    
    try{
        //On se connecte à la BDD
		$dbco = new PDO("mysql:host=$serveur;dbname=$dbname",$user,$pass);
        $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
  
		$email = $_POST["email"];
	

        //On insère les données reçues
        $sth = $dbco->prepare("
            INSERT INTO newsletter(email)
            VALUES(:email)");
        $sth->bindParam(':email',$email);
     
        $sth->execute();
        
        //On renvoie l'utilisateur vers la page de remerciement
		header('Location: confirmation.php');
    }
    catch(PDOException $e){
        echo 'Impossible de traiter les données. Erreur : '.$e->getMessage();
    }
?>