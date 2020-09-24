<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sistema de Administración de Peliculas</title>

	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
</head>

<body>

	<header>
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
			<a class="navbar-brand" href="#">Inicio</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link" href="?controller=user">Usuarios</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="?controller=category">Categorias</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="?controller=movie">Peliculas</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="?controller=status">Estados</a>
						</li>
					<li class="nav-item">
						<a class="nav-link" href="?controller=Renta">renta</a>
						<li class="nav-item">
						<a class="nav-link" href="?controller=Rentadas">PelisRentadas</a>
					</li>		
					</li>					
					<li class="nav-item">
						<a class="nav-link" href="?controller=role">Roles</a>
					</li>		
				</ul>
			</div>
		</nav>
	</header>

	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
</body>

</html>