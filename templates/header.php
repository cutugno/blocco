	<header>
		<nav class="navbar navbar-default">
		  <div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
			  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			  </button>
			  <a class="navbar-brand" href="<?php echo HOME;?>"><img src="<?php echo HOME;?>img/logo_codacons.jpg" alt="Logo Codacons" /></a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="menu">
			  
			  <ul class="nav navbar-nav navbar-right">				
				<li class="dropdown hidden-xs">
				  <a href="#" class="dropdown-toggle <?php echo $active1; ?>" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">I PRESUPPOSTI &nbsp;<i class="fa fa-angle-down"></i></a>
				  <ul class="dropdown-menu">
					<li class="color hidden-xs text-right" id="presupposti"><a href="#">I PRESUPPOSTI &nbsp;<i class="fa fa-angle-down"></i></a></li>
					<li><a href="<?php echo HOME;?>presupposti/sentenza-corte-costituzionale-178_2015">Sentenza C.C. n.178/2015</a></li>
					<li><a href="<?php echo HOME;?>presupposti/legge-adeguamenti-stipendi-pubblica-amministrazione">Legge adeguamenti stipendi P.A.</a></li>					
					<li><a href="<?php echo HOME;?>presupposti/risarcimento-danni">Risarcimento danni</a></li>					
				  </ul>
				</li>
				<li class="dropdown clearfix visible-xs-block">
				  <a href="#" class="dropdown-toggle <?php echo $active1; ?>">I PRESUPPOSTI &nbsp;<i class="fa fa-angle-down"></i></a>
				  <ul class="dropdown-menu" id="menu_small">
					<li class="color hidden-xs text-right" id="presupposti"><a href="#">I PRESUPPOSTI &nbsp;<i class="fa fa-angle-down"></i></a></li>
					<li><a href="<?php echo HOME;?>presupposti/sentenza-corte-costituzionale-178_2015">Sentenza C.C. n.178/2015</a></li>
					<li><a href="<?php echo HOME;?>presupposti/legge-adeguamenti-stipendi-pubblica-amministrazione">Legge adeguamenti stipendi</a></li>					
					<li><a href="<?php echo HOME;?>presupposti/risarcimento-danni">Risarcimento danni</a></li>					
				  </ul>
				</li>
				<!-- <li><a href="<?php echo HOME;?>categorie-interessate" class="<?php echo $active2; ?>">CATEGORIE INTERESSATE</a></li> -->
				<li><a href="<?php echo HOME;?>rassegna-stampa" class="<?php echo $active3; ?>">RASSEGNA STAMPA</a></li>
			  </ul>
			</div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>
	</header>