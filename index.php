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
      background: white;">
  <div class="container" style="
    background: white;
">
 <?php include_once"header.php";?>

    <!-- CTRL + SHIFT + W : Browser da sayfayı açar.. -->
    <!-- ALT + SHIFT + W : Seçileni element içine alır.. -->

    <div class="container">
  
 <div class="row">
            <div class="col-md-12">

                <div id="my-carousel" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#my-carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#my-carousel" data-slide-to="1"></li>
                        <li data-target="#my-carousel" data-slide-to="2"></li>
                        <li data-target="#my-carousel" data-slide-to="3"></li>
                        <li data-target="#my-carousel" data-slide-to="4"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <img alt="First slide" width="1200" height="400" src="image/sli1.png" > 
                            <div class="carousel-caption">
                                
                            </div>
                        </div>
                        <div class="item">
                            <img alt="Second slide" width="1200" height="400" src="image/sli2.gif">
                            <div class="carousel-caption">
                               
                            </div>
                        </div>
                        
                      <div class="item">
                            <img alt="Third slide" width="1200" height="400" src="image/sli3.PNG">
                            <div class="carousel-caption">
                               
                            </div>
                        </div>
                    </div>

                    <!-- Controls -->
                    <a class="left carousel-control" href="#my-carousel" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>

                    <a class="right carousel-control" href="#my-carousel" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>

            </div>
        </div>
 

  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->
    <hr class="featurette-divider">
    <!-- Three columns of text below the carousel -->
    <div class="row">
<h3>Nos Produit
</h3>
<div class="row row-cols-1 row-cols-md-3 g-4" style="margin-right: 0px !important;
    margin-left: 0px !important;  background-color: #f5f5f5;   margin-top: 2px !important;
">
      
		  
		  <?php 



$reqderniers="SELECT * FROM produit ORDER BY  `id` DESC limit 6";

$prepareseajax=$pdo->prepare($reqderniers);
   
$prepareseajax->execute();


while ($row2=$prepareseajax->fetch()){ 
				$idsesio=$row2['id'];
		$date=$row2['date'];
			$image=$row2['image'];
		$Details=$row2['Details'];		
$Titre=$row2['Titre'];	

					 ?>
					
				
            
            	  <div class="col-sm-4"> 

				<div class="card" style="">
  <img src="<?php echo $image?>" height="250px" width="250px" class="card-img-top" alt="...">
  <div class="card-body">
    <h3 class="card-title"><?php echo $Titre ?></h3>
            <a href="actua.php?id=<?php echo $idsesio?>" class="btn btn-primary" style="
    background-color: #056c5f;
">Plus de détails</a>

  </div>
</div>
<br>
       </div> 
           
          <?php } ?>   
           
       
         
      </div>
	  
  
    <hr class="featurette-divider">
  
</div>




	   
	 </div><!-- /.row -->



    <!-- /END THE FEATURETTES -->



  <!-- FOOTER -->
    <?php include_once"footer.php";?>

 
    <script src="assets/dist/js/bootstrap.bundle.min.js"></script>

      
  </body>
</html>
