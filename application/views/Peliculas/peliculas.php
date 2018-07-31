
	<body >
		<div class="container">
			<h3 class="text-center">Listado de peliculas:</h3>
			<br>
			<?php
				if($peliculas){
				foreach($peliculas->result() as $pelicula) { 
			?>
			<div class="row">
				<div class="col-lg-4"></div>
				<div align="left" class="col-lg-3">
						
						<ul  class="list-group">
							<li class="list-group-item">
								<?= $pelicula->nombrePelicula; ?> 
							</li>
						</ul>
					<br>
					
				</div>
				<div class="col-lg-1" style="line-height: 3">
					<a href="/index.php/peliculas/modificar/<?= $pelicula->idPelicula; ?>"> <i class="fa fa-pencil-alt"> </i> </a>
				</div>
				<div class="col-lg-1 text-left"  style="line-height: 3; margin-left:  -60px;">
					<a href="/index.php/peliculas/eliminar/<?= $pelicula->idPelicula; ?>"> <i class="fa fa-times"> </i> </a>
				</div>
				<div class="col-lg-3"></div>
			</div>
			<?php }
			}
			else{
					echo "<p>Error en la app</p>";
			}
			?>
			<div class="row">
				<div align="center">
					<a href="/index.php/peliculas/agregar" class="btn btn-success" > Agregar pelicula</a>
				</div>
			</div>
		</div>
	</body>
</html>