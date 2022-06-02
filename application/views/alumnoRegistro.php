<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style type="text/css">
		<style type="text/css">
		.in_alm{
			width: 500px;
		}
	</style>
</style>
</head>
<body>
	<br>
	<div class="container">
		<h2>Nuevo Alumno</h2>
		<br>
 
		<div class="row">
			<div class="col-md-6">
				<form action="<?php echo base_url(); ?>AlumnoController/setAlumno" method="POST" autocomplete="off">
					<div class="form-group">
						<label>Código</label>
						<input type="text" name="codigo" class="form-control in_alm" required>
					</div>
					<div class="form-group">
						<label>Nombre</label>
						<input type="text" name="nombre" class="form-control in_alm" required>
					</div>
					<div class="form-group">
						<label>Edad</label>
						<input type="number" name="edad" class="form-control in_alm" min="3" max="40" required>
					</div>
					
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label>Sexo</label>
						<input type="text" name="sexo" class="form-control in_alm" required>
					</div>
					<div class="form-group">
						<label>Grado</label>
						<select class="form-control in_alm" name="grd_id">
							<option>-- Seleccione una opcion --</option>
							<?php foreach ($gradoA as $g ): ?>
								<option value="<?php echo $g->grd_id;?>"><?php echo $g->grd_nombre; ?></option>

							<?php endforeach; ?>
						</select>
					</div>
					<div class="form-group">
						<label>Observación</label>
						<input type="text" name="observacion" class="form-control in_alm"  required>
					</div>
				</div>
			</div>
			<br>
			<input type="submit" class="btn btn-primary" value="Guardar registro">
		</form>
	</div>

</body>
</html>