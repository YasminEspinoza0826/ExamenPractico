<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	
</head>
<body>
	<br>
	<div class="container">
		<h2>Grados</h2>
		<br>
		<a class="btn btn-success" href="<?php echo base_url(); ?>GradoController/nuevoGrado">Nuevo grado</a>
		<br>
		<br>
		<div class="table-responsive">
			<table class="table table-hover">
				<thead>
					<tr>
						<td>ID</td>
						<td>Grado</td>
						<td></td>
					</tr>
				</thead>

				<tbody>
					<?php foreach($grado as $g): ?>
						<tr>
							<td><?=$g->grd_id ?></td>
							<td><?=$g->grd_nombre ?></td>
							<td>
								<a href="<?php echo base_url().'GradoController/editarGrado/'.$g->grd_id ?>">Editar</a>
								<a href="<?php echo base_url().'GradoController/borrarGrado/'.$g->grd_id ?>">Eliminar</a>
							</td>
						</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>
</body>
</html>