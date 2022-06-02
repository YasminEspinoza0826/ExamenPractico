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
		<h2>Nueva Materia</h2>
		<br>
		<form action="<?php echo base_url(); ?>MateriaController/setMateria" method="POST" autocomplete="off">
			<div class="form-group">
				<label>Materia:</label>
				<input class="form-control in_ma" type="text" name="materia" required>
			</div>
			<div class="form-group">
				<input  class="btn btn-primary" type="submit" value="Guardar registro">
			</div>
		</form>
	</div>
</body>
</html>
