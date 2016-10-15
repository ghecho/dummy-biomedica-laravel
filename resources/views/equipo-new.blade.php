<!DOCTYPE html>
<html>
<head>
	<title>Registrar nuevo Equipo</title>
</head>
<body>
<form action="/equipos/new" method="POST">
	{{ csrf_field() }}
	<label>Name</label>
	<input type="text" name="name"><br>
	<label>Marca</label>
	<input type="text" name="marca"><br>
	<label>Modelo</label>
	<input type="text" name="modelo"><br>
	<input type="submit" value="Guardar">
</form>
</body>
</html>