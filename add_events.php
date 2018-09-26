<?php
 
$title=$_POST['title'];
$start=$_POST['start'];
$end=$_POST['end'];
 

 try {
 $bdd = new PDO('mysql:host=localhost;dbname=agenda2', 'root', '');
 } catch(Exception $e) {
 exit('Impossivel de se conectar a base de dados.');
 }
 
$sql = "INSERT INTO `agenda2`.`calendario` (`title`, `start`, `end`) VALUES (:title, :start, :end);";

$q = $bdd->prepare($sql);
$q->execute(array(':title'=>$title, ':start'=>$start, ':end'=>$end));

?>