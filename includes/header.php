<header>
	<nav class="navbar navbar-default navbar-static-top" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navegacion-fm">
					<span class="sr-only">Desplegar / Ocultar Menu</span>	
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="#" class="navbar-brand">CRUD|Usuarios</a>
			</div>
			<div class="collapse navbar-collapse" id="navegacion-fm">
				<ul class="nav navbar-nav">
					<li><a href="#"><span class="glyphicon glyphicon-home"></span>Home</a></li>							
					<li><a href="../includes/cerrar.php"><span class="glyphicon glyphicon-remove"></span>Salir</a></li>						
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<?php								
						echo "<li><a id='perfil' href='#'><img src='../imagenes/usuarios/".$_SESSION['foto']."' alt='Smiley face' width='50' style='border-radius: 50px;'> ".$_SESSION['usuario']."</a></li>";
					?>				      
			    </ul>			
			</div>
		</div>
	</nav>
</header>