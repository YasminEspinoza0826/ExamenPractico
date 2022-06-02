<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<div class="container">
		<h2>Nuevo Registro</h2>
		<br>

		<div class="table-responsive">
			<form action="<?php echo base_url(); ?>IntermediaController/nuevoAlumnoMateria" method="POST" autocomplete="off">
				<div class="form-group">
					<label>Alumno:</label>
					<select class="form-control in_alm" name="grd_id">
							<option>-- Seleccione una opcion --</option>
							<?php foreach ($grado as $g ): ?>
								<option value="<?php echo $g->grd_id;?>"><?php echo $g->grd_nombre; ?></option>
							<?php endforeach; ?>
					</select>
				</div>
				<div class="form-group">
					<label>Materia:</label>
					<select class="form-control in_alm" name="mat_id">
						
							<option>-- Seleccione una opcion --</option>
							<?php foreach ($materia as $m ): ?>
								<option value="<?php echo $m->mat_id;?>"><?php echo $m->mat_nombre; ?></option>
							<?php endforeach; ?>
					</select>
				</div>
				<div class="form-group">
					<input type="submit" value="Guardar registro" class="btn btn-primary">
				</div>
			</form>
		</div>
		
	</div>
</body>
</html>