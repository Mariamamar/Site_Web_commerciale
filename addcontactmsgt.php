<?php 
$nom=$_GET['nom'];$prenom=$_GET['prenom'] ;$adresse=$_GET['adresse'];$tel=$_GET['tel'];$email=$_GET['email'];$reference=$_GET['reference']           ;

    include_once 'bconfig.php';

$sqlins="INSERT INTO `commander` (`id`, `nom`, `prenom`, `adresse`, `tel`, `email`, `reference`) VALUES 
(NULL,'$nom', '$prenom', '$adresse', '$tel', '$email','$reference'); ";  

$prepareinsert=$pdo->prepare($sqlins);
$prepareinsert->execute(); 
echo 1;







?>