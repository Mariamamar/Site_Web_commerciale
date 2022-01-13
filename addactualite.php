<?php



    include_once 'bconfig.php';


				$inputtitre=$_POST['inputtitre'];				
				$Details=$_POST['Details'];
				
				

		
				
$filename = $_FILES['img']['name'];

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
   if(move_uploaded_file($_FILES['img']['tmp_name'],$location)){

	 
$sqlins="INSERT INTO `plushy`.`produit` (`id`, `Titre`, `image`, `Details`, `date`) VALUES (NULL, '$inputtitre', '$location', '$Details', '$date');";  
$prepareinsert=$pdo->prepare($sqlins);
   
$prepareinsert->execute();  $idlast=$pdo->lastInsertId();
 
	   
     echo 1;
   }else{
     echo -1;
   }
}
 