
  
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
 
 
<div class="row" style="
    background-color: #f5f5f5;
">
    <hr class="featurette-divider">

 <h5 class="card-title" style="
    font-size: 28px;
    font-weight: 700;
    color: #010483;
    margin-bottom: 15px;
">  Passez votre Commande

</h5>
  

<div class="col-lg-8 mt-5 mt-lg-0 aos-init aos-animate" data-aos="fade-left" data-aos-delay="200">

              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="nom" class="form-control" id="nom" placeholder="Votre nom *" required="">
                </div>
				
				<div class="col-md-6 form-group">
                  <input type="text" name="prenom" class="form-control" id="prenom" placeholder="Votre prenom *" required="">
                </div>
				<div class="col-md-6 form-group">
                  <input type="text" name="adresse" class="form-control" id="adresse" placeholder="Votre adresse *" required="">
                </div>
				<div class="col-md-6 form-group">
                  <input type="text" name="tel" class="form-control" id="tel" placeholder="Votre telephone*" required="">
                </div>
				
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="E-mail *
" required="">
                </div>
            
             
              <div class="col-md-6 form-group mt-3 mt-md-0">
                
				<input type ="text" class="form-control" name="reference" id="reference" placeholder="Reference de produit *" required="">
				
              </div>
			 
              </div>
			  <div class="checkbox mb-3">
     
 <!-- <div class="mb-3">-->
  <div class="d-grid gap-2 col-4 mx-auto">
  <input type="button" onclick="Envoyerc()" class="btn btn-primary" value="Envoyer" 
  style="    background-color: #1e60a6!important;"></div><h6  id="valueadderup"  style="display:none; color:red"></h6>
  

          </div>
   
			  

          </div>		  <hr class="featurette-divider">

</div>
   
	 </div><!-- /.row -->



    <!-- /END THE FEATURETTES -->
<br> <br> <br>


  <!-- FOOTER -->
    <?php include_once"footer.php";?>

 
    <script src="assets/dist/js/bootstrap.bundle.min.js"></script>
<script src="js/jquery.js"></script>

 <script> 
 
 	function  Envoyerc(){


		$("#valueadderup").fadeOut(); 
			 $("#valueadderup").val('');
	$valideadd=true;
$nom=$('#nom').val();$nom=escapeHtml($nom);
$prenom=$('#prenom').val();$prenom=escapeHtml($prenom);
$adresse=$('#adresse').val();$adresse=escapeHtml($adresse);


	$tel=$('#tel').val();$tel=escapeHtml($tel); 	
 

	$email=$('#email').val();$email=escapeHtml($email); 
$reference=$('#reference').val();$reference=escapeHtml($reference); 
	
if ($nom.trim()==""||$prenom.trim()==""||$adresse.trim()==""||$tel.trim()==""||$email.trim()==""||$reference.trim()=="")
	{$valideadd=false;
 $('#valueadderup').text('Champs obligatoires. veuillez remplir les champs nécessaires '
);
	$('#valueadderup').fadeIn();
}
else if (!validateEmail($email) )
	{$valideadd=false;
 $('#valueadderup').text('E-mail. Veuillez saisir une adresse e-mail valide');
	$('#valueadderup').fadeIn();
        }else if (isNaN($tel) )
	{$valideadd=false;
 $('#valueadderup').text('tel. doivent être un nombre ');
	$('#valueadderup').fadeIn();
        }
		
	else if($valideadd==true){
	
	 $.ajax({ type: "GET", url:'addcontactmsgt.php', data:{nom:$nom,prenom:$prenom,adresse:$adresse,tel:$tel,email:$email,reference:$reference,}, success: function(msg){ 
		if(msg!=1){$('#valueadderup').text('erreur');
	$('#valueadderup').fadeIn();}
	

 else {
	alert('Commande envoyé ');

	 
	 
 }
	 }});
	}
	}
   $(document).ready(function() {
      });
			  	function escapeHtml(text) {
  var map = {
    '&': '&amp;',
    '<': '&lt;',
    '>': '&gt;',
    '"': '&quot;',
    "'": '&#039;'
  };

  return text.replace(/[&<>"']/g, function(m) { return map[m]; });
}	function validateEmail(email) 
{
    var re = /\S+@\S+\.\S+/;
    return re.test(email);
}
	

   </script>
      
  </body>
</html>