<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style type="text/css">
		.in_ma{
			width: 500px;
		}
	</style>
</head>
<body>
	<div class="container">
		<h2>Editar Materia</h2>
		<br>
		<form action="<?php echo base_url(); ?>MateriaController/setMateriaUpdate" method="POST" autocomplete="off">
			<div class="form-group">
				<label>Materia:</label>
				<input type="hidden" name="ma_id" value="<?=$materiaE->mat_id; ?>">
				<input class="form-control in_ma" type="text" value="<?=$materiaE->mat_nombre; ?>" name="materia" required>
			</div>
			<div class="form-group">
				<input  class="btn btn-primary" type="submit" value="Guardar registro">
			</div>
		</form>
	</div>
</body>
</html>
