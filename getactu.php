    <?php  include_once 'bconfig.php';?>
  <h5 class="card-title">Produit</h5>
      
		  <?php 
$page=$_GET['page'];




$reqderniers="SELECT * FROM produit WHERE id='$page'";

$prepareseajax=$pdo->prepare($reqderniers);
   
$prepareseajax->execute();


while ($row2=$prepareseajax->fetch()){ 
				$idsesio=$row2['id'];
		$date=$row2['date'];
			$image=$row2['image'];
		$Details=$row2['Details'];		
$Titre=$row2['Titre'];	

					 ?>
					
				
              <div class="col-lg-6 mt-5 mt-lg-0  "style="    background-color: #f5f5f5;" >
  <div class="mb-3" style="    background-color: #f5f5f5;">
  <label class="form-label">Titre de produit    *</label>
  <input type="text" maxlength="70" class="form-control" id="inputtitreupdate" value='<?php echo $Titre; ?>'  required >
                                
  </div>
  
 
   <div class="mb-3" style="    background-color: #f5f5f5;">
  <label class="form-label">Details   *</label>
    <textarea class="form-control" id="Detailsupdate" rows="2" placeholder="Details de publication"  ><?php echo $Details; ?></textarea>
                                
  </div>
  
  
   
   <div class="checkbox mb-3">
     
 <!-- <div class="mb-3">-->
  <div class="d-grid gap-2 col-4 mx-auto">
  <input type="button" onclick="validerupdate(<?php echo $idsesio; ?>)" class="btn btn-primary" value="modifier" 
  style="    background-color: #1e60a6!important;"></div>
  <h6  id="valueadderupupdate"  style="display:none; color:red"></h6>
  

          </div>
   

        </div>
            <div class="col-lg-6 mt-5 mt-lg-0  "style="    background-color: #f5f5f5;" >
  
  
  <div class="mb-3" style="    background-color: #f5f5f5;">
  <label class="form-label">image *</label>
    <input type="file" class="form-control-file" id="imgupdate">
                                
  </div>
  
  
  
   
   <div class="checkbox mb-3">
     
 <!-- <div class="mb-3">-->
  <div class="d-grid gap-2 col-4 mx-auto">
  <input type="button" onclick="validerupdateimage(<?php echo $idsesio; ?>)" class="btn btn-primary" value="modifier image" 
  style="    background-color: #1e60a6!important;"></div><h6  id="valueadderupupdateimage"  style="display:none; color:red"></h6>
  

          </div>
   

        </div>
          <?php } ?>   
           
       
         