<?php 
     include_once 'bconfig.php';

		 
		 if(!isset($_COOKIE['id'])){
    ?>
	
	
	
	<?php }

 if(isset($_COOKIE['id'])){
        $_SESSION['id']=$_COOKIE['id'];
    $type=$_COOKIE['type'];
if( $type=='parent'){
		?>
		       <a href="Moncompte.php" type="button" class="btn btn-info">
			  Mon espace <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-square" viewBox="0 0 16 16">
  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
  <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm12 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1v-1c0-1-1-4-6-4s-6 3-6 4v1a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12z"/>
</svg>  </a>

		<?php
    }
	else if( $type=='tuteur'){?>
	 <a href="Moncomptetuteur.php" type="button" class="btn btn-info">
			  Mon espace <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-square" viewBox="0 0 16 16">
  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
  <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm12 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1v-1c0-1-1-4-6-4s-6 3-6 4v1a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12z"/>
</svg>  </a>
 <?php }}
	?>
	
	

    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menulist" aria-expanded="false">
                    <span class="sr-only">MENU</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php" style="color:#CFB716"> PLUSHY</a> 
			
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="menulist">
         
                <ul class="nav navbar-nav navbar-right">
                   
                   
                
                    <li class="dropdown">
                        <a href="#"
                           class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            <span class="glyphicon glyphicon-shopping-cart"></span>&nbsp;Mon Panier
                            <span class="badge">3</span>
                            <span class="caret"></span>
                        </a>

                       

                    </li>

                    <li>
                        <a href="login.html">
                            <span class="glyphicon glyphicon-user"></span>&nbsp;Se connecter
                        </a>
                    </li>
					 <li>
                        <a href="         ">
                            <span class="glyphicon glyphicon-user"></span>&nbsp; s'inscrire
                        </a>
                    </li>
                    <li>
                        <a href="            ">
                            <span class="glyphicon glyphicon-log-in"></span>&nbsp;D??connecter
                        </a>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>