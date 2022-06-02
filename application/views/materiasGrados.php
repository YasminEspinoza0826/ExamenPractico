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
		<h2>Materias y Grados</h2>
		<br>
		<a class="btn btn-success" href="<?php echo base_url(); ?>IntermediaController/nuevoRegistro">Nuevo registro</a>
		<br>
		<br>
		<div class="table-responsive">
			<table class="table">
				<thead>
					<tr>
						<td>Alumno</td>
						<td>Grado</td>
						<td>Materia</td>
						<td></td>
					</tr>
				</thead>
				<tbody>
					<?php foreach($intermedia as $i): ?>
						<tr>
							<td><?=$i->alm_nombre; ?></td>
							<td><?=$i->grd_nombre; ?></td>
							<td><?=$i->mat_nombre; ?></td>
							<td>
								<a href="<?php echo base_url().'IntermediaController/editarIntermedia'.$i->mxg_id ?>">Editar</a>
								<a href="<?php echo base_url().'IntermediaController/borrarIntermedia'.$i->mxg_id ?>">Eliminar</a>
							</td>
						</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>
</body>
</html>