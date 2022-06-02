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
		<h2>Editar Alumno</h2>
		<br>

		<div class="row">
			<div class="col-md-6">
				<form action="<?php echo base_url(); ?>AlumnoController/actualizarAlumno" method="POST" autocomplete="off">
					<div class="form-group">
						<label>Código</label>
						<input type="hidden" name="alm_id" value="<?=$alumnoE->alm_id; ?>"  >
						<input type="text" name="codigo" value="<?=$alumnoE->alm_codigo; ?>" class="form-control in_alm" required>
					</div>
					<div class="form-group">
						<label>Nombre</label>
						<input type="text" name="nombre" value="<?=$alumnoE->alm_nombre; ?>" class="form-control in_alm" required>
					</div>
					<div class="form-group">
						<label>Edad</label>
						<input type="number" name="edad" value="<?=$alumnoE->alm_edad; ?>" class="form-control in_alm" min="3" max="40" required>
					</div>
					
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label>Sexo</label>
						<input type="text" name="sexo" value="<?=$alumnoE->alm_sexo; ?>"  class="form-control in_alm" required>
					</div>
					<div class="form-group">
						<label>Grado</label>
						<select class="form-control in_alm" name="grd_id">
							<option>-- Seleccione una opcion --</option>
							<?php foreach ($this->AlumnoModel->getGrado() as $p ): ?>
					<option value="<?php echo $p->grd_id ;?>" <?php echo $p->grd_id == $alumnoE->alm_id_grd ?  'selected' : "" ?> ><?php echo $p->grd_nombre; ?>
							</option>
						<?php endforeach; ?>
					</select>
				</div>
				<div class="form-group">
					<label>Observación</label>
					<input type="text" name="observacion" value="<?=$alumnoE->alm_observacion; ?>" class="form-control in_alm"  required>
				</div>
			</div>
		</div>
		<br>
		<input type="submit" class="btn btn-success" value="Guardar registro">
	</form>
</div>

</body>
</html>