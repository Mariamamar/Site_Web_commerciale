    <?php  include_once 'bconfig.php';?>
  <h5 class="card-title">Les commandes</h5>
      <div class="table-responsive">
        <table class="table table-striped table-sm table-hover table-bordered">
          <thead>
		 
		  
            <tr style="background: #bedad0;">
			<th>id</th>
              <th>nom</th>
              <th>prenom </th>
             <th>email </th>
			       <th>adresse</th>
              <th>tel </th>

			 <th>Reference de produit </th>
             

            </tr>
          </thead>
          <tbody id="tbody">
		  
		  <?php 
$from=0;
$nbre_par_page=10;
$page=0;
if(isset($_GET['page']))$page=$_GET['page'];

$nbuser="SELECT * FROM commander ";

$prepare=$pdo->prepare($nbuser);
   
$prepare->execute();     
$nb_de_ligne=$prepare->rowCount(); 
$nb_de_page=$nb_de_ligne/$nbre_par_page;

$from=$nbre_par_page*$page;


$reqderniers="SELECT * FROM commander ORDER BY  `id` DESC limit $from,$nbre_par_page";

$prepareseajax=$pdo->prepare($reqderniers);
   
$prepareseajax->execute();


while ($row2=$prepareseajax->fetch()){
				$idsesio=$row2['id'];
		$nom=$row2['nom'];
		$prenom=$row2['prenom'];
			$adresse=$row2['adresse'];
			$tel=$row2['tel'];
$email=$row2['email'];
$reference=$row2['reference'];
		
	

	
	

					 ?>
				
             
				
             <tr id="tr<?php echo $idsesio?>" style="">
			<td><?php echo $idsesio?></td>
              <td><?php echo $nom?></td>
			    <td><?php echo $prenom?></td>
				  <td><?php echo $adresse?></td>
              <td><?php echo $tel ?></td>
              <td><?php echo $email?> </td>
			  <td><?php echo $reference?> </td>
            </tr>
            
           
          <?php } ?>   
           
       
          </tbody>
        </table>
      </div>
	  <center>
	    <ul  style="font-size: 20px;">
						  

						<?php  if($nb_de_page >($page+1)){ $pagenesx=$page+1;;?>
    <li class="next"><a href="javascript:loadmc('listeconatcmsgajaxjax.php?page=<?php echo $pagenesx;?>')">page suivante &rarr;</a></li>
<?php } ?>
	
				<?php  if($page > 0){ $pagenesx=$page-1;?>
    <li class="previous"><a href="javascript:loadmc('listeconatcmsgajaxjax.php?page=<?php echo $pagenesx;?>')"> < page précédente </a></li>
<?php } ?>
</ul></center>
  