<?php 
$email=$_POST['email'];$pwd=$_POST['pwd'];
include_once 'bconfig.php';
$sql = "SELECT * FROM `admin` WHERE EMAIL='$email'";  
$prepare=$pdo->prepare($sql);
$prepare->execute();     
$nb=$prepare->rowCount();
if($nb==0){echo 0;}   
else if ($nb==1){
$sqlins = "SELECT * FROM `admin` WHERE EMAIL='$email' AND PWD='$pwd';";  
$prepareinsert=$pdo->prepare($sqlins);
   
$prepareinsert->execute(); 
$nbex=$prepareinsert->rowCount();
 if($nbex==0){echo -1;} else{  
$row=$prepareinsert->fetch();
echo 1; 
setcookie("idadmin", $row['id'], time() + (86400 * 30)); 
session_start();
$_SESSION["idadmin"]=$row['id'];
}}
?>