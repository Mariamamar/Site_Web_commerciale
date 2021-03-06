<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.82.0">
    <title>Produit</title>

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
   
<div class="card" style="
    border: 0px solid rgba(0,0,0,.125) !important;
">
  
  <div class="card-body" style="
    text-align: right;
">
    <button type="button" onclick="ajout();" class="btn btn-info"    style=" background-color: #f00d6b !important;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-plus" viewBox="0 0 16 16">
  <path d="M8.5 6a.5.5 0 0 0-1 0v1.5H6a.5.5 0 0 0 0 1h1.5V10a.5.5 0 0 0 1 0V8.5H10a.5.5 0 0 0 0-1H8.5V6z"/>
  <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm10-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1z"/>
</svg>  Ajoute Produit</button>
  </div>
</div>  
    <div class="col-lg-12"  id="alb">

  </div> </main>
  </div>
</div>
  <div class="modal fade" id="ajoutproduit" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog ">
    <div class="modal-content">
      <div class="modal-header bg-warning text-white" style="
    background-color: #4caf50    !important;
">
        <h5 class="modal-title" id="staticBackdropLabel">ajoute Produit</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body  bg-white">
           <div class="row" id="vendd">
		        <div class="col-lg-6 mt-5 mt-lg-0  "style="    background-color: #f5f5f5;" >
  <div class="mb-3" style="    background-color: #f5f5f5;">
  <label class="form-label">Titre de produit  *</label>
  <input type="text" maxlength="70" class="form-control" id="inputtitre" required >
                                
  </div>
  
  <div class="mb-3" style="    background-color: #f5f5f5;">
  <label class="form-label">image *</label>
    <input type="file" class="form-control-file" id="img">
                                
  </div>
   <div class="mb-3" style="    background-color: #f5f5f5;">
  <label class="form-label">Details   *</label>
    <textarea class="form-control" id="Details" rows="2" placeholder="Details de publication"></textarea>
                                
  </div>
  
   
   <div class="checkbox mb-3">
     
 <!-- <div class="mb-3">-->
  <div class="d-grid gap-2 col-4 mx-auto">
  <input type="button" onclick="valider()" class="btn btn-primary" value="ajouter" 
  style="    background-color: #1e60a6!important;"></div>
  
  <h6  id="valueadderup"  style="display:none; color:red"></h6>
  

          </div>
   

        </div>
     <div class="col-lg-6 mt-5 mt-lg-0  "style="    background-color: #f5f5f5;" >
  
 
   

        </div>
   
  </div></div>
 <div class="modal-footer  bg-white">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">fermer</button>
      </div>
    </div>
  </div>
</div>
 <div class="modal fade" id="tuteurupdate" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog ">
    <div class="modal-content">
      <div class="modal-header bg-warning text-white" style="
    background-color: #4caf50    !important;
">
        <h5 class="modal-title" id="staticBackdropLabel">Update produit</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body  bg-white">
           <div class="row" id="updatetuteur">
		 
  </div></div>
 <div class="modal-footer  bg-white">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">fermer</button>
      </div>
    </div>
  </div>
</div>
    <script src="assets/dist/js/bootstrap.bundle.min.js"></script>

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
	  <script src="https://getbootstrap.com/docs/4.0/assets/js/vendor/popper.min.js
