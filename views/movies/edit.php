<main class="container">
	<div class="row">
		<h1 class="col-12 d-flex justify-content-center">Editar Pelicula</h1>
	</div>
	<section class="row mt-5">
		<div class="card w-75 m-auto">
			<div class="card-header">
				<h2 class="m-auto">Información de la Pelicula</h2>
			</div>

			<div class="card-body w-100">
				<form action="?controller=movie&method=update" method="post"> 

					<input type="hidden" name="id" value="<?php echo $data[0]->id ?>">

					<div class="form-group">
                        <label> Nombre</label>
                        <input type="text" name="name" class="form-control" placeholder="Ingrese el nombre" value="<?php echo $data[0]->name ?>">
                    </div>
                    <div class="form-group">
                        <label> Descripción</label>
						<input type="text" class="form-control" rows="3" id="description" placeholder="Ingrese la descripción" value="<?php echo $data[0]->description ?>">
                    </div>
                    <div class="form-group">
						<label>Usuario</label>
						<input type="text" name="user_id" class="form-control" value="<?php echo $data[0]->user_id ?>">
					</div>
					<div class="form-group">
						<label>Estado</label>
						<input type="text" name="status_id" class="form-control" value="<?php echo $data[0]->status_id ?>">
					</div>					

					<div class="form-group">
						<button id="update"  class="btn btn-primary">Actualizar</button>
					</div>
				</form>
			</div>
		</div>
	</section>
</main>