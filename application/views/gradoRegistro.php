<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style type="text/css">
		.in_gra{
			width: 500px;
		}
	</style>
</head>
<body>	
	<br>
	<div class="container">
		<h2>Nuevo Grado</h2>
		<br>
		<form action="<?php echo base_url(); ?>GradoController/setGrado" method="POST" autocomplete="off">
			<div class="form-group">
				<label>Grado:</label>
				<input type="text" name="grado" class="form-control in_gra" required>
			</div>
			<div class="form-group">
				<input type="submit" value="Guardar registro" class="btn btn-primary">
			</div>
		</form>
	</div>

</body>
</html>