<?php



    include_once 'bconfig.php';


				$inputtitre=$_POST['inputtitre'];				
				$Details=$_POST['Details'];
			
								$idpage=$_POST['idpage'];				


		
				


	 
$sqlins="UPDATE `plushy`.`produit` SET `Titre` = '$inputtitre', `Details` = '$Details' WHERE `produit`.`id` = '$idpage';
";  
$prepareinsert=$pdo->prepare($sqlins);
   
$prepareinsert->execute();  
 
	   
     echo 1;
  ?>