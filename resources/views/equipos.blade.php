<!DOCTYPE html>
<html>
<head>
	<title>Equipos</title>
</head>
<body>
<table>
	<thead>
		<td>ID</td>
		<td>Name</td>
		<td>Marca</td>
		<td>Modelo</td>
		<td>Borrar</td>
	</thead>
	@foreach($equipos as $equipo)
		<tr>
			<td><a href="/equipos/{{$equipo->id}}">{{$equipo->id}}</a></td>
			<td>{{$equipo->name}}</td>
			<td>{{$equipo->marca}}</td>
			<td>{{$equipo->modelo}}</td>
			<td><a href="/equipos/{{$equipo->id}}/delete">X</a></td>
		</tr>
	@endforeach
</table>
<a href="/equipos/new">Registrar nuevo equipo</a>
</body>
</html>