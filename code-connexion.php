<?php

try{
     $con = new PDO("mysql:host=localhost;dbname=aynnghi;charset=utf8",'root','');
}catch(PDOException $e){
    die("ERROR : ".$e->getMessage());
}

?>
