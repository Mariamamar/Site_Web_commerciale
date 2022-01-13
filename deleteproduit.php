<?php 
$idqt=$_GET['i'];
    include_once 'bconfig.php';

	$sqlins = "DELETE FROM `produit` WHERE id='$idqt'";  
$prepareinsert=$pdo->prepare($sqlins);
   
$prepareinsert->execute(); 
echo 1;
?>
