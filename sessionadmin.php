 <?php 
     include_once 'bconfig.php';

         session_start();
		 
		 if(!isset($_COOKIE['idadmin'])){
        header("location: loginadmin.php");
    }

 if(isset($_COOKIE['idadmin'])){
        $_SESSION['idadmin']=$_COOKIE['idadmin'];
    }
	

if(isset($_SESSION['idadmin'])) {
    $idusersee=$_SESSION['idadmin'];
	
	
	$requsersession="SELECT * FROM `admin` WHERE `id`='$idusersee'";  
$preparerequsersession=$pdo->prepare($requsersession);
   
$preparerequsersession->execute();  

$row2=$preparerequsersession->fetch();
	$idsesio=$row2['id'];
		$NOM=$row2['NOM'];
	$EMAIL=$row2['EMAIL'];
	

	}
	
	
	?>