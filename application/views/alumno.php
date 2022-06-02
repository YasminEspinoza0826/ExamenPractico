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
		<h2>Alumnos</h2>
		<br>
		<a class="btn btn-success" href="<?php echo base_url(); ?>AlumnoController/nuevoAlumno">Nuevo alumnos</a>
		<br>
		<br>
		<div class="table-responsive">
			<table class="table table-hover">
				<thead>
					<tr>
						<td>ID</td>
						<td>Código</td>
						<td>Alumno</td>
						<td>Edad</td>
						<td>Sexo</td>
						<td>Grado</td>
						<td>Observacion</td>
						<td></td>
					</tr>
				</thead>
				<?php foreach($alumnoAll as $a): ?>
					<tbody>

						<tr>
							<td><?php echo $a->alm_id ?></td>
							<td><?php echo $a->alm_codigo ?></td>
							<td><?php echo $a->alm_nombre ?></td>
							<td><?php echo $a->alm_edad ?></td>
							<td><?php echo $a->alm_sexo ?></td>
							<td><?php echo $a->alm_id_grd ?></td>
							<td><?php echo $a->alm_observacion ?></td>
							<td>
								<a href="<?php echo base_url().'AlumnoController/editarAlumno/'.$a->alm_id ?>">Editar</a>
								<a href="<?php echo base_url().'AlumnoController/borrarAlumno/'.$a->alm_id ?>">Eliminar</a>
							</td>
						</tr>

					</tbody>
				<?php endforeach; ?>
			</table>
		</div>
	</div>

</body>
</html>