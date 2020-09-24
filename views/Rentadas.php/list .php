<main class="container">
	<section class="col-md-12 text-center">
		<h1>Listado de Peliculas</h1>

		<div class="col-md-12 m-2 d-flex justify-content-between">
			<h2>Peliculas</h2>
			
		</div>

		<section class="col-md-12 flex-nowrap table-responsive">
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th>#</th>
						<th>Nombres</th>
					
                        <th>fecha inicio</th>
						<th>fecha fin</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($renta as $renta): ?>
						<tr>
							<td>
								<?php echo $renta->nombre ?>
							</td>
							<td>
								<?php echo $renta->fecha_inicio ?>
							</td>
							<td>
								<?php echo $renta->fecha_fin ?>
                            </td>
                           
							<td>								
							<a href="?controller=Renta&method=new" class="btn btn-success">RENTARS</a>
							
								
							</td>
						</tr>
					<?php endforeach ?>
				</tbody>
			</table>
		</section>
	</section>
</main>