@extends('layout')

@section('content')
<h1>MOSTAR</h1>
<table>
	<thead>
		<tr>
			<th>ID</th>
			<th>No de Inventario</th>
			<th>Tipo</th>
			<th>Descripcion</th>
			<th>No de Serie</th>
			<th>Resguardo</th>
			<th>Valor de adquisicion</th>
			<th>Verificado</th>
			<th>No de Trabajador</th>
		</tr>
	</thead>
	<tbody>
		@foreach($activos as $activo)
		<tr>
			<td>{!! $activo->id !!}</td>
			<td>{!! $activo->numInventario !!}</td>
			<td>{!! $activo->tipo !!}</td>
			<td>{!! $activo->descripcion !!}</td>
			<td>{!! $activo->numSerie !!}</td>
			<td>{!! $activo->resguardo !!}</td>
			<td>{!! $activo->valorAdqui !!}</td>
			<td>{!! $activo->verificado !!}</td>
			<td>{!! $activo->numTrabajador !!}</td>

		</tr>
		@endforeach
	</tbody>
</table>
@endsection