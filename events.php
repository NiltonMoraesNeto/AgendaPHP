<?php


 $json = array();

 $requete = "SELECT * FROM calendario ORDER BY id";
 

 try {
 $bdd = new PDO('mysql:host=localhost;dbname=agenda2', 'root', '');
 } catch(Exception $e) {
 exit('Impossivel de se conectar a base de dados.');
 }

 $resultat = $bdd->query($requete) or die(print_r($bdd->errorInfo()));
 

 echo json_encode($resultat->fetchAll(PDO::FETCH_ASSOC));
 

?>