    <?php  include_once 'bconfig.php';?>
  <h5 class="card-title">Produit</h5>
      <div class="table-responsive">
        <table class="table table-striped table-sm table-hover table-bordered">
          <thead>
		 
		  
            <tr style="background: #bedad0;">
			<th>id</th>
              <th>date</th><th>Titre  </th>
             <th>image  </th>
              <th>Details  * </th>         
              <th>Supprimer </th>     
 <th>  Modifier</th>
            </tr>
          </thead>
          <tbody id="tbody">
		  
		  <?php 
$from=0;
$nbre_par_page=20;
$page=0;
if(isset($_GET['page']))$page=$_GET['page'];

$nbuser="SELECT * FROM produit ";

$prepare=$pdo->prepare($nbuser);
   
$prepare->execute();     
$nb_de_ligne=$prepare->rowCount(); 
$nb_de_page=$nb_de_ligne/$nbre_par_page;

$from=$nbre_par_page*$page;


$reqderniers="SELECT * FROM produit ORDER BY  `id` DESC limit $from,$nbre_par_page";

$prepareseajax=$pdo->prepare($reqderniers);
   
$prepareseajax->execute();


while ($row2=$prepareseajax->fetch()){ 
				$idsesio=$row2['id'];
		$date=$row2['date'];
			$image=$row2['image'];
		$Details=$row2['Details'];		
$Titre=$row2['Titre'];	

					 ?>
					
				
             <tr id="tr<?php echo $idsesio?>" style="">
			<td><?php echo $idsesio?></td>
              <td><?php echo $date?></td>
              <td><?php echo $Titre ?></td>
              <td><img src='<?php echo $image?>' width="150px" height="150px">   </td><td><?php echo $Details?> </td>
              <td> <button type="button" onclick="supprime(<?php echo $idsesio?>);" class="btn btn-danger" >X</button></td>
  <td><button type="button" onclick="update(<?php echo $idsesio?>);" class="btn btn-warning" ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
  <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
</svg></button></td>
 
            </tr>
            
           
          <?php } ?>   
           
       
          </tbody>
        </table>
      </div>
	  <center>
	    <ul  style="font-size: 20px;">
						  

						<?php  if($nb_de_page >($page+1)){ $pagenesx=$page+1;;?>
    <li class="next"><a href="javascript:loadmc('listeactuajax.php?page=<?php echo $pagenesx;?>')">page suivante &rarr;</a></li>
<?php } ?>
	
				<?php  if($page > 0){ $pagenesx=$page-1;?>
    <li class="previous"><a href="javascript:loadmc('listeactuajax.php?page=<?php echo $pagenesx;?>')"> < page précédente </a></li>
<?php } ?>
</ul></center>
  