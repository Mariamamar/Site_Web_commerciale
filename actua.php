 
<!DOCTYPE html>
<html lang="en">
<head>
    <title></title>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <link href="Content/bootstrap.min.css" rel="stylesheet" />
    <link href="Content/font-awesome.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Bree+Serif" rel="stylesheet">
    <link href="Content/site.css" rel="stylesheet" />
    <script src="Scripts/jquery-1.9.1.min.js"></script>
    <script src="Scripts/bootstrap.min.js"></script>
</head>
<body>
    <div class="container marketing">
    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">
  </head>
   <body  style="           
      background: white;
">
  <div class="container" style="
    background: white;
">
 <?php include_once"header.php";?>
 
 
 
 
<div class="row" style="background-color: white">
  

<hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h1 class="featurette-heading"> 

 <?php $idarticle=$_GET['id']; $reqderniersidarticle="SELECT * FROM produit WHERE id='$idarticle'";

$prepareseajaxidarticle=$pdo->prepare($reqderniersidarticle);
   
$prepareseajaxidarticle->execute();

$row2article=$prepareseajaxidarticle->fetch();
				$idsesio=$row2article['id'];
		$date=$row2article['date'];
			$image=$row2article['image'];
		$Details=$row2article['Details'];
$Titre=$row2article['Titre'];
echo $Titre;	
?>
</h1>


        <p class="lead"><?php echo $Details ?></p>
      </div>
      <div class="col-md-5 order-md-1">
        <img src="<?php echo $image?>"  width="300" height="300"> 

      </div>
    </div>

  <a href="contact.php" type="button"  class="btn btn-primary"
  style="    background-color: #1e60a6!important;"> Commander
</a>
       
           
	</div>
    
	 
	 
	 
	 </div><!-- /.row -->
	    
</div>

<br> <br> <br> <br>
    <?php include_once"footer.php";?>

 
    <script src="assets/dist/js/bootstrap.bundle.min.js"></script>

      
  </body>
</html>