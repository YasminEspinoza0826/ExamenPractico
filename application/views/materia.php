<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

	<div class="container">
		<h2>Materias</h2>
		<br>
		<a class="btn btn-primary" href="<?php echo base_url(); ?>MateriaController/nuevaMateria">Nueva Materia</a>
		<br>
		<br>
		<div class="table-responsive">
			<table class="table">
				<thead>
					<tr>
						<td>ID</td>
						<td>Materia</td>
						<td></td>
					</tr>
				</thead>

				<tbody>
					<?php foreach($materia as $m): ?>
					<tr>
						<td><?=$m->mat_id; ?></td>
						<td><?=$m->mat_nombre; ?></td>
						<td>
							<a href="<?php echo base_url().'MateriaController/editarMateria/'.$m->mat_id ?>">Editar</a>
							<a href="<?php echo base_url().'MateriaController/borrarMateria/'.$m->mat_id ?>">Eliminar</a>
						</td>
					</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>

</body>
</html>