"></script>
<script src="js/jquery.js"></script>

 <script> 
 function update(i){
$.ajax({ type: "GET", url:'getactu.php?page='+i, data:{}, success: function(msg){ 
		

$("#updatetuteur").html(msg);	
	$("#tuteurupdate").modal('show');

	 }});
 }
 
 function  validerupdate(idpage){


$("#valueadderupupdate").fadeOut(); 
 $("#valueadderupupdate").val('');
	$valideadd=true;	 

	$inputtitre=$('#inputtitreupdate').val();	
		$Details=$('#Detailsupdate').val();	

		
                
		
		

	//$inputdet=escapeHtml($inputdet);	
if ($inputtitre.trim()==""||$Details.trim()=="")
	{$valideadd=false; 

 $('#valueadderupupdate').text('Champs requis. veuillez remplir les champs n??cessaires Titre ,Details,image ');
	$('#valueadderupupdate').fadeIn();
}

	
		

		
	else if($valideadd==true){	
		  var fd = new FormData();

				

				 fd.append('inputtitre',$inputtitre);fd.append('Details',$Details);
fd.append('idpage',idpage);
				 			
				$.ajax({
                    url:'addproduitupdate.php',
                    type:'post',
                    data:fd,
                    contentType: false,
                    processData: false,
                    success:function(response){
                        if(response==1){
						
location.href='produit.php';
                        }else if(response==0){
                            $('#valueadderupupdate').text('erreur image possible jpg,jpeg,png ');
	$('#valueadderupupdate').fadeIn();
                        }
						
						else if(response==-1){ 

                            $('#valueadderupupdate').text('erreur image  ');
	$('#valueadderupupdate').fadeIn();
                        }
						else {
                            $('#valueadderupupdate').text('erreur   ');
	$('#valueadderupupdate').fadeIn();
                        }
                    }
                });
				
				

                

              
}
            
	}
 
 
 
 	function  validerupdateimage(idpage){


$("#valueadderupupdateimage").fadeOut(); 
 $("#valueadderupupdateimage").val('');
	$valideadd=true;	 

                var files = $('#imgupdate')[0].files[0];
		
		

	//$inputdet=escapeHtml($inputdet);	
if (!files)
	{$valideadd=false; 

 $('#valueadderupupdateimage').text('Champs requis image ');
	$('#valueadderupupdateimage').fadeIn();
}

	
		

		
	else if($valideadd==true){	
		  var fd = new FormData();

                var files = $('#imgupdate')[0].files[0];
				

				if(files) {  
				 
				 fd.append('idpage',idpage);

				 			
				fd.append('imgupdate',files);
				$.ajax({
                    url:'addproduitupdateimage.php',
                    type:'post',
                    data:fd,
                    contentType: false,
                    processData: false,
                    success:function(response){
                        if(response==1){
						
location.href='produit.php';
                        }else if(response==0){
                            $('#valueadderupupdateimage').text('erreur image possible jpg,jpeg,png ');
	$('#valueadderupupdateimage').fadeIn();
                        }
						
						else if(response==-1){ 

                            $('#valueadderupupdateimage').text('erreur image  ');
	$('#valueadderupupdateimage').fadeIn();
                        }
						else {
                            $('#valueadderup').text('erreur   ');
	$('#valueadderupupdateimage').fadeIn();
                        }
                    }
                });}

                

              
}
            
	}
 
 
 	function  valider(){


$("#valueadderup").fadeOut(); 
 $("#valueadderup").val('');
	$valideadd=true;	 

	$inputtitre=$('#inputtitre').val();	
		$Details=$('#Details').val();	

	
                var files = $('#img')[0].files[0];
		
		

	//$inputdet=escapeHtml($inputdet);	
if ($inputtitre.trim()==""||$Details.trim()==""||(!files))
	{$valideadd=false; 

 $('#valueadderup').text('Champs requis. veuillez remplir les champs n??cessaires Titre ,Details,image ');
	$('#valueadderup').fadeIn();
}

	
		

		
	else if($valideadd==true){	
		  var fd = new FormData();

                var files = $('#img')[0].files[0];
				

				if(files) {  
				 fd.append('inputtitre',$inputtitre);fd.append('Details',$Details); 
				 
				 			
				fd.append('img',files);
				$.ajax({
                    url:'addactualite.php',
                    type:'post',
                    data:fd,
                    contentType: false,
                    processData: false,
                    success:function(response){
                        if(response==1){
						
location.href='produit.php';
                        }else if(response==0){
                            $('#valueadderup').text('erreur image possible jpg,jpeg,png ');
	$('#valueadderup').fadeIn();
                        }
						
						else if(response==-1){ 

                            $('#valueadderup').text('erreur image  ');
	$('#valueadderup').fadeIn();
                        }
						else {
                            $('#valueadderup').text('erreur   ');
	$('#valueadderup').fadeIn();
                        }
                    }
                });}

                

              
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
	function loadmc(url){ 
		
	  $.ajax({ type: "GET", url:url, data:'', success: function(msg){ 
$("#alb").html(msg); 
 } });
	  }
	loadmc('listeactuajax.php'); 
 
     
	function ajout(){
		
	 $("#ajoutproduit").modal('show');
 }
 function supprime(i){
	 $.ajax({ type: "GET", url:'deleteproduit.php?i='+i, data:'', success: function(msg){ 
	 if(msg==1){
	 $("#tr"+i).fadeOut(); }else alert(msg);

 } }); }
   </script>
  </body>
</html>
