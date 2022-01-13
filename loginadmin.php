<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="generator" content="">
    <title></title>

    <link rel="canonical" href="">

    

    <!-- Bootstrap core CSS -->
<link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">

      <script src="js/jquery.js"></script>



<main>

  <body class="bg-light"   style="  background-color: #1789e229 !important;"
>
  <script> 
	 $(document).ready(function() {
        
      });
	function login(){
		$("#valueadderup").fadeOut(); 
			 $("#valueadderup").val('');
	$valideadd=true;


	$inputEmail=$('#email').val();
	$pwd=$('#pwd').val(); 
	
if ($pwd==""||$inputEmail.trim()=="")
	{$valideadd=false;  alert('false');
 $('#valueadderup').text('Champs obligatoires. veuillez remplir les champs nécessaires ');
	$('#valueadderup').fadeIn();
}
else if (!validateEmail($inputEmail) )
	{$valideadd=false;
 $('#valueadderup').text('E-mail. Veuillez saisir une adresse e-mail valide');
	$('#valueadderup').fadeIn();
        }
		
	else if($valideadd==true){
	
	 $.ajax({type:"POST",url:'loginconxadmin.php',data:{email:$inputEmail,pwd:$pwd},success:function(msg){
		 
 if(msg==0){$('#valueadderup').text("compte n'existe pas");
	$('#valueadderup').fadeIn();}
		else if(msg==-1){$('#valueadderup').html("vérifier  votre mot de passe");
	$('#valueadderup').fadeIn();}
		else  if(msg==1){location.href='dashadmin.php';}


 } });
	}}
 
     
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
}    </script> 
  
  <div class="container">
  <div class="row justify-content-center mt-5">
  <div class="col-lg-6 col-md-6">
  <div class="card bx">
 <div class="card-body">
  <div class="card-title">
  
 <div class="mb-3 p-2 text-white rounded text-center" ><h4 style="color: #E1E600;"> Connexion</h4></div>

  <form>
  <div class="mb-3">
  <label class="form-label">E-mail </label>
  <input type="email" class="form-control" id="email" required >
                                
  </div>
  <div class="mb-3">
   <label class="form-label"> Mot de passe *</label>
  <input type="password" class="form-control" id="pwd" required></div>
       <h6  id="valueadderup"  style="display:none; color:red"></h6>

   <div class="checkbox mb-3">
 <!-- <div class="mb-3">-->
  <div class="d-grid gap-2 col-4 mx-auto">
  <input type="button"  onclick="login()" style="color:SlateBlue; "  value="Se connecter"></div>
 
  
  </div>
  </div>
  </div>
  </div>
  </div>
   </div>
   </main>
    
  </body>
  </html>