<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.82.0">
    <title>tableau</title>

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
  <body>
    
 <?php include_once 'headerdashadmin.php';?>


<div class="container-fluid">
  <div class="row">
 <?php include_once 'sidbardashbadmin.php';?>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <!-- <?php include_once 'alertcompte.php';?>-->
<div class="card" style="
    border: 0px solid rgba(0,0,0,.125) !important;
">
  
  <div class="card-body" style="
    text-align: right;
">
    
  </div>
</div>  
    <div class="col-lg-12"  id="alb">

  </div> </main>
  </div>
</div>
 
    <script src="assets/dist/js/bootstrap.bundle.min.js"></script>

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
	  <script src="https://getbootstrap.com/docs/4.0/assets/js/vendor/popper.min.js
"></script>
<script src="js/jquery.js"></script>

 <script> 
 
  $(document).ready(function() {
      });

	function loadmc(url){ 
		
	  $.ajax({ type: "GET", url:url, data:'', success: function(msg){ 
$("#alb").html(msg); 
 } });
	  }
	loadmc('listeconatcmsgajaxjax.php'); 
 
     
   </script>
  </body>
</html>
