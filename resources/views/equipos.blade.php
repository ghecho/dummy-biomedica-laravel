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
	</thead>
	@foreach($equipos as $equipo)
		<tr>
			<td>{{$equipo->id}}</td>
			<td>{{$equipo->name}}</td>
			<td>{{$equipo->marca}}</td>
			<td>{{$equipo->modelo}}</td>
		</tr>
	@endforeach
</table>
</body>
</html>