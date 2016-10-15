<!DOCTYPE html>
<html>
<head>
	<title>Detalles de Equipo</title>
</head>
<body>
<form action="/equipos/{{$equipo->id}}" method="POST">
	{{ csrf_field() }}
	<label>ID - {{$equipo->id}}</label>
	<label>Name</label>
	<input type="text" name="name" value="{{$equipo->name}}"><br>
	<label>Marca</label>
	<input type="text" name="marca" value="{{$equipo->marca}}"><br>
	<label>Modelo</label>
	<input type="text" name="modelo" value="{{$equipo->modelo}}"><br>
	<input type="submit" value="Guardar">
</form>
</body>
</html>