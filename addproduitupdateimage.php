<?php



    include_once 'bconfig.php';


				$idpage=$_POST['idpage'];
				

		
				
$filename = $_FILES['imgupdate']['name'];

$date=date("d-m-Y");
$time=date("H-i-s");
/* Location */
$location = "imageup/".$date.$time."-.jpg";
$uploadOk = 1;
$imageFileType = pathinfo($filename,PATHINFO_EXTENSION);

/* Valid extensions */
$valid_extensions = array("jpg","jpeg","png");

/* Check file extension */
if(!in_array(strtolower($imageFileType), $valid_extensions)) {
   $uploadOk = 0;
}

if($uploadOk == 0){
   echo 0;
}else{
   /* Upload file */
   if(move_uploaded_file($_FILES['imgupdate']['tmp_name'],$location)){

	 
$sqlins="UPDATE `plushy`.`produit` SET `image` = '$location' WHERE `produit`.`id` = '$idpage';
";  
$prepareinsert=$pdo->prepare($sqlins);
   
$prepareinsert->execute();  $idlast=$pdo->lastInsertId();
 
	   
     echo 1;
   }else{
     echo -1;
   }
}
 