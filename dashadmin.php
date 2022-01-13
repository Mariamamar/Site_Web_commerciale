<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.82.0">
    <title>admin</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/dashboard/">

    

    <!-- Bootstrap core CSS -->
<link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
  </head>
  <body >
    
 <?php include_once 'headerdashadmin.php';?>


<div class="container-fluid">
  <div class="row">
 <?php include_once 'sidbardashbadmin.php';?>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <!-- <?php include_once 'alertcompte.php';?>-->

      <h2>Admin</h2>
	  
	  <div class="container">
 
  
	  <div class='row'>
	  <div class="col-6 col-md-4">
	  <div class="card text-white bg-danger " style="">
  <div class="card-header">Vest</div>
  <div class="card-body">
    <h5 class="card-title">22  Modéle</h5>
    <p class="card-text"></p>
  </div>
</div> </div><div class="col-6 col-md-4">
	  <div class="card text-white bg-primary " style="">
  <div class="card-header">Pantalon</div>
  <div class="card-body">
    <h5 class="card-title">15 Modéle</h5>
    <p class="card-text"></p>
  </div>
</div> </div><div class="col-6 col-md-4">
	  <div class="card text-white bg-warning " style="">
  <div class="card-header">              chaussure
</div>
  <div class="card-body">
    <h5 class="card-title">10 Modéle</h5>
    <p class="card-text"></p>
  </div>
</div> </div>
  </div>
    </br>

  </br>
  <div class='row'>
	  <div class="col-6 col-md-4">
	  <div class="card text-white bg-dark  " style="">
  <div class="card-header">Produit </div>
  <div class="card-body">
    <h5 class="card-title">50</h5>
    <p class="card-text"></p>
  </div>
</div> </div><div class="col-6 col-md-4">
	  <div class="card text-white bg-success   " style="">
  <div class="card-header">Commande </div>
  <div class="card-body">
    <h5 class="card-title">13 Commande</h5>
    <p class="card-text"></p>
  </div>
</div> </div><div class="col-6 col-md-4">
	  <div class="card text-white bg-info  " style="">
  <div class="card-header">Message Contact</div>
  <div class="card-body">
    <h5 class="card-title"></h5>
    <p class="card-text"> 4 Message</p>
  </div>
</div> </div>
  </div>
</div>

	  
    </main>
  </div>
</div>


    <script src="assets/dist/js/bootstrap.bundle.min.js"></script>

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
  </body>
</html>
